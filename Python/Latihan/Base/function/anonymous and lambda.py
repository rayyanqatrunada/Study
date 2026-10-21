# anonymous and lambda


## lamda function

def fungsi_pangkat(angka,pangkat):
    return angka**pangkat

print(f"hasil fungsi pangkat = {fungsi_pangkat(2,5)}")


# dengan lambda

kuadrat = lambda angka:angka**2

print(f"hasil lambda kuadrat = {kuadrat(3)}")

pangkat = lambda ang,pang:ang**pang

print(f"hasil lambda pangkat = {pangkat(2,3)}")


## kegunaan lambda

# sorting list
data_list = ["Yui","Furina","Clara"]
data_list.sort()
print(data_list)

# sorting berdasarkan panjang
data_list = ["Yui","Furina","Clara"]
def panjang_nama(nama): # dengan function
    return len(nama)

data_list.sort(key=panjang_nama)
print(data_list)

data_list = ["Yui","Furina","Clara"]
data_list.sort(key=lambda nama:len(nama)) # dengan lambda
print(data_list)

# filter
data_angka = [2,3,2,1,2,3,6,5,4,3,7,5,4,8]
def kurang5(angka): # dengan function
    return angka < 5

data_baru = list(filter(kurang5,data_angka))
print(data_baru)

data_baru = list(filter(lambda angka:angka<5,data_angka)) # dengan lambda
print(data_baru)

# kasus genap
data_genap = list(filter(lambda angka:angka%2==0,data_angka))
print(data_genap)

# kasus ganjil
data_ganjil = list(filter(lambda angka:angka%2!=0,data_angka))
print(data_ganjil)

# kelipatan 3
data_angka = [1,3,6,2,7,9,12,14,15,13]
data_kelipatan3 = list(filter(lambda angka:angka%3==0,data_angka))
print(data_kelipatan3)


## anonymous function
# currying <- Haskell curry
# currying artinya mengubah fungsi dengan banyak argumen menjadi fungsi berantai satu-argumen

# fungsi biasa
def pangkat(angka,pangkat):
    return angka**pangkat

print(pangkat(2,2))

# dengan currying
def pangkat(x):
    return lambda angka:angka**x

pangkat2 = pangkat(2)
print(f"Hasil pangkat2 = {pangkat2(3)}")

pangkat3 = pangkat(3)
print(f"hasil pangkat3 = {pangkat3(5)}")

print(f"pangkat bebas = {pangkat(5)(2)}")

# dengan input dari user
def pangkat(y):
    return lambda angka:angka**y

angka1 = int(input("Masukan angka  = "))
pangkat1 = int(input("Masukan pangkat ="))

print(f"Hasil dari {angka1}**{pangkat1} = {pangkat(pangkat1)(angka1)}")