<?php
/* rekap php lanjutan */
/* 4. pass by value vs pass by reference (&) */

// ==========================================
// ## PASS BY VALUE VS PASS BY REFERENCE DI PHP
// ==========================================

/*
Secara default di PHP, semua argumen yang dikirim ke fungsi adalah "PASS BY VALUE"
artinya nilainya cuma di-COPY (diduplikasi).

TAPI kalau kita menambahkan simbol ampersand (&) di depan parameter fungsi:
function namaFungsi(&$variabel)
Maka fungsi tersebut menjadi "PASS BY REFERENCE".
Artinya parameter itu menunjuk langsung ke alamat memori variabel asli di luar,
sehingga variabel asli di luar IKUT BERUBAH!
*/


// ==========================================
// ## 1. CONTOH BIASA (PASS BY VALUE - DEFAULT)
// ==========================================
echo "--- 1. PASS BY VALUE (DEFAULT) ---\n";

function cobaUbahBiasa($angka) {
    $angka += 100;
    echo "  [Di dalam fungsi] angka jadi : $angka\n";
}

$nilaiAsli = 50;
echo "Sebelum fungsi dipanggil : $nilaiAsli\n";
cobaUbahBiasa($nilaiAsli);
echo "Setelah fungsi dipanggil : $nilaiAsli\n";
echo "-> Kesimpulan: Nilai asli TETAP 50 (tidak berubah!)\n\n";


// ==========================================
// ## 2. CONTOH PASS BY REFERENCE (DENGAN TANDA &)
// ==========================================
echo "--- 2. PASS BY REFERENCE (PAKAI SIMBOL &) ---\n";

// Perhatikan tanda '&' di depan $angka
function ubahAsli(&$angka) {
    $angka += 100; // ini langsung mengubah variabel yang ada di luar!
    echo "  [Di dalam fungsi] angka jadi : $angka\n";
}

$nilaiPaten = 50;
echo "Sebelum fungsi dipanggil : $nilaiPaten\n";
ubahAsli($nilaiPaten);
echo "Setelah fungsi dipanggil : $nilaiPaten\n";
echo "-> Kesimpulan: Nilai asli IKUT BERUBAH jadi 150!\n\n";


// ==========================================
// ## 3. CONTOH PRAKTIS PADA FOREACH
// ==========================================
// Mengubah langsung seluruh isi array tanpa perlu bikin array baru
echo "--- 3. PASS BY REFERENCE PADA FOREACH ---\n";

$daftarNama = ["furina", "clara", "yui"];
echo "Array sebelum diubah : " . implode(", ", $daftarNama) . "\n";

// Tambahkan '&' di depan $nama agar isi array asli langsung ter-update
foreach ($daftarNama as &$nama) {
    $nama = strtoupper($nama); // ubah semua jadi huruf besar
}
unset($nama); // TIPS: selalu unset variabel referensi setelah foreach agar aman!

echo "Array setelah diubah : " . implode(", ", $daftarNama) . "\n";


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. PASS BY VALUE (DEFAULT) ---
Sebelum fungsi dipanggil : 50
  [Di dalam fungsi] angka jadi : 150
Setelah fungsi dipanggil : 50
-> Kesimpulan: Nilai asli TETAP 50 (tidak berubah!)

--- 2. PASS BY REFERENCE (PAKAI SIMBOL &) ---
Sebelum fungsi dipanggil : 50
  [Di dalam fungsi] angka jadi : 150
Setelah fungsi dipanggil : 150
-> Kesimpulan: Nilai asli IKUT BERUBAH jadi 150!

--- 3. PASS BY REFERENCE PADA FOREACH ---
Array sebelum diubah : furina, clara, yui
Array setelah diubah : FURINA, CLARA, YUI
==================================================
*/
