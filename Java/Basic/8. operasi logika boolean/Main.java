/* rekap dasar java */
/* 8. operasi logika boolean */

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## OPERATOR LOGIKA BOOLEAN
        // ==========================================

        // Operator logika digunakan untuk menghubungkan satu atau lebih ekspresi boolean
        // Nilainya berupa true atau false

        boolean a = true;
        boolean b = false;


        // ==========================================
        // ## 1. LOGIKA AND (&&)
        // ==========================================
        // Aturan AND: hasilnya bernilai true HANYA JIKA KEDUA KONDISI bernilai true!
        // Kalau salah satu saja bernilai false, hasilnya langsung false.

        System.out.println("--- TABEL LOGIKA AND (&&) ---");
        System.out.println("true  && true  = " + (true && true));   // true
        System.out.println("true  && false = " + (true && false));  // false
        System.out.println("false && true  = " + (false && true));  // false
        System.out.println("false && false = " + (false && false)); // false


        // ==========================================
        // ## 2. LOGIKA OR (||)
        // ==========================================
        // Aturan OR: hasilnya bernilai true jika SALAH SATU atau KEDUA kondisi bernilai true!
        // Hanya bernilai false jika SEMUA kondisi bernilai false.

        System.out.println("\n--- TABEL LOGIKA OR (||) ---");
        System.out.println("true  || true  = " + (true || true));   // true
        System.out.println("true  || false = " + (true || false));  // true
        System.out.println("false || true  = " + (false || true));  // true
        System.out.println("false || false = " + (false || false)); // false


        // ==========================================
        // ## 3. LOGIKA NOT (!)
        // ==========================================
        // Aturan NOT: membalikkan nilai boolean
        // dari true menjadi false, dari false menjadi true

        System.out.println("\n--- TABEL LOGIKA NOT (!) ---");
        System.out.println("!true  = " + (!true));  // false
        System.out.println("!false = " + (!false)); // true


        // ==========================================
        // ## CONTOH NYATA PENGGABUNGAN KONDISI
        // ==========================================

        int nilaiUjian = 85;
        int kehadiran = 90;

        // Syarat lulus: nilai harus >= 75 DAN kehadiran harus >= 80
        boolean isLulus = (nilaiUjian >= 75) && (kehadiran >= 80);
        System.out.println("\nNilai Ujian : " + nilaiUjian);
        System.out.println("Kehadiran   : " + kehadiran + "%");
        System.out.println("Apakah Lulus (nilai >= 75 && kehadiran >= 80)? : " + isLulus);

        // Syarat diskon: punya kartu member ATAU belanja >= 100 ribu
        boolean punyaMember = false;
        int totalBelanja = 150000;

        boolean dapatDiskon = punyaMember || (totalBelanja >= 100000);
        System.out.println("\nPunya Member : " + punyaMember);
        System.out.println("Total Belanja: " + totalBelanja);
        System.out.println("Dapat Diskon (member || belanja >= 100rb)?    : " + dapatDiskon);
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
--- TABEL LOGIKA AND (&&) ---
true  && true  = true
true  && false = false
false && true  = false
false && false = false

--- TABEL LOGIKA OR (||) ---
true  || true  = true
true  || false = true
false || true  = true
false || false = false

--- TABEL LOGIKA NOT (!) ---
!true  = false
!false = true

Nilai Ujian : 85
Kehadiran   : 90%
Apakah Lulus (nilai >= 75 && kehadiran >= 80)? : true

Punya Member : false
Total Belanja: 150000
Dapat Diskon (member || belanja >= 100rb)?    : true
==================================================
*/
