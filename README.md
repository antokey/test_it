### 1.시스템 개요도

<div>
<img width="1500" src="https://user-images.githubusercontent.com/45190560/49719579-e0209a00-fca0-11e8-8d01-c2cf6405365c.PNG">
</div>
위의 그림은 우리의 웹 크롤링 시스템에 대한 개요도 입니다.

우리의 웹크롤링 시스템은 크게 4파트로 나눌 수 있습니다.


  #### 1) Crawler : 
    해당하는 통신사 공시지원금 사이트에서 데이터를 크롤링
    동적 웹페이지 크롤링을 위해 Selenium Package 활용
    
  #### 2) MySQL Database : 
     크롤링한 데이터가 이미지, 모델명, 제품명, 출고가, 공시지원금, 추가지원금, 판매가, 공시일자 순으로 각 통신사 테이블에 삽입됨
     만약 특정 통신사의 특정 모델 공시일자가 갱신 된다면, 새롭게 갱신된 값을 따로 저장하여 그래프화 할 수 있도록 업데이트전용 테이블 존재

  #### 3) Web server:
     메인 페이지에서 검색옵션을 선택하고 검색어를 입력하면 검색어에 해당하는 모델이 정보가 통신사 별로 출력 되며 이제까지 갱신된 지원금을 그래프를 통해 확인 가능

  #### 4) bash script (for crawling) : 
    각 크롤러가 동작할 수 있도록 작성 된 스크립트
    해당하는 통신사에서 특정 모델에 대한 공시지원금(공시 일자)이 갱신 되거나, 크롤링 시 발생하는 오류를 log에 저장하도록 설계.
    리눅스의 crontab 등의 기능을 통해 이 스크립트 파일이 정기적 실행 됨으로써 정기적인 크롤링 수행 될 수 있음



### 2. 크롤링 타켓 사이트

  KT : https://shop.kt.com/smart/supportAmtList.do

  SKT : http://shop.tworld.co.kr/handler/Dantong-SKT

  LG U+ : https://www.uplus.co.kr/css/note/item/RetrieveItemDstrDisc.hpi

### 3. 개발환경

  OS : Ubuntu 18.04.1 LTS

  Language : Python 3.6.7, PHP 7, bash script, HTML, CSS , js

  web Server & Database : [Bitnami 다운로드](https://bitnami.com/stack/wamp/installer)
    우리는 Aaphce2 web Server 환경과 Mysql Database 환경을 모두 포함 하는 통합 패키지 bitnami를 사용하였습니다.


### 4. 설치

  저희 시스템을 동작시키 위해서 사전에 준비가 필요한 사항을 제시 합니다.

#### 1) webdriver (For selenium) 설치

  크롤러가 selenium 모듈을 통해 동작하기 때문에, 사용자가 원하는 webdriver 설치를 진행 하셔야 합니다.
  
  (저희 시스템에서는 chromedriver(for linux)를 활용 하였으며, test_it/crawler 디렉터리 내부에 포함 되어있습니다.
  이 chormedriver 드라이버의 경우 google_chrome이 설치 되어있지 않으면 실행 되지 않습니다.)

  webdriver설치는 [바로가기](https://www.seleniumhq.org/download/)를 통해서 원하는 브라우저에 호환되는 webdriver를 설치하시면 됩니다.
  
  아래의 코드에서 Window환경에서는 1번라인, Linux or Max 환경에서는 2번라인처럼 웹 드라이버를 실행 시켜주시면 됩니다.
  
  ```python
  driver = wd.Chrome('chromedriver')
  #driver = wd.Chrome('./chromedriver')
  ```

#### 2) Selenium 및 pymysql 설치

  저희 프로그램은 Python의 Package인 Selenium 을 통해 웹 크롤링을 수행하며,
  pymysql을 통해 데이터베이스 서버와 프로그램을 연동시킵니다. Linux/Python3 환경에서는 아래와 같은 코드로 패키지를 설치 할 수 있습니다.

  ```
  $sudo su apt-get install pip3
  $pip3 install selenium
  $pip3 install pymysql
  ```

### 5. 실행

  만약 저희 시스텝을 간접적으로 체험하고 싶다면, [JE_JS_PHONE](http://210.117.181.26:8080/index.php) 해당 링크를 클릭하여 저희의 웹서버를 방문해주십시오시오..
