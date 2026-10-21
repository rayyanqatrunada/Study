# latihan function

import os

# program menghitung luas dan keliling  persegi panjang

# # header
# os.system("cls")
# print(F"{"PROGRAM MENGHITUNG LUAS":^40}")
# print(F"{"DAN KELILING PERSEGI PANJANG":^40}")
# print("-"*40)

# # mengambil input dari user
# panjang = int(input("Masukan panjang\t:"))
# lebar = int(input("Masukan lebar\t:"))

# # menghitung luas dan keliling
# luas = panjang*lebar
# keliling = 2*(panjang+lebar)
# print(f"Hasil operasi luas\t: {luas}")
# print(f"Hasil operasi keliling\t: {keliling}")


def header():
    '''Fungsi Header'''
    os.system("cls")
    print(F"{"PROGRAM MENGHITUNG LUAS":^40}")
    print(F"{"DAN KELILING PERSEGI PANJANG":^40}")
    print("-"*40)

def input_user():
    '''Fungsi input'''
    panjang = int(input("Masukan panjang\t:"))
    lebar = int(input("Masukan lebar\t:"))
    return panjang,lebar

def hitung_luas(panjang,lebar):
    '''Fungsi Luas'''
    return panjang*lebar

def hitung_keliling(panjang,lebar):
    '''Fungsi Keliling'''
    return 2*(panjang+lebar)

def display(message,value):
    '''Fungsi display'''
    print(f"Hasil operasi {message}\t= {value}")

# program utama
while True:
    header()

    kelus = input("Hitung Luas, Keliling, atau Keduanya? : ")

    if kelus.lower() == "luas":
        PANJANG,LEBAR = input_user()
        LUAS = hitung_luas(PANJANG,LEBAR)
        display("luas",LUAS)

    elif kelus.lower() == "keliling":
        PANJANG,LEBAR = input_user()
        KELILING = hitung_keliling(PANJANG,LEBAR)
        display("keliling",KELILING)

    elif kelus.lower() == "keduanya":
        PANJANG,LEBAR = input_user()
        LUAS = hitung_luas(PANJANG,LEBAR)
        KELILING = hitung_keliling(PANJANG,LEBAR)
        display("luas",LUAS)
        display("keliling",KELILING)

    elif kelus.lower() != ["luas", "keliling", "keduanya"]:
        print("Pilihan tidak valid!")

    isLanjut = input("Apakah Masih lanjut (y/n)?")
    if isLanjut == "n":
        break

print("AKHIR DARI PROGRAM")