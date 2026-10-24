/* rekap dasar java */
/* 9. data input scanner */

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## INPUT DATA DENGAN SCANNER
        // ==========================================

        /*
        Di Python kita cukup pakai input("...").
        Di Java, kita menggunakan class 'Scanner' dari library 'java.util'.

        Langkah-langkah pakai Scanner:
        1. Wajib import dulu di paling atas file:
           import java.util.Scanner;
        2. Buat objek Scannernya:
           Scanner input = new Scanner(System.in);
        3. Gunakan method pembaca sesuai tipe datanya:
           - input.nextLine()   -> membaca 1 baris penuh kalimat (termasuk spasi)
           - input.next()       -> membaca 1 kata saja (berhenti jika ada spasi)
           - input.nextInt()    -> membaca bilangan bulat (int)
           - input.nextDouble() -> membaca bilangan desimal (double)
           - input.nextBoolean()-> membaca true / false
        4. Selalu tutup scanner di akhir program:
           input.close();
        */


        // ==========================================
        // ## CONTOH KODE INTERAKTIF DARI KEYBOARD
        // ==========================================
        /*
        // uncomment kode di bawah ini jika ingin mencoba langsung input dari keyboard:

        Scanner inputKeyboard = new Scanner(System.in);

        System.out.print("Masukan nama waifu: ");
        String nama = inputKeyboard.nextLine();

        System.out.print("Masukan level karakter: ");
        int level = inputKeyboard.nextInt();

        System.out.print("Masukan base attack: ");
        double attack = inputKeyboard.nextDouble();

        System.out.println("\n--- DATA HASIL INPUT ---");
        System.out.println("Nama   : " + nama);
        System.out.println("Level  : " + level);
        System.out.println("Attack : " + attack);

        inputKeyboard.close();
        */


        // ==========================================
        // ## DEMO SIMULASI SCANNER (OTOMATIS)
        // ==========================================
        // Kita simulasikan Scanner membaca teks data yang sudah disiapkan
        // agar file ini bisa langsung dijalankan tanpa perlu menunggu ketikan keyboard

        String dataSimulasi = "Furina\n90\n2500.5\n";
        Scanner scannerSimulasi = new Scanner(dataSimulasi);

        // 1. Membaca teks (String)
        String namaWaifu = scannerSimulasi.nextLine();

        // 2. Membaca integer
        int levelKarakter = scannerSimulasi.nextInt();

        // 3. Membaca double
        double baseAttack = scannerSimulasi.nextDouble();

        System.out.println("--- HASIL PEMBACAAN SCANNER ---");
        System.out.println("Nama Waifu    : " + namaWaifu);
        System.out.println("Level         : " + levelKarakter);
        System.out.println("Base Attack   : " + baseAttack);

        scannerSimulasi.close();


        // ==========================================
        // ## TIPS & GOTCHA: MASALAH NEXTLINE SETELAH NEXTINT
        // ==========================================
        /*
        PERINGATAN PENTING DI JAVA:
        Jika kamu memanggil nextInt() atau nextDouble(), lalu tepat setelah itu
        memanggil nextLine(), biasanya nextLine() akan "terlewat / ke-skip" (kosong).

        KENAPA BISA BEGITU?
        Karena nextInt() hanya membaca angkanya, tombol ENTER (\n) yang kamu tekan
        masih tertinggal di buffer memori. Ketika nextLine() dipanggil, dia langsung
        memakan tombol ENTER sisa tadi dan menganggap kamu menginput teks kosong!

        SOLUSINYA:
        Tambahkan satu baris input.nextLine() kosong sebagai "pembersih" sebelum
        membaca teks berikutnya:

        int umur = input.nextInt();
        input.nextLine(); // PEMBERSIH BUFFER ENTER!
        String alamat = input.nextLine(); // ini sekarang aman dan terbaca normal
        */
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
--- HASIL PEMBACAAN SCANNER ---
Nama Waifu    : Furina
Level         : 90
Base Attack   : 2500.5
==================================================
*/
