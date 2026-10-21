''' super '''

class Char:

    def __init__(self,name,health,attack,defend):
        self.name = name
        self.health = health
        self.attack = attack
        self.defend = defend

    def info(self):
        print(f"{self.name} status: \n health : {self.health} \n attack : {self.attack} \n defend : {self.defend}")


class Attacker(Char):

    def __init__(self, name, health, attack, defend):
        newAttack = round(attack + (attack*0.2))
        super().__init__(name, health, newAttack, defend)
        super().info()

class Support(Char):

    def __init__(self, name, health, attack, defend):
        newHealth = round(health + (health*0.2))
        super().__init__(name, newHealth, attack, defend)
        super().info()


clara = Attacker("Clara",1200,120,200)
furina = Support("Furina",1300,95,140)

