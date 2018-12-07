#디비 입력 => pip install pymysql
#디비처리 ,연결 해제 ,검색어 가져오기 ,데이터 삽입
import pymysql as my

class DBHelper:
    '''
    멤버변수 : 커넥션
    '''
    conn = None
    '''
    생성자
    '''
    def __init__(self):
        self.db_init()
    '''
    맴버 함수
    '''
    def db_init(self):
        self.conn = my.connect(
            host='192.168.19.128',
            port=3306,
            user='root',
            password='wldms332',
            db='project',
            #charset='utf8',
            #cursorclass=my.cursors.DictCursor
        ) #query의 결과를 딕셔너리로 쓸것인가 튜블로쓸것인가 쓰면 딕셔너리

    def db_free(self):
        if self.conn:
            self.conn.close()

    def db_insertCrawlingData(self,img_link, model,name, out_price, gongshi,chuga, danmal,date): # add the instance or update
        with self.conn.cursor() as cursor: #with문을 사용함으로서 자동으로 닫아줌
            
            find_sql = '''
            select * from `kt` where name=%s
            '''
            cursor.execute(find_sql, (name) )
            result = cursor.fetchall()
            if result > 1 :
                if result[7]== date :
                    update_sql = '''
                    update `kt`
                    set gongsi=%s, chuga=%s,dangal=%s, date=%s
                    where phone_name=%s
                    '''
                    cursor.execute( update_sql, (gongshi,chuga,danmal,date,name) )           
            else : 
                insert_sql = '''
                INSERT INTO kt 
                (image_link,model, name, chulgo, gongshi, chuga, danmal, date) 
                VALUES (%s,%s,%s,%s,%s,%s,%s,%s)
                '''
                cursor.execute(insert_sql,(img_link, model,name, out_price, gongshi,chuga, danmal,date))
        self.conn.commit()
        
#만약 이프로그램이 단독으로 (모듈 x) 실행 된다면 실행 - > 테스트 코드를 삽입해서 사용
if __name__=='__main__':    
    db = DBHelper()
    #print( db.db_insertCrawlingData('/images/pc/support/supportFund/default_handset.jpg','ZTE-Z2321K','LTE 피쳐폰 Z','165000','126000',18900,20100,'2018.12.07') )
    db.db_free()
