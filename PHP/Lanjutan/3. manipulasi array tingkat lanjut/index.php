<?php
/* rekap php lanjutan */
/* 3. manipulasi array tingkat lanjut */

// ==========================================
// ## FUNGSI-FUNGSI SAKTI ARRAY DI PHP
// ==========================================

/*
Di PHP, array adalah struktur data paling penting.
PHP punya banyak fungsi fungsional bawaan yang sangat powerful
sehingga kita gak perlu capek-capek nulis perulangan for loop manual!
*/

$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


// ==========================================
// ## 1. ARRAY_FILTER (MENYARING DATA)
// ==========================================
// Mengambil data yang lolos kondisi tertentu saja
echo "--- 1. ARRAY_FILTER (FILTER ANGKA GENAP) ---\n";

$angkaGenap = array_filter($angka, fn($n) => $n % 2 === 0);
echo "Angka genap: " . implode(", ", $angkaGenap) . "\n";


// ==========================================
// ## 2. ARRAY_MAP (TRANSFORMASI SEMUA ELEMEN)
// ==========================================
// Mengubah setiap isi elemen dengan rumus tertentu
echo "\n--- 2. ARRAY_MAP (KALI DUA) ---\n";

$kaliDua = array_map(fn($n) => $n * 2, $angka);
echo "Setelah dikali 2: " . implode(", ", $kaliDua) . "\n";


// ==========================================
// ## 3. ARRAY_REDUCE (MENGAKUMULASI JADI 1 NILAI)
// ==========================================
// Menjumlahkan seluruh isi array dari depan ke belakang
echo "\n--- 3. ARRAY_REDUCE (TOTAL JUMLAH) ---\n";

$totalSemua = array_reduce($angka, fn($total, $item) => $total + $item, 0);
echo "Total seluruh angka 1 s.d 10 = $totalSemua\n";


// ==========================================
// ## 4. ARRAY_COLUMN (AMBIL 1 KOLOM SPESIFIK)
// ==========================================
// Sangat berguna kalau kita punya data tabel dan cuma butuh kolom namanya saja
echo "\n--- 4. ARRAY_COLUMN ---\n";

$daftarUser = [
    ["id" => 1, "nama" => "Furina", "role" => "Archon"],
    ["id" => 2, "nama" => "Clara",  "role" => "Member"],
    ["id" => 3, "nama" => "Yui",    "role" => "Member"]
];

// Ambil hanya kolom "nama"
$kumpulanNama = array_column($daftarUser, "nama");
echo "Daftar nama user: " . implode(", ", $kumpulanNama) . "\n";


// ==========================================
// ## 5. ARRAY_MERGE & ARRAY_UNIQUE
// ==========================================
echo "\n--- 5. GABUNG DAN HAPUS DUPLIKAT ---\n";

$timA = ["Furina", "Clara"];
$timB = ["Yui", "Furina", "Charlotta"]; // Furina duplikat

// array_merge(): menggabungkan 2 array jadi 1
$gabungan = array_merge($timA, $timB);
echo "Hasil gabung (ada duplikat): " . implode(", ", $gabungan) . "\n";

// array_unique(): membuang data yang duplikat
$bersih = array_unique($gabungan);
echo "Setelah dibersihkan         : " . implode(", ", $bersih) . "\n";


// ==========================================
// ## 6. IN_ARRAY (CEK KEBERADAAN DATA)
// ==========================================
echo "\n--- 6. IN_ARRAY ---\n";
echo "Apakah ada 'Furina'? : " . (in_array("Furina", $bersih) ? "Ada!" : "Gak ada!") . "\n";
echo "Apakah ada 'Qiqi'?   : " . (in_array("Qiqi", $bersih) ? "Ada!" : "Gak ada!") . "\n";


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. ARRAY_FILTER (FILTER ANGKA GENAP) ---
Angka genap: 2, 4, 6, 8, 10

--- 2. ARRAY_MAP (KALI DUA) ---
Setelah dikali 2: 2, 4, 6, 8, 10, 12, 14, 16, 18, 20

--- 3. ARRAY_REDUCE (TOTAL JUMLAH) ---
Total seluruh angka 1 s.d 10 = 55

--- 4. ARRAY_COLUMN ---
Daftar nama user: Furina, Clara, Yui

--- 5. GABUNG DAN HAPUS DUPLIKAT ---
Hasil gabung (ada duplikat): Furina, Clara, Yui, Furina, Charlotta
Setelah dibersihkan         : Furina, Clara, Yui, Charlotta

--- 6. IN_ARRAY ---
Apakah ada 'Furina'? : Ada!
Apakah ada 'Qiqi'?   : Gak ada!
==================================================
*/
