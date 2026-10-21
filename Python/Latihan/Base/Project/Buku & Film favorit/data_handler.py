'''Function Catat Buku/Film Favorit'''

import os

DATA_FILE = "data_favorit.txt"

def tambah_favorit():
    judul = input("Masukan judul\t: ")
    tipe = input("Tipe (Buku/Film): ")
    while(True):
        try:
            tahun = int(input("Tahun Rilis\t: "))
            if len(str(tahun)) == 4:
                break
            else:
                print("Tahunnya nguwawor cik")
    
        except:
            print("Tahun Harus angka lahh")
    
    komen = input("Masukan komentar: ")

    with open(DATA_FILE,"a",encoding="utf-8") as file:
        file.write(f"{judul}|{tipe}|{tahun}|{komen}\n")

    print("Data baru berhasil ditambahkan!!")


def lihat_favorit():
    if not os.path.exists(DATA_FILE):
        print("Belum ada data favorit")
        return
    
    with open(DATA_FILE,"r",encoding="utf-8") as file:
        for indx, line in enumerate(file, start=1):
            if line.strip():
                judul, tipe, tahun, komen = line.strip().split("|")
                print(f"{indx}. [{tipe.capitalize()}] {judul} ({tahun})")
                print(f" -> {komen}")

            else:
                print(f"{indx}. Format data error")

def hapus_favorit():
    if not os.path.exists(DATA_FILE):
        print("Belum ada data favorit")
        return
    
    lihat_favorit()
    try:
        nomor = int(input("\nPilih nomor yang ingin dihapus: "))

    except:
        print("input harus berupa angka")

    with open(DATA_FILE,"r",encoding="utf-8") as file:
        lines = file.readlines()

    if 1 <= nomor <= len(lines):
        del lines[nomor -1]
        with open(DATA_FILE,"w",encoding="utf-8") as file:
            file.writelines(lines)
        print("Favorit berhasil dibapus")
    
    else:
        print("Nomor datanya yang bener domng!!")
    
