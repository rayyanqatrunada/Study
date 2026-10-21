import os
import CRUD as CRUD

if __name__ == "__main__":
    sistem_operasi = os.name

    match sistem_operasi:
            case "posix": os.system("clear")
            case "nt": os.system("cls")

    print("SELAMAT DATANG DI PROGRAM")
    print("DATABASE PRPUSTAKAAN")
    print("=========================\n")

    #check database ada atau tidak
    CRUD.init_console()

    while(True):
        match sistem_operasi:
            case "ponix": os.system("clear")
            case "nt": os.system("cls")

        print("SELAMAT DATANG DI PROGRAM")
        print("DATABASE PERPUSTAKAAN")
        print("=========================\n")

        print("1. read data")
        print("2. create data")
        print("3. update data")
        print("4. delete data\n")

        input_opsi = input("pilih opsi : ")

        match input_opsi:
            case "1": CRUD.read_console()
            case "2": CRUD.create_console()
            case "3": CRUD.update_console()
            case "4": print("delete data")
            case "5": CRUD.fix_data_file()

        is_done = input("Apakah sudah selesai (y/n)? ").lower()
        if is_done == "y":
            break

    print("AKHIR DARI PROGRAM")