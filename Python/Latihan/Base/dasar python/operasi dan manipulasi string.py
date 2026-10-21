#operasi dan manipulasi string

# 1.menyambung string (concatenate)
Nama_depan    = "Furina"
Nama_tengah   = "De"
Nama_belakang = "Fountain"

Nama_lengkap = Nama_depan + " " + Nama_tengah + " " + Nama_belakang
print("Nama lengkap:", Nama_lengkap)
# alternatif
Nama_lengkap = f"{Nama_depan} {Nama_tengah} {Nama_belakang}"
print("Nama lengkap:", Nama_lengkap)
Nama_lengkap = " ".join([Nama_depan, Nama_tengah, Nama_belakang])
print("Nama lengkap:", Nama_lengkap)



# 2.menghitung panjang string, spasi juga dihitung
jumlah = len(Nama_lengkap)
print('panjang dari', Nama_lengkap, 'adalah', jumlah)



print('  ')
# 3.operator untuk string

# mengecek apakah ada komponen char atau string di string
D = "D"
status = D in Nama_lengkap
print(D, "ada di", Nama_lengkap, "=", status)

d = "d" # ini False karena "D" yang digunakan tidak lower case
status = d in Nama_lengkap
print(d, "ada di", Nama_lengkap, "=", status)

# mengecek apakah tidak ada komponen char atau string di string
d = "d"
status = d not in Nama_lengkap
print(d, "tidak ada di", Nama_lengkap, "=", status)

D = "D" # ini False karena ada "D" di nama lengkap
status = D not in Nama_lengkap
print(D, "tidak ada di", Nama_lengkap, "=", status)

# alternatif
"d" in Nama_lengkap.lower()
"d" in Nama_lengkap.upper()



print('  ')
# mengulang string
print(10*"Ha")
print("Ha"*15) # bisa ditulis terbalik

print('  ')
# indexing, index dimulai dari 0
print('Nama lengkap    :', Nama_lengkap)
print("Index ke-7      :", Nama_lengkap[7])
print("Index ke-9      :", Nama_lengkap[9]) # ini bukan tidak ada melainkan spasi
print("Index ke-15     :", Nama_lengkap[15])
print("Index ke-(2:8)  :", Nama_lengkap[2:9]) # index bagian belakang ditambah 1 karena index paling belakang tidak dihitung
print("Index ke-(10:15):", Nama_lengkap[10:16])
print("Index ke-(-3)   :", Nama_lengkap[-3]) # jika minus maka index akan dihitung dari belakang
print("Index ke-(-10)  :", Nama_lengkap[-10])


print('  ')
print('Nama lengkap       :', Nama_lengkap)
# item paling kecil
print('item paling kecil  :', min(Nama_lengkap)) # pada "Nama_lengkap" item paling kecil adalah spasi
# item paling besar
print('item paling besar  :', max(Nama_lengkap)) # pada "Nama_lengkap" item paling besar adalah u

ascii_code = ord(" ")
print("ASCII spasi adalah :", str(ascii_code))
ascii_code = ord("u")
print("ASCII u adalah     :", str(ascii_code))
data = 117 # kebalikan dari proses mencari ascii
print("char untuk ASCII 117 adalah :", chr(data))


# operator dalam bentuk method

## menghitung jumlah char pada data
print('   ')
data = "pasangan jajang sumedang"
jumlah = data.count("a")
print("Jumlah a pada", data, "adalah :", jumlah,"\n")


## menrubah case dari string

print('Lower')
# merubah semua ke lower case (.lower())
data = "FURINA IS MINE"
print('normal :', data)
lower = data.lower()
print('lower  :',lower)

data = "FuRinA iS Mine"
print('normal :', data)
lower = data.lower()
print('lower  :',lower)

print('\nUpper')
# merubah semua ke upper case (.upper()) 
data = "charlota is smol"
print('normal :', data)
upper = data.upper()
print('upper  :', upper)

data = "CHarLoTa IS SmOl"
print('normal :', data)
upper = data.upper()
print('upper  :', upper,"\n")


## pengecekan isX dengan method
'''
    berisi:
    .islower()   → True jika semua huruf kecil
    .isupper()   → True jika semua huruf besar
    .isalpha()   → True jika semua karakter adalah huruf (tidak termasuk spasi, angka, simbol)
    .isdecimal() → True jika semua karakter adalah angka (0-9)
    .isalnum()   → True jika hanya berisi huruf dan angka (tanpa spasi/simbol)
    .isspace()   → True jika hanya berisi spasi, tab, atau newline
    .istitle()   → True jika setiap kata dimulai huruf kapital

    .startswith(x) → True jika string diawali dengan (x)
    .endswith(x)   → True jika string diakhiri dengan (x)

    .join(list)    → Menggabungkan list jadi string (dengan pemisah)
    .split()       → Memecah string jadi list berdasarkan spasi atau pemisah lain

    .rjust(n, x)   → Meratakan kanan string sepanjang n karakter, sisa diisi x (opsional)
    .ljust(n, x)   → Meratakan kiri string sepanjang n karakter, sisa diisi x
    .center(n, x)  → Meletakkan string di tengah sepanjang n karakter, sisa diisi x
'''

# islower() pengecekan lower case, akan True jika semuanya adalah lower case else False
data = "smol" # hasilnya bool
check = data.islower()
print("'" + data + "'", 'adalah lower case :', check)
data = "Smol"
check = data.islower()
print("'" + data + "'", 'adalah lower case :', check)

# isupper() pengecekan upper case, akan True jika semuanya adalah upper case else Fale
data = "BIG" # hasilnya bool
check = data.isupper()
print("'" + data + "'",' adalah upper case :', check)
data = "Big"
check = data.isupper()
print("'" + data + "'",' adalah upper case :', check,"\n")


# isalpha() mengecek apakah semuanya adalah huruf
data = "satuduatiga"
check = data.isalpha()
print("'" + data + "'   hanya berisi huruf :", check)

data = "satu dua tiga" # ini False karena spasi tidak dihitung sebagai huruf
check = data.isalpha()
print("'" + data + "' hanya berisi huruf :", check)

data = "satu2tiga" # ini False karena 2 adalah angka bukan huruf
check = data.isalpha()
print("'" + data + "'     hanya berisi huruf :", check,"\n")


# isdecimal() mengecek apakah semuanya adalah angka
data = "12345"
check = data.isdecimal()
print("'" + data + "'     hanya berisi angka :", check)

data = "1 2 3 4 5" # ini False karena spasi tidak dihitung  sebagai angka
check = data.isdecimal()
print("'" + data + "' hanya berisi angka :", check)

data = "1234lima" # ini False karena "lima" bukan termasuk angka
check = data.isdecimal()
print("'" + data + "'  hanya berisi angka :", check,"\n")


# isalnum() mengecek apakah hanya huruf dan angka (spasi tidak termasuk)
data = "123empat"
check = data.isalnum()
print("'" + data + "'    hanya berisi huruf dan angka :", check)

data = "1 2 3 empat" # ini False karena spasi tidak dihitung sebagai angka maupun huruf
check = data.isalnum()
print("'" + data + "' hanya berisi huruf dan angka :", check)

data = "123&empat"
check = data.isalnum()
print("'" + data + "'   hanya berisi huruf dan angka :", check,"\n")


# isspase() mengecek spasi, tab, newline (\n, \r, \r\n)
data = " \t\n  "
check = data.isspace()
print("'" + data + "' hanya spasi, tab, atau newline :", check)

data = " \t\n1t" # ini False karena terdapat huruf dan angka
check = data.isspace()
print("'" + data + "' hanya spasi, tab, atau newline :", check)

data = " \t\n^&" # ini False karena terdapat simbol
check = data.isspace()
print("'" + data + "' hanya spasi, tab, atau newline :", check,"\n")

# istitle() Mengecek apakah  kata dimulai dari huruf besar
data = "My Wife Is Furina"
check = data.istitle()
print("'" + data + "' setiap kata diawali huruf besar :", check)

data = "My wife Is Furina" # ini False karena kata "wife" tidak diawali huruf besar
check = data.istitle()
print("'" + data + "' setiap kata diawali huruf besar :", check,"\n")


## mengecek komponen startswith() atau endswith()
data = "Miyabi is void hunter".startswith("Miyabi")
print("'Miyabi is void hunter' startswith 'Miyabi' :", data)
data = "Miyabi is void hunter".startswith("miyabi") # ini False karena huruf "m" kata "miyabi" tidak menggunakan lower case
print("'Miyabi is void hunter' startswith 'miyabi' :", data)

data = "Miyabi is void hunter".endswith("hunter")
print("'Miyabi is void hunter' endswith 'hunter' :", data)
data = "Miyabi is void hunter".endswith("Hunter") # ini False karena huruf "h" kata "hunter" tidak menggunakan upper case
print("'Miyabi is void hunter' endswith 'Hunter' :", data,"\n")


## penggabungan komponen join() split()

# join() menggabungkan
pisah = ["aku", "sayang", "furina"]
gabung = " ".join(pisah) # " " bisa diganti dengan apapun
print(pisah)
print(gabung)

gabung = ",".join(pisah)
print(gabung)

# split() memisahkan
gabung = "aku sayang furina"
print(gabung.split(),"\n")


## alokasi karakter rjust(), ljust, center()

# rjust(), rata kanan
data = "kanan".rjust(10)
print("'" + data + "'")
data = "kanan".rjust(10,"-") # ("-") berfungsi mengisi bagian kosong atau spasi 
print("'" + data + "'")

# ljust(), rata kiri
data = "kiri".ljust(10)
print("'" + data + "'")
data = "kiri".ljust(10,"-") # ("-") berfungsi mengisi bagian kosong atau spasi
print("'" + data + "'")

# center(), ke tengah
data = "tengah".center(10)
print("'" + data + "'")
data = "tengah".center(10,"-") # ("-") berfungsi mengisi bagian kosong atau spasi
print("'" + data + "'")