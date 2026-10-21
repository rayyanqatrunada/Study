#operasi Bitwise atau bit

# 0 0 0 0 0 0 0 0 (Setiap 0 mewakili angka 2)
# 7 6 5 4 3 2 1 0 (nilai pangkat tiap bit)

# OR(|), AND(&), XOR(^), NOT(~)

a = 35
b = 13

print('\n=======OR========')
# OR (|), Menghasilkan 1 jika salah satu bit = 1
c = a | b
print('Nilai :', a, 'Binery :', format(a,'08b'))
print('Nilai :', b, 'Binery :', format(b,'08b'))
print('--------------------------- (|)')
print('Nilai :', c, 'Binery :', format(c,'08b'))

print('\n=======AND========')
# AND (&), Menghasilkan 1 hanya jika kedua bit = 1
c = a & b
print('Nilai :', a, 'Binery :', format(a,'08b'))
print('Nilai :', b, 'Binery :', format(b,'08b'))
print('--------------------------- (&)')
print('Nilai :', c, 'Binery :', format(c,'08b'))

print('\n=======XOR========')
# XOR (^), Menghasilkan 1 jika kedua bit berbeda
c = a ^ b
print('Nilai :', a, 'Binery :', format(a,'08b'))
print('Nilai :', b, 'Binery :', format(b,'08b'))
print('--------------------------- (^)')
print('Nilai :', c, 'Binery :', format(c,'08b'))

print('\n=======NOT========')
# Not (~), Membalikan kondisi(Mirror)
c = ~a
print('Nilai :', a, 'Binery :', format(a,'08b'))
print('--------------------------- (~)')
print('Nilai :', c, 'Binery :', format(c,'08b'))

#flip (dibalik manual menggunakan OR(|)), Membalik semua bit 8-bit
print('\nFlip')
d = 0b01001001
e = 0b11111111
print('Nilai :', d, 'Binery :', format(d,'08b'))
print('Nilai :', e, 'Binery :', format(e,'08b'))
print('--------------------------- (^)')
print('Nilai :',d^e, 'Binery :', format(d^e,'08b'))


#shifting

print('\n=======>>========')
#shift right (>>)
c = a >> 2 #geser bit ke kanan 2 kali
print('Nilai :', a, 'Binery :', format(a,'08b'))
print('--------------------------- (>>)')
print('Nilai :', c, 'Binery :', format(c,'08b'))

print('\n=======<<========')
#shift left (<<)
c = a << 2 #geser bit ke kiri 2 kali
print('Nilai :', a, 'Binery :', format(a,'08b'))
print('--------------------------- (<<)')
print('Nilai :', c, 'Binery :', format(c,'08b'))