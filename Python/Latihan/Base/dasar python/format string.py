# Format string

# contoh generic
# string
nama = "Furina"
format_str = f"Nama = {nama}"
print(format_str)

# boolean
status = True
format_str = f"boolean = {status}"
print(format_str)

# number
angka = 2008.8
format_str = f"angka = {angka}"
print(format_str)

# bilangan bulat
angka = 12
format_str = f"bilangan bulat = {angka:d}"
print(format_str)

# bilangan dengan ordo ribuan atau jutaan
angka = 30000000
format_str = f"jutaan = {angka:,}"
print(format_str)

# bilangan desimal
desimal = 123.45678
format_str = f"desimal = {desimal:.2f}" # (.xf) jumlah x = jumlah angka yang akan ditampilkan dibelakang titik
print(format_str)

# menampilkan leading zero
desimal = 2030.4050
format_str = f"desimal = {desimal:09.1f}" # :09.1f artinya total 9 karakter termasuk titik dan angka desimal # :09.1f artinya total 9 karakter termasuk titik dan angka desimal, Contoh: desimal = 2030.4 akan tampil sebagai '0002030.4'
print(format_str)

# memformat persen
angka = 0.052
format_str = f"persen = {angka:.1%}"
print(format_str)

# menampilkan plus(+) dan minus(-)
plus = 25
minus = -25
format_plus = f"angka plus = {plus:+d}"
format_minus = f"angka minus = {minus:+}" # penambahan "+" pada data minus hanya opsional
print(format_plus)
print(format_minus)

# melakukan operasi aritmatika di dalam placeholder
harga = 10000
jumlah = 7
format_jumlah = f"jumlah = Rp.{harga*jumlah:,}"
print(format_jumlah)

# format bilangan lain (binery, octal, hexadecimal)
angka = 230
format_biner = f"binery = {bin(angka)}"
format_octal = f"octal  = {oct(angka)}"
format_hex = f"hexadecimal = {hex(angka)}"

print(format_biner)
print(format_octal)
print(format_hex)

# alternatif format bilangan lain
angka = 230
format_biner = f"binery      = {angka:b}"
format_octal = f"octal       = {angka:o}"
format_hex   = f"hexadecimal = {angka:x}"  # lowercase hex
format_HEX   = f"HEX         = {angka:X}"  # uppercase hex

print(format_biner)
print(format_octal)
print(format_hex)
print(format_HEX)