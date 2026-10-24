<?php
/* rekap dasar php */
/* 7. percabangan if else */

// ==========================================
// ## PERCABANGAN IF, ELSEIF, ELSE
// ==========================================

$nama = "Furina";


// 1. If biasa
if ($nama === "Furina") {
    echo "Hai manisss\n";
    echo "hari ini kamu cantik banget\n";
}
echo "Terima kasih $nama\n\n";


// 2. If - Else
if ($nama === "Clara") {
    echo "Hai Clara!\n";
} else {
    echo "ah, kamu bukan Clara melainkan $nama\n";
}
echo "akhir dari blok if else\n\n";


// 3. If - Elseif - Else
// catatan: di PHP kita bisa tulis 'elseif' nyambung atau 'else if' terpisah, dua-duanya jalan!
echo "--- CONTOH PILIH KARAKTER ---\n";
$karakter = "Charlotta";

if ($karakter === "Furina") {
    echo "Hai cantikk\n";
} elseif ($karakter === "Yui") {
    echo "Hai manisss\n";
} elseif ($karakter === "Charlotta") {
    echo "Hai imutt\n";
} else {
    echo "Oh, namamu $karakter\n";
}


// 4. Contoh Grading Nilai
echo "\n--- CONTOH GRADING NILAI ---\n";
$nilai = 82;

if ($nilai >= 90) {
    echo "Grade: A (Sempurna!)\n";
} elseif ($nilai >= 80) {
    echo "Grade: B (Bagus banget!)\n";
} elseif ($nilai >= 70) {
    echo "Grade: C (Cukup)\n";
} else {
    echo "Grade: D (Belajar lagi ya)\n";
}


// ==========================================
// ## TERNARY OPERATOR & NULL COALESCING (??)
// ==========================================

// Ternary operator: cara nulis if-else 1 baris
// format: (kondisi) ? nilai_jika_true : nilai_jika_false;
$umur = 19;
$status = ($umur >= 18) ? "Sudah Dewasa" : "Masih Kecil";
echo "\nUmur: $umur -> Status: $status\n";


// Null Coalescing Operator (??):
// Trik sakti PHP: kalau variabelnya null atau gak ada, pakai nilai cadangan/default di kanannya!
$inputUser = null;
$username = $inputUser ?? "Tamu / Guest";
echo "Halo, $username!\n"; // nampilin "Halo, Tamu / Guest!"


/*
==================================================
OUTPUT TERMINAL:
==================================================
Hai manisss
hari ini kamu cantik banget
Terima kasih Furina

ah, kamu bukan Clara melainkan Furina
akhir dari blok if else

--- CONTOH PILIH KARAKTER ---
Hai imutt

--- CONTOH GRADING NILAI ---
Grade: B (Bagus banget!)

Umur: 19 -> Status: Sudah Dewasa
Halo, Tamu / Guest!
==================================================
*/
