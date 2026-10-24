/* rekap dasar java */
/* 1. output dan print */

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## MEMUNCULKAN PROGRAM (OUTPUT)
        // ==========================================

        // 1. menggunakan System.out.println()
        // println otomatis membuat baris baru (enter) di akhir kalimat
        System.out.println("Hello World!");
        System.out.println("Nama saya Rayyan, lagi belajar Java");


        // 2. menggunakan System.out.print()
        // print BIASA tidak membuat baris baru, jadi kalimat berikutnya bakal nempel
        System.out.print("Hai ");
        System.out.print("Furina");
        System.out.print(", kamu cantik banget!\n"); // \n dipakai manual untuk enter


        // 3. print kosong
        // ini trik simpel untuk bikin spasi atau jarak 1 baris kosong
        System.out.println();


        // 4. escape character (karakter khusus)
        // \n -> membuat baris baru (enter)
        // \t -> membuat tab (spasi agak lebar)
        // \" -> memunculkan tanda kutip dua di dalam teks
        System.out.println("Baris satu\nBaris dua");
        System.out.println("Nama:\tFurina");
        System.out.println("Dia berkata: \"Aku adalah Hydro Archon!\"");


        // 5. menggunakan System.out.printf() (print format)
        // mirip format string di bahasa lain, menggunakan penanda:
        // %s -> untuk String (teks)
        // %d -> untuk integer (angka bulat)
        // %f -> untuk float/double (angka desimal)
        // %.2f -> membatasi desimal hanya 2 angka di belakang koma
        String nama = "Furina";
        int umur = 500;
        double tinggi = 160.5;

        System.out.printf("Nama   : %s\n", nama);
        System.out.printf("Umur   : %d tahun\n", umur);
        System.out.printf("Tinggi : %.1f cm\n", tinggi);
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
Hello World!
Nama saya Rayyan, lagi belajar Java
Hai Furina, kamu cantik banget!

Baris satu
Baris dua
Nama:	Furina
Dia berkata: "Aku adalah Hydro Archon!"
Nama   : Furina
Umur   : 500 tahun
Tinggi : 160.5 cm
==================================================
*/
