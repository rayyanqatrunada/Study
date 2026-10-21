# dictionary


## list -> array mengakses dengan menggunakan
# menggunakan index

data_list = [12,3,41,31,35,98]

print(data_list[2])


## dictionary (dict) -> associative array
# identifier -> key

data_dict = {
    "key":"value",
    "wife":"Furina",
    "nmbr":"1231",
    "10":"sepuluh",
    "data1":data_list,
}

print(data_dict["wife"])
print(data_dict["nmbr"])
print(data_dict["10"])
print(data_dict["data1"])

print("AKHIR DARI CONTOH DICT\n\n")


## operator dictionary

data_dict = {
    "frn":"Furina",
    "crlt":"Charlotta",
    "yui":"Yui Sakura",
    "clr":"Clara"
}

# menghitung panjang dictionary
lendict = len(data_dict)
print(f"panjang dari dictionary: {lendict}")

# mengecek KEY exist atau tidak
KEY = "frn"
CHECKDICT = KEY in data_dict
print(f"key {KEY} ada di data dict: {CHECKDICT}")

# mengecek value (read) dengan get
print(data_dict["frn"])
print(data_dict.get("frn"))
print(data_dict.get("yelan")) # jika data tidak diemukan maka akan "none"
print(data_dict.get("yelan","Data tidak ditemukan")) # kata atau kalimat saat data tidak ditemukan bisa di custom

# mengupdate data dictionary
data_dict["clr"] = "Clara beloborg"
print(data_dict)
data_dict["crlt"] = "Charlotta Fisalia"
print(data_dict)

data_dict.update({"frn":"Furina de fountain"}) # akan mengganti data jika data ada/ditemukan
print(data_dict)
data_dict.update({"kqng":"Keqing"}) # akan menambah data jika data tidak ada/tidak ditemukan
print(data_dict)

# mendelete data pada data dictionary
del data_dict["kqng"]
print(data_dict)

print("AKHIR DARI OPERATOR DICTIONARY\n\n")



## looping dictionary

data_nama = {
    "frn":"Furina",
    "crlt":"Charlotta",
    "yui":"Yui Sakura",
    "clr":"Clara"
}

# looping pertama (yang keluar hanya "key"nya)

for nama in data_nama:
    print(nama)

# operator untuk emngambil item / iterables

keys = data_nama.keys()
print(keys)

for key in data_nama.keys(): # hanya menunjukan key
    print(data_nama.get(key))

value = data_nama.values()
print(value)

for value in data_nama.values(): # hanya menunjukan value
    print(value)

items = data_nama.items()
print(items)

for key,value in data_nama.items(): # akan menunjukan key dan value
    print(f"key = {key}, item = {value}")

print("AKHIR DARI LOOPING DICTIONARY\n\n")



## copy and pop dictionary

data_nama = {
    "frn":"Furina",
    "crlt":"Charlotta",
    "yui":"Yui Sakura",
    "clr":"Clara"
}

# copy dictionary

istri = data_nama.copy() # jika tidak menggunakan ".copy()" maka address data akan sama dengan yang data disalin

print(f"data nama  : {data_nama}\n")
print(f"data istri : {istri}\n")

data_nama["frn"] = "Furina de fountain"
print(f"data nama  : {data_nama}\n")
print(f"data istri : {istri}\n")

# pop dictionary (mengambil value berdasarkan key)
datapop = istri.pop("yui")
print(f"data pop   : {datapop}")
print(f"data istri : {istri}\n")

# popitem dictionary (mengambil key dan value data terakhir)
datapopitem = istri.popitem()
print(f"data popitem : {datapopitem}")
print(f"data istri   : {istri}")

print("AKHIR DARI COPY & POP DICTIONARY\n\n")



## multi keys and nesting dictionary

import datetime

siswa1 = {
    "nama":"Furina",
    "nis":"0000001",
    "nilai":"65",
    "beasiswa":False,
    "lahir":datetime.datetime(2008,7,15)
}

siswa2 = {
    "nama":"Yui",
    "nis":"0000002",
    "nilai":"100",
    "beasiswa":True,
    "lahir":datetime.datetime(2007,8,12)
}

siswa3 = {
    "nama":"Clara",
    "nis":"0000003",
    "nilai":"95",
    "beasiswa":True,
    "lahir":datetime.datetime(2015,6,7)
}

data_siswa = {
    "1":siswa1,
    "2":siswa2,
    "3":siswa3
}

print(f"{'NO.':<3} {'NAMA':<8} {'NIS':<8} {'NILAI':<6} {'BEASISWA':<9} {'LAHIR':<8}")
print("-"*50)
for siswa in data_siswa:
    KEY = siswa

    NAMA = data_siswa[KEY]['nama']
    NIS = data_siswa[KEY]['nis']
    NILAI = data_siswa[KEY]['nilai']
    BEASISWA = data_siswa[KEY]['beasiswa']
    LAHIR =  data_siswa[KEY]['lahir'].strftime("%x")

    print(f"{KEY:<3} {NAMA:<8} {NIS:<8} {NILAI:<6} {BEASISWA:^9} {LAHIR:<8}")
