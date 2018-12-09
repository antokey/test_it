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
            port=3306,
            user='root',
            password='wldms332',
            db='project',
            charset='utf8',
            cursorclass=my.cursors.DictCursor
        )
    
    def db_free(self):
        if self.conn:
            self.conn.close()

    def db_insertCrawlingData(self, img_link, model, name, out_price, gongshi, danmal, date): # add the instance or update
        with self.conn.cursor() as cursor: #with문을 사용함으로서 자동으로 닫아줌
            find_sql = '''
            select * from `lg` where model=%s
            '''
            cursor.execute(find_sql, (model) )
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
                    print('-update lg','model:',model,result[0]['date'],'->',date)
                    cursor.execute( insert_update_table_sql, (img_link, model, name, out_price, gongshi, danmal, date) )
            else :
                insert_sql = '''
                INSERT INTO `lg` 
                (image_link, model, name, chulgo, gongshi, chuga, danmal, date) 
                VALUES (%s,%s,%s,%s,%s,0,%s,%s)
                '''
                cursor.execute( insert_sql,(img_link, model,name, out_price, gongshi, danmal, date) )
        self.conn.commit()

class SKDBHelper(DBHelper):
    def db_insertCrawlingData(self, img_link, model, name, out_price, gongshi, chuga, danmal, date): # add the instance or update
        with self.conn.cursor() as cursor: #with문을 사용함으로서 자동으로 닫아줌
            find_sql = '''
            select * from `sk` where model=%s
            '''
            cursor.execute(find_sql, (model) )
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
                    print('-update sk','model:',model,result[0]['date'],'->',date)
                    cursor.execute( insert_update_table_sql, (img_link, model, name, out_price, gongshi, chuga, danmal, date) )
            else :
                insert_sql = '''
                INSERT INTO `sk` 
                (image_link, model, name, chulgo, gongshi, chuga, danmal, date) 
                VALUES (%s,%s,%s,%s,%s,%s,%s,%s)
                '''
                cursor.execute( insert_sql,( img_link, model, name, out_price, gongshi, chuga, danmal, date ) )
        self.conn.commit()

if __name__=='__main__':    
    db = DBHelper()
    db.db_insertCrawlingData('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKK_q91ykAygogBFp6SD4WsUux1TO02EVs3o9WPTsfTiufZYP6','jieun-jung','jieun','165000','126000',20230,'2018.12.25')
    db.db_free()

    db = SKDBHelper()
    db.db_insertCrawlingData('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKK_q91ykAygogBFp6SD4WsUux1TO02EVs3o9WPTsfTiufZYP6','jieun-jung','jieun','165000','126000',18900,20230,'2018.12.23')
    db.db_free()



