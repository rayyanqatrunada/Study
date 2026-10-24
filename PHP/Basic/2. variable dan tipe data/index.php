<?php
/* rekap dasar php */
/* 2. variable dan tipe data */

// ==========================================
// ## VARIABLE DI PHP
// ==========================================

// aturan nulis variabel di PHP:
// 1. wajib diawali tanda dollar ($)
// 2. sensitif huruf besar kecil ($nama beda dengan $Nama)
// 3. gak boleh pake spasi dan gak boleh diawali angka
// 4. PHP itu dinamis (mirip Python), gak perlu tulis tipe datanya dulu


// --- 1. Tipe Data String (Teks) ---
$str1 = "Furina";
$str2 = "Clara";

echo "Karakter 1: " . $str1 . "\n";
echo "Karakter 2: " . $str2 . "\n";
echo "Namaku adalah " . $str2 . "\n\n";


// --- 2. Tipe Data Integer (Bilangan Bulat) ---
$num1 = 20;
$num2 = 10;
$angkaMinus = -5;

echo "num1: " . $num1 . "\n";
echo "num2: " . $num2 . "\n";
echo "Hasil tambah: " . ($num1 + $num2) . "\n\n";


// --- 3. Tipe Data Float (Bilangan Desimal) ---
// pake tanda titik (.) bukan koma
$float1 = 11.5;
$pi = 3.14;

echo "float1: " . $float1 . "\n";
echo "pi    : " . $pi . "\n\n";


// --- 4. Tipe Data Boolean ---
// cuma ada true dan false
$isCantik = true;
$isJelek = false;

// catatan: kalau boolean di-echo biasa, true akan muncul "1", false akan muncul kosong ""
echo "isCantik (echo): " . $isCantik . "\n"; // nampilin 1

// biar kelihatan jelas, kita intip pake var_dump
echo "isCantik (var_dump): ";
var_dump($isCantik); // bool(true)
echo "isJelek  (var_dump): ";
var_dump($isJelek);  // bool(false)


// --- 5. Tipe Data NULL ---
// variabel yang sengaja dikosongkan / belum ada nilainya
$kosong = null;
echo "\nvariabel kosong: ";
var_dump($kosong); // NULL


// ==========================================
// ## KONSTANTA (VARIABLE YANG GAK BISA DIUBAH)
// ==========================================

// konstanta nilainya paten, gak pake tanda dollar ($)
// biasanya ditulis HURUF BESAR SEMUA

// cara 1: pake define()
define("APP_NAME", "Belajar PHP Rayyan");
define("VERSI", 1.0);

// cara 2: pake keyword const
const AUTHOR = "Rayyan";
const ARCHON = "Furina";

echo "\n--- KONSTANTA ---\n";
echo "Aplikasi : " . APP_NAME . "\n";
echo "Versi    : " . VERSI . "\n";
echo "Author   : " . AUTHOR . "\n";
echo "Archon   : " . ARCHON . "\n";

// ARCHON = "Nahida"; // ini bakal error kalau diaktifkan karena konstanta gak boleh diubah!


/*
==================================================
OUTPUT TERMINAL:
==================================================
Karakter 1: Furina
Karakter 2: Clara
Namaku adalah Clara

num1: 20
num2: 10
Hasil tambah: 30

float1: 11.5
pi    : 3.14

isCantik (echo): 1
isCantik (var_dump): bool(true)
isJelek  (var_dump): bool(false)

variabel kosong: NULL

--- KONSTANTA ---
Aplikasi : Belajar PHP Rayyan
Versi    : 1
Author   : Rayyan
Archon   : Furina
==================================================
*/
