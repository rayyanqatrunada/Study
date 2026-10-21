# *args and **kwargs in function


## penggunaan *args

# memasukan data/argument

# fungsi biasa
def fungsi1(nama,tinggi,berat):
    print(f"{nama} punya tinggi {tinggi} dan berat {berat}")

fungsi1("Yui",159,60)

def fungsi2(data_list):
    data = data_list.copy()
    nama = data[0]
    tinggi = data[1]
    berat = data[2]
    print(f"{nama} punya tinggi {tinggi} dan berat {berat}")

fungsi2(["Charlotta",140,53])

# dengan *args

def fungsi3(*args):
    nama = args[0]
    tinggi = args[1]
    berat = args[2]
    print(f"{nama} punya tinggi {tinggi} dan berat {berat}")

fungsi3("Furina",160,59)

# studi kasus

def tambah(*data):
    # tipe datannya adalah tuple, jadi bisa diiterasi
    output = 0
    for angka in data:
        output += angka

    return output

print(tambah(2,1,23,2))

print(tambah(3,4,5,3,2,2,1,3,3,3))

hasil = tambah(8,7,6,5,4,4,11)
print(hasil)

print("AKHIR DARI CONTOH *args\n\n")


## penggunaan **kwargs

# fungsi biasa
def fungsi(nama,tinggi,berat):
    print(f"{nama} punya tinggi {tinggi} dan berat {berat}")

fungsi("Clara",120,43)

# dengan **kwargs
def fungsi1(**kwargs): # **kwargs = keyword arguments (dalam bentuk dictionary)
    nama = kwargs['nama']
    tinggi = kwargs['tinggi']
    berat = kwargs['berat']
    print(f"{nama} punya tinggi {tinggi} dan berat {berat}")

fungsi1(nama="Furina",tinggi=160,berat=59)
# fungsi1("Furina",160,59) tanpa key fungsi akan eror

# studi kasus
def math(*args,**kwargs):
    output = 0
    if kwargs['option'] == "tambah":
        for angka in args:
            output += angka
    elif kwargs['option'] == "kurang":
        output = args[0]
        for angka in args[1:]:
            output -= angka
    elif kwargs['option'] == "kali":
        output = 1
        for angka in args:
            output *= angka
    elif kwargs['option'] == "bagi":
        output = args[0]
        for angka in args[1:]:
            output /= angka
    else:
        print("tidak ada operasi")
    
    return output

hasil = math(1,2,3,4,option="tambah")
print(f"hasil pertambahan = {hasil}")

hasil = math(1,2,3,4,option="kurang")
print(f"hasil pengurangan = {hasil}")

hasil = math(1,2,3,4,option="kali")
print(f"hasil perkalian = {hasil}")

hasil = math(4,2,option="bagi")
print(f"hasil pembagian = {hasil}")
