/* rekap dasar java */
/* 11. switch case */

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## PERCABANGAN SWITCH CASE
        // ==========================================

        /*
        Kapan pakai Switch Case dibanding If-Else?
        - If-Else: cocok untuk kondisi rentang nilai (misal: nilai >= 80, x < y).
        - Switch Case: cocok untuk kondisi yang nilainya SUDAH PASTI (angka pasti, teks pasti).
          Tipe data yang didukung: int, byte, short, char, String, dan enum.

        Format dasar:
        switch (variabel) {
            case nilai1:
                aksi;
                break; // wajib break agar tidak lanjut ke case bawahnya
            case nilai2:
                aksi;
                break;
            default: // jika tidak ada yang cocok
                aksi;
                break;
        }
        */


        // ==========================================
        // ## 1. SWITCH CASE STANDAR DENGAN STRING
        // ==========================================

        String namaHari = "Sabtu";

        System.out.println("Hari ini: " + namaHari);
        System.out.print("Rencana : ");

        switch (namaHari) {
            case "Senin":
                System.out.println("Awal minggu, semangat mulai belajar!");
                break; // berhenti di sini dan keluar dari switch
            case "Rabu":
                System.out.println("Tengah minggu, jangan malas-malas!");
                break;
            case "Jumat":
                System.out.println("Besok sudah akhir pekan!");
                break;

            // gabungkan beberapa case jika aksinya sama:
            case "Sabtu":
            case "Minggu":
                System.out.println("Weekend! Waktunya santai bareng Furina.");
                break;

            default:
                System.out.println("Hari biasa, tetap jalani seperti biasa.");
                break;
        }


        // ==========================================
        // ## 2. SWITCH CASE DENGAN ANGKA (MENU PILIHAN)
        // ==========================================

        System.out.println("\n--- MENU PILIHAN ---");
        int nomorMenu = 2;

        switch (nomorMenu) {
            case 1:
                System.out.println("Kamu memilih menu 1: Nasi Goreng");
                break;
            case 2:
                System.out.println("Kamu memilih menu 2: Mie Ayam");
                break;
            case 3:
                System.out.println("Kamu memilih menu 3: Es Teh Manis");
                break;
            default:
                System.out.println("Menu tidak tersedia!");
                break;
        }


        // ==========================================
        // ## 3. SWITCH EXPRESSION (JAVA MODERN / VERSI BARU)
        // ==========================================
        // Di Java versi modern, kita bisa pakai tanda panah (->)
        // Keuntungannya: lebih bersih, tidak butuh keyword 'break', dan bisa mengembalikan nilai!

        System.out.println("\n--- SWITCH EXPRESSION MODERN (->) ---");
        int bulan = 3;

        String namaBulan = switch (bulan) {
            case 1 -> "Januari";
            case 2 -> "Februari";
            case 3 -> "Maret";
            case 4 -> "April";
            default -> "Bulan lainnya";
        };

        System.out.println("Bulan ke-" + bulan + " adalah " + namaBulan);
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
Hari ini: Sabtu
Rencana : Weekend! Waktunya santai bareng Furina.

--- MENU PILIHAN ---
Kamu memilih menu 2: Mie Ayam

--- SWITCH EXPRESSION MODERN (->) ---
Bulan ke-3 adalah Maret
==================================================
*/
