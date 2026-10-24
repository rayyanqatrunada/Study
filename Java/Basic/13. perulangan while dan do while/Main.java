/* rekap dasar java */
/* 13. perulangan while dan do while */

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## 1. WHILE LOOP
        // ==========================================

        /*
        While loop digunakan saat kita TIDAK TAHU PASTI berapa kali loop akan berjalan,
        tetapi kita tahu KONDISI KAPAN loop tersebut harus berhenti.

        Format dasar:
        while (kondisi_true) {
            aksi;
            perubahan_variabel; // WAJIB ada agar tidak terjadi infinite loop!
        }

        Alur kerja while:
        CEK KONDISI DULU -> jika true baru jalankan aksi.
        Jika dari awal kondisinya sudah false, aksinya TIDAK AKAN PERNAH dijalankan sama sekali.
        */

        System.out.println("--- 1. WHILE LOOP ---");
        int counter = 1;

        while (counter <= 3) { // data akan terus di-loop selama counter <= 3
            System.out.println("Furina cantik ke-" + counter);
            counter++; // counter ditambah 1 di setiap putaran
        }
        System.out.println("Furina : udah woi!\n");


        // PERINGATAN INFINITE LOOP:
        // Jangan sampai lupa menulis 'counter++'!
        // Kalau lupa, nilai counter akan selamanya bernilai 1 (selalu <= 3),
        // sehingga program akan mengulang terus tanpa henti sampai memori habis!


        // ==========================================
        // ## 2. DO - WHILE LOOP
        // ==========================================

        /*
        Format dasar:
        do {
            aksi;
            perubahan_variabel;
        } while (kondisi);

        Alur kerja do-while:
        JALANKAN AKSI DULU MINIMAL 1 KALI -> baru di akhir cek kondisi!
        */

        System.out.println("--- 2. DO-WHILE LOOP (NORMAL) ---");
        int angkaDo = 1;

        do {
            System.out.println("Nilai do-while sekarang: " + angkaDo);
            angkaDo++;
        } while (angkaDo <= 3);
        System.out.println("Akhir do-while normal\n");


        // ==========================================
        // ## 3. PERBEDAAN JELAS: WHILE VS DO-WHILE
        // ==========================================
        // Kasus: bagaimana jika kondisi bernilai FALSE SEJAK AWAL?

        System.out.println("--- 3. PERBANDINGAN SAAT KONDISI FALSE DARI AWAL ---");

        int nilaiUji = 100;

        // Pada WHILE loop:
        System.out.println("Mencoba While loop dengan kondisi (nilaiUji < 10):");
        while (nilaiUji < 10) {
            System.out.println("Ini tidak akan pernah muncul sama sekali!");
            nilaiUji++;
        }
        System.out.println("-> While langsung selesai tanpa menjalankan apapun di dalamnya.");

        // Pada DO-WHILE loop:
        System.out.println("\nMencoba Do-While loop dengan kondisi (nilaiUji < 10):");
        do {
            System.out.println("-> Ini TETAP DIJALANKAN DULU 1 KALI walau kondisi salah! (nilai = " + nilaiUji + ")");
            nilaiUji++;
        } while (nilaiUji < 10); // di sini baru ketahuan 101 < 10 adalah false, jadi berhenti
        System.out.println("-> Do-while berhenti setelah berjalan 1 kali.");
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
--- 1. WHILE LOOP ---
Furina cantik ke-1
Furina cantik ke-2
Furina cantik ke-3
Furina : udah woi!

--- 2. DO-WHILE LOOP (NORMAL) ---
Nilai do-while sekarang: 1
Nilai do-while sekarang: 2
Nilai do-while sekarang: 3
Akhir do-while normal

--- 3. PERBANDINGAN SAAT KONDISI FALSE DARI AWAL ---
Mencoba While loop dengan kondisi (nilaiUji < 10):
-> While langsung selesai tanpa menjalankan apapun di dalamnya.

Mencoba Do-While loop dengan kondisi (nilaiUji < 10):
-> Ini TETAP DIJALANKAN DULU 1 KALI walau kondisi salah! (nilai = 100)
-> Do-while berhenti setelah berjalan 1 kali.
==================================================
*/
