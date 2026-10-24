/* rekap dasar java */
/* 5. operasi aritmatika */

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## OPERASI ARITMATIKA DASAR
        // ==========================================

        int a = 20;
        int b = 6;

        System.out.println("Nilai a = " + a);
        System.out.println("Nilai b = " + b);
        System.out.println("-------------------------");


        // 1. Penjumlahan (+)
        int hasilTambah = a + b;
        System.out.println("a + b = " + hasilTambah); // 26


        // 2. Pengurangan (-)
        int hasilKurang = a - b;
        System.out.println("a - b = " + hasilKurang); // 14


        // 3. Perkalian (*)
        int hasilKali = a * b;
        System.out.println("a * b = " + hasilKali); // 120


        // 4. Pembagian (/)
        // PERHATIAN BESAR DI JAVA:
        // Jika int dibagi dengan int, hasilnya AKAN DIBULATKAN KE BAWAH menjadi int juga!
        // 20 / 6 hasilnya 3 (bukan 3.333) karena bagian koma desimal dibuang!
        int hasilBagiBulat = a / b;
        System.out.println("a / b (pembagian integer) = " + hasilBagiBulat); // 3

        // TIPS PEMBAGIAN DESIMAL:
        // kalau mau hasilnya desimal (ada koma), minimal salah satu angkanya
        // harus diubah ke tipe double atau float!
        double hasilBagiDesimal1 = (double) a / b; // a diubah ke double dulu
        double hasilBagiDesimal2 = 20.0 / 6;       // pakai 20.0 (angka desimal)
        System.out.println("a / b (hasil desimal)    = " + hasilBagiDesimal1); // 3.3333333333333335
        System.out.println("20.0 / 6                  = " + hasilBagiDesimal2);


        // 5. Modulus / Sisa Bagi (%)
        // modulus menghasilkan SISA dari hasil pembagian
        // contoh: 20 dibagi 6 = dapat 3, sisanya 2 (karena 6 * 3 = 18, 20 - 18 = 2)
        int hasilModulus = a % b;
        System.out.println("a % b (sisa bagi)         = " + hasilModulus); // 2

        // contoh kegunaan modulus: mengecek angka genap atau ganjil
        int cekAngka = 7;
        // jika cekAngka % 2 == 0 berarti genap, jika sisa 1 berarti ganjil
        System.out.println("7 % 2                     = " + (cekAngka % 2) + " (sisa 1, berarti ganjil)");


        // 6. Urutan Prioritas Operasi (KABATAKU: Kali, Bagi, Tambah, Kurang)
        // operasi di dalam kurung () selalu dikerjakan lebih dulu
        int hitung1 = 5 + 2 * 3;     // 2 * 3 dihitung duluan -> 5 + 6 = 11
        int hitung2 = (5 + 2) * 3;   // (5 + 2) dihitung duluan -> 7 * 3 = 21

        System.out.println("\n5 + 2 * 3   = " + hitung1);
        System.out.println("(5 + 2) * 3 = " + hitung2);
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
Nilai a = 20
Nilai b = 6
-------------------------
a + b = 26
a - b = 14
a * b = 120
a / b (pembagian integer) = 3
a / b (hasil desimal)    = 3.3333333333333335
20.0 / 6                  = 3.3333333333333335
a % b (sisa bagi)         = 2
7 % 2                     = 1 (sisa 1, berarti ganjil)

5 + 2 * 3   = 11
(5 + 2) * 3 = 21
==================================================
*/
