<?php
/* rekap php lanjutan */
/* 7. include dan require (modularitas file) */

// ==========================================
// ## MODULARITAS KODE (INCLUDE VS REQUIRE)
// ==========================================

/*
Mirip seperti 'import' di Python.
Di PHP kita punya 4 perintah untuk menggabungkan file eksternal:

1. include 'file.php'       -> jika file hilang, hanya muncul WARNING (program tetap lanjut jalan).
2. require 'file.php'       -> jika file hilang, muncul FATAL ERROR (program langsung mati total).
3. include_once 'file.php'  -> sama seperti include, tapi HANYA dipanggil 1 KALI saja.
4. require_once 'file.php'  -> sama seperti require, tapi HANYA dipanggil 1 KALI saja (paling direkomendasikan!).

Kenapa _once penting?
Supaya fungsi di dalam file tersebut gak dideklarasikan 2 kali yang bisa bikin error:
"Fatal error: Cannot redeclare function..."
*/


echo "--- MEMANGGIL FILE HELPER EKSTERNAL ---\n";

// Menggunakan require_once
require_once __DIR__ . '/helper.php';

// Memanggil fungsi yang ada di dalam helper.php
$pesan = salamDariHelper("Furina");
echo $pesan . "\n";

// Mengakses variabel yang ada di dalam helper.php
echo "Aplikasi : " . $konfigurasiApp['nama'] . "\n";
echo "Author   : " . $konfigurasiApp['author'] . "\n";


// Coba panggil lagi dengan require_once (aman, gak bakal error bentrok ganda)
require_once __DIR__ . '/helper.php';
echo "\n-> Panggilan kedua require_once aman, PHP gak akan nge-load ulang dua kali!\n";


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- MEMANGGIL FILE HELPER EKSTERNAL ---
Halo Furina! Salam dari file helper eksternal.
Aplikasi : Belajar PHP Lanjutan
Author   : Rayyan

-> Panggilan kedua require_once aman, PHP gak akan nge-load ulang dua kali!
==================================================
*/
