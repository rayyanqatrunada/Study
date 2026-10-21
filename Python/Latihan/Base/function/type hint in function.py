# type hint in function
# type hint di fungsi

'''
studi kasus
def pangkat_2(angka):
    hasil = angka**2
    return hasil

print(pangkat_2(12))
print(pangkat_2("clara")) # ini akan eror saat di run
print(pangkat_2(True)) # ini tidak eror karena nilai True = 1
'''

import string

## penggunaan type hint

def bagi_sepuluh(angka:int) -> int:
    hasil = angka/10
    return hasil

print(bagi_sepuluh(120))
print(bagi_sepuluh(True))
# print(bagi_sepuluh("Yui")), ini akan eror tapi paling tidak udah diberi tau kalau input harus integer :v


def display(nama:string):
    print(nama)

display("Furina")
display("Charlot")
