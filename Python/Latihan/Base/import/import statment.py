# import

# fungsinya adalah untuk mengambil
# program dari file external .py

# 1.untuk menyambung program dari external
import program_hai
import program_furina

#  2. import dengan data
import variable
import variable_2

# data ada di namespace variable
print(variable.nama)
print(variable_2.nama)

# import dengan fungsi
import matematika

hasil = matematika.tambah(2,3)
print(hasil)
hasil = matematika.kurang(5,3)
print(hasil)
hasil = matematika.kali(4,3)
print(hasil)
hasil = matematika.bagi(3,3)
print(hasil)