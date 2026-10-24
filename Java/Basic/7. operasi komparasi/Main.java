/* rekap dasar java */
/* 7. operasi komparasi (perbandingan) */

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## OPERATOR KOMPARASI (PERBANDINGAN)
        // ==========================================

        // Operator komparasi digunakan untuk membandingkan 2 buah nilai
        // Hasil dari komparasi SELALU bertipe BOOLEAN (hanya true atau false)

        int a = 10;
        int b = 5;

        System.out.println("Nilai a = " + a);
        System.out.println("Nilai b = " + b);
        System.out.println("-------------------------");


        // 1. Sama Dengan (==)
        // mengecek apakah kedua nilai nilainya sama persis
        boolean hasilSama = (a == b);
        System.out.println("a == b (apakah 10 sama dengan 5?)   : " + hasilSama); // false
        System.out.println("a == 10 (apakah 10 sama dengan 10?) : " + (a == 10));  // true


        // 2. Tidak Sama Dengan (!=)
        // mengecek apakah kedua nilai berbeda
        boolean hasilBeda = (a != b);
        System.out.println("a != b (apakah 10 beda dengan 5?)   : " + hasilBeda); // true


        // 3. Lebih Besar Dari (>)
        System.out.println("a > b  (apakah 10 > 5?)             : " + (a > b));  // true
        System.out.println("b > a  (apakah 5 > 10?)             : " + (b > a));  // false


        // 4. Lebih Kecil Dari (<)
        System.out.println("a < b  (apakah 10 < 5?)             : " + (a < b));  // false
        System.out.println("b < a  (apakah 5 < 10?)             : " + (b < a));  // true


        // 5. Lebih Besar atau Sama Dengan (>=)
        // bernilai true jika lebih besar ATAU nilainya sama persis
        System.out.println("a >= 10 (apakah 10 >= 10?)          : " + (a >= 10)); // true
        System.out.println("a >= 15 (apakah 10 >= 15?)          : " + (a >= 15)); // false


        // 6. Lebih Kecil atau Sama Dengan (<=)
        System.out.println("b <= 5  (apakah 5 <= 5?)            : " + (b <= 5));  // true
        System.out.println("b <= 3  (apakah 5 <= 3?)            : " + (b <= 3));  // false


        // ==========================================
        // ## KOMPARASI PADA TIPE DATA LAIN
        // ==========================================

        // char juga bisa dikomparasi (berdasarkan nilai kode ASCII karakternya)
        char hurufA = 'A'; // kode ASCII 65
        char hurufB = 'B'; // kode ASCII 66
        System.out.println("\n'A' < 'B' : " + (hurufA < hurufB)); // true karena 65 < 66

        // boolean juga bisa dibandingkan
        boolean statusA = true;
        boolean statusB = false;
        System.out.println("statusA == statusB : " + (statusA == statusB)); // false
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
Nilai a = 10
Nilai b = 5
-------------------------
a == b (apakah 10 sama dengan 5?)   : false
a == 10 (apakah 10 sama dengan 10?) : true
a != b (apakah 10 beda dengan 5?)   : true
a > b  (apakah 10 > 5?)             : true
b > a  (apakah 5 > 10?)             : false
a < b  (apakah 10 < 5?)             : false
b < a  (apakah 5 < 10?)             : true
a >= 10 (apakah 10 >= 10?)          : true
a >= 15 (apakah 10 >= 15?)          : false
b <= 5  (apakah 5 <= 5?)            : true
b <= 3  (apakah 5 <= 3?)            : false

'A' < 'B' : true
statusA == statusB : false
==================================================
*/
