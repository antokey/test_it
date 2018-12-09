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
db_table_name = 'lg'

#Driver load
#Solve the Chromedriver and Chrome crash problem, get options like down steps
chrome_options = wd.ChromeOptions()
chrome_options.binary_location = '/opt/google/chrome/google-chrome'
chrome_options.add_argument('--headless')
chrome_options.add_argument('--no-sandbox')
chrome_options.add_argument('--disable-dev-shm-usage')

'''
pip3 install pyvirtualdisplay
from pyvirtualdisplay import Display
display = Display(visible = 0, size = (2000, 2000))
display.start()
'''
#driver = wd.Chrome('chromedriver')
driver = wd.Chrome('/home/jieun/project/test_it/crawler/LG_SK/chromedriver')

#homepage access
driver.get(main_url)

#wait
driver.implicitly_wait(10)

#Create the list
list_lg = []
count = 0
#Crawling function
for page in range(1, 10):
    #Get the html source and save
    html_source = driver.page_source

    f = open("/home/jieun/project/test_it/crawler/LG_SK/source.txt", "w", encoding="utf-8")
    f.write(html_source)
    f.close()

    #Open the save current html file
    f = open("/home/jieun/project/test_it/crawler/LG_SK/source.txt", "rt", encoding="utf-8")

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
                if nospace.find('plus') > -1:
                    phone_name = phone_name.replace("plus", "+")
                if nospace.find('플러스') > -1:
                    phone_name = phone_name.replace("플러스", "+")
                if nospace.find('Galaxy') > -1:
                    phone_name = phone_name.replace("Galaxy", "갤럭시")
                if nospace.find('아이폰') > -1:
                    phone_name = phone_name.replace("아이폰", "iPhone")
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
                obj = LGPhoneInfo(image, model_name, phone_name, original_price, gongsi, total_price, date)
                list_lg.append(obj)
                count = 0
        if '</tbody>' in line:
            if check_tbody == 3:
                break
            check_tbody = check_tbody + 1
    #print(page)

    #Close the html file for next page html source
    f.close()

    #Go on for the next page
    try:
        number = 1 + 30 * page
        driver.execute_script("goPage('%s')" % number)
        time.sleep(2)

    except Exception as e:
        print ('Next Page Error!', e)

#Check the duplicated and send to the Database
for obj in list_lg:
    if (obj.name.find('데모') == -1):
        if(obj.model.find('DE') == -1):
            db.db_insertCrawlingData(
                obj.img_link,
                obj.model,
                obj.name,
                obj.out_price,
                obj.gongshi,
                obj.danmal,
                obj.date
             )

#Close the all the connection
db.db_free()
driver.close()
driver.quit()


