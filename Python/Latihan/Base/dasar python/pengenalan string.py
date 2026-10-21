#pengenalan string
data = "Ini adalah string"
print(data, "Tipe:", type(data))


print('   ')
# 1.Cara membuat string
'''
    1. dengan menggunakan single quote '....'
    2. dengan menggunakan double quote "...."
'''

data = 'Ini menggunakan single quote (\'...\')'
print(data)
data = "Ini menggunakan double quote (\"...\")"
print(data)

print('  ')
#bisa menggunakan keduanya untuk memberikan tanda kutip
print('"Menggunakan double quote di dalam single quote"')
print("'menggunakan single quote di dalam double quote'")
print("Hari jum'at aku ngedate bareng Furina")


print('  ')
# 2.Menggunakan tanda \

# Mengubah tanda ' atau " menjadi string
print('Hari Jum\'at')
print('\'single quote di dalam single quote\'')
print("\"double quote di dalam double quote\"")

# backslash
print('C:\\wife\\furina')

# tab
print('Aku \t\tFurina')
print("Jawa \t\t\t\tKalimantan")

# backspace
print('Aku \bFurina')
print('Medan \bBesi')

# newline
print('baris pertama,\nbaris kedua') # LF -> line feed -> unix, macos, linux
print('baris pertama,\rbaris kedua') # CR -> carriage return -> commodore, acorn, lisp
print('baris pertama,\r\nbaris kedua') # CRLF -> carriage return line feed -> dipakai Windows


print('   ')
# 3.String literal atau raw

# menggunakan raw string
print(r'semua ini \n\t\b\r dianggap sebagai string')
print(r'C:\new folder')

# multiline literal string
print('''
Nama  : Rayy
Kelas : PPLG
Absen : 31
''')

# multiline literal string dan raw
print(r'''
Nama File : new folder
lokasi    : D:\user\program\new folder
''')


# tambahan
# sep, Mengatur pemisah antar elemen di dalam print(...)
print("Nama:", "Yui", sep=' => ')
print('2008', '07', '15', sep='-')

# end, Mengatur apa yang terjadi setelah print selesai
print("Selesai", end=' Juga\n')