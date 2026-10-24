<?php
/* rekap dasar php */
/* 17. math dan angka acak */

// ==========================================
// ## FUNGSI MATEMATIKA BAWAAN PHP
// ==========================================

/*
PHP punya fungsi matematika bawaan yang sangat lengkap,
gak perlu import library apapun, langsung bisa dipanggil.
*/

$a = 25;
$b = 10;
$desimal = 5.74;

// 1. max() dan min() -> mencari nilai terbesar dan terkecil
echo "--- 1. MAX & MIN ---\n";
echo "max(25, 10) : " . max($a, $b) . "\n"; // 25
echo "min(25, 10) : " . min($a, $b) . "\n"; // 10


// 2. sqrt() -> akar kuadrat
echo "\n--- 2. AKAR KUADRAT (sqrt) ---\n";
echo "sqrt(25)    : " . sqrt($a) . "\n"; // 5
echo "sqrt(16)    : " . sqrt(16) . "\n"; // 4


// 3. pow() -> pangkat (selain operator **)
echo "\n--- 3. PANGKAT (pow) ---\n";
echo "pow(2, 3)   : " . pow(2, 3) . "\n"; // 8
echo "pow(5, 2)   : " . pow(5, 2) . "\n"; // 25


// 4. abs() -> nilai absolut (mengubah angka negatif jadi positif)
echo "\n--- 4. NILAI ABSOLUT (abs) ---\n";
echo "abs(-15.5)  : " . abs(-15.5) . "\n"; // 15.5


// 5. Pembulatan: round, ceil, floor
echo "\n--- 5. PEMBULATAN ANGKA ---\n";
echo "Angka asli  : $desimal\n";
echo "round()     : " . round($desimal) . " (dibulatkan ke terdekat)\n";
echo "ceil()      : " . ceil($desimal) . " (dibulatkan KE ATAS)\n";
echo "floor()     : " . floor($desimal) . " (dibulatkan KE BAWAH)\n";


// ==========================================
// ## MEMBUAT ANGKA ACAK (RANDOM)
// ==========================================
echo "\n--- 6. ANGKA ACAK (RANDOM) ---\n";

// Cara 1: rand($min, $max)
$acak1 = rand(1, 10);
echo "rand(1, 10)       : $acak1\n";

// Cara 2: mt_rand($min, $max)
// Mersenne Twister: 4x lebih cepat dan lebih acak daripada rand() biasa
$dadu = mt_rand(1, 6);
echo "Lempar dadu (1-6) : $dadu\n";

// Cara 3: random_int($min, $max)
// Paling aman untuk keamanan (security/crypto)
$token = random_int(1000, 9999);
echo "Kode PIN 4 digit  : $token\n";


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. MAX & MIN ---
max(25, 10) : 25
min(25, 10) : 10

--- 2. AKAR KUADRAT (sqrt) ---
sqrt(25)    : 5
sqrt(16)    : 4

--- 3. PANGKAT (pow) ---
pow(2, 3)   : 8
pow(5, 2)   : 25

--- 4. NILAI ABSOLUT (abs) ---
abs(-15.5)  : 15.5

--- 5. PEMBULATAN ANGKA ---
Angka asli  : 5.74
round()     : 6 (dibulatkan ke terdekat)
ceil()      : 6 (dibulatkan KE ATAS)
floor()     : 5 (dibulatkan KE BAWAH)

--- 6. ANGKA ACAK (RANDOM) ---
(Angka acak akan berganti setiap dijalankan)
rand(1, 10)       : 7
Lempar dadu (1-6) : 4
Kode PIN 4 digit  : 8521
==================================================
*/
