#operasi komperasi

#semua hasil komperasi adalah boolean

# >, < , >=, <=, ==, !=, is, is not

a = 6
b = 4

#lebih dari (>)
#nilai harus lebih besar, tidak boleh sama
print('=== Lebih dari (>)')
hasil = a > b
print(a,'>',b,'=',hasil)
hasil = b > a
print(b,'>',a,'=',hasil)
hasil = a > 6
print(a,'>',6,'=',hasil)

#kurang dari (<)
#nilai harus lebih kecil, tidak boleh sama
print('=== Kurang dari (<)')
hasil = a < b
print(a,'<',b,'=',hasil)
hasil = b < a
print(b,'<',a,'=',hasil)
hasil = a < 6
print(a,'<',6,'=',hasil)

#lebih dari sama dengan (>=)
#nilai harus lebih besar, boleh sama
print('=== Lebih dari sama dengan (>=)')
hasil = a >= b
print(a,'>=',b,'=',hasil)
hasil = b >= a
print(b,'>=',a,'=',hasil)
hasil = a >= 6
print(a,'>=',6,'=',hasil)

#kurang dari sama dengan (<=)
#nilai harus lebih  kecil dari, boleh sama
print('=== Kurang dari sama dengan (<=)')
hasil = a <= b
print(a,'<=',b,'=',hasil)
hasil = b <= a
print(b,'<=',a,'=',hasil)
hasil = a <= 6
print(a,'<=',6,'=',hasil)

#sama dengan (==)
#nilai harus sama
print('=== sama dengan (==)')
hasil = a == b
print(a,'==',b,'=',hasil)
hasil = b == a
print(b,'==',a,'=',hasil)
hasil = a == 6
print(a,'==',6,'=',hasil)

#tidak sama dengan (!=)
#nilai tidak boleh sama
print('=== tidak sama dengan (!=)')
hasil = a != b
print(a,'!=',b,'=',hasil)
hasil = b != a
print(b,'!=',a,'=',hasil)
hasil = a != 6
print(a,'!=',6,'=',hasil)

#'is' atau 'is not' adalah sebagai komperasi object identity
#digunakan untuk menyamakan data, tidak bisa digunakan untuk membandingkan literal
print("=== Object identity")
x = 4 #ini adalah assigment membuat oject
y = 4
z = 8
print('nilai x = ', x,'id:',hex(id(x)))
print('nilai y = ', y,'id:',hex(id(y)))
print('nilai z = ', z,'id:',hex(id(z)))

#nilai assigment statement harus sama (is)
print("=== Object identity (is)")
hasil = x is y
hasil1 = x is z
print('x is y =', hasil)
print('x is z =', hasil1)

#nilai assigment tidak boleh sama (is not)
print("=== Object identity (is not)")
hasil = x is not y
hasil1 = x is not z
print('x is not y =', hasil)
print('x is not z =', hasil1)