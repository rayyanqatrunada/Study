''' private variable '''

class Char:
    jumlah = 0
    __privateJumlah = 0

    def __init__(self,name,health):
        self.name = name
        self.health = health

        # variable instance private
        self.__private = "private"
        # variable instance protected
        self._protected = "protected"

furina = Char("Furina",100)

print(furina.__dict__,"\n")
print(Char.__dict__)
