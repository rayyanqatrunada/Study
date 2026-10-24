<?php
/* rekap dasar php */
/* 11. array indexed (array berurutan) */

// ==========================================
// ## ARRAY INDEXED (MIRIP LIST DI PYTHON)
// ==========================================

/*
Di PHP, array itu sangat fleksibel (mirip List di Python):
- Bisa menampung berbagai tipe data sekaligus (campuran).
- Ukurannya otomatis melar (gak kaku seperti Java).
*/

// Membuat array cara modern (pakai kurung siku [])
$waifu = ["Furina", "Clara", "Yui"];
$angka = [10, 20, 30, 40, 50];

// Array campuran tipe data
$campuran = [1, "Furina", true, 11.5];


// ==========================================
// ## 1. MENGAKSES DAN MENGUBAH DATA
// ==========================================
// Index selalu dimulai dari 0!
echo "--- 1. AKSES DATA ---\n";
echo "Index ke-0 : " . $waifu[0] . "\n"; // Furina
echo "Index ke-1 : " . $waifu[1] . "\n"; // Clara

// Mengubah isi data di index tertentu
$waifu[1] = "Qiqi";
echo "Setelah diubah, index 1 jadi : " . $waifu[1] . "\n\n";


// ==========================================
// ## 2. MENAMBAH DATA BARU KE ARRAY
// ==========================================
echo "--- 2. MENAMBAH DATA ---\n";

// Trik sakti PHP: cukup kasih kurung siku kosong '[]'!
// Otomatis diselipkan di posisi paling belakang
$waifu[] = "Charlotta";
$waifu[] = "Nahida";

echo "Isi array sekarang:\n";
print_r($waifu);


// ==========================================
// ## 3. MENGHITUNG JUMLAH DATA (count())
// ==========================================
echo "Jumlah data di array: " . count($waifu) . " orang\n\n";


// ==========================================
// ## 4. MENGHAPUS DATA (unset())
// ==========================================
echo "--- 3. MENGHAPUS DATA ---\n";
unset($waifu[2]); // menghapus Yui di index 2
echo "Setelah index 2 dihapus:\n";
print_r($waifu);


// ==========================================
// ## 5. LOOPING ARRAY DENGAN FOREACH
// ==========================================
// Ini cara paling enak buat nampilin semua isi array
echo "--- 4. LOOPING DENGAN FOREACH ---\n";

foreach ($waifu as $w) {
    echo "Nama waifu: $w\n";
}


// Looping sekaligus dapet nomor index-nya
echo "\nLooping dengan index:\n";
foreach ($waifu as $index => $w) {
    echo "Index ke-$index adalah $w\n";
}


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. AKSES DATA ---
Index ke-0 : Furina
Index ke-1 : Clara
Setelah diubah, index 1 jadi : Qiqi

--- 2. MENAMBAH DATA ---
Isi array sekarang:
Array
(
    [0] => Furina
    [1] => Qiqi
    [2] => Yui
    [3] => Charlotta
    [4] => Nahida
)
Jumlah data di array: 5 orang

--- 3. MENGHAPUS DATA ---
Setelah index 2 dihapus:
Array
(
    [0] => Furina
    [1] => Qiqi
    [3] => Charlotta
    [4] => Nahida
)
--- 4. LOOPING DENGAN FOREACH ---
Nama waifu: Furina
Nama waifu: Qiqi
Nama waifu: Charlotta
Nama waifu: Nahida

Looping dengan index:
Index ke-0 adalah Furina
Index ke-1 adalah Qiqi
Index ke-3 adalah Charlotta
Index ke-4 adalah Nahida
==================================================
*/
