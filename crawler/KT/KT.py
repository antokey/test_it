
import re #정규식
import time
from selenium import webdriver as wd
#selenium 가져옴
from selenium.webdriver.common.by import By
#명시적 대기를 위해
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

import sys
sys.path.append("/home/jieun/project/test_it/crawler/KT")
from KT_class import KT
from DB import DBHelper as Dh
KT_list= []




main_url='https://shop.kt.com/smart/supportAmtList.do'
#ssl 오류 방지
options = wd.ChromeOptions()
options.add_argument('--ignore-certificate-errors-spki-list')
options.add_argument('--ignore-ssl-errors')

driver=wd.Chrome()
driver=wd.Chrome(executable_path='crawler/KT/chromedriver',chrome_options=options)
driver.get(main_url)

#잠시 대기 -> 페이지가 로드 되고 나서 즉각적으로 데이터를 획득하는 행위는 자제(이유:원하는 요소를 만날 때 까지 대기)
#explict(명시적) 특정 요소가 찾아질때까지 기다림
try:
    element= WebDriverWait(driver,10).until(
        EC.presence_of_element_located((By.CLASS_NAME,'pageWrap'))
        #지정한 하나개의 요소가 오면 wait 종료
    )
except Exception as e:
    print('error!',e)

#현재시점에서 마지막 페이지 넘버 색출
a=driver.find_elements_by_css_selector('.pageWrap>.page')
final_page= a[3].get_attribute('pageno')

#두번째 페이지부터 마지막 페이지까지 html 추출
for page in range(3, int(final_page)+3):
    try:
        print("go to [%d] pages" % int(page-2))
        html=driver.page_source
        file_ = open('html/page_%d.html' %int(page-2), 'w',encoding='UTF8' )
        file_.write(html)
        file_.close()
        driver.find_element_by_xpath('//*[@id="supportAmtList"]/div/a[%s]' %page).click()
    except Exception as el:
        print('error no page', el)

#다시 돌아가 첫 페이지 html 추출
driver.find_element_by_xpath('//*[@id="supportAmtList"]/div/a[%s]' %1).click()
html=driver.page_source
file_ = open('html/page_1.html', 'w',encoding='UTF8' )
file_.write(html)
file_.close()


#td 태그 내부의 내용을 추출하여 특정 파일(write.txt)에 저장 
for page in range(1, int(final_page)+1):
    file_ = open('crawler/KT/html/page_%s.html' %page, 'r',encoding='UTF8' )
    file2 = open('crawler/KT/write', 'w',encoding='UTF8' )
    data = file_.read()
    a=re.findall("<td.*?>(.*?)</td>",data)
    for i in a:
        file2.write(str(i))
        file2.write('\n')
    file2.close()
    file_.close()
    #read write file -> save the instance of class_kt
    file_ = open('write', 'r',encoding='UTF8' )
    i=1
    flag=0
    first=False
    #순서에 맞지 않으면 break
    for line in file_:
        if line!='\n':
            sum=''
            print(i%7,line)
            if i%7==1:
                if line.find('<img')!=-1:
                    if first :
                        obj = KT(img_link[0],model,out_price,gongshi,chuga,danmal,date)
                        KT_list.append(obj)
                    img_link= re.findall('<img[^>]*src=[\'\"]?([^>\'\"]+)[\'\"]?[^>]*>',line)
                    i+=1
                else: flag+=1
            elif i%7==2:
                if line.find('<span')!=-1:
                    model_temp=re.findall("<span.*?>(.*?)</span>",line)
                    model=model_temp[0].split('<')[0]
                    i+=1
                else: flag+=1
            elif i%7==6:
                if line.find('<b class="number"')!=-1:
                    temp_danmal=re.findall("<b.*?>(.*?)</b>",line)
                    a=re.findall('\d+', temp_danmal[0])
                    for k in a:
                        sum+=k
                    danmal=sum
                    i+=1
                else: flag+=1
            elif(i%7==3):
                a=re.findall('\d+', line)
                for k in a:
                    sum+=k
                out_price=int(sum)
                i+=1
            elif(i%7==4):
                a=re.findall('\d+', line)
                for k in a:
                    sum+=k
                gongshi=int(sum)
                i+=1
            elif(i%7==5):
                a=re.findall('\d+', line)
                for k in a:
                    sum+=k
                chuga=int(sum)
                i+=1
            elif(i%7==0):
                date=line
                i+=1
                flag=0
                first=True
            print('flag:',flag)
            if flag>=2 :
                break
    file_.close()

#print the instances
for obj in KT_list :
    vars(obj)

#db 입력
from DB import DBHelper as Dh
for obj in KT_list:
    Dh.db_insertCrawlingData(
        obj.img_link,
        obj.model,
        obj.out_price,
        obj.gongshi,
        obj.chuga, 
        obj.danmal,date
)
'''
if os.path.isfile(file):
  os.remove(file)
'''


'''
#수집한 정보 개수를 루프 -> 페이지 방문 -> 제품상세 정보가져오기
for tour in tour_list:
    #tour -> TourInfo
    print(type(tour))
    #link데이터에서 실데이터 획득
    #분해
    arr=tour.link.split(',')
    print(arr)
    if arr:
        #대체(링크만 뽑아옴)
        link=arr[0].replace('searchModule.OnClickDetail(','')
        print('link:',link)
        #슬라이싱(''제거)
        detail_url=link[1:-1]     
        print(detail_url)
        #상세페이지 이동 : url 값이 완성된 형태인지 확인(http~)
        driver.get(detail_url)
        time.sleep(3)
        #pip install bs4
        #현재 페이지를 뷰티플스프의 dom으로 구성
        soup=bs(driver.page_source,'html.parser')
        data=soup.select('.tip-cover')
        print((data))
        #db 입력
        content_final =''
        #for c in data[0].contents:
        #   content_final=str(c)
        #콘텐츠 내용에따라서 전처리가 필요할수 있음
        Dh.db_insertCrawlingData(
            tour.title,
            tour.price,
            tour.area,
            data[0].contents,
            keyword
        )
'''

'''
#diver 종료
driver.close()
driver.quit()
'''
import sys
sys.exit()