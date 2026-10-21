# latihan list buku


list_buku = []
while True:
    print("\nMasukan Data Buku")
    judul = input("Masukan judul buku\t: ")
    penulis = input("Masukan nama penulis\t: ")

    data_buku = [judul,penulis]
    list_buku.append(data_buku)

    print("\n","="*10 + "DATA BUKU" + "="*10)
    for index, buku in enumerate(list_buku):
        print(f"{index+1:>2} | {buku[0]:<20} | {buku[1]:<15}")


    print("\n","="*20)
    islanjut = input("Apakah masih lanjut?(y/n)").lower()

    if islanjut == "n":
        break

print("PROGRAM SELESAI")
