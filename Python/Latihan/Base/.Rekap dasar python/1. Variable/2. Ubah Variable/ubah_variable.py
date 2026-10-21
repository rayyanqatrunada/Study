''' rekap dasar python '''
''' ubah variable '''

## 1. ubah str
print("UBAH STR")

nilai_str = "Furina"
print(nilai_str,type(nilai_str))


# ubah ke number
# -> int
# ubah_int = int(nilai_str) # ini akan eror karena huruf bukan angka
# print(ubah_int,ubah_int)
print("str tidak bisa diubah ke int")

# -> float
# ubah_flt = float(nilai_str) # ini akan eror karena huruf bukan angka
# print(ubah_flt,type(ubah_flt))
print("str tidak bisa diubah ke float")


# ubah ke boolean
ubah_bool = bool(nilai_str)
print(ubah_bool,type(ubah_bool)) # hasilnya akan true



## 2. ubah int
print("\n\nUBAH INT")

nilai_int1 = 10
nilai_int2 = 0

# ubah ke float
ubah_flt = float(nilai_int1)
print(ubah_flt,type(ubah_flt))


# ubah ke str
ubah_str = str(nilai_int1)
print(ubah_str,type(ubah_str)) # hasil yang di print akan sama dengan nilai int, tetapi str tidak bisa digunakan untuk operasi math 


# ubah ke boolean
ubah_bool1 = bool(nilai_int1)
print(ubah_bool1,type(ubah_bool1)) # hasilnya jika nilai tidak = 0

ubah_bool2 = bool(nilai_int2)
print(ubah_bool2,type(ubah_bool2)) # akan false jika nilai = 0



## 3. ubah float
print("\n\nNILAI FLOAT")

nilai_flt = 5.8
print(nilai_flt,type(nilai_flt))

# ubah ke int
ubah_int = int(nilai_flt) # nilai float akan dibulatkan ke bawah
print(ubah_int,type(ubah_int))


# ubah ke str
ubah_str = str(nilai_flt)
print(ubah_str,type(ubah_str)) # nilai ini tidak bisa digunakan untuk operasi math


# ubah ke boolean
ubah_bool = bool(nilai_flt)
print(ubah_bool,type(ubah_bool)) # hasilnya akan True jika nilai != 0 else False



## 4. ubah boolean
print("\n\nUBAH BOOLEAN")

bool_true = True
bool_false = False

# ubah ke number
# -> int
ubah_int_true = int(bool_true)
print(ubah_int_true,type(ubah_int_true)) # nilai True = 1

ubah_int_false = int(bool_false)
print(ubah_int_false,type(ubah_int_false)) # nilai True = 0

# -> float
ubah_flt_true = float(bool_true)
print(ubah_flt_true,type(ubah_flt_true)) # nilai True = 1.0

ubah_flt_false = float(bool_false)
print(ubah_flt_false,type(ubah_flt_false)) # nilai True = 0.0


# ubah ke str
ubah_str_true = str(bool_true)
print(ubah_str_true,type(ubah_str_true))

ubah_str_false = str(bool_false)
print(ubah_str_false,type(ubah_str_false))
