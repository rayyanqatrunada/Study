## cara membaca file eksternal


print(3*"=","MEMABACA FILE TXT",3*"=")
# file = open("data_nama.txt",mode="r"), gunakan ini jika file.txt dalam satu folder
file = open("d:/Project/Coding/Python/Latihan/read file external/open and with/data_nama.txt",mode="r")

print(f"status read  : {file.readable()}")
print(f"status write : {file.writable()}")

## akan menampilkan seluruh data
print(file.read())

## menampilkan perbaris
# print(file.readline(),end="") # menampilkan baris ke-1, (end="") berguna untuk menghilangkan enter(\n) antar baris
# print(file.readline(),end="") # menampilkan baris ke-2

## menampilkan text sebagai list
# print(file.readlines())

print(f"file sudah tertutup? : {file.closed}")
file.close() # ini untuk menutup file
print(f"file sudah tertutup? : {file.closed}")


## teknik membuka file di python

# menggunakan with
print("\n\n",3*"=","MEMABACA FILE TXT DENGAN WITH",3*"=")

# with open("data_nama.txt",mode="r") as file: # gunakan ini jika file.txt dalam 1 folder
with open("d:/Project/Coding/Python/Latihan/read file external/open and with/data_nama.txt",mode="r") as file:
    print(file.read())
    # content = file.readline()
    # print(content,end="")
    print(f"file sudah tertutup? : {file.closed}")

print(f"file sudah tertutup? : {file.closed}")

# menggunakan pathlib
print("\n\n",3*"=","MEMABACA FILE TXT DENGAN PATHLIB",3*"=")

from pathlib import Path

# BASE_DIR mengarah ke folder: "read file external/open and with"
BASE_DIR = Path(__file__).parent
file_path = BASE_DIR / "data_nama.txt"

print(f"Lokasi file: {file_path}")

with file_path.open("r", encoding="utf-8") as file:
    isi = file.read()
    print(isi)

print(f"File sudah tertutup? {file.closed}")
