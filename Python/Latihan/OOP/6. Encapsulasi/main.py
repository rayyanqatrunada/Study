''' encapsulasi '''

class Char:

    def __init__(self,name,health,power):
        self.__name = name
        self.__health = health
        self.__power = power

    # getter
    def getName(self):
        return self.__name

    def getHealth(self):
        return self.__health
    
    def getPower(self):
        return self.__power
    
    # setter
    def diserang(self, enemyAttack):
        self.__health -= enemyAttack
    
    def setPower(self, newValue):
        self.__power = newValue

furina = Char("Furina",100,20)

# game berjalan

# name
print(furina.getName())
furina.__name = "Hu tao"
# print(furina.__name) # nama furina akan berubah jika dipanggil dengan ini
print(furina.getName(),"\n") # nama furina tidak akan berubah juka diambil dengan getName()

# health
print(furina.getHealth())
furina.__health = 90
print(furina.getHealth(),"\n") # nilai health tidak berubah

# diserang
print(furina.getHealth())
furina.diserang(12)
print(furina.getHealth(),"\n") # health akan berubah jika ada aksi/set

# set power
print(furina.getPower())
furina.setPower(30)
print(furina.getPower())

