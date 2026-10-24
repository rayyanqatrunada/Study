/* rekap dasar java */
/* 4. konversi tipe data (type casting) */

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## KONVERSI TIPE DATA (TYPE CASTING)
        // ==========================================


        // ## 1. Widening Casting (Konversi Otomatis)
        // mengubah dari tipe data berukuran kecil ke tipe data lebih besar
        // urutannya: byte -> short -> char -> int -> long -> float -> double
        // karena wadahnya lebih besar, Java otomatis mengonversi tanpa kehilangan data
        System.out.println("--- 1. WIDENING CASTING (OTOMATIS) ---");

        int angkaInt = 15;
        double hasilDouble = angkaInt; // otomatis berubah dari 15 jadi 15.0

        System.out.println("int awal     : " + angkaInt);
        System.out.println("ke double    : " + hasilDouble);


        // ## 2. Narrowing Casting (Konversi Manual / Paksa)
        // mengubah dari tipe data berukuran besar ke lebih kecil
        // urutannya: double -> float -> long -> int -> char -> short -> byte
        // CATATAN: harus ditulis tipe tujuannya di dalam kurung: (tipe_data) nilai
        // PERHATIAN: angka di belakang koma akan dibuang (dibulatkan ke bawah)
        System.out.println("\n--- 2. NARROWING CASTING (MANUAL) ---");

        double nilaiDesimal = 9.87;
        int hasilInt = (int) nilaiDesimal; // (int) memaksa nilai jadi integer

        System.out.println("double awal  : " + nilaiDesimal);
        System.out.println("ke int paksa : " + hasilInt); // hasilnya 9 (koma 87 dibuang)


        // ## 3. Konversi String ke Number (Parsing)
        // jika data berupa teks angka (misal hasil input dari user)
        // kita ubah agar bisa digunakan untuk perhitungan matematika
        System.out.println("\n--- 3. STRING KE NUMBER (PARSE) ---");

        String strAngka = "250";
        String strDesimal = "17.5";

        // Integer.parseInt() -> mengubah String menjadi int
        int intDariStr = Integer.parseInt(strAngka);
        System.out.println("String ke int    : " + (intDariStr + 50)); // hasilnya 300 (bisa dihitung)

        // Double.parseDouble() -> mengubah String menjadi double
        double doubleDariStr = Double.parseDouble(strDesimal);
        System.out.println("String ke double : " + (doubleDariStr + 2.5)); // hasilnya 20.0

        // CATATAN EROR:
        // kalau String isinya huruf (misal "Furina"), Integer.parseInt("Furina")
        // akan menghasilkan error: NumberFormatException!


        // ## 4. Konversi Number ke String
        // mengubah angka menjadi teks biasa
        System.out.println("\n--- 4. NUMBER KE STRING ---");

        int angka = 100;

        // cara 1: menggunakan String.valueOf() (paling direkomendasikan)
        String teks1 = String.valueOf(angka);

        // cara 2: menggunakan Integer.toString()
        String teks2 = Integer.toString(angka);

        // cara 3: trik ditambah petik kosong ""
        String teks3 = "" + angka;

        System.out.println("cara 1 (String.valueOf) : " + teks1);
        System.out.println("cara 2 (Integer.toString): " + teks2);
        System.out.println("cara 3 (trik kutip)     : " + teks3);

        // teks ini tidak bisa dipakai operasi matematika lagi
        System.out.println("teks1 + 50 (menyambung) : " + (teks1 + 50)); // hasilnya "10050" bukan 150
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
--- 1. WIDENING CASTING (OTOMATIS) ---
int awal     : 15
ke double    : 15.0

--- 2. NARROWING CASTING (MANUAL) ---
double awal  : 9.87
ke int paksa : 9

--- 3. STRING KE NUMBER (PARSE) ---
String ke int    : 300
String ke double : 20.0

--- 4. NUMBER KE STRING ---
cara 1 (String.valueOf) : 100
cara 2 (Integer.toString): 100
cara 3 (trik kutip)     : 100
teks1 + 50 (menyambung) : 10050
==================================================
*/
