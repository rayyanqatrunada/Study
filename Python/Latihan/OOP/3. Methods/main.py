''' methoods '''

class Char:
    # class variable
    jumlah = 0

    def __init__(self, inputname, inputhealth, inputpower, inputarmor):
        # intance variable
        self.name = inputname
        self.health = inputhealth
        self.power = inputpower
        self.armor = inputarmor
        Char.jumlah += 1
    
    # void function, method tanpa argument dan return
    def hello(self):
        print(f"Nama Ku adalah {self.name}")
    
    # method dengan argument tanpa return
    def uphealth(self,up):
        self.health += up

    # method dengan return
    def gethealth(self):
        return self.health

char1 = Char("Furina", 100, 200, 300)
char2 = Char("Clara", 95, 230, 100)
char3 = Char("Yui", 1, 200, 30)

char1.hello()
char1.uphealth(20)

print(char1.gethealth())
