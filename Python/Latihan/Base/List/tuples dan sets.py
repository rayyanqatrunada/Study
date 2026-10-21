# tuples dan sets

## menggunakan kurung siku []
data_list = [1,2,3,5,3,2]
print(data_list)

'''
kesimpulan list :
    1. Bisa diubah (mutable)
    2. Bisa diakses lewat indeks
    3. Bisa berisi duplikat
'''


## tuple, menggunakan kurung biasa ()
data_tuples = (2,1,2,4,2)
print(data_tuples)

print(data_tuples[2])

# tidak bisa dikunakan pada tuples
# data_tuples[2] = "12"
# data_tuples.append(21)

'''
kesimpulan tuple:
    1. Tidak bisa diubah (immutable)
    2. Bisa diakses lewat indeks
    3. Bisa berisi duplikat
'''


## set, menggunakan kurung kurawal {}
data_sets = {5,4,2,4,7,4,3,2,0}
print(data_sets)

# tidak bisa dilakukan pada sets
# print(data_sets[2])

'''
kesumpulan set:
    1. Tidak bisa berisi duplikat → otomatis menghapus nilai yang sama
    2. Tidak ada urutan → tidak bisa diakses pakai indeks
'''