#operasi logika atau boolean

# NOT, OR, AND, XOR

#'NOT' Kebalikan dari data awal
print('=====NOT=====')
a = True
b = not a
print('Data a =',a)
print('-------------NOT')
print('data b =',b)

print('')

a = False
b = not a
print('Data a =',a)
print('-------------NOT')
print('data b =',b)

print('\nPERBANDINGAN 2 DATA')
#'OR' Jika ada True maka akan True
print('=====OR=====')
a = False
b = False
c = a or b
print(a,'OR',b,'=',c)
a = False
b = True
c = a or b
print(a,'OR',b,' =',c)
a = True
b = False
c = a or b
print(a,' OR',b,'=',c)
a = True
b = True
c = a or b
print(a,' OR',b,' =',c)

#'AND' Jika ada False maka akan False
print('=====AND=====')
a = False
b = False
c = a and b
print(a,'AND',b,'=',c)
a = False
b = True
c = a and b
print(a,'AND',b,' =',c)
a = True
b = False
c = a and b
print(a,' AND',b,'=',c)
a = True
b = True
c = a and b
print(a,' AND',b,' =',c)

#'XOR' akan menghasilkan True jika jumlah nilai True ganjil, dan False jika jumlah True genap (termasuk 0)
print('=====AND=====')
a = False
b = False
c = a ^ b
print(a,'XOR',b,'=',c)
a = False
b = True
c = a ^ b
print(a,'XOR',b,' =',c)
a = True
b = False
c = a ^ b
print(a,' XOR',b,'=',c)
a = True
b = True
c = a ^ b
print(a,' XOR',b,' =',c)

print('\nPERBANDINGAN 3 DATA')
#'OR' Jika ada True maka akan True
print('=====OR=====')
a = False
b = False
c = False
d = a or b or c
print(a,'OR',b,'OR',c,'=',d)
a = True
b = False
c = False
d = a or b or c
print(a,'OR',b,'OR',c,'=',d)
a = False
b = True
c = False
d = a or b or c
print(a,'OR',b,'OR',c,'=',d)
a = False
b = False
c = True
d = a or b or c
print(a,'OR',b,'OR',c,'=',d)
a = True
b = True
c = False
d = a or b or c
print(a,'OR',b,'OR',c,'=',d)
a = True
b = False
c = True
d = a or b or c
print(a,'OR',b,'OR',c,'=',d)
a = False
b = True
c = True
d = a or b or c
print(a,'OR',b,'OR',c,'=',d)
a = True
b = True
c = True
d = a or b or c
print(a,'OR',b,'OR',c,'=',d)

print('=====AND=====')
#'AND' Jika ada False maka akan False
a = False
b = False
c = False
d = a and b and c
print(a,'AND',b,'AND',c,'=',d)
a = True
b = False
c = False
d = a and b and c
print(a,'AND',b,'AND',c,'=',d)
a = False
b = True
c = False
d = a and b and c
print(a,'AND',b,'AND',c,'=',d)
a = False
b = False
c = True
d = a and b and c
print(a,'AND',b,'AND',c,'=',d)
a = True
b = True
c = False
d = a and b and c
print(a,'AND',b,'AND',c,'=',d)
a = True
b = False
c = True
d = a and b and c
print(a,'AND',b,'AND',c,'=',d)
a = False
b = True
c = True
d = a and b and c
print(a,'AND',b,'AND',c,'=',d)
a = True
b = True
c = True
d = a and b and c
print(a,'AND',b,'AND',c,'=',d)

print('=====XOR=====')
#'XOR' akan menghasilkan True jika jumlah nilai True ganjil, dan False jika jumlah True genap (termasuk 0)
a = False
b = False
c = False
d = a ^ b ^ c
print(a,'XOR',b,'XOR',c,'=',d)
a = True
b = False
c = False
d = a ^ b ^ c
print(a,'XOR',b,'XOR',c,'=',d)
a = False
b = True
c = False
d = a ^ b ^ c
print(a,'XOR',b,'XOR',c,'=',d)
a = False
b = False
c = True
d = a ^ b ^ c
print(a,'XOR',b,'XOR',c,'=',d)
a = True
b = True
c = False
d = a ^ b ^ c
print(a,'XOR',b,'XOR',c,'=',d)
a = True
b = False
c = True
d = a ^ b ^ c
print(a,'XOR',b,'XOR',c,'=',d)
a = False
b = True
c = True
d = a ^ b ^ c
print(a,'XOR',b,'XOR',c,'=',d)
a = True
b = True
c = True
d = a ^ b ^ c
print(a,'XOR',b,'XOR',c,'=',d)



#shortcut untuk perbandingan 2 data
import itertools

print('=====OR=====')
for a, b in itertools.product([False, True], repeat=2): 
    c = a or b  
    print(a, 'OR', b, '=', c)

print('=====AND=====')
for a, b in itertools.product([False, True], repeat=2): 
    c = a and b  
    print(a, 'AND', b, '=', c)

print('=====XOR=====')
for a, b in itertools.product([False, True], repeat=2): 
    c = a ^ b  
    print(a, 'XOR', b, '=', c)



#shortcut untuk perbandingan 3 data
import itertools

print('=====OR=====')
for a, b, c in itertools.product([False, True], repeat=3): 
    d = a or b or c
    print(a, 'OR', b, 'OR', c, '=', d)

print('=====AND=====')
for a, b, c in itertools.product([False, True], repeat=3): 
    d = a and b and c
    print(a, 'AND', b, 'AND', c, '=', d)

print('=====XOR=====')
for a, b, c in itertools.product([False, True], repeat=3): 
    d = a ^ b ^ c
    print(a, 'XOR', b, 'XOR', c, '=', d)
