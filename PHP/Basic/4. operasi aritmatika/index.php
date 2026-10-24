<?php
/* rekap dasar php */
/* 4. operasi aritmatika dan assignment */

// ==========================================
// ## OPERASI ARITMATIKA DASAR
// ==========================================

$a = 20;
$b = 6;

echo "Nilai a = $a\n";
echo "Nilai b = $b\n";
echo "-------------------------\n";

// 1. Tambah (+)
echo "a + b = " . ($a + $b) . "\n"; // 26

// 2. Kurang (-)
echo "a - b = " . ($a - $b) . "\n"; // 14

// 3. Kali (*)
echo "a * b = " . ($a * $b) . "\n"; // 120

// 4. Bagi (/)
// CATATAN: di PHP pembagian otomatis jadi bilangan desimal (float) kalau ada sisa
echo "a / b = " . ($a / $b) . "\n"; // 3.3333333333333

// 5. Modulus / Sisa Bagi (%)
echo "a % b = " . ($a % $b) . "\n"; // 2 (20 dibagi 6 sisanya 2)

// 6. Pangkat (**)
// mirip Python, PHP juga punya operator '**' buat pangkat
echo "2 ** 3 (2 pangkat 3) = " . (2 ** 3) . "\n"; // 8


// ==========================================
// ## OPERATOR ASSIGNMENT (PENUGASAN)
// ==========================================
echo "\n--- OPERATOR ASSIGNMENT ---\n";

$x = 10;
echo "Nilai awal x = $x\n";

$x += 5; // sama kayak x = x + 5
echo "x += 5  -> $x\n"; // 15

$x -= 3; // sama kayak x = x - 3
echo "x -= 3  -> $x\n"; // 12

$x *= 2; // sama kayak x = x * 2
echo "x *= 2  -> $x\n"; // 24

$x /= 4; // sama kayak x = x / 4
echo "x /= 4  -> $x\n"; // 6

$x %= 4; // sama kayak x = x % 4
echo "x %= 4  -> $x\n"; // 2


// ==========================================
// ## INCREMENT (++) & DECREMENT (--)
// ==========================================
echo "\n--- INCREMENT & DECREMENT ---\n";

$angka = 5;
$angka++; // ditambah 1
echo "angka++ -> $angka\n"; // 6

$angka--; // dikurang 1
echo "angka-- -> $angka\n"; // 5

// Beda Post-Increment ($y++) vs Pre-Increment (++$z)
$y = 5;
echo "y++ (tampilin dulu baru nambah) : " . ($y++) . "\n"; // diprint 5, abis itu y jadi 6
echo "nilai y setelahnya             : " . $y . "\n";     // 6

$z = 5;
echo "++z (nambah dulu baru tampilin) : " . (++$z) . "\n"; // z jadi 6, langsung diprint 6


/*
==================================================
OUTPUT TERMINAL:
==================================================
Nilai a = 20
Nilai b = 6
-------------------------
a + b = 26
a - b = 14
a * b = 120
a / b = 3.3333333333333
a % b = 2
2 ** 3 (2 pangkat 3) = 8

--- OPERATOR ASSIGNMENT ---
Nilai awal x = 10
x += 5  -> 15
x -= 3  -> 12
x *= 2  -> 24
x /= 4  -> 6
x %= 4  -> 2

--- INCREMENT & DECREMENT ---
angka++ -> 6
angka-- -> 5
y++ (tampilin dulu baru nambah) : 5
nilai y setelahnya             : 6
++z (nambah dulu baru tampilin) : 6
==================================================
*/
