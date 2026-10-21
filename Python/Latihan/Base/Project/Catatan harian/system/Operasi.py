''' sistem operasi catatan'''

from datetime import datetime
import os

DATA_FILE = "catatan.txt"

def tambah_catatan():
    tanggal = input("Masukan tanggal (yyyy-mm-dd), kosongkan jika hari ini: ")
    if not tanggal:
        tanggal = datetime.now().strftime("%Y-%m-%d")
    catatan = input("Masukan catatan: ")

    with open(DATA_FILE,"a",encoding="utf-8") as file:
        file.write(f"\n\n[Tanggal = {tanggal}]\n")
        file.write(f"- {catatan}\n")
    
    print("Catatan berhasil ditambahkan")


def lihat_catatan():
    if not os.path.exists(DATA_FILE):
        print("Belum ada catatan")
        return

    else:
        with open(DATA_FILE,"r") as file:
            print("="*3,"ISI CATATAN","="*3)
            print(file.read())


def hapus_catatan():
    if not os.path.exists(DATA_FILE):
        print("Belum ada catatan.")
        return

    with open(DATA_FILE, "r", encoding="utf-8") as file:
        lines = file.readlines()

    # Ambil semua tanggal unik dari file
    tanggal_list = []
    for line in lines:
        if line.startswith("[Tanggal ="):
            tanggal = line.strip().replace("[Tanggal = ", "").replace("]", "")
            tanggal_list.append(tanggal)

    if not tanggal_list:
        print("Tidak ada catatan untuk dihapus.")
        return

    # Tampilkan semua tanggal
    print("Catatan yang tersedia:")
    for i, tgl in enumerate(tanggal_list, 1):
        print(f"{i}. {tgl}")

    try:
        index = int(input("Pilih nomor tanggal yang ingin dihapus: ")) - 1
        if 0 <= index < len(tanggal_list):
            tanggal_yang_dihapus = tanggal_list[index]
            new_lines = []
            skip = False

            for line in lines:
                # blok tanggal yang akan dihapus
                if line.startswith(f"[Tanggal = {tanggal_yang_dihapus}]"):
                    skip = True
                    continue
                # Kalau line berikutnya adalah tanggal baru, matikan skip
                elif skip and line.startswith("[Tanggal ="):
                    skip = False

                if not skip:
                    new_lines.append(line)

            # Simpan ulang file tanpa blok yang dihapus
            with open(DATA_FILE, "w", encoding="utf-8") as file:
                file.writelines(new_lines)

            print(f"✅ Catatan tanggal {tanggal_yang_dihapus} berhasil dihapus.")
        else:
            print("❌ Nomor tidak valid.")
    except ValueError:
        print("❌ Input harus berupa angka.")


