<?php
/* rekap dasar php */
/* 5. operasi komparasi (perbandingan) */

// ==========================================
// ## OPERATOR PERBANDINGAN DI PHP
// ==========================================

$a = 10;
$b = 5;

echo "Nilai a = $a\n";
echo "Nilai b = $b\n";
echo "-------------------------\n";


// 1. Lebih Besar (>) dan Lebih Kecil (<)
echo "a > b (apakah 10 > 5?)  : ";
var_dump($a > $b); // true

echo "a < b (apakah 10 < 5?)  : ";
var_dump($a < $b); // false


// 2. Lebih Besar / Kecil Sama Dengan (>=, <=)
echo "a >= 10                 : ";
var_dump($a >= 10); // true

echo "b <= 5                  : ";
var_dump($b <= 5); // true


// ==========================================
// ## JEBAKAN KHAS PHP: '==' VS '==='
// ==========================================
// Ini materi paling sering ditanyakan di PHP!

echo "\n--- PERBEDAAN '==' (LONGGAR) VS '===' (IDENTIK / KETAT) ---\n";

$angkaInt = 100;
$angkaStr = "100";

// Operator '==' (EQUAL BIASA):
// Hanya mengecek NILAI SAJA tanpa peduli tipe datanya!
// String "100" otomatis diubah PHP jadi angka 100, jadi hasilnya TRUE!
echo "100 == '100' (sama nilai)            : ";
var_dump($angkaInt == $angkaStr); // bool(true)

// Operator '===' (IDENTIK / STRICT):
// Mengecek NILAI DAN TIPE DATA sekaligus!
// Karena satu integer dan satu string, hasilnya FALSE!
echo "100 === '100' (harus sama tipe juga): ";
var_dump($angkaInt === $angkaStr); // bool(false)

// SARAN:
// Di PHP modern, selalu biasakan pakai '===' agar terhindar dari bug aneh!


// 3. Tidak Sama Dengan (!=) vs Tidak Identik (!==)
echo "\n--- TIDAK SAMA DENGAN ---\n";
echo "10 != 5   : ";
var_dump(10 != 5); // bool(true)

echo "100 !== '100' (tipe datanya beda) : ";
var_dump($angkaInt !== $angkaStr); // bool(true) karena tipenya beda


// ==========================================
// ## OPERATOR SPACESHIP (<=>)
// ==========================================
// Fitur unik PHP untuk membandingkan 2 nilai dalam 1 operator:
// Balikin:
// -1 jika nilai kiri LEBIH KECIL
//  0 jika nilai kiri SAMA
//  1 jika nilai kiri LEBIH BESAR
echo "\n--- OPERATOR SPACESHIP (<=>) ---\n";
echo "5 <=> 10 (kiri lebih kecil) : " . (5 <=> 10) . "\n";  // -1
echo "10 <=> 10 (nilainya sama)    : " . (10 <=> 10) . "\n"; // 0
echo "15 <=> 10 (kiri lebih besar) : " . (15 <=> 10) . "\n"; // 1


/*
==================================================
OUTPUT TERMINAL:
==================================================
Nilai a = 10
Nilai b = 5
-------------------------
a > b (apakah 10 > 5?)  : bool(true)
a < b (apakah 10 < 5?)  : bool(false)
a >= 10                 : bool(true)
b <= 5                  : bool(true)

--- PERBEDAAN '==' (LONGGAR) VS '===' (IDENTIK / KETAT) ---
100 == '100' (sama nilai)            : bool(true)
100 === '100' (harus sama tipe juga): bool(false)

--- TIDAK SAMA DENGAN ---
10 != 5   : bool(true)
100 !== '100' (tipe datanya beda) : bool(true)

--- OPERATOR SPACESHIP (<=>) ---
5 <=> 10 (kiri lebih kecil) : -1
10 <=> 10 (nilainya sama)    : 0
15 <=> 10 (kiri lebih besar) : 1
==================================================
*/
