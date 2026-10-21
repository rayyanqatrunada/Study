''' staticmethod and classmethod '''

class Char:

    # variable private
    __jumlah = 0

    def __init__(self,name):
        self.name = name
        Char.__jumlah += 1

    # method ini hanya berlaku untuk object
    def getJumlah(self):
        return Char.__jumlah
    
    # method ini hanya berlaku untuk class
    def getJumlah1():
        return Char.__jumlah
    
    # method static (decorator) nempel ke object dan class
    @staticmethod
    def getJumlah2():
        return Char.__jumlah
    
    @classmethod
    def getJumlah3(cls):
        return cls.__jumlah
    
furina = Char("Furina")
print(furina.getJumlah2())
Clara = Char("Clara")
print(furina.getJumlah2())
Yui = Char("Yui")
print(Char.getJumlah3())