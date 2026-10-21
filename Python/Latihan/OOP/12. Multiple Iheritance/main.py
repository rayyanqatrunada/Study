''' multiple inheritance '''

class Team:
    def setTeam(self,team):
        self.team = team

    def showTeam(self):
        print(self.team)

class Tipe:
    def setTipe(self, tipe):
        self.tipe = tipe

    def showTipe(self):
        print(self.tipe)

class Char(Team,Tipe):

    def __init__(self,name,health):
        self.name = name
        self.health = health

    def showStatus(self):
        print(f"{self.name} status: \n Team\t: {self.team} \n Tipe\t: {self.tipe} \n Health : {self.health}")


furina = Char("Furina",1000)
furina.setTeam("Justice")
furina.setTipe("Support")

furina.showTeam()
furina.showTipe()
furina.showStatus()