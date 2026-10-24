/* rekap dasar java */
/* 6. operator assignment & increment decrement */

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## OPERATOR ASSIGNMENT (PENUGASAN)
        // ==========================================

        // 1. Assignment Dasar (=)
        // memberikan nilai ke dalam variabel
        int x = 10;
        System.out.println("Nilai awal x = " + x);


        // 2. Compound Assignment (Penugasan Singkat)
        // cara singkat untuk mengupdate nilai variabel itu sendiri

        // += (tambah lalu simpan)
        x += 5; // sama artinya dengan: x = x + 5 (10 + 5)
        System.out.println("x += 5  -> x = " + x); // 15

        // -= (kurang lalu simpan)
        x -= 3; // sama artinya dengan: x = x - 3 (15 - 3)
        System.out.println("x -= 3  -> x = " + x); // 12

        // *= (kali lalu simpan)
        x *= 2; // sama artinya dengan: x = x * 2 (12 * 2)
        System.out.println("x *= 2  -> x = " + x); // 24

        // /= (bagi lalu simpan)
        x /= 4; // sama artinya dengan: x = x / 4 (24 / 4)
        System.out.println("x /= 4  -> x = " + x); // 6

        // %= (modulus lalu simpan)
        x %= 4; // sama artinya dengan: x = x % 4 (6 % 4 sisa 2)
        System.out.println("x %= 4  -> x = " + x); // 2


        // ==========================================
        // ## INCREMENT (++) & DECREMENT (--)
        // ==========================================

        // increment (++) -> menambah nilai sebanyak 1
        // decrement (--) -> mengurangi nilai sebanyak 1

        int angka = 5;
        angka++; // angka ditambah 1 (jadi 6)
        System.out.println("\nangka++ : " + angka); // 6

        angka--; // angka dikurang 1 (kembali jadi 5)
        System.out.println("angka-- : " + angka); // 5


        // ## Perbedaan Pre vs Post:
        // Post-Increment (y++) -> nilai lama DIPAKAI DULU, baru variabel ditambah 1
        // Pre-Increment (++z)  -> variabel DITAMBAH 1 DULU, baru nilai barunya dipakai

        System.out.println("\n--- Beda Post-Increment vs Pre-Increment ---");

        int y = 5;
        System.out.println("Saat print y++ : " + (y++)); // masih tampil 5, baru setelah baris ini y jadi 6
        System.out.println("Nilai y setelahnya : " + y); // sekarang nilainya sudah 6

        int z = 5;
        System.out.println("Saat print ++z : " + (++z)); // langsung ditambah jadi 6, lalu diprint 6
        System.out.println("Nilai z setelahnya : " + z); // nilainya tetap 6
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
Nilai awal x = 10
x += 5  -> x = 15
x -= 3  -> x = 12
x *= 2  -> x = 24
x /= 4  -> x = 6
x %= 4  -> x = 2

angka++ : 6
angka-- : 5

--- Beda Post-Increment vs Pre-Increment ---
Saat print y++ : 5
Nilai y setelahnya : 6
Saat print ++z : 6
Nilai z setelahnya : 6
==================================================
*/
