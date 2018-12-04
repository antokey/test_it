#!/usr/bin/python3

from pyvirtualdisplay import Display
from selenium import webdriver as wd
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time
import re
import sys

#targeting homepage
main_url = 'https://www.uplus.co.kr/css/note/item/RetrieveItemDstrDisc.hpi'

#driver load
#Solve the Chromedriver and Chrome crash problem, get options like down steps
chrome_options = wd.ChromeOptions()
chrome_options.binary_location = '/opt/google/chrome/google-chrome'
chrome_options.add_argument('--headless')
chrome_options.add_argument('--no-sandbox')
chrome_options.add_argument('--disable-dev-shm-usage')

display = Display(visible = 0, size = (800, 800))
display.start()

driver = wd.Chrome('./chromedriver', chrome_options = chrome_options)

#homepage access
driver.get(main_url)

#wait
driver.implicitly_wait(10)

#Create the crawling save file
fw = open("crawling_lg.txt", "w")

count = 0
#Crawling function
for page in range(1, 10):
    #Get the html source and save
    html_source = driver.page_source

    f = open("source.txt", "w")
    f.write(html_source)
    f.close()

    #Open the save current html file
    f = open("source.txt", "r")

    #Declare the argument using for the distinction to keyword
    check_imgSrc = 0
    check_txtC = 0
    check_tbody = 0
    for line in f:
        if 'img src=' in line:
            if check_imgSrc != 6:
                check_imgSrc = check_imgSrc + 1
                continue
            image = re.findall("<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>", line)
            fw.write(image[0] + '\n')
        if 'td class="txtC"' in line:
            if check_txtC != 23:
                check_txtC = check_txtC + 1
                continue
            line = re.sub('<td.*?>.*?</script>', '', line, 0, re.I|re.S)
            keyword = re.sub('<.+?>', '', line, 0, re.I|re.S)
            nospace = re.sub('&nbsp;|\t', '', keyword)
            fw.write(nospace)
        if '</tbody>' in line:
            if check_tbody == 3:
                break
            check_tbody = check_tbody + 1

    try:
        number = 1 + 30 * page
        driver.execute_script("goPage('%s')" % number)
        #driver.find_element_by_xpath('//*[@id="CONTENT_LINE"]/div[4]/div[3]/div/span[3]/a[%s]' % page).click()
        time.sleep(5)

    except Exception as e:
        print ('Next Page Error!', e)

    #Close the html file for next page html source
    f.close()

#Close the driver and crawling save file
driver.quit()
fw.close()
