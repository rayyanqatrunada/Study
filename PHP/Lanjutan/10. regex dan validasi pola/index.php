<?php
/* rekap php lanjutan */
/* 10. regular expression (regex) dan validasi pola */

// ==========================================
// ## REGEX (REGULAR EXPRESSION) DI PHP
// ==========================================

/*
RegEx adalah pola teks untuk mencari, mencocokkan, atau memvalidasi format string
(seperti validasi email, no HP, username tanpa spasi, dll).

2 FUNGSI REGEX PALING SERING DIPAKAI DI PHP:
1. preg_match($pola, $teks)     -> mengecek apakah teks cocok dengan pola (1 jika cocok, 0 jika tidak).
2. preg_replace($pola, $baru, $teks) -> mengganti teks yang cocok dengan pola.
*/


// ==========================================
// ## 1. MENGECEK POLA KATA (preg_match)
// ==========================================
echo "--- 1. MENGECEK POLA KATA SEDERHANA ---\n";

$kalimat = "Furina adalah karakter terbaik";

// Pola '/furina/i' -> huruf 'i' di akhir artinya case-insensitive (abaikan huruf besar/kecil)
if (preg_match("/furina/i", $kalimat)) {
    echo "-> Kata 'furina' ditemukan di dalam kalimat!\n";
} else {
    echo "-> Tidak ditemukan.\n";
}


// ==========================================
// ## 2. VALIDASI FORMAT EMAIL
// ==========================================
echo "\n--- 2. VALIDASI EMAIL DENGAN REGEX ---\n";

function validasiEmail($email) {
    // Pola umum email: ada karakter teks, tanda @, domain, dan titik ekstensi
    $polaEmail = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

    if (preg_match($polaEmail, $email)) {
        echo "Email '$email' : VALID!\n";
    } else {
        echo "Email '$email' : TIDAK VALID!\n";
    }
}

validasiEmail("rayyan@gmail.com");
validasiEmail("furina.fontaine@archon.co.id");
validasiEmail("salahFormatEmail.com"); // gak ada tanda @


// ==========================================
// ## 3. VALIDASI HANYA ANGKA (NOMOR TELEPON)
// ==========================================
echo "\n--- 3. VALIDASI NOMOR TELEPON (HANYA ANGKA) ---\n";

// Pola '/^[0-9]+$/' artinya dari awal sampai akhir wajib berupa angka
$nomorHP = "08123456789";
$nomorSalah = "0812abc789";

echo "Nomor 1 : " . (preg_match("/^[0-9]+$/", $nomorHP) ? "Benar angka semua" : "Ada hurufnya!") . "\n";
echo "Nomor 2 : " . (preg_match("/^[0-9]+$/", $nomorSalah) ? "Benar angka semua" : "Ada hurufnya!") . "\n";


// ==========================================
// ## 4. MENGGANTI POLA TEKS (preg_replace)
// ==========================================
echo "\n--- 4. MENGGANTI TEKS BERDASARKAN POLA ---\n";

// Contoh: sensor nomor rahasia (mengganti semua angka dengan '*')
$pesanRahasia = "Password kamu adalah 123456 dan PIN 9988";
$sensorAngka = preg_replace("/[0-9]/", "*", $pesanRahasia);

echo "Teks asli   : $pesanRahasia\n";
echo "Teks sensor : $sensorAngka\n";


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. MENGECEK POLA KATA SEDERHANA ---
-> Kata 'furina' ditemukan di dalam kalimat!

--- 2. VALIDASI EMAIL DENGAN REGEX ---
Email 'rayyan@gmail.com' : VALID!
Email 'furina.fontaine@archon.co.id' : VALID!
Email 'salahFormatEmail.com' : TIDAK VALID!

--- 3. VALIDASI NOMOR TELEPON (HANYA ANGKA) ---
Nomor 1 : Benar angka semua
Nomor 2 : Ada hurufnya!

--- 4. MENGGANTI TEKS BERDASARKAN POLA ---
Teks asli   : Password kamu adalah 123456 dan PIN 9988
Teks sensor : Password kamu adalah ****** dan PIN ****
==================================================
*/
