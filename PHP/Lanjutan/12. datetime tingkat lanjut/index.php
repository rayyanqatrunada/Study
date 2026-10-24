<?php
/* rekap php lanjutan */
/* 12. datetime tingkat lanjut (class datetime) */

// ==========================================
// ## CLASS DATETIME DI PHP
// ==========================================

/*
Alih-alih pakai fungsi jadul date() atau time(), di PHP tingkat lanjut
kita menggunakan class 'DateTime' yang jauh lebih rapi, canggih, dan berorientasi objek.
*/

// Set zona waktu agar sesuai waktu Indonesia Barat (WIB)
date_default_timezone_set("Asia/Jakarta");


// ==========================================
// ## 1. MEMBUAT DAN MEMFORMAT TANGGAL
// ==========================================
echo "--- 1. TANGGAL SAAT INI (OBJECT DATETIME) ---\n";

$sekarang = new DateTime();

// Format huruf:
// d = tanggal 2 digit (01-31)
// m = bulan 2 digit (01-12), F = nama bulan bahasa Inggris
// Y = tahun 4 digit
// H = jam 24 jam, i = menit, s = detik
echo "Format lengkap : " . $sekarang->format("d-m-Y H:i:s") . "\n";
echo "Format santai  : " . $sekarang->format("d F Y") . "\n";


// ==========================================
// ## 2. MANIPULASI TANGGAL (modify)
// ==========================================
/*
Dengan method ->modify(), kita bisa menulis kalimat bahasa Inggris yang natural
seperti '+1 day', '+2 weeks', '-1 month'. Sangat praktis!
*/

echo "\n--- 2. MANIPULASI TANGGAL (modify) ---\n";

$besok = (new DateTime())->modify('+1 day');
$mingguDepan = (new DateTime())->modify('+1 week');
$bulanLalu = (new DateTime())->modify('-1 month');

echo "Besok        : " . $besok->format("d-m-Y") . "\n";
echo "Minggu depan : " . $mingguDepan->format("d-m-Y") . "\n";
echo "Bulan lalu   : " . $bulanLalu->format("d-m-Y") . "\n";


// ==========================================
// ## 3. MENGHITUNG SELISIH TANGGAL (diff)
// ==========================================
echo "\n--- 3. MENGHITUNG SELISIH ANTARA 2 TANGGAL ---\n";

$tanggalLahir = new DateTime("2006-10-24");
$hariIni = new DateTime();

// Method ->diff() menghitung selisih secara presisi
$selisih = $tanggalLahir->diff($hariIni);

echo "Umur Rayyan saat ini : " . $selisih->y . " tahun, " . $selisih->m . " bulan, " . $selisih->d . " hari!\n";
echo "Total hari hidup     : " . $selisih->days . " hari\n";


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. TANGGAL SAAT INI (OBJECT DATETIME) ---
(Tanggal dinamis sesuai saat dijalankan)
Format lengkap : 25-10-2026 00:13:50
Format santai  : 25 October 2026

--- 2. MANIPULASI TANGGAL (modify) ---
Besok        : 26-10-2026
Minggu depan : 01-11-2026
Bulan lalu   : 25-09-2026

--- 3. MENGHITUNG SELISIH ANTARA 2 TANGGAL ---
Umur Rayyan saat ini : 20 tahun, 0 bulan, 1 hari!
Total hari hidup     : 7306 hari
==================================================
*/
