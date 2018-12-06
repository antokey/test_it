class KT:
    #맴버변수
    
    img_link = ' '
    model = ' '
    out_price = ' '
    gongshi = ' '
    chuga=' '
    danmal = ' '
    date=' '
    #생성자

    def __init__(self, img_link, model, out_price, gongshi,chuga, danmal,date): #기본값주면 인자 안넣어도됨 date=''
        self.img_link = img_link
        self.model = model
        self.out_price = (out_price)
        self.gongshi = (gongshi)
        self.chuga=(chuga)
        self.danmal =(danmal)
        self.date=date