# 1. 개요도

<div>
<img width="2000" src="https://user-images.githubusercontent.com/45190560/49719579-e0209a00-fca0-11e8-8d01-c2cf6405365c.PNG">
</div>

개요도를 크게 나누자면 4파트로 나눌 수 있습니다.

bash script : 'crawler.sh'라는 bash script를 제작하여, 매일 크롤러가 돌아갈 때 crawling.log라는 파일에 각 통신사 크롤러에서 업데이트 되거나 크롤링 시 발생하는 오류를 저장하게 했습니다.
Crawler : Selenium 패키지를 활용하여 파이썬으로 제작된 크롤러는 각 통신사 공시지원금 사이트에서 데이터를 크롤링합니다.
MySQL Database : Bitnami를 통해 데이터베이스 서버를 구축 후, 크롤링한 데이터를 이미지, 모델명, 제품명, 출고가, 공시지원금, 추가지원금, 판매가, 공시일자 순으로 각 통신사 테이블에 삽입합니다. 만약 각 테이블 별로 공시일자가 업데이트 된다면, 업데이트 이전의 레코드를 저장하여 그래프화 할 수 있도록 테이블을 새로 구축했습니다.
Web Page : Bitnami를 통해 웹 서버를 구축 후, 메인 페이지인 index.php에서 제품명과 모델명 카테고리로 검색어 종류를 선택하고 검색어를 입력하면 function.php를 통해 검색어에 해당하는 각 통신사 별로 정보가 출력됩니다. 또한, 공시지원금 변화 내역을 보고 싶다면 '공시지원금 변화 그래프' 란의 버튼을 클릭하면 graph.php를 통해 그래프가 출력됩니다.

# 2. 각 통신사 별 사이트

KT : https://shop.kt.com/smart/supportAmtList.do
SKT : http://shop.tworld.co.kr/handler/Dantong-SKT
LG U+ : https://www.uplus.co.kr/css/note/item/RetrieveItemDstrDisc.hpi

# 3. 개발환경

OS : Ubuntu 18.04.1 LTS
Language : Python 3.6.7, PHP 7, bash script, HTML, CSS
Web Server & Database Server : [Bitnami 다운로드](https://bitnami.com/stack/wamp/installer)

# 4. 설치

저희 프로그램을 실행하기 위해서는 먼저 사전으로 설치해야하는 것이 있습니다.

## 1. 크롬 설치

크롤러가 크롬 드라이버를 통하여 크롤링을 하기 때문에 크롬 설치가 필수입니다. 크롬 설치는 [바로가기](https://support.google.com/chrome/answer/95346?co=GENIE.Platform%3DDesktop&hl=ko)를 통해 해당 웹페이지 설명대로 OS에 맞게 설치를 진행하면 됩니다. 크롬 설치가 완료가 된 후, Linux 환경에서 돌리고자 하는 분들은 소스 코드 그대로 사용하면 되지만 Windows 환경에서 돌리고자 하는 분들은

'''python
chrome_options = wd.ChromeOptions()
chrome_options.binary_location = '/opt/google/chrome/google-chrome'
chrome_options.add_argument('--headless')
chrome_options.add_argument('--no-sandbox')
chrome_options.add_argument('--disable-dev-shm-usage')

'''
해당 부분을 주석처리 해주시고,

'''python
driver = wd.Chrome('chromedriver')
#driver = wd.Chrome('./chromedriver')
'''
드라이버를 위에 적힌 소스를 사용해주시기 바랍니다.

## 2. Selenium 및 pymysql 설치

저희 프로그램은 Python에서 제공하는 Package인 Selenium과 pymysql을 활용하여 웹 크롤링 및 데이터베이스와 연동합니다. Linux 환경에서는

'''
$sudo su apt-get install pip3
$pip3 install selenium
$pip3 install pymysql
'''
위의 명령어를 사용하면 Selenium과 pymysql Package가 정상적으로 다운받아 질 것입니다. Windows 환경은 '윈도우+R'키를 입력하여 명령 프롬프트(cmd)를 실행한 다음,

'''
$pip install selenium
$pip install pymysql
'''
위의 명령어를 사용하면 Selenium과 pymysql Package가 정상적으로 다운받아 질 것입니다.

# 5. 실행

만약 저희 프로그램을 간접적으로 체험하고 싶다면, [JE_JS_PHONE](http://210.117.181.26:8080/index.php) 해당 링크를 클릭하여 주십시오.
