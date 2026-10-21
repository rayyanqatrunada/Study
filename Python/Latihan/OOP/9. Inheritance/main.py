''' inheritance '''

class Char:

    def __init__(self,name,health,attack):
        self.name = name
        self.health = health
        self.attack = attack
    
class Attacker(Char):
    pass

class Support(Char):
    pass


yui = Char("Yui",1,10)
clara = Attacker("Clara",1000,200)
furina = Support("Furina",1400,120)

print(yui.name)
print(yui.__dict__)

print(clara.name)
print(clara.__dict__)

print(furina.name)
print(furina.__dict__)