<?php
/* rekap php lanjutan */
/* 5. error handling try catch dan exception */

// ==========================================
// ## PENANGANAN ERROR (TRY - CATCH - FINALLY)
// ==========================================

/*
Sama persis seperti di Java dan Python (try-except).
Di PHP kita pakai:
try {
    // kode yang rawan error
} catch (Exception $e) {
    // aksi kalau error terjadi (biar web gak crash/blank putih)
} finally {
    // blok yang selalu jalan apapun yang terjadi
}
*/


// ==========================================
// ## 1. MENANGANI PEMBAGIAN DENGAN NOL
// ==========================================
echo "--- 1. MENANGKAP ERROR BAGI NOL ---\n";

try {
    $a = 10;
    $b = 0;

    echo "Mencoba membagi $a dengan $b...\n";
    // Di PHP modern, bagi nol melempar DivisionByZeroError
    $hasil = intdiv($a, $b);
    echo "Hasil: $hasil\n";
} catch (DivisionByZeroError $e) {
    echo "-> Berhasil ditangkap! [Pesan]: " . $e->getMessage() . "\n";
}

echo "Program tetap selamat dan lanjut berjalan normal.\n\n";


// ==========================================
// ## 2. MELEMPAR ERROR SENDIRI (throw new Exception)
// ==========================================
echo "--- 2. MELEMPAR ERROR SENGAJA (throw) ---\n";

function validasiLogin($username, $password) {
    if (empty($username)) {
        throw new InvalidArgumentException("Username tidak boleh kosong!");
    }
    if (strlen($password) < 6) {
        throw new Exception("Password terlalu pendek! Minimal 6 karakter.");
    }
    echo "Validasi berhasil untuk user: $username\n";
}

// Coba test dengan password yang terlalu pendek
try {
    validasiLogin("furina", "123");
} catch (InvalidArgumentException $e) {
    echo "-> Error Argumen: " . $e->getMessage() . "\n";
} catch (Exception $e) {
    echo "-> Error Umum   : " . $e->getMessage() . "\n";
} finally {
    echo "-> [FINALLY] Pengecekan login selesai diproses.\n";
}


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. MENANGKAP ERROR BAGI NOL ---
Mencoba membagi 10 dengan 0...
-> Berhasil ditangkap! [Pesan]: Division by zero
Program tetap selamat dan lanjut berjalan normal.

--- 2. MELEMPAR ERROR SENGAJA (throw) ---
-> Error Umum   : Password terlalu pendek! Minimal 6 karakter.
-> [FINALLY] Pengecekan login selesai diproses.
==================================================
*/
