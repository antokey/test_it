from selenium import webdriver as wd
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.keys import Keys
from phone import LGPhoneInfo
from DbManage import DBHelper as Db
import time
import re
import sys

#Preload the information for the crawling
main_url = 'https://www.uplus.co.kr/css/note/item/RetrieveItemDstrDisc.hpi'
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

#driver = wd.Chrome('chromedriver')
driver = wd.Chrome('./chromedriver')

#homepage access
driver.get(main_url)

#wait
driver.implicitly_wait(10)

#Create the crawling save file
fw = open("crawling_lg.txt", "w", encoding="utf-8")

#Create the list
list_lg = []
count = 0
#Crawling function
for page in range(1, 10):
    #Get the html source and save
    html_source = driver.page_source

    f = open("source.txt", "w", encoding="utf-8")
    f.write(html_source)
    f.close()

    #Open the save current html file
    f = open("source.txt", "rt", encoding="utf-8")

    #Declare the argument using for the distinction to keyword
    count = 0
    check_imgSrc = 0
    check_txtC = 0
    check_tbody = 0
    for line in f:
        if 'img src=' in line:
            if check_imgSrc != 6:
                check_imgSrc = check_imgSrc + 1
                continue
            image = re.findall("<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>", line)
            image = image[0]
            fw.write(image[0] + '\n')
        if 'td class="txtC"' in line:
            if check_txtC != 23:
                check_txtC = check_txtC + 1
                continue
            line = re.sub('<td.*?>.*?</script>', '', line, 0, re.I|re.S)
            keyword = re.sub('<.+?>', '', line, 0, re.I|re.S)
            nospace = re.sub('&nbsp;|\t', '', keyword)
            if nospace == '\n':
                continue
            elif count == 0:
                nospace = re.sub('\n', '', nospace)
                phone_name = nospace
                count = count + 1
                continue
            elif count == 1:
                nospace = re.sub('\n', '', nospace)
                model_name = nospace
                count = count + 1
                continue
            elif count == 2:
                nospace = re.sub('\D+', '', nospace)
                original_price = int(nospace)
                count = count + 1
                continue
            elif count == 3:
                nospace = re.sub('\D+', '', nospace) 
                gongsi = int(nospace)
                count = count + 1
                continue
            elif count == 4:
                nospace = re.sub('\D+', '', nospace)
                total_price = int(nospace)
                count = count + 1
                continue
            elif count == 5:
                nospace = re.sub('\n', '', nospace)
                date = nospace
                obj = PhoneInfo(image, phone_name, model_name, original_price, gongsi, total_price, date)
                #print(vars(obj))
                list_lg.append(obj)
                count = 0
            fw.write(nospace)
        if '</tbody>' in line:
            if check_tbody == 3:
                break
            check_tbody = check_tbody + 1
    print(page)

    #Close the html file for next page html source
    f.close()

    #Go on for the next page
    try:
        number = 1 + 30 * page
        driver.execute_script("goPage('%s')" % number)
        time.sleep(5)

    except Exception as e:
        print ('Next Page Error!', e)

#Check the duplicated and send to the Database
for phone_list in list_lg:
    if db.db_duplicated(phone_list.phone_name, phone_list.date) == 1:
        db.db_insertCrawlingData(
            phone_list.image,
            phone_list.phone_name,
            phone_list.model_name,
            phone_list.original_price,
            phone_list.gongsi,
            phone_list.total_price,
            phone_list.date
        )
    else:
        db.db_backupAndUpdateData(phone_name, gongsi, total_price, date)

#Close the all the connection
db.db_free()
driver.close()
driver.quit()
fw.close()

