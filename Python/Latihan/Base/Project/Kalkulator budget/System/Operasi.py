''' Operasi Kalkulator Budget '''

from datetime import datetime
import os

DATA_FILE = "saldo.txt"

def tambah_transaksi(jenis):
    try:
        jumlah = float(input(f"Masukan jumlah {jenis}: "))
        keterangan = input("Masukan keterangan(opsional): ")
        waktu = datetime.now().strftime("%Y-%m-%d %H:%M:%D")

        with open(DATA_FILE,"a",encoding="utf-8") as file:
            file.write(f"{waktu}|{jenis}|{jumlah}|{keterangan}\n")

        print(f"{jenis} berhasil di catat")
    except ValueError:
        print("Jumlah harus berupa angka!!")

def lihat_transaksi():
    if not os.path.exists(DATA_FILE):
        print("Belum ada transaksi\n")
        return
    
    print(f"{'Tanggal'.ljust(25)}|{'Jenis'.ljust(12)}|{'Jumlah'.ljust(13)}|Keterangan")
    
    with open(DATA_FILE,"r") as file:
        lines = file.readlines()
        print("\n=== RIWAYAT TRANSAKSI ===\n")
        for line in lines:
            tgl, jenis, jumlah, ket = line.strip().split("|")
            print(f"{tgl.ljust(25)}|{jenis.ljust(12)}|{jumlah.ljust(13)}|{ket}")

def lihat_saldo():
    saldo = 0.0

    if not os.path.exists(DATA_FILE):
        print("Saldo saat ini: Rp.0, belum ada data.")
        return

    with open(DATA_FILE, "r", encoding="utf-8") as file:
        for line in file:
            if not line.strip():
                continue
            try:
                tanggal, jenis, jumlah, keterangan = line.strip().split("|")
                jumlah = float(jumlah)

                if jenis == "pemasukan":
                    saldo += jumlah
                elif jenis == "pengeluaran":
                    saldo -= jumlah

            except ValueError:
                print("Format baris salah, dilewati:", line.strip())

    print(f"\nSaldo You saat ini: Rp.{saldo:,.2f}")


def hapus_transaksi():
    print("untuk saat ini fitur ini masih belum ada(Karena devnya malas)")
    print(f"Solusi: Hapus transaksi secara manual di {DATA_FILE}")