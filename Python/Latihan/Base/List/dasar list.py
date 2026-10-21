# --- LIST ---

# list number
data_angka = [1, 2, 3, 4, 5]
print(data_angka)

# list string
data_str = ["Furina", "Yui", "Qiqi"]
print(data_str)

# list boolean
data_bool = [True, False, False, True]
print(data_bool)

# list campuran
data_campuran = [1,"Furina",2,"Yui",True,4,"Charlot",False]
print(data_campuran)

## cara alternatif bikin list
data_range = range(0,10,2) # range(start,stop,step)
print(data_range)
list_range = list(data_range) # "list" membuat range menjadi list
print(list_range)

# membuat list dengan for loop, list comprehesion
data_with_for = [i**2 for i in range(0,10)] # "i**x" akan membuat number dalam i dipangkatkan dengan x
print(data_with_for)

# membuat list dengan for dan if
data_with_for_if = [i for i in range(0,10) if i != 5] # != artinya tidak sama dengan
print(data_with_for_if)

data_with_for_if = [i for i in range(0,10) if i%2 == 0] # hanya akan menampilkan angka genap
print(data_with_for_if)

data_with_for_if = [i for i in range(0,10) if i%2 != 0] #hanya akan menampilkan angka ganjil
print(data_with_for_if)