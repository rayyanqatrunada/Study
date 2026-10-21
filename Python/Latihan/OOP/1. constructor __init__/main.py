''' constructor __init__ '''

class Char:

    def __init__(self, inputname, inputhealth, inputpower, inputarmor):
        self.name = inputname
        self.health = inputhealth
        self.power = inputpower
        self.armor = inputarmor

char1 = Char("Furina", 52000, 2000, 300)
char2 = Char("Clara", 6400, 3200, 1300)
char3 = Char("Yui", 1, 200, 30)

print(char1.__dict__)
print(char2.__dict__)
print(char3.__dict__)
        