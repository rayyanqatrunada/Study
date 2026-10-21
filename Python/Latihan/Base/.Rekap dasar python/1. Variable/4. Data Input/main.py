''' Rekap dasar Python '''
''' input data '''


## input nama
data_nama  = input("Masukan Nama: ").title()
print(f"Selamat siang {data_nama}\n")


## input angka
angka1 = int(input("Masukan Angka ke-1 : "))
angka2 = int(input("Masukan Angka ke-2 : "))
hasil = angka1 + angka2
print(f"Hasil {angka1} + {angka2} = {hasil}\n")


## input dengan if else
tanya = int(input("berapa hasil 4 + 4 = "))
if tanya == 8:
    print("selamat kamu benar!!!")
else:
    print("gitu aja gabisa lho ya")