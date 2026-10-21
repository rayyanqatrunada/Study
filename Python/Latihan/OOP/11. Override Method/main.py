''' override method '''

class Char:

    def __init__(self,name,health,attack):
        self.name = name
        self.health = health
        self.attack = attack
    
    def info(self):
        print(f"{self.name} status: \n health : {self.health} \n attack : {self.attack}")


class Attacker(Char):

    def __init__(self, name, health, attack):
        newAttack = round(attack + (attack*0.2))
        super().__init__(name, health, newAttack)

    def info(self):
        print(f"{self.name} status: \n Tipe\t: Attacker \n Health : {self.health} \n Attack : {self.attack}")

class Support(Char):

    def __init__(self, name, health, attack):
        newHealth = round(health + (health*0.2))
        super().__init__(name, newHealth, attack)


clara = Attacker("Clara",1200,150)
furina = Support("Furina",1500,110)

clara.info()
furina.info()