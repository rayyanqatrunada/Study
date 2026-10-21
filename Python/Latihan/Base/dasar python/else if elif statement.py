## IF dan ELSE statement

# 1. if nya
# 2. kondisinya
# 3. aksinya

nama = input("Masukan nama anda :").title()

# program sebelumnya
# if kondisinya: aksinya
# program selanjutnya

# 1. program if inline
if nama=="Furina": print("hai maniss")
print(f"Terima kasih {nama}")

# 2. program if indentation
if nama=="Furina":
    print("hai maniss")
    print("hari ini kamu cantik banget")
print( f"Terima kasih {nama}")

# 3. else statement
if  nama=="Furina":
    print("Hai cantik")
else:
    print("ah, kamu bukan Furina")
print("akhir dari program")


## elif statement = else if

nama = input("Masukan nama kamu :").title()

# cara 1
'''
if kondisi:
    aksi
elif kondisi:
    aksi
elif kondisi:
    aksi
else:
    aksi
'''

if  nama == "Furina": # kondisi 1
    print("Hai cantikk") # aksi true 1
elif nama == "Yui": # kondisi 2
    print("Hai maniss") # aksi true 2
elif nama == "Charlotta": # kondisi 3
    print("Hai imutt") # aksi true 3
else:
    print(f"Oh, namamu {nama}") # aksi false
print("akhir program")

# cara 2
'''
match kondisi:
    case kondisi:
        aksi
    case kondisi:
        aksi
    case _: (_) menandakan aksi false
        aksi
'''
match nama:
    case "Furina":
        print("Hai cantikk")
    case "Yui":
        print("Hai maniss")
    case "Charlotta":
        print("Hai imutt")
    case _:
        print(f"Oh, namamu {nama}")