''' getter and setter '''

class Char:

    def __init__(self,name,health,defend):
        self.name = name
        self.__health = health
        self.__defend = defend
        # self.info = f"name {self.name}: \n\tHealth : {self.health}"

    @property
    def info(self):
        return f"name {self.name}: \n\tHealth : {self.__health}"
    
    @property
    def defend(self):
        pass
    
    @defend.getter
    def defend(self):
        return self.__defend
    
    @defend.setter
    def defend(self, newValue):
        self.__defend = newValue

    @defend.deleter
    def defend(self):
        print("defend telah dihilangkan")
        self.__defend = 0

clara = Char("Clara",100,15)

print("merubah info")
print(clara.info)
clara.name = "Furina"
print(clara.info)

print("\ngetter dan setter untuk .__defend")
print(f"sebelum setter: {clara.defend}")
clara.defend = 40
print(f"setelah setter: {clara.defend}")

print("\ndelete defend")
del clara.defend
print(f"setelah delete: {clara.defend}")
