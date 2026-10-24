<?php
/* rekap php lanjutan */
/* 15. generator dan keyword yield (efisiensi memori) */

// ==========================================
// ## GENERATOR & KEYWORD YIELD
// ==========================================

/*
Mirip seperti generator function di Python!
Biasanya kalau kita mau menghasilkan banyak data angka di dalam loop,
kita simpan ke dalam array. Masalahnya: kalau datanya 1 juta baris, RAM komputer bisa jebol!

Fungsi Generator menggunakan keyword 'yield':
Alih-alih mengembalikan array utuh, generator menghasilkan data SATU PER SATU saat diminta.
Hemat memori hingga 99%!
*/


// ==========================================
// ## 1. CONTOH DASAR GENERATOR (yield)
// ==========================================
echo "--- 1. GENERATOR SEDERHANA ---\n";

function ambilDaftarWaifu() {
    yield "Furina";
    yield "Clara";
    yield "Yui";
    yield "Charlotta";
}

// Cara pakainya persis seperti array, bisa di-loop dengan foreach!
foreach (ambilDaftarWaifu() as $waifu) {
    echo "- Karakter: $waifu\n";
}


// ==========================================
// ## 2. PERBANDINGAN MEMORI: ARRAY VS GENERATOR
// ==========================================
echo "\n--- 2. UJI EFISIENSI MEMORI (100.000 ANGKA) ---\n";

// Fungsi 1: Pakai Array Biasa (Memori Boros)
function buatAngkaArray($jumlah) {
    $data = [];
    for ($i = 1; $i <= $jumlah; $i++) {
        $data[] = $i;
    }
    return $data;
}

// Fungsi 2: Pakai Generator (Memori Super Hemat!)
function buatAngkaGenerator($jumlah) {
    for ($i = 1; $i <= $jumlah; $i++) {
        yield $i;
    }
}

// Tes memori Array biasa
$memoriAwal = memory_get_usage();
$arrayBiasa = buatAngkaArray(100000);
$memoriAkhir = memory_get_usage();
$penggunaanArray = round(($memoriAkhir - $memoriAwal) / 1024 / 1024, 2);
echo "Penggunaan RAM Array Biasa (100k data) : $penggunaanArray MB (Boros!)\n";
unset($arrayBiasa); // bersihkan memori

// Tes memori Generator
$memoriAwal = memory_get_usage();
$generatorHemat = buatAngkaGenerator(100000);
$memoriAkhir = memory_get_usage();
$penggunaanGen = round(($memoriAkhir - $memoriAwal) / 1024 / 1024, 4);
echo "Penggunaan RAM Generator (100k data)    : $penggunaanGen MB (Hampir 0 MB!)\n";


// Kita bisa looping generator-nya dengan santai
echo "\nMengambil 3 angka pertama dari generator:\n";
$counter = 0;
foreach ($generatorHemat as $angka) {
    echo "Angka ke-$angka\n";
    $counter++;
    if ($counter >= 3) break;
}


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. GENERATOR SEDERHANA ---
- Karakter: Furina
- Karakter: Clara
- Karakter: Yui
- Karakter: Charlotta

--- 2. UJI EFISIENSI MEMORI (100.000 ANGKA) ---
Penggunaan RAM Array Biasa (100k data) : 2.5 MB (Boros!)
Penggunaan RAM Generator (100k data)    : 0 MB (Hampir 0 MB!)

Mengambil 3 angka pertama dari generator:
Angka ke-1
Angka ke-2
Angka ke-3
==================================================
*/
