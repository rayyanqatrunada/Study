# nested list

data_0 = [1,2,3]
data_1 = [4,5,6]

list_biasa = [1,2,3,4,5,6]
print(f"list biasa = {list_biasa}")

list_2D = [data_0,data_1,7,8]
print(f"list 2D = {list_2D}")

# contoh penggunaan
nama_0 = ["Furina",501,"perempuan"]
nama_1 = ["Yui",17,"perempuan"]
nama_2 = ["Clara",12,"perempuan"]

kumpulan_nama = [nama_0,nama_1,nama_2]

for nama in kumpulan_nama:
    print(f"Nama\t: {nama[0]}")
    print(f"Umur\t: {nama[1]}")
    print(f"Gender\t: {nama[2]}\n")


# dengan reference, nested list tidak bisa dicopy dengan ".copy()"
nama_copy = kumpulan_nama.copy()
print(f"list nama_copy = {nama_copy}")

nama_1[0] = "Danjin" 
print(f"data nama = {kumpulan_nama}")
print(f"list nama_copy = {nama_copy}")


## deepcopy nested list
print("\n\nDEEPCOPY NESTED LIST\n")

data_0 = [1,2]
data_1 = [3,4]

data_2D = [data_0,data_1,10]
data_2D_copy = data_2D.copy()

print(f"data asli = {data_2D}")
print(f"data copy = {data_2D_copy}")

# mengambil data dari nested list
data = data_2D[1][0]
print(f"data = {data}")

# address data
print(f"address data asli = {hex(id(data_2D))}")
print(f"address data copy = {hex(id(data_2D_copy))}")

print("address member-1")
print(f"address data asli = {hex(id(data_2D[1]))}")
print(f"address data copy = {hex(id(data_2D_copy[1]))}")

data_2D[1][0] = 9
data_2D[2] = 12
print(f"data asli = {data_2D}")
print(f"data copy = {data_2D_copy}")


# gunakan deepcopy untuk menduplikat nested list

from copy import deepcopy

data_0 = [1,2]
data_1 = [3,4]

data_2D = [data_0,data_1,10]
data_2D_deepcopy = deepcopy(data_2D)

print(f"address data asli = {hex(id(data_2D))}")
print(f"address data deep = {hex(id(data_2D_deepcopy))}")

print("address member-1")
print(f"address data asli = {hex(id(data_2D[1]))}")
print(f"address data deep = {hex(id(data_2D_deepcopy[1]))}")

data_2D[1][1] = 15
print(f"data asli = {data_2D}")
print(f"data deep = {data_2D_deepcopy}")
# data deep tidak akan berubah jika data asli diganti karena memiliki address yang berbeda