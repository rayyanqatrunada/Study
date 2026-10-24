/* rekap dasar java */
/* 16. method dan fungsi */

public class Main {

    // ==========================================
    // ## METHOD MAIN (TITIK AWAL EKSEKUSI PROGRAM)
    // ==========================================
    public static void main(String[] args) {

        /*
        Method di Java adalah kumpulan perintah yang dibungkus jadi satu
        agar bisa dipanggil berkali-kali (seperti 'def' di Python).
        Di Java, method dibuat di DALAM class, tapi di LUAR method main().
        */

        System.out.println("--- 1. METHOD VOID TANPA PARAMETER ---");
        // memanggil method void biasa
        sapa();


        System.out.println("\n--- 2. METHOD DENGAN PARAMETER ---");
        // mengirimkan data (argument) ke dalam method
        sapaNama("Furina");
        sapaNama("Clara");


        System.out.println("\n--- 3. METHOD DENGAN RETURN VALUE ---");
        // method yang menghasilkan / mengembalikan suatu nilai
        int hasil1 = hitungTambah(15, 25);
        int hasil2 = hitungTambah(100, 250);

        System.out.println("Hasil 15 + 25   = " + hasil1);
        System.out.println("Hasil 100 + 250 = " + hasil2);

        // bisa juga langsung dimasukkan ke dalam kondisi if
        if (apakahGenap(hasil1)) {
            System.out.println(hasil1 + " adalah angka GENAP");
        } else {
            System.out.println(hasil1 + " adalah angka GANJIL");
        }


        System.out.println("\n--- 4. METHOD OVERLOADING ---");
        /*
        Method Overloading: membuat beberapa method dengan NAMA YANG SAMA PERSIS,
        tetapi jumlah atau tipe datanya berbeda!
        Java akan otomatis memilih method yang cocok sesuai tipe parameter yang dikirim.
        */

        int kaliInt = kali(4, 5);             // memanggil versi int
        double kaliDouble = kali(2.5, 4.0);   // memanggil versi double
        int kaliTiga = kali(2, 3, 4);         // memanggil versi 3 parameter

        System.out.println("kali(4, 5)       [int]    = " + kaliInt);
        System.out.println("kali(2.5, 4.0)   [double] = " + kaliDouble);
        System.out.println("kali(2, 3, 4)    [3 arg]  = " + kaliTiga);


        System.out.println("\n--- 5. METHOD REKURSIF (FAKTORIAL) ---");
        // method yang memanggil dirinya sendiri sampai base case tercapai
        int angkaFaktorial = 5;
        System.out.println("Faktorial dari 5 (5 * 4 * 3 * 2 * 1) = " + faktorial(angkaFaktorial));
    }


    // ==========================================
    // ## DEFINISI METHOD-METHOD STATIC
    // ==========================================

    // 1. Method void: tidak mengembalikan nilai apapun (cuma menjalankan aksi)
    public static void sapa() {
        System.out.println("Halo! Ini dijalankan dari dalam method sapa()");
    }

    // 2. Method dengan parameter
    public static void sapaNama(String nama) {
        System.out.println("Hai " + nama + ", hari ini kamu cantik banget!");
    }

    // 3. Method dengan return value integer
    public static int hitungTambah(int a, int b) {
        return a + b; // mengembalikan hasil penjumlahan
    }

    // Method dengan return value boolean
    public static boolean apakahGenap(int angka) {
        return (angka % 2 == 0);
    }

    // 4. Method Overloading:
    // Versi 1: mengalikan dua integer
    public static int kali(int a, int b) {
        return a * b;
    }

    // Versi 2: mengalikan dua double
    public static double kali(double a, double b) {
        return a * b;
    }

    // Versi 3: mengalikan tiga integer
    public static int kali(int a, int b, int c) {
        return a * b * c;
    }

    // 5. Method Rekursif
    public static int faktorial(int n) {
        if (n <= 1) {
            return 1; // base case (kondisi berhenti)
        }
        return n * faktorial(n - 1); // memanggil dirinya sendiri
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
--- 1. METHOD VOID TANPA PARAMETER ---
Halo! Ini dijalankan dari dalam method sapa()

--- 2. METHOD DENGAN PARAMETER ---
Hai Furina, hari ini kamu cantik banget!
Hai Clara, hari ini kamu cantik banget!

--- 3. METHOD DENGAN RETURN VALUE ---
Hasil 15 + 25   = 40
Hasil 100 + 250 = 350
40 adalah angka GENAP

--- 4. METHOD OVERLOADING ---
kali(4, 5)       [int]    = 20
kali(2.5, 4.0)   [double] = 10.0
kali(2, 3, 4)    [3 arg]  = 24

--- 5. METHOD REKURSIF (FAKTORIAL) ---
Faktorial dari 5 (5 * 4 * 3 * 2 * 1) = 120
==================================================
*/
