# function/fungsi

## pengenalan function/fungsi

'''
template
def nama_fungsi(argument):
    isi atau badan fungsi
'''

def hello_world():
    print("hello world")
    print("halo dunia")
    print("hallo sekai")

hello_world() # ini akan akan memanggil dan menjalankan semua yang ada pada "def hello_world()"

# fungsi(), ini akan eror karena belum dibuat

# fungsi harus dibuat sebelum dipanggil
def fungsi():
    print("ini adalah fungsi")

fungsi()

print("AKHIR DARI PENENALAN FUNGSI\n\n")



## function with argument(input)

def hello(nama):
    '''fungsi hello dengan input nama'''
    print(f"Hello {nama}")

hello("Furina") # cara 1

input_nama = input("masukan nama : ").title()
hello(input_nama) # cara 2


# program tambah

def tambah(angka1,angka2):
    '''Fungsi Tambah'''
    hasil = angka1 + angka2
    print(f"{angka1} + {angka2} = {hasil}")

tambah(3,7) # cara 1

input_angka1 = int(input("Masukan angka ke-1 : "))
input_angka2 = int(input("Masukan angka ke-2 : "))
tambah(input_angka1,input_angka2) # cara 2


# dengan list

def hai(list_peserta):
    '''Say hai List Seserta'''
    data_peserta = list_peserta.copy()
    for peserta in data_peserta:
        print(f"Selamat siang {peserta}")

anggota = ["Furina","Yui","Clara"] 

hai(anggota)