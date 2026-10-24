<?php
/* rekap dasar php */
/* 16. operasi bitwise (operasi biner) */

// ==========================================
// ## OPERASI BITWISE DI PHP
// ==========================================

/*
Operasi bitwise bekerja langsung pada level bit (angka biner 0 dan 1).
Di PHP, kita bisa melihat bentuk biner angka menggunakan fungsi bawaan:
decbin($angka)
*/

$a = 9;  // dalam biner: 1001
$b = 5;  // dalam biner: 0101

echo "Nilai a = $a (biner: " . decbin($a) . ")\n";
echo "Nilai b = $b (biner: " . decbin($b) . ")\n";
echo "------------------------------------------\n";


// 1. Bitwise AND (&)
// bernilai 1 hanya jika kedua bit bernilai 1
// 1001 & 0101 = 0001 (hasil: 1)
$hasilAnd = $a & $b;
echo "a & b (AND) = $hasilAnd (biner: " . decbin($hasilAnd) . ")\n";


// 2. Bitwise OR (|)
// bernilai 1 jika salah satu atau kedua bit bernilai 1
// 1001 | 0101 = 1101 (hasil: 13)
$hasilOr = $a | $b;
echo "a | b (OR)  = $hasilOr (biner: " . decbin($hasilOr) . ")\n";


// 3. Bitwise XOR (^)
// bernilai 1 HANYA jika kedua bit berbeda (satu 1, satu 0)
// 1001 ^ 0101 = 1100 (hasil: 12)
$hasilXor = $a ^ $b;
echo "a ^ b (XOR) = $hasilXor (biner: " . decbin($hasilXor) . ")\n";


// 4. Bitwise NOT (~) (Invert)
// membalikkan bit (0 jadi 1, 1 jadi 0)
// rumus singkat: ~x = -(x + 1)
$hasilNot = ~$a;
echo "~a    (NOT) = $hasilNot\n"; // ~9 jadi -10


// 5. Shift Left (<<) dan Shift Right (>>)
// Shift Left (<<): geser bit ke kiri (sama seperti dikali 2 per geseran)
echo "\n9 << 1 (geser kiri 1 bit)  = " . ($a << 1) . "\n"; // 9 * 2 = 18
echo "9 << 2 (geser kiri 2 bit)  = " . ($a << 2) . "\n"; // 9 * 4 = 36

// Shift Right (>>): geser bit ke kanan (sama seperti dibagi 2 per geseran)
echo "9 >> 1 (geser kanan 1 bit) = " . ($a >> 1) . "\n"; // 9 / 2 = 4 (dibulatkan ke bawah)


/*
==================================================
OUTPUT TERMINAL:
==================================================
Nilai a = 9 (biner: 1001)
Nilai b = 5 (biner: 101)
------------------------------------------
a & b (AND) = 1 (biner: 1)
a | b (OR)  = 13 (biner: 1101)
a ^ b (XOR) = 12 (biner: 1100)
~a    (NOT) = -10

9 << 1 (geser kiri 1 bit)  = 18
9 << 2 (geser kiri 2 bit)  = 36
9 >> 1 (geser kanan 1 bit) = 4
==================================================
*/
