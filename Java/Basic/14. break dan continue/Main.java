/* rekap dasar java */
/* 14. break dan continue */

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## BREAK DAN CONTINUE PADA PERULANGAN
        // ==========================================

        /*
        Keyword kontrol untuk mengubah alur normal perulangan:
        1. continue -> SKIP (lewati) putaran saat ini, langsung lompat ke putaran berikutnya.
        2. break    -> STOP TOTAL, langsung berhenti dan keluar seketika dari blok perulangan.
        */


        // ==========================================
        // ## 1. CONTOH CONTINUE
        // ==========================================
        // Misal kita looping angka 1 sampai 5, tapi angka 3 mau kita skip (tidak diprint)

        System.out.println("--- 1. CONTOH CONTINUE (SKIP ANGKA 3) ---");

        for (int i = 1; i <= 5; i++) {
            if (i == 3) {
                System.out.println("-> Angka 3 dilewati (continue)!");
                continue; // baris print di bawah ini di-skip, langsung lanjut ke i = 4
            }
            System.out.println("Angka: " + i);
        }
        System.out.println("Akhir dari for continue\n");


        // ==========================================
        // ## 2. CONTOH BREAK
        // ==========================================
        // Misal kita looping 1 sampai 10, tapi begitu ketemu angka 4, kita mau berhenti total

        System.out.println("--- 2. CONTOH BREAK (BERHENTI DI ANGKA 4) ---");

        for (int i = 1; i <= 10; i++) {
            if (i == 4) {
                System.out.println("-> Ketemu angka 4, program berhenti paksa (break)!");
                break; // loop langsung berhenti total, angka 4, 5, dst tidak akan diproses lagi
            }
            System.out.println("Angka: " + i);
        }
        System.out.println("Akhir dari for break\n");


        // ==========================================
        // ## 3. CONTOH IMPLEMENTASI PRAKTIS: FILTER ANGKA GENAP
        // ==========================================
        // mencetak hanya angka genap dengan men-skip angka ganjil pakai continue

        System.out.println("--- 3. HANYA CETAK ANGKA GENAP (SKIP GANJIL) ---");

        for (int i = 1; i <= 10; i++) {
            if (i % 2 != 0) { // jika angka ganjil
                continue;    // lewati
            }
            System.out.println("Angka Genap: " + i);
        }


        // ==========================================
        // ## 4. BREAK PADA WHILE LOOP (MENCARI DATA)
        // ==========================================

        System.out.println("\n--- 4. BREAK PADA WHILE (PENCARIAN DATA) ---");

        int angkaTarget = 7;
        int tebakan = 1;

        while (true) { // while true = loop tanpa batas
            if (tebakan == angkaTarget) {
                System.out.println("Target angka " + angkaTarget + " berhasil ditemukan di tebakan ke-" + tebakan + "!");
                break; // keluar dari while true
            }
            tebakan++;
        }
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
--- 1. CONTOH CONTINUE (SKIP ANGKA 3) ---
Angka: 1
Angka: 2
-> Angka 3 dilewati (continue)!
Angka: 4
Angka: 5
Akhir dari for continue

--- 2. CONTOH BREAK (BERHENTI DI ANGKA 4) ---
Angka: 1
Angka: 2
Angka: 3
-> Ketemu angka 4, program berhenti paksa (break)!
Akhir dari for break

--- 3. HANYA CETAK ANGKA GENAP (SKIP GANJIL) ---
Angka Genap: 2
Angka Genap: 4
Angka Genap: 6
Angka Genap: 8
Angka Genap: 10

--- 4. BREAK PADA WHILE (PENCARIAN DATA) ---
Target angka 7 berhasil ditemukan di tebakan ke-7!
==================================================
*/
