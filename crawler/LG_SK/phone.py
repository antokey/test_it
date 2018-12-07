class LGPhoneInfo:
    img_link = ''
    model = ''
    name = ''
    out_price = 0
    gongshi = 0
    danmal = 0
    date = ''

    #생성자
    def __init__(self, img_link, model, name, out_price, gongshi, danmal, date):
        self.img_link = img_link
        self.model = model
        self.name = name
        self.out_price = out_price
        self.gongshi = gongshi
        self.danmal = danmal
        self.date = date

class SKPhoneInfo:
    img_link = ''
    model = ''
    name = ''
    out_price = 0
    gongshi = 0
    chuga = 0
    danmal = 0
    date = ''

    #생성자
    def __init__(self, img_link, model, name, out_price, gongshi, chuga, danmal, date):
        self.img_link = img_link
        self.model = model
        self.name = name
        self.out_price = out_price
        self.gongshi = gongshi
        self.chuga = chuga
        self.danmal = danmal
        self.date = date
