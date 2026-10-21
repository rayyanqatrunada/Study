from . import Database
from .Util import random_string
import time



def update(no_buku, pk, date_add, penulis, judul, tahun):
    RECORD_LENGTH = 544

    # 1. Hapus koma dan potong maksimal 255 karakter
    penulis = penulis.replace(",", " ")[:255]
    judul = judul.replace(",", " ")[:255]

    # 2. Padding
    penulis_padded = penulis.ljust(255)
    judul_padded = judul.ljust(255)

    # 3. Validasi panjang date_add
    if len(date_add) != 19:
        print(f"⚠️ Panjang 'date_add' tidak sesuai: {len(date_add)} (seharusnya 19)")
        return

    # 4. Susun string data
    data_str = f"{pk},{date_add},{penulis_padded},{judul_padded},{tahun}\n"

    # 5. Validasi total panjang baris
    if len(data_str) != RECORD_LENGTH:
        print(f"⚠️ Panjang baris tidak sesuai: {len(data_str)} (seharusnya {RECORD_LENGTH})")
        return

    try:
        with open(Database.DB_NAME, "r+", encoding="utf-8") as file:
            file.seek(RECORD_LENGTH * (no_buku - 1))
            file.write(data_str)
            print("✅ Update berhasil")
    except Exception as e:
        print(f"Update data error: {e}")



def create(tahun, judul, penulis):
    RECORD_LENGTH = 544

    # 1. Hapus koma dan potong maksimal 255 karakter
    penulis = penulis.replace(",", " ")[:255]
    judul = judul.replace(",", " ")[:255]

    # 2. Padding
    penulis_padded = penulis.ljust(255)
    judul_padded = judul.ljust(255)

    # 3. Buat field lainnya
    pk = random_string(6)
    date_add = time.strftime("%Y-%m-%d-%H-%M-%S", time.gmtime())  # panjang 19 karakter

    # 4. Susun string
    data_str = f"{pk},{date_add},{penulis_padded},{judul_padded},{tahun}\n"

    # 5. Validasi panjang
    if len(data_str) != RECORD_LENGTH:
        print(f"⚠️ Panjang baris tidak sesuai: {len(data_str)} (seharusnya {RECORD_LENGTH})")
        return

    try:
        with open(Database.DB_NAME, "a", encoding="utf-8") as file:
            file.write(data_str)
            print("✅ Data berhasil ditambahkan")
    except Exception as e:
        print(f"Gagal tambah data: {e}")


def create_first_data():
    judul = input("Judul\t: ")
    penulis = input("Penulis\t: ")
    while(True):
        try:
            tahun = int(input("Tahun: "))
            if len(str(tahun)) == 4:
                break
            else:
                print("Tahunnya nguwawor cik, tolong masukan tahun lagi (yyyy)")
        except:
            print("Tahun harus angka, tolong masukan tahun lagi (yyyy)")

    data = Database.TEMPLATE.copy()

    data["pk"] = random_string(6)
    data["date_add"] = time.strftime("%Y-%m-%d-%H-%M-%S%z",time.gmtime())
    data["penulis"] = penulis + Database.TEMPLATE["penulis"][len(penulis):]
    data["judul"] = judul + Database.TEMPLATE["judul"][len(judul):]
    data["tahun"] = str(tahun)

    data_str = f'{data["pk"]},{data["date_add"]},{data["penulis"]},{data["judul"]},{data["tahun"]}\n'

    try:
        with open(Database.DB_NAME,"w",encoding="utf-8")as file:
            file.write(data_str)
    except:
        print("gagal cik")


def read(**kwargs):
    try:
        with open(Database.DB_NAME,"r") as file:
            content = file.readlines()
            jumlah_buku = len(content)
            if "index" in kwargs:
                index_buku = kwargs["index"]-1
                if index_buku < 0 or index_buku > jumlah_buku:
                    return False
                else:
                    return content[index_buku]
            return content
    except:
        print("Membaca Database error")
        return False
