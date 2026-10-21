# function with return
# fungsi dengan kembalian


# fungsi kuadrat

def kuadrat(input_angka):
    '''Fungsi Kuadrat'''
    output_kuadrat = input_angka**2
    return output_kuadrat

y = kuadrat(7) # cara 1
print(y)

print(kuadrat(9)) # cara 2

z = 20 + kuadrat(6) # cara 3
print(z)

angkax = int(input("Masukan angka : ")) # cara 4
y = kuadrat(angkax)
print(y)

print("AKHIR DARI FUNGSI KUADRAT\n\n")


# fungsi tambah

def fungsi_tambah(angka1,angka2):
    '''Funsi return dengan multi input'''
    hasil = angka1 + angka2
    return hasil

t = fungsi_tambah(3,6) # cara 1
print(t)

p = 12 + fungsi_tambah(1,9) # cara 2
print(p)

ang1 = int(input("Masukan angka ke-1 :")) # cara 3
ang2 = int(input("Masukan angka ke-2 :"))
print(fungsi_tambah(ang1,ang2))

print("AKHIR DARI FUNGSI TAMBAH\n\n")


# funsi dengan return banyak

def operasi_mtk(number1,number2):
    '''operasi matematika dasar'''
    tambah = number1 + number2
    kurang = number1 - number2
    kali = number1 * number2
    bagi = number1 / number2

    return tambah,kurang,kali,bagi

a,b,c,d = operasi_mtk(6,8)
print(f"hasil dari tambah = {a}")
print(f"hasil dari kurang = {b}")
print(f"hasil dari kali = {c}")
print(f"hasil dari bagi = {d}")
