''' rekap dasar python '''
''' operasi dasar aritmatika '''

## perjumahan
print("=== PERJUMLAHAN ===")
while True:
    try:
        angka1 = float(input("Masukan angka ke-1 : "))
        angka2 = float(input("Masukan angka ke-2 : "))
        break
    except:
        print("Tolong masukan input dengan benar")

hasil = angka1 + angka2
print(f"Hasil {angka1} + {angka2} adalah {hasil}")


## pengurangan
print("\n\n=== PENGURANGAN ===")
while True:
    try:
        angka1 = float(input("Masukan angka ke-1 : "))
        angka2 = float(input("Masukan angka ke-2 : "))
        break
    except:
        print("Tolong masukan input dengan benar")

hasil = angka1 - angka2
print(f"Hasil {angka1} - {angka2} adalah {hasil}")


## perkalian
print("\n\n=== PERKALIAN ===")
while True:
    try:
        angka1 = float(input("Masukan angka ke-1 : "))
        angka2 = float(input("Masukan angka ke-2 : "))
        break
    except:
        print("Tolong masukan input dengan benar")

hasil = angka1 * angka2
print(f"Hasil {angka1} * {angka2} adalah {hasil}")


## pembagian
print("\n\n=== PEMBAGIAN ===")
while True:
    try:
        angka1 = float(input("Masukan angka ke-1 : "))
        angka2 = float(input("Masukan angka ke-2 : "))
        break
    except:
        print("Tolong masukan input dengan benar")

hasil = angka1 / angka2
print(f"Hasil {angka1} / {angka2} adalah {hasil}")


## floor division (pembulatan hasil pembagian ke bawah)
print("\n\n=== FLOOR DIVISION ===")
while True:
    try:
        angka1 = float(input("Masukan angka ke-1 : "))
        angka2 = float(input("Masukan angka ke-2 : "))
        break
    except:
        print("Tolong masukan input dengan benar")

hasil = angka1 // angka2
print(f"Hasil {angka1} // {angka2} adalah {hasil}")


## modulus (sisa hasil bagi)
print("\n\n=== MOSULUS ===")
while True:
    try:
        angka1 = float(input("Masukan angka ke-1 : "))
        angka2 = float(input("Masukan angka ke-2 : "))
        break
    except:
        print("Tolong masukan input dengan benar")

hasil = angka1 % angka2
print(f"Hasil {angka1} % {angka2} adalah {hasil}")