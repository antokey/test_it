class LGPhoneInfo:
    image = ''
    phone_name = ''
    model_name = ''
    original_price = 0
    gongsi = 0
    total_price = 0
    date = ''

    #생성자
    def __init__(self, image, phone_name, model_name, original_price, gongsi, total_price, date):
        self.image = image
        self.phone_name = phone_name
        self.model_name = model_name
        self.original_price = original_price
        self.gongsi = gongsi
        self.total_price = total_price
        self.date = date

class SKPhoneInfo:
    image = ''
    phone_name = ''
    model_name = ''
    original_price = 0
    gongsi = 0
    addition = 0
    total_price = 0
    date = ''

    #생성자
    def __init__(self, image, phone_name, model_name, original_price, gongsi, addition, total_price, date):
        self.image = image
        self.phone_name = phone_name
        self.model_name = model_name
        self.original_price = original_price
        self.gongsi = gongsi
        self.addition = addition
        self.total_price = total_price
        self.date = date
