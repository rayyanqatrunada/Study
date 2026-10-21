# perulangan (loop)


## for loop

# cara ribet
'''
angka = 1
angka = angka + 1
angka = angka + 1
'''


# dengan list
angka_list = [1,6,3,2,5] # ini adalah list

for i in angka_list:
    print(f"i sekarang -> {i}")
print("Akhir dari program 1\n")


# dengan range
angka_range = range(5) # range dihitung dari 0

for i in angka_range:
    print(f"i sekarang -> {i}")
    # print("aku ganteng"), kalimatnya akan di loop sesuai dengan 'range'nya
print("Akhir dari program 2\n")

angka_range = range(2,7) # (2,7) artinya dimulai dari 2 sampai range ke 7

for i in angka_range:
    print(f"i sekarang -> {i}")
print("Akhir dari program 3\n")


# loop dengan step
for i in range(0, 10, 2):  # dari 0 ke 10, loncat 2
    print(f"i sekarang -> {i}")
print("Akhir dari program 4\n")


# loop mundur
for i in range(10, 0, -1):  # dari 10 ke 1
    print(f"i sekarang -> {i}")
print("Akhir dari program 5\n")


# dengan string
data_str = "Furina is mine"

for i in data_str:
    print(i) # string akan diprint perhuruf di setiap line (termasuk spasi)
print("Akhir dari program 6\n")


## while loop
'''
while kondisi:
    aksi ini
    aksi itu
    aksi lainnya
akhir dari program
'''

angka = 0

while angka < 10: # data akan selalu True sampai sama dengan (x)
    angka += 1 # data awal akan ditambah 1 sampai False
    print("Furina cantik")
    
print("Furina : udah woi!")