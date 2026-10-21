'''Buku dan Film Favorit'''

import data_handler
import os

def clear():
    os.system("cls" if os.name == "nt" else "clear")

while(True):
    clear()
    print("=== FAVLIST ===")
    print("1. Tambah Buku/Film Favorit")
    print("2. Lihat Faforit")
    print("3. Hapus Favorit")
    print("4. Keluar\n\n")

    pilih = input("Pilih menu: ")

    match pilih:
        case "1": data_handler.tambah_favorit()
        case "2": data_handler.lihat_favorit()
        case "3": data_handler.hapus_favorit()
        case "4": break
        case _: print("Inputnya yang bener woi")

    input("\nTekan enter untuk kembali ke menu...")