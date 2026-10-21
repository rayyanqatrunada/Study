## cara menduplikat/copy list

a = ["Furina","Citlali","Charlotta"]
print(f"a = {a}")

b = a # pass by reference
print(f"b = {b}")

#mengubah item pada a

# ini akan mengubah keduanya, karena a dan b memiliki address yang sama
a[1] = "Yui"
b.sort()
print(f"a = {a}")
print(f"b = {b}")

# address dari list a dan b
print(f"address dari a = {hex(id(a))}")
print(f"address dari b = {hex(id(b))}")


# menduplikat list menggunakan .copy()
c = a.copy() # ".copy()" akan menduplikat dan membuat address baru
print(f"c = {c}")

# address dari a, b, dan c
print(f"address dari a = {hex(id(a))}")
print(f"address dari b = {hex(id(b))}")
print(f"address dari c = {hex(id(c))}")

print(f"a = {a}")
print(f"b = {b}")
print(f"c = {c}")

## ubah data pada c

print("ubah data pada c")
c[0] = "Jinshi"
print(f"a = {a}")
print(f"b = {b}")
print(f"c = {c}")

c[2] = "Keqing"
print(f"a = {a}")
print(f"b = {b}")
print(f"c = {c}") # data pada c tidak akan merubah data a dan b karena memiliki id yang berbeda
