/* rekap dasar java */
/* 3. tipe data string */

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## TIPE DATA STRING & MANIPULASINYA
        // ==========================================

        // String adalah tipe data non-primitive (objek) untuk menyimpan kumpulan teks
        // CATATAN: wajib menggunakan tanda petik DUA ("") bukan petik satu


        // ## 1. Penggabungan String (Concatenation)
        String namaDepan = "Furina";
        String namaTengah = "De";
        String namaBelakang = "Fontaine";

        // gabung pakai tanda '+'
        String namaLengkap = namaDepan + " " + namaTengah + " " + namaBelakang;
        System.out.println("Nama lengkap: " + namaLengkap);
        System.out.println("Namaku adalah " + namaDepan);


        // ## 2. Menghitung Panjang String (.length())
        // CATATAN: spasi juga ikut dihitung sebagai karakter!
        int panjangKarakter = namaLengkap.length();
        System.out.println("\nPanjang dari '" + namaLengkap + "' adalah: " + panjangKarakter);


        // ## 3. Merubah Huruf Besar / Kecil (Case)
        System.out.println("\nUpper case : " + namaLengkap.toUpperCase()); // jadi huruf kapital semua
        System.out.println("Lower case : " + namaLengkap.toLowerCase()); // jadi huruf kecil semua


        // ## 4. Mengecek Isi String
        // hasilnya berupa boolean: true atau false
        String kalimat = "Furina is mine";

        // contains(): apakah mengandung kata tertentu
        System.out.println("\nApakah ada kata 'mine'?  : " + kalimat.contains("mine")); // true
        System.out.println("Apakah ada kata 'Clara'? : " + kalimat.contains("Clara")); // false

        // startsWith(): apakah diawali kata tertentu
        System.out.println("Diawali 'Fur'?           : " + kalimat.startsWith("Fur")); // true

        // endsWith(): apakah diakhiri kata tertentu
        System.out.println("Diakhiri 'mine'?         : " + kalimat.endsWith("mine")); // true


        // ## 5. Indexing Karakter (.charAt(index))
        // index karakter selalu dimulai dari 0
        System.out.println("\nKarakter index ke-0 : " + namaLengkap.charAt(0)); // F
        System.out.println("Karakter index ke-7 : " + namaLengkap.charAt(7)); // D


        // ## 6. Memotong String (.substring(start, end))
        // start = index awal (inklusif / ikut diambil)
        // end   = index akhir (eksklusif / batas saja, tidak ikut diambil)
        String potong1 = namaLengkap.substring(0, 6); // dari index 0 sampai sebelum 6
        System.out.println("\nSubstring (0, 6)   : " + potong1); // "Furina"

        // kalau cuma kasih 1 angka, akan diambil dari index tersebut sampai akhir kalimat
        String potong2 = namaLengkap.substring(10);
        System.out.println("Substring index 10 : " + potong2); // "Fontaine"


        // ## 7. Mengganti Kata (.replace(kataLama, kataBaru))
        String gantiTeks = kalimat.replace("mine", "the best");
        System.out.println("\nHasil replace: " + gantiTeks);


        // ## 8. Membandingkan String (.equals() vs '==')
        // PERINGATAN PENTING DI JAVA:
        // JANGAN membandingkan kesamaan teks String menggunakan operator '=='!
        // Operator '==' di Java mengecek alamat memori, bukan isi teksnya.
        // Untuk membandingkan isi teks, SELALU gunakan .equals() atau .equalsIgnoreCase()
        String str1 = "Furina";
        String str2 = new String("Furina");
        String str3 = "furina";

        System.out.println("\n--- PERBANDINGAN STRING ---");
        System.out.println("str1 == str2 (salah kaprah)        : " + (str1 == str2)); // false! Walau isinya sama, memorinya beda
        System.out.println("str1.equals(str2) (benar)          : " + str1.equals(str2)); // true! Isinya sama persis
        System.out.println("str1.equals(str3)                  : " + str1.equals(str3)); // false (karena beda huruf besar/kecil)
        System.out.println("str1.equalsIgnoreCase(str3)        : " + str1.equalsIgnoreCase(str3)); // true (tidak peduli huruf besar/kecil)
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
Nama lengkap: Furina De Fontaine
Namaku adalah Furina

Panjang dari 'Furina De Fontaine' adalah: 18

Upper case : FURINA DE FONTAINE
Lower case : furina de fontaine

Apakah ada kata 'mine'?  : true
Apakah ada kata 'Clara'? : false
Diawali 'Fur'?           : true
Diakhiri 'mine'?         : true

Karakter index ke-0 : F
Karakter index ke-7 : D

Substring (0, 6)   : Furina
Substring index 10 : Fontaine

Hasil replace: Furina is the best

--- PERBANDINGAN STRING ---
str1 == str2 (salah kaprah)        : false
str1.equals(str2) (benar)          : true
str1.equals(str3)                  : false
str1.equalsIgnoreCase(str3)        : true
==================================================
*/
