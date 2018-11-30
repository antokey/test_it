#!/usr/bin/python3

from pyvirtualdisplay import Display
from selenium import webdriver as wd
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import subprocess

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

#Get the html file with the wget function
p = subprocess.Popen(["wget", main_url])

#Open the html file and search the keyword
#file_open = open("RetrieveItemDstrDisc.hpi", "r")
#while True:
#    line = file_open.readline()
#    if not line: break()
#   if line == 'txtC': 
