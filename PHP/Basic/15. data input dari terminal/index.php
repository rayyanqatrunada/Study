<?php
/* rekap dasar php */
/* 15. data input dari terminal (cli) */

// ==========================================
// ## MENGAMBIL INPUT USER DI TERMINAL PHP
// ==========================================

/*
Di Python kita kenal fungsi input("...").
Di PHP CLI (Command Line Interface), kita punya 2 cara:

1. CARA PALING GAMPANG: readline("pesan")
   $nama = readline("Masukan nama: ");

2. CARA ALTERNATIF: fgets(STDIN)
   $nama = trim(fgets(STDIN)); // trim dipake buat buang tombol enter (\n) di akhir

CATATAN:
Data yang diinput user SELALU bertipe STRING (teks).
Kalau mau dipakai buat hitungan matematika, kita wajib ubah (casting) ke angka:
$angka = (int) readline("Masukan angka: ");
*/


// ==========================================
// ## CONTOH KODE INTERAKTIF (DARI KEYBOARD)
// ==========================================
/*
// Uncomment bagian ini jika kamu mau coba ketik langsung dari keyboard:

$namaUser = readline("Masukan nama kamu : ");
$umurUser = (int) readline("Masukan umur kamu : ");
$waifuUser = readline("Karakter favorit   : ");

echo "\n--- HASIL INPUT KAMU ---\n";
echo "Halo $namaUser, umurmu $umurUser tahun.\n";
echo "Karakter favoritmu adalah $waifuUser!\n";
*/


// ==========================================
// ## DEMO SIMULASI INPUT OTOMATIS
// ==========================================
// Bagian ini dibuat agar file ini bisa langsung dijalankan tanpa harus nunggu ketikan keyboard

$contohInputNama = "Rayyan";
$contohInputAngka = "20"; // tipe string dari input

// Ubah ke integer menggunakan (int)
$umurInt = (int) $contohInputAngka;

echo "--- DEMO PEMROSESAN INPUT ---\n";
echo "Data teks input    : '$contohInputNama'\n";
echo "Data angka input   : $umurInt (Tipe: " . gettype($umurInt) . ")\n";
echo "Bisa dihitung (+5) : " . ($umurInt + 5) . " tahun\n";


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- DEMO PEMROSESAN INPUT ---
Data teks input    : 'Rayyan'
Data angka input   : 20 (Tipe: integer)
Bisa dihitung (+5) : 25 tahun
==================================================
*/
