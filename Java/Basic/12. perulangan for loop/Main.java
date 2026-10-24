/* rekap dasar java */
/* 12. perulangan for loop */

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## PERULANGAN FOR LOOP
        // ==========================================

        /*
        For loop digunakan saat kita sudah tahu berapa kali perulangan akan dilakukan.
        Format dasar:
        for (nilai_awal; kondisi_berjalan; perubahan_step) {
            aksi yang diulang;
        }

        Alur kerjanya:
        1. nilai_awal dijalankan 1 kali di paling awal (misal int i = 0).
        2. kondisi dicek. Jika true, aksi di dalam kurung kurawal dijalankan.
        3. perubahan_step dijalankan (misal i++).
        4. Ulangi langkah 2 sampai kondisi bernilai false.
        */


        // ==========================================
        // ## 1. FOR LOOP STANDAR (DARI 0 SAMPAI 4)
        // ==========================================
        System.out.println("--- 1. FOR LOOP BIASA ---");

        for (int i = 0; i < 5; i++) {
            System.out.println("i sekarang -> " + i);
        }
        System.out.println("Akhir dari program 1\n");


        // ==========================================
        // ## 2. FOR LOOP DENGAN RENTANG TERTENTU
        // ==========================================
        // misal dimulai dari 2 sampai 6
        System.out.println("--- 2. FOR LOOP RENTANG 2 SAMPAI 6 ---");

        for (int i = 2; i <= 6; i++) {
            System.out.println("i sekarang -> " + i);
        }
        System.out.println("Akhir dari program 2\n");


        // ==========================================
        // ## 3. FOR LOOP DENGAN STEP (LONCAT ANGKA)
        // ==========================================
        // misal menampilkan angka genap dari 0 sampai 10 (loncat 2)
        System.out.println("--- 3. FOR LOOP LONCAT 2 ---");

        for (int i = 0; i <= 10; i += 2) {
            System.out.println("Genap -> " + i);
        }
        System.out.println("Akhir dari program 3\n");


        // ==========================================
        // ## 4. FOR LOOP MUNDUR (COUNTDOWN)
        // ==========================================
        // dimulai dari angka besar ke kecil menggunakan decrement (i--)
        System.out.println("--- 4. FOR LOOP MUNDUR ---");

        for (int i = 5; i >= 1; i--) {
            System.out.println("Hitung mundur: " + i);
        }
        System.out.println("Roket Meluncur! 🚀\n");


        // ==========================================
        // ## 5. FOR LOOP UNTUK MEMBACA STRING
        // ==========================================
        // membaca karakter string huruf per huruf menggunakan .charAt(i)
        System.out.println("--- 5. LOOPING ISI STRING ---");
        String teks = "Furina";

        for (int i = 0; i < teks.length(); i++) {
            System.out.println("Huruf index ke-" + i + " : " + teks.charAt(i));
        }
        System.out.println("Akhir dari program 5\n");


        // ==========================================
        // ## 6. NESTED FOR LOOP (LOOP DI DALAM LOOP)
        // ==========================================
        // contoh membuat pola kotak bintang 3 baris x 3 kolom
        System.out.println("--- 6. NESTED FOR LOOP (KOTAK 3x3) ---");

        for (int baris = 1; baris <= 3; baris++) {
            for (int kolom = 1; kolom <= 3; kolom++) {
                System.out.print("* ");
            }
            System.out.println(); // ganti baris setelah 1 baris kolom selesai
        }
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
--- 1. FOR LOOP BIASA ---
i sekarang -> 0
i sekarang -> 1
i sekarang -> 2
i sekarang -> 3
i sekarang -> 4
Akhir dari program 1

--- 2. FOR LOOP RENTANG 2 SAMPAI 6 ---
i sekarang -> 2
i sekarang -> 3
i sekarang -> 4
i sekarang -> 5
i sekarang -> 6
Akhir dari program 2

--- 3. FOR LOOP LONCAT 2 ---
Genap -> 0
Genap -> 2
Genap -> 4
Genap -> 6
Genap -> 8
Genap -> 10
Akhir dari program 3

--- 4. FOR LOOP MUNDUR ---
Hitung mundur: 5
Hitung mundur: 4
Hitung mundur: 3
Hitung mundur: 2
Hitung mundur: 1
Roket Meluncur! 🚀

--- 5. LOOPING ISI STRING ---
Huruf index ke-0 : F
Huruf index ke-1 : u
Huruf index ke-2 : r
Huruf index ke-3 : i
Huruf index ke-4 : n
Huruf index ke-5 : a
Akhir dari program 5

--- 6. NESTED FOR LOOP (KOTAK 3x3) ---
* * * 
* * * 
* * * 
==================================================
*/
