# default aegument function

# def fungsi(argument):
# def fungsu(argument = default_argument)


# contoh 1

def hello(nama = "cantik"):
    print(f"Hai {nama}")

hello("Furina")
hello()


# contoh 2

def sapa(nama = "kamu",pesan = "Hallo"):
    print(f"Untuk {nama}, {pesan}")

sapa("Yui","Jangan lupa makan ya")
sapa("Yui")
sapa()
sapa(pesan="Selamat malam")

# contoh 3

def hitung_pangkat(angka, pangkat = 2):
    hasil = angka**pangkat
    return hasil

print(hitung_pangkat(2,5))
print(hitung_pangkat(3))
print(hitung_pangkat(pangkat=5,angka=10))


# contoh 4

def fungsi(angka1=1,angka2=2,angka3=3,angka4=4):
    hasil = angka1+angka2+angka3+angka4
    return hasil

print(fungsi())
print(fungsi(angka2=12))