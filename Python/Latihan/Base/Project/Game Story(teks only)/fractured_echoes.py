import time
import os

global fragment_kaia
fragment_kaia = True


def clear():
    os.system("cls" if os.name == "nt" else "clear")

def intro():
    clear()
    print("="*40)
    print("FRACTURED ECHOES".center(40))
    print("="*40)
    input("\nTekan Enter untuk memulai...")
    bab1()


def bab1():
    clear()
    print("...")
    time.sleep(1)
    print("Beep... Beep... Beep...\n")
    time.sleep(1)
    print("[Kamar Rumah Sakit]")
    time.sleep(1)
    print("Ari: Di mana... aku?")
    print("Ari: Tempat ini... kenapa terasa begitu asing?\n")

    time.sleep(1)
    print("Lumen: Ah... kamu sudah bangun.")
    print("Lumen: Kau membuat kami khawatir.")
    print("Ari: Siapa kamu?")
    print("Lumen: Kita pernah bertemu. Berkali-kali, bahkan.")
    print("Lumen: Tapi aku tidak kaget kalau kamu tak ingat satu pun.")

    print("\n1. Kamu bicara seperti aku gila.")
    print("2. Apa maksudmu? Apa yang kulupakan?")
    print("3. Keluar dari kamarku.")

    pilihan = input(">>> Pilih (1/2/3): ")

    if pilihan == "1":
        print("Ari: Kamu bicara seperti aku gila.")
        print("Lumen: Kadang, kegilaan hanyalah bentuk lain dari kebenaran yang tak ingin kita terima.")
    elif pilihan == "2":
        print("Ari: Apa maksudmu? Apa yang kulupakan?")
        print("Lumen: Semua orang punya luka. Tapi tidak semua luka bisa disembuhkan dengan melupakannya.")
        print("Lumen: Namanya... Kaia.")
        print("*Terdengar suara anak kecil tertawa samar... lalu menghilang.*")
    elif pilihan == "3":
        print("Ari: Keluar dari kamarku.")
        print("Lumen: Kamu bisa mengusirku, tapi aku tetap bagian dari ingatanmu.")
        print("*Lumen tersenyum tipis sebelum menghilang.*")
    else:
        print("Pilihan tidak valid.")

    print("\nAri: Kaia...? Siapa itu Kaia?")
    print("*Suara detak jantung semakin cepat...*\n")
    time.sleep(2)

    input("\nTekan Enter untuk melanjutkan...")

    bab2()


def bab2():
    clear()
    print("[Lorong Penuh Cermin]")
    time.sleep(1)

    print("Ari: Lorong ini... bukan lorong biasa.")
    print("Ari: Semua dinding... jadi cermin?\n")
    time.sleep(1)

    print("???: Karena kamu penakut. Kamu meninggalkannya.")
    print("Ari: Siapa kamu?")
    print("???: Aku... kamu. Bagian yang kau coba kubur.")
    print("???: Kau tahu siapa yang kumaksud. Kaia.\n")

    print("1. Diam. Itu bukan salahku.")
    print("2. Aku tidak ingat apa pun…")
    print("3. Apa yang terjadi dengan Kaia?")

    pilihan = input(">>> Pilih (1/2/3): ")

    if pilihan == "1":
        print("Ari: Diam! Itu bukan salahku!")
        print("Cermin: Tapi kamu tetap mendengarnya setiap malam, kan?")
        print("Cermin: Tangisnya... saat kamu berlari pergi.")
    elif pilihan == "2":
        print("Ari: Aku... aku tidak ingat apa pun...")
        print("Cermin: Kamu menguburnya terlalu dalam. Tapi aku masih di sini.")
    elif pilihan == "3":
        print("Ari: Apa yang terjadi dengan Kaia?")
        print("Cermin: Sesuatu yang kamu coba lupakan. Sesuatu yang kamu biarkan terjadi.")
    else:
        print("Pilihan tidak valid.")

    print("\n*Suara retakan terdengar...*")
    print("*Cermin di hadapan Ari retak, darah mulai merembes dari retakan.*\n")
    time.sleep(2)

    print("Ari: Aku harus keluar... sebelum pikiranku benar-benar pecah.")
    time.sleep(2)

    input("\nTekan Enter untuk melanjutkan...")

    bab3()


def bab3():
    global fragment_kaia
    clear()
    print("[Labirin Pikiran]")
    time.sleep(1)

    print("...")
    print("Kau berjalan, tapi tidak sampai ke mana-mana.")
    time.sleep(2)

    print("\nAri: Ruangan ini... baru saja ada pintu di sini.")
    print("Ari: Sekarang hanya dinding... bergerak?\n")
    time.sleep(1)

    print("???: Kau berputar-putar di kepala sendiri. Menyenangkan, ya?")
    print("Ari: Siapa kamu? Kenapa kamu... terlihat seperti aku saat kecil?")
    print("???: Karena aku adalah kamu.")
    print("???: Yang kau tinggalkan. Yang menangis sendirian saat dunia terlalu bising.\n")

    print("1. Aku tak meninggalkan siapa pun!")
    print("2. Aku... takut.")
    print("3. Tolong... bawa aku keluar dari sini.")

    pilihan = input(">>> Pilih (1/2/3): ")

    if pilihan == "1":
        print("Ari: Aku tak meninggalkan siapa pun!")
        print("Echo Kid: Lalu kenapa aku masih di sini, tersesat?")
    elif pilihan == "2":
        print("Ari: Aku... takut.")
        print("Echo Kid: Dan aku yang harus menanggung rasa takut itu sendirian selama bertahun-tahun.")
    elif pilihan == "3":
        print("Ari: Tolong... bawa aku keluar dari sini.")
        print("Echo Kid: Keluar ke mana? Dunia yang kau tolak? Atau realita yang kau tinggalkan?")
    else:
        print("Pilihan tidak valid.")

    print("\n*Lorong mulai bergetar. Cahaya menjadi kemerahan. Dinding bergerak, menutup arah balik.*")
    time.sleep(2)

    print("Ari: Aku... aku kehilangan arah...\n")
    time.sleep(1)

    print("*Tiba-tiba, sebuah pintu muncul di dinding.*\n")
    time.sleep(1)

    print("Echo Kid: Kau bisa masuk. Tapi hanya jika siap melihat apa yang sebenarnya terjadi malam itu.\n")

    print("1. Masuk ke pintu. (Lanjutkan cerita)")
    print("2. Jangan masuk. (Ari melarikan diri)")

    pilihan2 = input(">>> Pilih (1/2): ")

    if pilihan2 == "1":
        fragment_kaia = True
        print("Ari melangkah perlahan menuju pintu bercahaya...")
        time.sleep(2)
        input("\nTekan Enter untuk melanjutkan...")
        bab4()
    elif pilihan2 == "2":
        print("Ari mundur. Lorong kembali gelap. Dinding menutup.")
        time.sleep(2)
        input("\nTekan Enter untuk melanjutkan...")
        ending_denial()
    else:
        print("Pilihan tidak valid.")
        time.sleep(1)
        input("\nTekan Enter untuk melanjutkan...")
        bab3()  # ulangi bab 3 jika input tidak valid

def bab4():
    clear()
    print("[Ruangan Terapi Lama]")
    time.sleep(1)

    print("Ruangan ini... kosong. Tapi terasa penuh.")
    time.sleep(2)

    print("Ari: Di sini aku... sering bicara dengan Dr. Vero.\n")
    time.sleep(2)

    print("*Kaset putar otomatis dari tape recorder tua...*\n")
    time.sleep(1)
    print("Dr. Vero (rekaman): Ari, kamu masih menyalahkan dirimu atas kejadian itu.")
    print("Dr. Vero (rekaman): Tapi kamu harus bertanya: apakah kamu benar-benar bersalah...")
    print("Dr. Vero (rekaman): ...atau kamu hanya ingin dihukum?\n")
    time.sleep(3)

    print("Lumen muncul dari bayangan...\n")
    time.sleep(1)

    print("Lumen: Kau datang sejauh ini hanya untuk kabur lagi?")
    print("Ari: Aku tak tahu apa yang harus kupercaya.\n")

    print("1. Semua ini terlalu berat untukku.")
    print("2. Aku ingin tahu kebenarannya, meski menyakitkan.")
    print("3. Kenapa kamu peduli padaku?")

    pilihan = input(">>> Pilih (1/2/3): ")

    if pilihan == "1":
        print("Ari: Semua ini terlalu berat untukku.")
        print("Lumen: Kau ingin sembuh tapi menolak berdarah. Dunia tak sesederhana itu.")
    elif pilihan == "2":
        global fragment_kaia
        fragment_kaia = True
        print("Ari: Aku ingin tahu kebenarannya, meski menyakitkan.")
        print("Lumen: Kalau begitu... lihat ke belakangmu.")
    elif pilihan == "3":
        print("Ari: Kenapa kamu peduli padaku?")
        print("Lumen: Karena aku adalah bagian dari dirimu yang masih ingin hidup.")
    else:
        print("Pilihan tidak valid.")

    time.sleep(2)
    print("\n*Sebuah pintu tua muncul di dinding kosong.*\n")
    time.sleep(1)

    print("1. Masuki pintu memori")
    print("2. Tinggalkan ruangan (menuju denial ending)")

    pilihan2 = input(">>> Pilih (1/2): ")

    if pilihan2 == "1":
        print("Ari menatap pintu, menarik napas, dan melangkah masuk...\n")
        time.sleep(2)
        input("\nTekan Enter untuk melanjutkan...")
        bab5()
    elif pilihan2 == "2":
        print("Ari menoleh dan berjalan pergi...")
        time.sleep(2)
        input("\nTekan Enter untuk melanjutkan...")
        ending_denial()
    else:
        print("Pilihan tidak valid.")
        time.sleep(1)
        input("\nTekan Enter untuk melanjutkan...")
        bab4()


def bab5():
    clear()
    print("[Ruang Putih Kosong]")
    time.sleep(2)

    print("Semuanya putih. Tidak ada suara. Hanya ketenangan.\n")
    time.sleep(2)

    print("Sosok bayangan muncul di hadapan Ari...\n")
    time.sleep(1)

    print("Bayangan: Selamat. Kau sampai di sini. Tapi sekarang... kau harus memilih.")
    print("Ari: Memilih apa?")
    print("Bayangan: Kebenaran... atau kenyamanan. Realita... atau mimpi.\n")

    print("*Dua pintu muncul. Satu bersinar terang. Satu gelap dan sunyi.*\n")
    time.sleep(1)

    print("1. Pilih pintu terang (Accept - Good Ending)")
    print("2. Pilih pintu gelap (Deny - Bad Ending)")
    print("3. Diam di tempat (Breakdown - Netral Ending)")

    pilihan = input(">>> Pilih (1/2/3): ")

    if pilihan == "1":
        if fragment_kaia:
            print("Ari melangkah ke pintu terang.")
            print("Dia siap menghadapi masa lalu dan hidup kembali.")
            time.sleep(2)
            input("\nTekan Enter untuk melanjutkan...")
            ending_good()
        else:
            print("Pintu terang menolak dibuka. Sesuatu masih tersembunyi dalam pikirannya...")
            time.sleep(2)
            input("\nTekan Enter untuk melanjutkan...")
            bab4()
    elif pilihan == "2":
        print("Ari memilih hidup dalam delusi. Dunia gelap, tapi tidak menyakitkan.")
        time.sleep(2)
        input("\nTekan Enter untuk melanjutkan...")
        ending_bad()
    elif pilihan == "3":
        print("Ari tidak bergerak. Waktu berhenti. Pikiran membeku.")
        time.sleep(2)
        input("\nTekan Enter untuk melanjutkan...")
        ending_neutral()
    else:
        print("Pilihan tidak valid.")
        time.sleep(1)
        input("\nTekan Enter untuk melanjutkan...")
        bab5()


def ending_good():
    clear()
    print("[Pagi di Rumah Sakit]")
    time.sleep(2)

    print("Ari membuka matanya. Udara segar pagi menyambut.")
    print("Dia tidak sepenuhnya utuh, tapi dia hidup.")
    print("\nGOOD ENDING - Penerimaan")
    input("\nCerita telah selesai...")
    exit()

def ending_bad():
    clear()
    print("[Ruang Kosong Merah]")
    time.sleep(2)

    print("Ari tersenyum... tapi senyum kosong.")
    print("Dalam pikirannya, Kaia masih hidup. Tapi itu hanya ilusi.")
    print("\nBAD ENDING - Penyangkalan")
    input("\nCerita telah selesai...")
    exit()

def ending_neutral():
    clear()
    print("[Kekosongan Statis]")
    time.sleep(2)

    print("Putih. Kosong. Hening.")
    print("Ari tidak pernah memilih.")
    print("\nNEUTRAL ENDING - Macet di Ketakutan")
    input("\nCerita telah selesai...")
    exit()

def ending_denial():
    clear()
    print("[Lorong Tanpa Akhir]")
    time.sleep(2)

    print("Ari berjalan di lorong yang tak pernah berakhir...")
    print("Pikirannya memilih untuk tetap kabur.")
    print("\nDENIAL ENDING - Siklus Tak Pernah Usai")
    input("\nCerita telah selesai...")
    exit()


# START GAME
if __name__ == "__main__":
    intro()
