# latihan pengulangan segitiga

sisi = int(input("Masukan tinggi : "))

## segitiga siku-siku
print("SEGITIGA SIKU-SIKU")

# dengan for
count = 1 # ini hanya dummy
for i in range(sisi):
    print("*"*count)
    count += 1 

print("akhir dari program for")

# dengan while
count = 1 # ini hanya dummy
while True:
    print("*"*count)
    count += 1

    if count > sisi:
        break

print("akhir dari program while")

# dengan while (hanya ganjil)
count = 1
while True:
    if (count%2):
        print("*"*count)
        count += 1

    else:
        count += 1
        continue

    if count > sisi:
        break

print("akhir dari program while (ganjil)")


## segitiga sama kaki
print("\nSEGITIGA SAMA KAKI")

# dengan for
count = 1
spasi = int(sisi/2)
for i in range(sisi):
    if (count%2):
        print(" "*spasi + "*"*count)
        count += 1
        spasi -= 1

    else:
        count += 1
        continue

    if count > sisi:
        break

print("akhir dari program for")

# dengan while
count = 1
spasi = int(sisi/2)
while True:
    if (count%2):
        print(" "*spasi + "*"*count)
        count += 1
        spasi -= 1

    else:
        count += 1
        continue

    if count > sisi:
        break
    
print("akhir dari program while")


## belah ketupat
print("\nBELAH KETUPAT")

# dengan while
count = 1
spasi = int(sisi/2)
while True:
    if (count%2):
        print(" "*spasi,"+"*count)
        spasi -= 1
        count += 1
    else:
        count += 1
        continue
    if count > sisi:
        break
while True:
    if (count%2): 
        spasi += 1
        print(" "*spasi,"+"*count)
        count -= 1
    else:
        count -= 1
    if count == 0:
        break
    
print("akhir dari program while")