<?php
/* rekap dasar php */
/* 6. operasi logika boolean */

// ==========================================
// ## OPERATOR LOGIKA DI PHP
// ==========================================

$benar = true;
$salah = false;


// 1. Logika AND (&& atau and)
// hasilnya true HANYA JIKA dua-duanya bernilai true
echo "--- 1. LOGIKA AND (&&) ---\n";
echo "true && true   : ";
var_dump($benar && true);   // bool(true)

echo "true && false  : ";
var_dump($benar && $salah);  // bool(false)


// 2. Logika OR (|| atau or)
// hasilnya true jika SALAH SATU atau KEDUA-DUANYA bernilai true
echo "\n--- 2. LOGIKA OR (||) ---\n";
echo "true || false  : ";
var_dump($benar || $salah);  // bool(true)

echo "false || false : ";
var_dump($salah || false);   // bool(false)


// 3. Logika NOT (!)
// membalik nilai boolean
echo "\n--- 3. LOGIKA NOT (!) ---\n";
echo "!true  : ";
var_dump(!$benar); // bool(false)

echo "!false : ";
var_dump(!$salah); // bool(true)


// 4. Logika XOR (Exclusive OR)
// fitur khas PHP: bernilai true HANYA jika salah satu true
// kalau dua-duanya true, hasilnya FALSE!
echo "\n--- 4. LOGIKA XOR ---\n";
echo "true xor false (salah satu true)  : ";
var_dump(true xor false); // bool(true)

echo "true xor true  (dua-duanya true)  : ";
var_dump(true xor true);  // bool(false)


// ==========================================
// ## CONTOH NYATA PADA KONDISI
// ==========================================
echo "\n--- CONTOH LOGIKA DI DUNIA NYATA ---\n";

$nilaiUjian = 85;
$kehadiran = 90;

// Syarat lulus: nilai >= 75 DAN kehadiran >= 80
$lulus = ($nilaiUjian >= 75) && ($kehadiran >= 80);
echo "Nilai: $nilaiUjian, Kehadiran: $kehadiran%\n";
echo "Apakah lulus ujian? : " . ($lulus ? "LULUS!" : "TIDAK LULUS") . "\n";


// Catatan beda '&&' vs 'and':
// '&&' punya prioritas lebih tinggi daripada 'and'.
// Di kode modern selalu disarankan pakai '&&' dan '||' agar aman.


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. LOGIKA AND (&&) ---
true && true   : bool(true)
true && false  : bool(false)

--- 2. LOGIKA OR (||) ---
true || false  : bool(true)
false || false : bool(false)

--- 3. LOGIKA NOT (!) ---
!true  : bool(false)
!false : bool(true)

--- 4. LOGIKA XOR ---
true xor false (salah satu true)  : bool(true)
true xor true  (dua-duanya true)  : bool(false)

--- CONTOH LOGIKA DI DUNIA NYATA ---
Nilai: 85, Kehadiran: 90%
Apakah lulus ujian? : LULUS!
==================================================
*/
