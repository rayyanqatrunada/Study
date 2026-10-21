# local and global scope


## variable global
nama_global = "Furina" # ini adalah global scope

# akses variable global dalam function
def hello():
    print(f"selamat pagi {nama_global}")

hello()

# akses variable global dalam loop
for i in range(0,5):
    print(f"nama {i} - {nama_global}")

# akses variable global dalam percabangan
if True:
    print(f"hai {nama_global}")


## variable local scope

def fungsi():
    nama_local = "yui" # ini adalah local scope

fungsi()
# print(nama_local) ini tidak bisa dilakukan


## contoh 1 : penggunaan akses variable
def say_hai():
    print(f"hai {nama}")

nama = "Clara"
say_hai()

## contoh 2 : merubah variable global
angka = 0

def ubah_angka(nilai_baru):
    global angka # ini akan mendapatkan akses merubah "angka" global
    angka = nilai_baru

print(angka)
ubah_angka(12)
print(angka)

nama = "Charlot"

def ubah_nama(nama_baru):
    global nama
    nama = nama_baru

print(nama)
ubah_nama("Yui")
print(nama)

## contoh 3 : 

for i in range(0,5):
    angka1 = 1
    angka_dummy = 0

print(angka1)
print(angka_dummy)

if True:
    angka2 = 2
    angka_dummy = 10

print(angka2)
print(angka_dummy)

while True:
    angka3 = 3
    angka_dummy = 100
    break

print(angka3)
print(angka_dummy)

# variable dalam loop akan dianggap variable global
