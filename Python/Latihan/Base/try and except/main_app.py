# exception akan terjadi saat program
# mengalami error saat runtime

# contoh sederhana untuk menangkap exception

from math import nan

## contoh sederhana
# input_user = int(input("Masukan angka : "))
# hasil = nan

# try:
#     hasil = 10/input_user
# except:
#     print("Input tidak sesuai!")
    
# print(f"hasil = {hasil}")


## contoh di aplikasi

while(True):
    angka = int(input("Masukan angka pembagi 10 : "))
    try:
        hasil = 10/angka
        print(f"hasil 10/{angka} = {hasil}")
        is_done = input("Apakah masih lanjut (y/n)?")
        if is_done == "n":
            break
    except:
        print("Input tidak boleh 0")

print("AKHIR DARI PROGRAM 1\n")


# contoh aplikasi untuk membuat file.txt
input_cari = str(input("Ingin membuka file apa? : "))

try:
    with open(input_cari+".txt","r") as file:
        print(file.read())
except:
    print(f"{input_cari}.txt tidak ditemukan")
    buwat = input(f"Apakah ingin membuat {input_cari}txt baru (y/n)?").lower()
    if buwat == "y":
         with open(input_cari+".txt","w",encoding="utf-8") as file:
            file.write("file.txt baru")
            input_tulis = str(input(f"apakah ingin mengisi data dari {input_cari}.txt (y/n) : ")).lower()
            if input_tulis == "y":
                tambah = input("Tulis data yang ingin ditambahkan : ")
                file.write(tambah)
                print(f"{input_cari}.txt telah dibuat")
            else:
                print(f"{input_cari}.txt telah dibuat")
    else:
        print("ywdh kalau gitu")


print("AKHIR DARI PROGRAM 2\n")