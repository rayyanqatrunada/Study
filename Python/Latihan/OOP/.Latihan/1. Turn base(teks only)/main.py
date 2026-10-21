''' Latihan game turn base '''

import time
import os

class Char:

    def __init__(self,name,health,power,defend):
        self.name = name
        self.max_health = health
        self.health = health
        self.power = power
        self.defend = defend
    
    def serang(self, lawan):
        print(f"{self.name} menyerang {lawan.name}")
        time.sleep(1)
        lawan.diserang(self, self.power)

    def diserang(self, lawan, power_lawan):
        dmg_diterima = int(power_lawan - (self.defend/2))
        print(f"Damage {lawan.name}: {dmg_diterima}")
        time.sleep(1)
        self.health -= dmg_diterima
        print(f"sisa health {self.name}: {self.health}\n")
        time.sleep(1)

    def heal(self):
        heal_amount = int(self.max_health * 0.2)
        self.health += heal_amount
        if self.health > self.max_health:
            self.health = self.max_health
        print(f"{self.name} memulihkan {heal_amount} HP")
        time.sleep(1)
        print(f"Status health sekarang: {self.health}/{self.max_health}\n")
        time.sleep(1)
    
    def status(self):
        print(f"{self.name} status:")
        print(f"Health :{self.health}")
        print(f"power  :{self.power}")
        print(f"defend :{self.defend}\n")
        time.sleep(1)

def clear():
    os.system("cls" if os.name == "nt" else "clear")

Furina = Char("Furina", 1200, 25, 12)
Clara = Char("Clara", 100, 30, 18)

while True:
    clear()

    # furina turn
    print("=== Furina Turn ===")
    Furina.status()
    print("aksi: ")
    print("1. attack")
    print("2. heal\n")
    while True:
        try:
            action = input("pilih aksi: ")
            match action:
                case "1":
                    Furina.serang(Clara)
                    break
                case "2":
                    Furina.heal()
                    break
        except:
            print("Inputnya yang bener lahh\n")


    # clara turn
    print("=== Clara Turn ===")
    Clara.status()
    print("aksi:")
    print("1. attack")
    print("2. heal\n")
    while True:
        try:
            action = input("pilih aksi: ")
            match action:
                case "1":
                    Clara.serang(Furina)
                    break
                case "2":
                    Clara.heal()
                    break
        except:
            print("Inputnya yang bener lahh\n")
    
    # end
    if Furina.health <= 0:
        print("\n===== Pertarungan Selesai =====")
        print("Clara telah menang!!!")
        break
    elif Clara.health <= 0:
        print("\n===== Pertarungan Selesai =====")
        print("Furina telah menang!!!")
        break

    input("Tekan enter untuk lanjut...")