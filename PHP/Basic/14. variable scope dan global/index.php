<?php
/* rekap dasar php */
/* 14. variable scope dan keyword global */

// ==========================================
// ## VARIABLE SCOPE DI PHP
// ==========================================

/*
KEUNIKAN PHP YANG WAJIB DIKETAHUI:
Di Python atau JavaScript, variabel di luar fungsi bisa langsung dibaca dari dalam fungsi.
TAPI DI PHP GAK BISA!
Variabel di luar fungsi dan variabel di dalam fungsi itu TERPISAH TOTAL secara default.
*/

$namaGlobal = "Furina (Hydro Archon)";
$angkaLuar = 100;


// ==========================================
// ## 1. MENCOBA AKSES VARIABEL LUAR (ERROR JIKA TANPA GLOBAL)
// ==========================================
function cobaAksesLuar() {
    // echo $namaGlobal; // INI BAKAL ERROR / WARNING "Undefined variable" kalau diaktifkan!
    echo "Variabel luar gak bisa langsung diakses begitu aja di PHP!\n";
}

echo "--- 1. AKSES VARIABEL LUAR ---\n";
cobaAksesLuar();


// ==========================================
// ## 2. CARA RESMI: MENGGUNAKAN KEYWORD 'global'
// ==========================================
// Kita deklarasikan keyword 'global' di baris paling atas dalam fungsi
function panggilDenganGlobal() {
    global $namaGlobal, $angkaLuar; // ambil variabel dari luar!
    echo "Berhasil diakses pake keyword global : $namaGlobal (angka: $angkaLuar)\n";
}

echo "\n--- 2. MEMAKAI KEYWORD GLOBAL ---\n";
panggilDenganGlobal();


// Cara alternatif: menggunakan array superglobal $GLOBALS
function panggilPakeSuperglobal() {
    echo "Pake \$GLOBALS : " . $GLOBALS['namaGlobal'] . "\n";
}
panggilPakeSuperglobal();


// ==========================================
// ## 3. LOCAL SCOPE (VARIABEL LOKAL FUNGSI)
// ==========================================
function buatVariabelLokal() {
    $rahasia = "Furina suka kue manis";
    echo "\nDi dalam fungsi: $rahasia\n";
}

buatVariabelLokal();
// echo $rahasia; // Error! Variabel $rahasia gak dikenal di luar fungsi.


// ==========================================
// ## 4. STATIC VARIABLE DALAM FUNGSI
// ==========================================
// Biasanya variabel lokal di dalam fungsi akan di-reset (dihapus) begitu fungsi selesai jalan.
// Tapi kalau kita kasih keyword 'static', nilainya AKAN TETAP DISIMPAN untuk panggilan berikutnya!

function hitungPengunjung() {
    static $total = 0; // nilainya gak akan di-reset ke 0 lagi di panggilan berikutnya
    $total++;
    echo "Pengunjung ke-$total datang!\n";
}

echo "\n--- 3. STATIC VARIABLE (NILAI DISIMPAN) ---\n";
hitungPengunjung(); // 1
hitungPengunjung(); // 2
hitungPengunjung(); // 3


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. AKSES VARIABEL LUAR ---
Variabel luar gak bisa langsung diakses begitu aja di PHP!

--- 2. MEMAKAI KEYWORD GLOBAL ---
Berhasil diakses pake keyword global : Furina (Hydro Archon) (angka: 100)
Pake $GLOBALS : Furina (Hydro Archon)

Di dalam fungsi: Furina suka kue manis

--- 3. STATIC VARIABLE (NILAI DISIMPAN) ---
Pengunjung ke-1 datang!
Pengunjung ke-2 datang!
Pengunjung ke-3 datang!
==================================================
*/
