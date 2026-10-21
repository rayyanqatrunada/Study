# Manipulasi data

# gunakan "0" jika ingin mengambil awal data dan "-1" jika ingin mengambil akhir data
# index   0(-3)   1(-2)    2(-1)
data = ["Furina", "Yui", "Citlali"]

## mengambil data dari list
data_0 = data[0]
print(f"data pertama (index 0) = {data_0}")

data_terakhir = data[-1] # gunakan "-1" jika tidak tau panjang data/index data terakhir
print(f"data terakhir = {data_terakhir}")

data_furina = data[-3] # ini hanya digunakan jika sudah tau index dan isi data (walaupun kurang berguna)
print(f"data Furina = {data_furina}")

## cara mengetahui jumlah data
panjang_data = len(data)
print(f"panjang data adalah = {panjang_data}")


## memanipulasi data

# menambah item pada list
print(f"data sebelum ditambah = \n{data}")

data.insert(1,"Charlot") # (posisi,item), data yang sebelumya akan bergeser ke belakang
print(f"data setelah ditambah = \n{data}")

# menambah di akhir list
data.append("Miyabi") # data akan ditambah pada bagian paling belakang tanpa mengubah data dan index sebelumnya
print(f"tambah data terakhir = \n{data}")

# menambah list dengan list
data_baru = ["Keqing","Qiqi","Jinshi"]
data.extend(data_baru) # menambah data lama dengan data baru
print(f"data setelah ditambah list baru = \n{data}")

# merubah data
data[3] = "clara"
print(f"data setelah di ubah = \n{data}")

# meremove item pada list
data.remove("Qiqi") # akan menghilangkan "Qiqi" pada list
print(f"data setelah setelah meremove 'Qiqi' = \n{data}")
    # data.remove("qiqi") akan eror karena data tidak sesuai

# meremove data paling belakang
data.pop()
print(f"hapus data paling belakang = \n{data}")

# sort secara ascending
data.sort()
print(f"urutkan data berdasarkan variable = \n{data}")

# balik urutan data
data.reverse()
print(f"print data dari belakang = \n{data}")

