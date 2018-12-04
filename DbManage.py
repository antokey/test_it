import pymysql as my

class DBHelper:
    #멤버변수 : 커넥션
    conn = None

    #생성자
    def __init__(self):
        self.db_init()

    #멤버 함수
    def db_init(self):
        self.conn = my.connect(
            host='210.117.181.26',
            port='3306'
            user='root',
            password='wldms332',
            db='pythonDB',
            charset='utf8',
            cursorclass=my.cursors.DictCursor
        )
    
    def db_free(self):
        if self.conn:
            self.conn.close()

    def db_insertCrawlingData(self, image, phone_name, model_name, original_price, gongsi, total_price, date):
        with self.conn.cursor() as cursor:
            sql = '''
            insert into `tbl_crawlingdata` 
            (title, price, area, contents, keyword) 
            values( %s,%s,%s,%s,%s,%s,%s )
            '''
            cursor.execute(sql, (image, phone_name, model_name, original_price, gongsi, total_price, date) )
        self.conn.commit()
