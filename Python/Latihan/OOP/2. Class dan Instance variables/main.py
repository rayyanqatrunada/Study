''' class and instance variable '''

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
        print(f"Membuat har dengan nama {inputname}")

char1 = Char("Furina", 52000, 2000, 300)
print(f"Jumlah Char : {Char.jumlah}")
char2 = Char("Clara", 6400, 3200, 1300)
print(f"Jumlah Char : {Char.jumlah}")
char3 = Char("Yui", 1, 200, 30)
print(f"Jumlah Char : {Char.jumlah}")
