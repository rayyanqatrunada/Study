''' latihan encapsulasi '''
''' turn base(teks only) 1.1 '''

import os
import time

class Char:

    def __init__(self,name,health,attack,defend):
        self.__name = name
        self.__baseHealth = health
        self.__baseAttack = attack
        self.__baseDefend = defend
        self.__level = 0
        self.__exp = 0

        self.__maxHealth = self.__baseHealth + int((self.__baseHealth*self.__level)/2)
        self.__attack = self.__baseAttack + int((self.__baseAttack*self.__level)/2)
        self.__defend = self.__baseDefend + int((self.__baseDefend*self.__level)/2)

        self.__health = self.__maxHealth

    @property
    def info(self):
        print(f"{self.__name} status: \nLevel\t: {self.__level} \nHealth\t: {self.__health}/{self.__maxHealth} \nAttack\t: {self.__attack} \nDefend\t: {self.__defend}\n")

    @property
    def gainExp(self):
        pass

    @gainExp.setter
    def gainExp(self, exp):
        self.__exp += exp
        if self.__exp >= 100:
            print(f"{self.__name} Level up!!\n")
            self.__level += 1
            self.__exp -= 100

            self.__maxHealth = self.__baseHealth + int((self.__baseHealth*self.__level)/2)
            self.__attack = self.__baseAttack + int((self.__baseAttack*self.__level)/2)
            self.__defend = self.__baseDefend + int((self.__baseDefend*self.__level)/2)

    def serang(self, enemy):
        print(f"{self.__name} menyerang {enemy.__name}")
        time.sleep(1)
        enemy.diserang(self, self.__attack)

    def diserang(self, enemy, atk_enemy):
        dmg_diterima = max(int(atk_enemy - (self.__defend / 2)), 0)
        print(f"Damage {enemy.__name}: {dmg_diterima}")
        time.sleep(1)
        self.__health -= dmg_diterima
        print(f"sisa health {self.__name}: {self.__health}\n")
        time.sleep(1)
        enemy.gainExp = 40
        time.sleep(1)

    def heal(self):
        heal_amount = int(self.__maxHealth * 0.06)
        self.__health += heal_amount
        if self.__health > self.__maxHealth:
            self.__health = self.__maxHealth
        print(f"{self.__name} memulihkan {heal_amount} HP")
        time.sleep(1)
        print(f"Status health sekarang: {self.__health}/{self.__maxHealth}\n")
        time.sleep(1)
        self.gainExp = 40
        time.sleep(1)
    
    def getHealth(self):
        return self.__health

def clear():
    os.system("cls" if os.name == "nt" else "clear")

furina = Char("Furina",1000,120,40)
clara = Char("Clara",1300,95,70)


while True:
    clear()

    # furina turn
    print("=== Furina Turn ===")
    furina.info
    print("aksi: ")
    print("1. attack")
    print("2. heal\n")
    while True:
        try:
            action = input("pilih aksi: ")
            match action:
                case "1":
                    furina.serang(clara)
                    break
                case "2":
                    furina.heal()
                    break
        except:
            print("Inputnya yang bener lahh\n")


    # clara turn
    print("=== Clara Turn ===")
    clara.info
    print("aksi:")
    print("1. attack")
    print("2. heal\n")
    while True:
        try:
            action = input("pilih aksi: ")
            match action:
                case "1":
                    clara.serang(furina)
                    break
                case "2":
                    clara.heal()
                    break
        except:
            print("Inputnya yang bener lahh\n")
    
    # end
    if furina.getHealth() <= 0:
        print("\n===== Pertarungan Selesai =====")
        print("Clara telah menang!!!")
        break
    elif clara.getHealth() <= 0:
        print("\n===== Pertarungan Selesai =====")
        print("Furina telah menang!!!")
        break

    input("Tekan enter untuk lanjut...")
