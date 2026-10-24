/* rekap dasar java */
/* 15. array */

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## ARRAY (KUMPULAN DATA)
        // ==========================================

        /*
        Di Python kita punya 'list' yang ukurannya bisa melar dan bisa campur tipe data.
        Di Java, 'Array' memiliki aturan penting:
        1. Tipe datanya HARUS SERAGAM (semua String, atau semua int, dll).
        2. Ukurannya TETAP (fixed-size) setelah pertama kali dibuat.
        */


        // ==========================================
        // ## 1. MEMBUAT ARRAY
        // ==========================================

        // CARA 1: Langsung diisi datanya
        String[] daftarWaifu = {"Furina", "Clara", "Yui", "Charlotta"};
        int[] daftarAngka = {10, 20, 30, 40, 50};

        // CARA 2: Tentukan kapasitasnya dulu (isinya dimasukkan belakangan)
        // new int[3] artinya array ini bisa menampung maksimal 3 data integer
        int[] nilaiTampung = new int[3];
        nilaiTampung[0] = 85; // index ke-0
        nilaiTampung[1] = 90; // index ke-1
        nilaiTampung[2] = 95; // index ke-2


        // ==========================================
        // ## 2. MENGAKSES DAN MENGUBAH DATA ARRAY
        // ==========================================
        // Index selalu dimulai dari 0!

        System.out.println("--- AKSES DATA ARRAY ---");
        System.out.println("Waifu index ke-0 : " + daftarWaifu[0]); // Furina
        System.out.println("Waifu index ke-1 : " + daftarWaifu[1]); // Clara
        System.out.println("Waifu index ke-3 : " + daftarWaifu[3]); // Charlotta

        // Mengubah nilai data di index tertentu
        daftarWaifu[1] = "Qiqi";
        System.out.println("\nSetelah diubah, index ke-1 jadi : " + daftarWaifu[1]); // Qiqi


        // ==========================================
        // ## 3. MENGETAHUI JUMLAH DATA ARRAY (.length)
        // ==========================================
        // CATATAN: pada Array, 'length' TIDAK memakai kurung () beda dengan String.length()!

        int jumlahData = daftarWaifu.length;
        System.out.println("\nPanjang / kapasitas array daftarWaifu : " + jumlahData); // 4


        // ==========================================
        // ## 4. LOOPING ARRAY DENGAN FOR BIASA
        // ==========================================
        // kita gunakan index dari 0 sampai kurang dari .length

        System.out.println("\n--- LOOP ARRAY DENGAN FOR BIASA ---");
        for (int i = 0; i < daftarWaifu.length; i++) {
            System.out.println("Index [" + i + "] = " + daftarWaifu[i]);
        }


        // ==========================================
        // ## 5. LOOPING ARRAY DENGAN FOR-EACH (ENHANCED FOR)
        // ==========================================
        // Format: for (TipeData namaVariabelSatuan : namaArray)
        // Ini cara paling simpel, bersih, dan modern di Java!

        System.out.println("\n--- LOOP ARRAY DENGAN FOR-EACH ---");
        for (String waifu : daftarWaifu) {
            System.out.println("Nama karakter: " + waifu);
        }


        // ==========================================
        // ## 6. ARRAY DUA DIMENSI (MATRIKS BARIS & KOLOM)
        // ==========================================
        // format: tipeData[][] namaArray = { {baris1}, {baris2} };

        System.out.println("\n--- ARRAY 2 DIMENSI (2x3) ---");
        int[][] matriks = {
            {1, 2, 3},  // baris ke-0
            {4, 5, 6}   // baris ke-1
        };

        // Mengakses baris ke-1, kolom ke-2 (angka 6)
        System.out.println("Data baris 1, kolom 2 : " + matriks[1][2]); // 6

        // Loop array 2 dimensi dengan nested for-each
        System.out.println("Isi seluruh matriks:");
        for (int[] baris : matriks) {
            for (int nilai : baris) {
                System.out.print(nilai + " ");
            }
            System.out.println();
        }

        // PERINGATAN ArrayIndexOutOfBoundsException:
        // Jika kamu memanggil daftarWaifu[10] padahal panjang array cuma 4,
        // Java akan melempar error: ArrayIndexOutOfBoundsException!
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
--- AKSES DATA ARRAY ---
Waifu index ke-0 : Furina
Waifu index ke-1 : Clara
Waifu index ke-3 : Charlotta

Setelah diubah, index ke-1 jadi : Qiqi

Panjang / kapasitas array daftarWaifu : 4

--- LOOP ARRAY DENGAN FOR BIASA ---
Index [0] = Furina
Index [1] = Qiqi
Index [2] = Yui
Index [3] = Charlotta

--- LOOP ARRAY DENGAN FOR-EACH ---
Nama karakter: Furina
Nama karakter: Qiqi
Nama karakter: Yui
Nama karakter: Charlotta

--- ARRAY 2 DIMENSI (2x3) ---
Data baris 1, kolom 2 : 6
Isi seluruh matriks:
1 2 3 
4 5 6 
==================================================
*/
