#operator assigment
#operasi yang dapat dilakukan dengan penyingkatan
#operasi yang ditambah dengan assigment


a = 10 # adalah assigment
print('\nNilai a =',a)

a += 4 # artinya adalah a = a + 4(nilai a ditambah 4)
print('Nilai a += 4, nilai a menjadi', a)

a -= 6 # artinya adalah a = a - 6(nilai a dikurangi 6)
print('Nilai a -= 6, nilai a menjadi', a)

a *= 3 # artinya adalah a = a * 3(nilai a dikali 3)
print('Nilai a *= 3, nilai a menjadi', a)

a /= 8 # artinya adalah a = a / 8(nilai a dibagi 8)
print('Nilai a /= 8, nilai a menjadi', a)


#perpangkatan atau eksponen
a = 10
print('\nNilai a =',a)
a **= 3 # artinya adalah a = a ** 3(nilai a pangkat 3)
print('Nilai a **= 3, nilai a menjadi', a)


#modulus dan floor division
b = 16
print('\nNilai b =',b)
#modulus
b %= 3 # arinya adalah b = b % 3(sisa bagi 3)
print('Nilai b %= 3, nilai b menjadi', b)

b = 16
print('Nilai b =',b)
#floor division
b //= 3 # arinya adalah b = b // 3(pembagian bulat dengan 3)
print('Nilai b //= 3, nilai b menjadi', b)


#operasi bitwise
#OR(|)
c = False
print('\nNilai c =',c)
c |= False # artinya nilai c = c | False
print('Nilai c |= False, nilai c menjadi',c)
c = True
print('Nilai c =',c)
c |= False # artinya nilai c = c | False
print('Nilai c |= False, nilai c menjadi',c)
c = True
print('Nilai c =',c)
c |= True # artinya nilai c = c | True
print('Nilai c |= True, nilai c menjadi',c)

#AND(&)
c = False
print('\nNilai c =',c)
c &= False # artinya nilai c = c & False
print('Nilai c &= False, nilai c menjadi',c)
c = True
print('Nilai c =',c)
c &= False # artinya nilai c = c & False
print('Nilai c &= False, nilai c menjadi',c)
c = True
print('Nilai c =',c)
c &= True # artinya nilai c = c & True
print('Nilai c &= True, nilai c menjadi',c)

#XOR(^)
c = False
print('\nNilai c =',c)
c ^= False # artinya nilai c = c ^ False
print('Nilai c ^= False, nilai c menjadi',c)
c = True
print('Nilai c =',c)
c ^= False # artinya nilai c = c ^ False
print('Nilai c ^= False, nilai c menjadi',c)
c = True
print('Nilai c =',c)
c ^= True # artinya nilai c = c ^ True
print('Nilai c ^= True, nilai c menjadi',c)


#shifting
#shift right(geser kanan)
d = 0b0010
print('\nNilai d =',d,'Binery:', format(d,'04b'))
d >>= 1 # artinya bit d digeser ke kanan 1 kali
print('Nilai d >>= 1, nilai d menjadi', d, 'Binery:', format(d,'04b'))

#shift left(geser kiri)
d = 0b0010
print('Nilai d =',d,'Binery:', format(d,'04b'))
d <<= 2 # artinya bit d digeser ke kiri 2 kali
print('Nilai d <<= 2, nilai d menjadi', d, 'Binery:', format(d,'04b'))