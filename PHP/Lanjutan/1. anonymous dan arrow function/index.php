<?php
/* rekap php lanjutan */
/* 1. anonymous function dan arrow function */

// ==========================================
// ## 1. ANONYMOUS FUNCTION (FUNGSI TANPA NAMA)
// ==========================================

/*
Anonymous function adalah function yang gak punya nama,
dan biasanya langsung disimpan ke dalam sebuah variabel.
Mirip 'lambda' di bahasa lain.
*/

echo "--- 1. ANONYMOUS FUNCTION BIASA ---\n";

$sapa = function ($nama) {
    echo "Halo $nama, selamat belajar PHP tingkat lanjutan!\n";
};

// cara panggilnya: pake nama variabelnya ditambah kurung ()
$sapa("Furina");
$sapa("Rayyan");


// ==========================================
// ## 2. FITUR KHAS PHP: KEYWORD 'use'
// ==========================================
/*
Di PHP, anonymous function GAK BISA langsung membaca variabel dari luar.
Kalau mau ngambil variabel dari luar, kita WAJIB pakai kata kunci 'use ($namaVariabel)'.
*/

echo "\n--- 2. MEMAKAI KEYWORD 'use' ---\n";

$gelar = "Yang Mulia Hydro Archon";

$panggilGelar = function ($nama) use ($gelar) {
    echo "Salam untuk $gelar: $nama!\n";
};

$panggilGelar("Furina");


// ==========================================
// ## 3. ARROW FUNCTION (FITUR MODERN PHP 7.4+)
// ==========================================
/*
Arrow function adalah versi super ringkas dari anonymous function.
Format:
fn($parameter) => hasil_return;

KELEBIHAN ARROW FUNCTION:
1. Gak butuh nulis 'return' (otomatis di-return).
2. Gak butuh nulis 'use' lagi (otomatis bisa baca variabel luar)!
*/

echo "\n--- 3. ARROW FUNCTION (fn) ---\n";

$pengali = 10;

// otomatis mengenali $pengali tanpa perlu keyword 'use'
$kaliSepuluh = fn($angka) => $angka * $pengali;
$gabungNama = fn($depan, $belakang) => "$depan $belakang";

echo "Hasil 5 x 10    : " . $kaliSepuluh(5) . "\n";
echo "Nama lengkap    : " . $gabungNama("Furina", "De Fontaine") . "\n";


// ==========================================
// ## 4. PENGGUNAAN PADA ARRAY_MAP
// ==========================================
// Mengalikan semua angka di dalam array secara instan pakai arrow function
echo "\n--- 4. PENERAPAN DI ARRAY_MAP ---\n";

$angkaList = [1, 2, 3, 4, 5];
$hasilKuadrat = array_map(fn($x) => $x * $x, $angkaList);

echo "Array awal    : " . implode(", ", $angkaList) . "\n";
echo "Hasil kuadrat : " . implode(", ", $hasilKuadrat) . "\n";


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. ANONYMOUS FUNCTION BIASA ---
Halo Furina, selamat belajar PHP tingkat lanjutan!
Halo Rayyan, selamat belajar PHP tingkat lanjutan!

--- 2. MEMAKAI KEYWORD 'use' ---
Salam untuk Yang Mulia Hydro Archon: Furina!

--- 3. ARROW FUNCTION (fn) ---
Hasil 5 x 10    : 50
Nama lengkap    : Furina De Fontaine

--- 4. PENERAPAN DI ARRAY_MAP ---
Array awal    : 1, 2, 3, 4, 5
Hasil kuadrat : 1, 4, 9, 16, 25
==================================================
*/
