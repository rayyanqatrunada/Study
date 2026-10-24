/* rekap dasar java */
/* 10. percabangan if else */

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## PERCABANGAN IF, ELSE IF, ELSE
        // ==========================================

        /*
        Struktur percabangan di Java:
        if (kondisi) {
            aksi jika kondisi true;
        } else if (kondisi lain) {
            aksi jika kondisi lain true;
        } else {
            aksi jika semua kondisi di atas false;
        }
        */

        String nama = "Furina";


        // ==========================================
        // ## 1. IF STATEMENT BIASA
        // ==========================================
        // aksi di dalam kurung kurawal {} hanya jalan jika kondisi bernilai true

        if (nama.equals("Furina")) {
            System.out.println("Hai maniss");
            System.out.println("hari ini kamu cantik banget");
        }
        System.out.println("Terima kasih " + nama);


        // ==========================================
        // ## 2. IF - ELSE STATEMENT
        // ==========================================
        // jika kondisi false, blok 'else' yang akan dieksekusi

        System.out.println("\n--- IF ELSE ---");
        if (nama.equals("Clara")) {
            System.out.println("Hai Clara!");
        } else {
            System.out.println("ah, kamu bukan Clara melainkan " + nama);
        }
        System.out.println("akhir dari blok if else");


        // ==========================================
        // ## 3. IF - ELSE IF - ELSE STATEMENT
        // ==========================================
        // untuk memilih dari banyak kemungkinan kondisi secara berurutan

        System.out.println("\n--- IF - ELSE IF - ELSE ---");
        String karakter = "Charlotta";

        if (karakter.equals("Furina")) {          // kondisi 1
            System.out.println("Hai cantikk");    // aksi true 1
        } else if (karakter.equals("Yui")) {       // kondisi 2
            System.out.println("Hai maniss");     // aksi true 2
        } else if (karakter.equals("Charlotta")) { // kondisi 3
            System.out.println("Hai imutt");      // aksi true 3
        } else {
            System.out.println("Oh, namamu " + karakter); // aksi jika semuanya false
        }
        System.out.println("akhir dari pemilihan karakter");


        // ==========================================
        // ## 4. CONTOH DENGAN NILAI ANGKA
        // ==========================================

        System.out.println("\n--- CONTOH GRADING NILAI ---");
        int nilaiUjian = 82;

        if (nilaiUjian >= 90) {
            System.out.println("Grade: A (Luar biasa sempurna!)");
        } else if (nilaiUjian >= 80) {
            System.out.println("Grade: B (Bagus banget!)");
        } else if (nilaiUjian >= 70) {
            System.out.println("Grade: C (Cukup)");
        } else if (nilaiUjian >= 60) {
            System.out.println("Grade: D (Kurang)");
        } else {
            System.out.println("Grade: E (Harus remidi ya)");
        }


        // ==========================================
        // ## 5. TERNARY OPERATOR (SHORTCUT IF ELSE)
        // ==========================================
        // cara singkat menulis if-else sederhana dalam 1 baris
        // format: (kondisi) ? nilai_jika_true : nilai_jika_false;

        System.out.println("\n--- TERNARY OPERATOR ---");
        int umur = 19;

        String status = (umur >= 18) ? "Sudah Dewasa" : "Masih di bawah umur";
        System.out.println("Umur: " + umur + " -> Status: " + status);
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
Hai maniss
hari ini kamu cantik banget
Terima kasih Furina

--- IF ELSE ---
ah, kamu bukan Clara melainkan Furina
akhir dari blok if else

--- IF - ELSE IF - ELSE ---
Hai imutt
akhir dari pemilihan karakter

--- CONTOH GRADING NILAI ---
Grade: B (Bagus banget!)

--- TERNARY OPERATOR ---
Umur: 19 -> Status: Sudah Dewasa
==================================================
*/
