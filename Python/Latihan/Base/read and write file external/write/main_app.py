# write file eksternal

# write akan membuat file baru jika tidak ada
# lalu akan menimpa, overwrite, atau append isinya


# 1. mode write, akan overwrite data sebelumnya
with open("data_1.txt","w",encoding="utf-8") as file:
    file.write("Furina De Fountain")

with open("data_1.txt","w",encoding="utf-8") as file:
    file.write("Clara")

with open("data_1.txt","w",encoding="utf-8") as file:
    file.write("Charlotta") # akan hapus isi sebelumnya dan tulis baru


# 2. mode append, akan menambah data sebelumnya dengan data baru
with open("data_2.txt","w",encoding="utf-8") as file:
    file.write("Furina De Fountain\n")

with open("data_2.txt","a",encoding="utf-8") as file:
    file.write("Clara\n")

with open("data_2.txt","a",encoding="utf-8") as file:
    file.write("Charlotta\n")


# 3. mode r+, akan menimpa teks sesuai dengan panjang data
with open("data_3.txt","w",encoding="utf-8") as file:
    file.write("Data ke-3\n")

with open("data_3.txt","r+",encoding="utf-8") as file:
    file.write("baris-1\n")
    file.write("baris-2\n")
    file.write("baris-3\n")

with open("data_3.txt","r+",encoding="utf-8") as file:
    data = file.read()
    print(data)

with open("data_3.txt","r+",encoding="utf-8") as file:
    file.write("Clara") # menimpa isi teks sesuai dengan panjang data


'''
kesimpulan
1. Jika ingin menghapus lalu menulis ulang, pakai mode "w".

2. Jika ingin menambah tanpa merusak isi sebelumnya, pakai mode "a".

3. Jika ingin edit sebagian isi file, pakai "r+", harus hati-hati panjang datanya.

'''