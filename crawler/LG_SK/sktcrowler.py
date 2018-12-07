from selenium import webdriver as wd
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.keys import Keys
from phone import SKPhoneInfo
from DbManage import SKDBHelper as Db
import time
import re
import sys
from email.quoprimime import body_check
from Tools.pynche.DetailsViewer import ADDTOVIEW

#Preload the information for the crawling
main_url = "http://shop.tworld.co.kr/handler/Dantong-SKT"
db = Db()

#driver load
#Solve the Chromedriver and Chrome crash problem, get options like down steps
chrome_options = wd.ChromeOptions()
chrome_options.binary_location = '/opt/google/chrome/google-chrome'
chrome_options.add_argument('--headless')
chrome_options.add_argument('--no-sandbox')
chrome_options.add_argument('--disable-dev-shm-usage')

display = Display(visible = 0, size = (2000, 2000))
display.start()

#driver = wd.Chrome("chromedriver")
driver = wd.Chrome("./chromedriver")

#Homepage Access
driver.get(main_url)

#wait
driver.implicitly_wait(10)

#Create the list
#List Queue = image, phone name, model name, original price, gongsi, additional support, total price, date
list_sk = []
count = 0
check = 0

fw = open("crawling_sk.txt", "w", encoding="utf-8")

for page in range(2, 10):
    html_source = driver.page_source
    ul = re.search('<ul class="device_list".*?<div class="pager"', html_source, re.I|re.S)

    if(ul is None):
        print("Don't Exist <ul class='device_list'> in html")
        exit()
    
    ul = ul.group()

    #Save the html source
    f = open("source_sk.txt", "w", encoding="utf-8")
    f.write(ul)
    f.close()

    #Open the html source for the reading
    f = open("source_sk.txt", "rt", encoding="utf-8")
    for line in f:
        if 'model_name' in line:
            text = re.sub('<.+?>', '', line, 0, re.I|re.S)
            model_name = re.sub('&nbsp;|\t|\n', '', text)
        if 'sf_date' in line:
            a = re.sub('<.+?>', '', line, 0, re.I|re.S)
            text = re.sub('공시일 ', '', a, 0, re.I|re.S)
            date = re.sub('&nbsp;|\t|\n', '', text)
        if 'img src=' in line:
            keyword = re.findall('<img.*?src="([^"]*)".*?alt="([^"]*)".*?>', line)
            image = keyword[0][0]
            phone_name = keyword[0][1]
        if 'support_sum' in line:
            a = re.sub('<.+?>', '', line, 0, re.I|re.S)
            text = re.sub('&nbsp;|\t', '', a)
            price_int = re.sub('\D+', '', text)
            if count == 0:
                original_price = int(price_int)
                count += 1
            elif count == 1:
                count += 1
                continue
            elif count == 2:
                gongsi = int(price_int)
                count += 1
            elif count == 3:
                addition = int(price_int)
                count = 0
        if 'strong' in line:
            a = re.sub('<.+?>', '', line, 0, re.I|re.S)
            text = re.sub('&nbsp;|\t', '', a)
            price_int = re.sub('\D+', '', text)
            total_price = int(price_int)
            obj = SKPhoneInfo(image, phone_name, model_name, original_price, gongsi, addition, total_price, date)
            list_sk.append(obj)

    #Close the html file for the next html source
    f.close()

    #Go on for the next page
    print(page)
    try:
        driver.execute_script("goPage(%s)" % page)
    except Exception as e:
        print("Next Page Error!", e)

#Check the duplicated value in Database and send to the Database
for phone_list in list_sk:
    if db.db_duplicated(phone_list.phone_name, phone_list.date) == 1:
        db.db_insertCrawlingData(
            phone_list.image,
            phone_list.phone_name,
            phone_list.model_name,
            phone_list.original_price,
            phone_list.gongsi,
            phone_list.addition,
            phone_list.total_price,
            phone_list.date
        )
    else:
        #If argument is duplicated, it will be changed gongsi, addition, total_price, and date.
        #Backup previous data, and update new data
        db.db_backupAndUpdateData(phone_name, gongsi, addition, total_price, date)
        

#Disconnect the driver
db.db_free()
driver.close()
driver.quit()
fw.close()
