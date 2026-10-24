/* rekap dasar java */
/* 17. operasi bitwise */

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## OPERASI BITWISE (OPERASI LEVEL BIT BINER)
        // ==========================================

        /*
        Operasi bitwise adalah operasi matematika yang dilakukan langsung pada
        level bit (angka biner 0 dan 1).
        Di Java, kita bisa melihat bentuk biner suatu angka menggunakan:
        Integer.toBinaryString(angka)
        */

        int a = 9;  // dalam biner: 1001
        int b = 5;  // dalam biner: 0101

        System.out.println("Nilai a = " + a + " (biner: " + Integer.toBinaryString(a) + ")");
        System.out.println("Nilai b = " + b + " (biner: " + Integer.toBinaryString(b) + ")");
        System.out.println("------------------------------------------");


        // ==========================================
        // ## 1. BITWISE AND (&)
        // ==========================================
        // Bernilai 1 HANYA jika kedua bit bernilai 1
        // 9  = 1 0 0 1
        // 5  = 0 1 0 1
        // ------------ &
        //      0 0 0 1 -> hasilnya 1

        int hasilAnd = a & b;
        System.out.println("a & b (Bitwise AND) = " + hasilAnd + " (biner: " + Integer.toBinaryString(hasilAnd) + ")");


        // ==========================================
        // ## 2. BITWISE OR (|)
        // ==========================================
        // Bernilai 1 jika SALAH SATU atau KEDUA bit bernilai 1
        // 9  = 1 0 0 1
        // 5  = 0 1 0 1
        // ------------ |
        //      1 1 0 1 -> hasilnya 13

        int hasilOr = a | b;
        System.out.println("a | b (Bitwise OR)  = " + hasilOr + " (biner: " + Integer.toBinaryString(hasilOr) + ")");


        // ==========================================
        // ## 3. BITWISE XOR (^)
        // ==========================================
        // Bernilai 1 HANYA JIKA kedua bit BERBEDA (satu bernilai 1, satu lagi bernilai 0)
        // Kalau sama-sama 1 atau sama-sama 0, hasilnya 0
        // 9  = 1 0 0 1
        // 5  = 0 1 0 1
        // ------------ ^
        //      1 1 0 0 -> hasilnya 12

        int hasilXor = a ^ b;
        System.out.println("a ^ b (Bitwise XOR) = " + hasilXor + " (biner: " + Integer.toBinaryString(hasilXor) + ")");


        // ==========================================
        // ## 4. BITWISE NOT (~) (INVERT / KEBALIKAN)
        // ==========================================
        // Membalik semua bit (0 jadi 1, 1 jadi 0)
        // Rumus singkat nilainya: ~x = -(x + 1)
        int hasilNot = ~a;
        System.out.println("~a    (Bitwise NOT) = " + hasilNot); // ~9 jadi -10


        // ==========================================
        // ## 5. SHIFT LEFT (<<) & SHIFT RIGHT (>>)
        // ==========================================

        // Shift Left (<<): menggeser bit ke kiri (sama seperti dikali 2 per geseran)
        // 9 << 1 artinya 9 * 2 = 18
        // 9 << 2 artinya 9 * 4 = 36
        int shiftLeft = a << 1;
        System.out.println("\n9 << 1 (geser kiri 1 bit)  = " + shiftLeft);  // 18
        System.out.println("9 << 2 (geser kiri 2 bit)  = " + (a << 2));   // 36

        // Shift Right (>>): menggeser bit ke kanan (sama seperti dibagi 2 per geseran)
        // 9 >> 1 artinya 9 / 2 = 4 (dibulatkan ke bawah)
        int shiftRight = a >> 1;
        System.out.println("9 >> 1 (geser kanan 1 bit) = " + shiftRight); // 4
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
Nilai a = 9 (biner: 1001)
Nilai b = 5 (biner: 101)
------------------------------------------
a & b (Bitwise AND) = 1 (biner: 1)
a | b (Bitwise OR)  = 13 (biner: 1101)
a ^ b (Bitwise XOR) = 12 (biner: 1100)
~a    (Bitwise NOT) = -10

9 << 1 (geser kiri 1 bit)  = 18
9 << 2 (geser kiri 2 bit)  = 36
9 >> 1 (geser kanan 1 bit) = 4
==================================================
*/
