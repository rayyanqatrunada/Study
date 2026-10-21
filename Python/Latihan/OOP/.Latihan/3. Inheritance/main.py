''' Latihan inheritance '''

class Char:

    def __init__(self,name):
        self.health_pool = [0,100,200,300,400,500]
        self.attack_pool = [0,10,20,30,40,50]
        self.defend_pool = [0,50,100,150,200,250]
        self.__name = name
        self.__level = 0
        self.__exp = 0

    def info_status(self):
        print(f"{self.__name} status: \n Level  : {self.__level} \n Health : {self.__health} \n Attack : {self.__attack} \n Defend : {self.__defend}")

    @property
    def health_pool(self):
        return self.__health_pool

    @property
    def attack_pool(self):
        return self.__attack_pool

    @property
    def defend_pool(self):
        return self.__defend_pool

    @property
    def level_up(self):
        pass

    @property
    def gainExp(self):
        pass

    @health_pool.setter
    def health_pool(self, input):
        self.__health_pool = input

    @attack_pool.setter
    def attack_pool(self, input):
        self.__attack_pool = input

    @defend_pool.setter
    def defend_pool(self, input):
        self.__defend_pool = input

    @gainExp.setter
    def gainEXP(self, input):
        self.__exp += input
        if(self.__exp >= 100):
            self.level_up = self.__exp//100
            self.__exp %= 100

    @level_up.setter
    def level_up(self,input):
        self.__level += input
        self.__health = self.__health_pool[self.__level]
        self.__attack = self.__attack_pool[self.__level]
        self.__defend = self.__defend_pool[self.__level]

class Attacker(Char):

    def __init__(self, name):
        super().__init__(name)
        self.health_pool = [0,200,400,600,800,1000]
        self.attack_pool = [0,40,80,120,160,200]
        self.defend_pool = [0,60,120,180,240,300]
        self.level_up = 1

class Support(Char):

    def __init__(self, name):
        super().__init__(name)
        self.health_pool = [0,400,800,1200,1600,2000]
        self.attack_pool = [0,20,30,40,50,60]
        self.defend_pool = [0,20,40,60,80,100]
        self.level_up = 1

clara = Attacker("Clara")
furina = Support("Furina")


clara.info_status()
furina.info_status()

clara.gainEXP = 200
furina.gainEXP = 250

clara.info_status()
furina.info_status()

clara.gainEXP = 100
furina.gainEXP = 50

clara.info_status()
furina.info_status()

