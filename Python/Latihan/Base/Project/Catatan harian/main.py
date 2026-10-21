''' catatan harian '''

import system
import os

while(True):
    os.system("cls" if os.name == "nt" else "clear")

    print("="*3, "CATATAN HARIAN", "="*3 + "\n")
    print("1. Tambah Catatan")
    print("2. Lihat Catatan")
    print("3. Hapus Catatan")
    print("4. Keluar\n")

    mode = input("Pilih mode yang ingin dilakukan : ")
    match mode:
        case "1" : system.tambah_catatan()
        case "2" : system.lihat_catatan()
        case "3" : system.hapus_catatan()
        case "4" : break
        case _: print("input tidak valid")

    is_done = input("enter untuk kembali ke menu")
    if is_done == " ":
        continue

print("Program selesai coy")