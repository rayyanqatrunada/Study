#Latihan komparasi dan logika

#++++3----10++++
#Lebih kecil dari 3 atau lebih besar dari 10
InputUser = float(input("Masukan angka \nkurang dari 3 \natau \nlebih dari 10\n:"))

#+++3------
KurangDari = InputUser < 3
print("Kurang dari 3 =",KurangDari)

#-----10+++
LebihDari = InputUser > 10
print("Lebih dari 10 =",LebihDari)

#+++3----10+++
Hasil = KurangDari or LebihDari
print("Jawaban yang dimasukan :","Benar" if Hasil else "salah")

print("\n",10*"=","\n")

#----3++++10----
#Lebih besar dari 3 dan lebih kecil dari 10
InputUser = float(input("Masukan angka \nlebih dari 3 \ndan \nkurang dari 10\n:"))

#+++3------
LebihDari = InputUser > 3
print("Lebih dari 3 =",LebihDari)

#-----10+++
KurangDari = InputUser < 10
print("Lebih dari 10 =",KurangDari)

#----3++++10----
Hasil = KurangDari and LebihDari
print("Jawaban yang dimasukan :","Benar" if Hasil else "salah")



#Latihan

#----0++++5----8++++11----
'''
    lebih dari 0 dan kurang dari 5 atau
    lebih dari 8 dan kurang dari 11
'''
Jawaban = float(input("masukan angka\nLebih dari 0 dan kurang dari 5\natau\nLebih dari 8 dan kurang dari 11\n:"))

#lebih  dari 0 atau 8
LebihDari0 = Jawaban > 0
LebihDari8 = Jawaban > 8
'''
    print("Lebih dari 0 =",LebihDari0)
    print("lebih dari 8 =",LebihDari8)
'''

#kurang dari 5 atau 11
KurangDari5 = Jawaban < 5
KurangDari11 = Jawaban < 11
'''
    print("kurang dari 5 =",KurangDari5)
    print("kurang dari 11 =",KurangDari11)
'''

Hasil = LebihDari0 and KurangDari5
Hasil1 = LebihDari8 and KurangDari11
print(">0 dan <5 =",Hasil)
print(">8 dan <11 =",Hasil1)

HasilAkhir = Hasil or Hasil1
print("Jawaban yang anda masukan:","Benar" if HasilAkhir else "Salah")

print("\n",10*"=","\n")
#++++0----5++++8----11++++
'''
    Kurang dari 0 atau
    lebih dari 5 dan kurang dari 8 atau
    Lebih dari 11
'''
Jawaban = float(input("masukan angka\nKurang dari 0\natau\nlebih dari 5 dan kurang dari 8\natau\nlebih dari 11\n:"))

#lebih  dari 0 atau 8
LebihDari5 = Jawaban > 5
LebihDari11 = Jawaban > 11
'''
    print("Lebih dari 5 =",LebihDari5)
    print("lebih dari 11 =",LebihDari11)
'''

#kurang dari 0 atau 8
KurangDari0 = Jawaban < 0
KurangDari8 = Jawaban < 8
'''
    print("kurang dari 0 =",KurangDari0)
    print("kurang dari 8 =",KurangDari8)
'''

Hasil = KurangDari0 or LebihDari11
Hasil1 = LebihDari5 and KurangDari8
print("<0 atau >10 =",Hasil)
print(">5 dan <8 =",Hasil1)

HasilAkhir = Hasil or Hasil1
print("Jawaban yang anda masukan:","Benar" if HasilAkhir else "Salah")


#Shortcut

#++++3----10++++
x = float(input("Masukan angka\n(<3 atau >10)\n:"))
print("Benar" if (x <3) or (x >10) else "Salah")

#----3++++10----
x = float(input("Masukan angka\n(>3 dan <10)\n:"))
print("Benar" if (3< x <10) else "Salah")

#----0++++5----8++++11----
x = float(input("Masukkan angka (>0 dan <5 atau\n >8 dan <11)\n: "))
print("Benar" if (0 < x < 5) or (8 < x < 11) else "Salah")

#++++0----5++++8----11++++
x = float(input("Masukkan angka (<0 atau\n>5 dan <8 atau >11)\n: "))
print("Benar" if (x <0) or (5< x <8) or(x >11) else "Salah")