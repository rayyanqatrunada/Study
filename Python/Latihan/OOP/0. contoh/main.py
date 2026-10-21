'''' contoh '''

class char: # template
    pass


char1 = char() # object / instance (instantiate)
char2 = char()

char1.name = "Furina"
char1.health = 520000

char2.name = "Clara"
char2.health = 6400

print(char1)
print(char1.__dict__)
print(char1.name)