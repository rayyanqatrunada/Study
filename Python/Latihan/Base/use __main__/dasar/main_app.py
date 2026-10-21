# __main__ adalah tol level code environmet

# __name__ == '__main__' jika di file program utama

## __name__ pada file program utama
print(f"nilai __name__ : '{__name__}'")

## __name__ pada file program eksternal
import fungsi

# deklarasi
def tambah(a,b):
    return a+b

# fungsi utama
if __name__ == "__main__":
    angka1 = 2
    angka2 = 4
    hasil = tambah(angka1,angka2)
    print(f"hasil tambah = {hasil}")

## import package
import package