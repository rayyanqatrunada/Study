# continue, pass, break


## continue

angka = 0

while angka < 5:
    angka += 1
    print( f"Hai Furina!!!, ke-{angka}") # aksi 1

    if angka == 3: # aksi ketika nilai loop = 3
        print("Udah napa")
        continue # akan membuat loop melompat ketahap selanjutnya

    print("Halo!") # aksi 2

print("udah udah")


## pass, hanya berfungsi sebagi dummy, tidak akan dieksekusi
while angka < 5:
    angka += 1
    print( f"Hai Furina!!!, ke-{angka}") # aksi 1

    if angka == 3: # aksi ketika nilai loop = 3
        pass # aksi ini tidak akan di eksekusi

    print("Halo!")
print("udah udah")


## break

# cara 1
angka = 0

while angka < 100:
    angka += 1
    print(f"count = {angka}")

    if angka == 4:
        break # akan menghentikan loop saat data sudah tercapai atau ditemukan
print("selesai")

# cara 2
data_input = int(input("Masukan Target count : "))
angka = 0

if data_input >= 0:
    while data_input >= 0:
        angka += 1
        print(f"count = {angka}")
        if angka == data_input:
            break # akan menghentikan loop saat data sudah tercapai atau ditemukan
elif data_input <= 0:
    while data_input <= 0:
        angka -= 1
        print(f"count = {angka}")
        if angka == data_input:
            break # akan menghentikan loop saat data sudah tercapai atau ditemukan
print("selesai")
