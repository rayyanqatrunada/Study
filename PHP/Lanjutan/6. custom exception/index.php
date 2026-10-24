<?php
/* rekap php lanjutan */
/* 6. custom exception (membuat error buatan sendiri) */

// ==========================================
// ## DEFINISI CLASS CUSTOM EXCEPTION
// ==========================================
// Cukup buat class baru yang mewarisi (extends) dari Exception

class SaldoKurangException extends Exception {}
class WaifuNotFoundException extends Exception {}


// ==========================================
// ## SIMULASI LOGIKA TRANSAKSI DENGAN CUSTOM ERROR
// ==========================================

function tarikSaldo($saldoSaatIni, $nominalTarik) {
    if ($nominalTarik > $saldoSaatIni) {
        $selisih = $nominalTarik - $saldoSaatIni;
        throw new SaldoKurangException("Saldo gak cukup! Kurang Rp " . number_format($selisih, 0, ',', '.'));
    }
    return $saldoSaatIni - $nominalTarik;
}

function cariKarakter($nama, $daftarTim) {
    if (!in_array(strtolower($nama), array_map('strtolower', $daftarTim))) {
        throw new WaifuNotFoundException("Karakter '$nama' tidak ada di dalam tim!");
    }
    echo "-> Karakter '$nama' ditemukan di dalam tim!\n";
}


// ==========================================
// ## PENGUJIAN LOGIKA
// ==========================================

echo "--- 1. SIMULASI SALDO ATM ---\n";
$saldo = 50000;

try {
    echo "Saldo awal: Rp 50.000\n";
    echo "Mencoba tarik: Rp 80.000...\n";
    $saldo = tarikSaldo($saldo, 80000);
} catch (SaldoKurangException $e) {
    echo "-> Transaksi Gagal! [Error Khusus]: " . $e->getMessage() . "\n";
}

try {
    echo "\nMencoba tarik: Rp 30.000...\n";
    $saldo = tarikSaldo($saldo, 30000);
    echo "-> Berhasil tarik! Sisa saldo sekarang: Rp " . number_format($saldo, 0, ',', '.') . "\n";
} catch (SaldoKurangException $e) {
    echo "-> Error: " . $e->getMessage() . "\n";
}


echo "\n--- 2. SIMULASI PENCARIAN ANGGOTA TIM ---\n";
$tim = ["Furina", "Clara", "Yui"];

try {
    cariKarakter("Furina", $tim);
    cariKarakter("Klee", $tim); // ini bakal memicu WaifuNotFoundException
} catch (WaifuNotFoundException $e) {
    echo "-> Pencarian Gagal: " . $e->getMessage() . "\n";
}


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. SIMULASI SALDO ATM ---
Saldo awal: Rp 50.000
Mencoba tarik: Rp 80.000...
-> Transaksi Gagal! [Error Khusus]: Saldo gak cukup! Kurang Rp 30.000

Mencoba tarik: Rp 30.000...
-> Berhasil tarik! Sisa saldo sekarang: Rp 20.000

--- 2. SIMULASI PENCARIAN ANGGOTA TIM ---
-> Karakter 'Furina' ditemukan di dalam tim!
-> Pencarian Gagal: Karakter 'Klee' tidak ada di dalam tim!
==================================================
*/
