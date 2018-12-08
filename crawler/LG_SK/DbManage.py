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

    def db_insertCrawlingData(self, img_link, model, name, out_price, gongshi, danmal, date): # add the instance or update
        with self.conn.cursor() as cursor: #with문을 사용함으로서 자동으로 닫아줌
            find_sql = '''
            select * from `lg` where model=%s and name=%s
            '''
            cursor.execute(find_sql, (model, name) )
            result = cursor.fetchall()
            if len(result) > 0 :
                if (result[0]['date'] != date):
                    update_sql = '''
                    update `lg`
                    set gongshi=%s, danmal=%s, date=%s
                    where name=%s
                    '''
                    cursor.execute( update_sql, (gongshi, danmal, date, name) )
                    insert_update_table_sql= '''
                    INSERT INTO `update_data`
                    (`image_link`, `model`, `name`, `chulgo`, `gongshi`, `chuga`, `danmal`, `date`, `telecom`)
                    VALUES (%s,%s,%s,%s,%s,0,%s,%s,'lg');
                    '''
                    cursor.execute( insert_update_table_sql, (img_link, model, name, out_price, gongshi, danmal, date) )
            else :
                insert_sql = '''
                INSERT INTO `lg` 
                (image_link, model, name, chulgo, gongshi, chuga, danmal, date) 
                VALUES (%s,%s,%s,%s,0,%s,%s,%s)
                '''
                cursor.execute( insert_sql,(img_link, model,name, out_price, gongshi, danmal, date) )
        self.conn.commit()

class SKDBHelper(DBHelper):
    def db_insertCrawlingData(self, img_link, model, name, out_price, gongshi, chuga, danmal, date): # add the instance or update
        with self.conn.cursor() as cursor: #with문을 사용함으로서 자동으로 닫아줌
            find_sql = '''
            select * from `sk` where model=%s and name=%s
            '''
            cursor.execute(find_sql, (model, name) )
            result = cursor.fetchall()
            if len(result) > 0 :
                if (result[0]['date'] != date) :
                    update_sql = '''
                    update `sk`
                    set gongshi=%s, danmal=%s, date=%s
                    where name=%s
                    '''
                    cursor.execute( update_sql, (gongshi, danmal, date, name) )
                    insert_update_table_sql= '''
                    INSERT INTO `update_data`
                    (`image_link`, `model`, `name`, `chulgo`, `gongshi`, `chuga`, `danmal`, `date`, `telecom`)
                    VALUES (%s,%s,%s,%s,%s,%s,%s,%s,'sk');
                    '''
                    cursor.execute( insert_update_table_sql, (img_link, model, name, out_price, gongshi, chuga, danmal, date) )
            else :
                insert_sql = '''
                INSERT INTO `sk` 
                (image_link, model, name, chulgo, gongshi, chuga, danmal, date) 
                VALUES (%s,%s,%s,%s,%s,%s,%s,%s)
                '''
                cursor.execute( insert_sql,( img_link, model, name, out_price, gongshi, chuga, danmal, date ) )
        self.conn.commit()
