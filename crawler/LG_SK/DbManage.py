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
            host='localhost',
            port=3307,
            user='root',
            password='123456',
            db='it_seminar',
            charset='utf8',
            cursorclass=my.cursors.DictCursor
        )
    
    def db_free(self):
        if self.conn:
            self.conn.close()

    def db_duplicated(self, phone_name, date):
        with self.conn.cursor(my.cursors.DictCursor) as cursor:
            sql = '''
            select * from `lg` where phone_name=%s and date=%s
            '''
            cursor.execute(sql, (phone_name, date) )
            result = cursor.fetchall()

            if result == ():
                return 1
            else:
                return 0


    def db_insertCrawlingData(self, image, phone_name, model_name, original_price, gongsi, total_price, date):
        with self.conn.cursor() as cursor:
            sql = '''
            insert into `lg` 
            (image, phone_name, model_name, original_price, gongsi, total_price, date) 
            values( %s,%s,%s,%s,%s,%s,%s )
            '''
            cursor.execute(sql, (image, phone_name, model_name, original_price, gongsi, total_price, date) )
        self.conn.commit()
    
    def db_backupAndUpdateData(self, phone_name, gongsi, total_price, date):
        with self.conn.cursor() as cursor:
            sql1 = '''
            insert into `lg_backup`
            (select * from `lg` where phone_name=%s)
            '''
            cursor.execute( sql1, (phone_name) )

            sql2 = '''
            update `lg`
            set gongsi=%s, total_price=%s, date=%s
            where phone_name=%s
            '''
            cursor.execute( sql2, (gongsi, total_price, date, phone_name) )
        self.conn.commit()

class SKDBHelper(DBHelper):
    def db_duplicated(self, phone_name, date):
        with self.conn.cursor(my.cursors.DictCursor) as cursor:
            sql = '''
            select * from `sk` where phone_name=%s and date=%s
            '''
            cursor.execute(sql, (phone_name, date) )
            result = cursor.fetchall()

            #print(result)

            if result == ():
                return 1
            else:
                return 0

    def db_insertCrawlingData(self, image, phone_name, model_name, original_price, gongsi, addition, total_price, date):
        with self.conn.cursor() as cursor :
            sql = '''
            insert into `sk` 
            (image, phone_name, model_name, original_price, gongsi, addition, total_price, date) 
            values( %s,%s,%s,%s,%s,%s,%s,%s )
            '''
            cursor.execute(sql, (image, phone_name, model_name, original_price, gongsi, addition, total_price, date) )
        self.conn.commit()

    def db_backupAndUpdateData(self, phone_name, gongsi, addition, total_price, date):
        with self.conn.cursor() as cursor:
            sql1 = '''
            insert into `sk_backup`
            (select * from `sk` where phone_name=%s)
            '''
            cursor.execute( sql1, (phone_name) )

            sql2 = '''
            update `sk`
            set gongsi=%s, addition=%s, total_price=%s, date=%s
            where phone_name=%s
            '''
            cursor.execute( sql2, (gongsi, addition, total_price, date, phone_name) )
        self.conn.commit()
