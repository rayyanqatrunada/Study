''' magic method '''

class Char:

    # magic method
    def __init__(self,name,health):
        self.name = name
        self.health = health

    def __repr__(self):
        return f"Debug - {self.name} Health {self.health}"
    
    def __str__(self):
        return f"{self.name} Health {self.health}"
    
    def __add__(self, friend):
        return self.health + friend.health
    
    # akan mengubah dict
    @property
    def __dict__(self):
        return f"Object ini memiliki nama {self.name} dengan health {self.health}"
    

furina = Char("Furina",1000)
clara = Char("Clara",1200)

print(repr(furina)) # untuk memunculkan __repr__
print(furina) # untuk memunculkan __str__
print(f"Total HP {furina.name} + {clara.name} = {furina + clara}") # untuk menggunakan __add__
print(furina.__dict__)
