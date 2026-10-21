# date and time (latihan)

import datetime as dt

hari_indo = {
    "Monday": "Senin",
    "Tuesday": "Selasa",
    "Wednesday": "Rabu",
    "Thursday": "Kamis",
    "Friday": "Jumat",
    "Saturday": "Sabtu",
    "Sunday": "Minggu"
}

bulan_indo = {
    "January": "Januari",
    "February": "Februari",
    "March": "Maret",
    "April": "April",
    "May": "Mei",
    "June": "Juni",
    "July": "Juli",
    "August": "Agustus",
    "September": "September",
    "October": "Oktober",
    "November": "November",
    "December": "Desember"
}

#contoh
print(5*"="+"CONTOH"+5*"=")
hari_ini = dt.date.today()
print(hari_ini)
print( f"hari ini adalah hari  = {hari_ini:%A}") # %A untuk menunjukan hari
print( f"hari ini adalah bulan = {hari_ini:%B}") # %B untuk menunjukan bulan
print( f"hari ini adalah tahun = {hari_ini:%Y}") # %Y untuk menunjukan tahun

tanggal = dt.date(2008,7,15)
print(tanggal)
print( f"hari pada {tanggal} adalah hari  = {tanggal:%A}") # %A untuk menunjukan hari
print( f"hari pada {tanggal} adalah bulan = {tanggal:%B}") # %B untuk menunjukan bulan
print( f"hari pada {tanggal} adalah tahun = {tanggal:%Y}") # %Y untuk menunjukan tahun


# latihan
print("\n"+5*"="+"LATIHAN"+5*"=")
print( f"Masukan tanggal, \nbulan dan tahun lahir\n")
tanggal = int(input("tanggal \t :"))
bulan = int(input("bulan \t\t :"))
tahun = int(input("tahun \t\t :"))

tanggal_lahir = dt.date(tahun,bulan,tanggal)
print(f"Kamu lahir di hari    : {tanggal_lahir:%A}") 
print("tangal lahirmu adalah :",tanggal_lahir)
hari_ini = dt.date.today()
umur_hari = hari_ini - tanggal_lahir
umur_tahun = umur_hari.days // 365 # fungsi (.days) adalah agar yang di tunjukan hanya jumlah harinya saja
umur_bulan = (umur_hari.days % 365) // 30

print( f"umurmu sudah adalah   : {umur_tahun} tahun, {umur_bulan} bulan")
print( f"umurmu dalam hari     : {umur_hari.days} hari")
