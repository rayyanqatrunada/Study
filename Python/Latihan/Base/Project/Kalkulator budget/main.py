''' Kalkulator Budget '''

import System
import os

while(True):
    os.system("cls" if os.name == "nt" else "clear")

    print("=== Kalkulator Budget ===\n")
    print("1. Tambah Pemasukan")
    print("2. Tambah Pengeluaran")
    print("3. Lihat transaksi")
    print("4. Lihat Saldo")
    print("5. Hapus Transaksi")
    print("6. Keluar\n\n")

    input_opsi = input("Pilih opsi: ")
    match input_opsi:
        case "1": System.tambah_transaksi("pemasukan")
        case "2": System.tambah_transaksi("pengeluaran")
        case "3": System.lihat_transaksi()
        case "4": System.lihat_saldo()
        case "5": System.hapus_transaksi()
        case "6": break
        case _: print("Inputnya yang bener woi")

    input("\nTekan enter untuk kembali ke menu...")

print("Program udah end")