# latihan dictionary
# import data siswa

import datetime
import os
import string
import random

siswa_template = {
    'nama':'nama',
    'nis':'00000000',
    'nilai':1,
    'lahir':datetime.datetime(1111,1,11)
}

data_siswa = {}
while True:
    os.system("cls")
    print(f"{'SELAMAT DATANG':^20}")
    print(f"{'DATA SISWA':^20}")
    print("-"*20)


    siswa = dict.fromkeys(siswa_template.keys())
    siswa['nama'] = input("Masukan nama\t: ")
    siswa['nis'] = input("Masukan nis\t: ")
    siswa['nilai'] = int(input("Masukan nilai\t: "))
    TAHUN_LAHIR = int(input("Masukan tahun lahir\t: "))
    BULAN_LAHIR = int(input("Masukan bulan lahir\t: "))
    TANGGAL_LAHIR = int(input("Masukan tanggal lahir\t: "))
    siswa['lahir'] = datetime.datetime(TAHUN_LAHIR,BULAN_LAHIR,TANGGAL_LAHIR)

    KEY = ''.join({random.choice(string.ascii_uppercase) for i in range(6)})
    data_siswa.update({KEY:siswa})
    
    print(f"\n{'KEY':<6} {'NAMA':<10} {'NIS':<8} {'NILAI':<6} {'LAHIR':<8}")
    print("-"*50)

    for siswa in data_siswa:
        KEY = siswa

        NAMA = data_siswa[KEY]['nama']
        NIS = data_siswa[KEY]['nis']
        NILAI = data_siswa[KEY]['nilai']
        LAHIR =  data_siswa[KEY]['lahir'].strftime("%x")

        print(f"{KEY:<6} {NAMA:<10} {NIS:<8} {NILAI:<6} {LAHIR:<8}")
    
    is_done = input("\n\nApakah masih lanjut?(y/n)")

    if is_done == "n":
        break

print("\nPROGRAM TELAH SELESAI")
