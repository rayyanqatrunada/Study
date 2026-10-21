# operasi  list

data_angka = [1,2,3,2,1,4,5,3,2,1,3,4,6,5,3,7,8,9,5,3,1]
print(f"data angka = {data_angka}")


#count data

data_1 = data_angka.count(1)
data_2 = data_angka.count(2)
data_3 = data_angka.count(3)

print(f"jumlah 1 pada data = {data_1}")
print(f"jumlah 2 pada data = {data_2}")
print(f"jumlah 3 pada data = {data_3}")


# ambil posisi data (index)
data_nama = ["Furina","Yui","Charlotta"]
print(f"\ndata nama = {data_nama}")

index_furina = data_nama.index("Furina")
index_charlot = data_nama.index("Charlotta")

print(f"index dari Furina    = {index_furina}")
print(f"index dari Charlotta = {index_charlot}")


# mengurutkan list
print(f"data angka sebelum sort = {data_angka}")
data_angka.sort
print(f"data angka setelah sort = {data_angka}")

print(f"data nama sebelum sort = {data_nama}")
data_nama.sort
print(f"data nama setelah sort = {data_nama}")


# membalik list 
print(f"data angka sebelum reverse = {data_angka}")
data_angka.reverse()
print(f"data angka setelah reverse = {data_angka}")

print(f"data nama sebelum di reverse = {data_nama}")
data_nama.reverse()
print(f"data nama setelah di reverse = {data_nama}")