<?php
/* rekap dasar php */
/* 12. array associative (dictionary key-value) */

// ==========================================
// ## ARRAY ASSOCIATIVE (KEY => VALUE)
// ==========================================

/*
Di Python namanya 'Dictionary' ({"nama": "Furina"}).
Di Java namanya 'HashMap'.
Di PHP namanya 'Array Associative' dengan tanda panah tebal (=>).

Kita mengakses data menggunakan nama KUNCI (Key), bukan nomor index!
*/

// Membuat array associative
$profil = [
    "nama"    => "Furina",
    "elemen"  => "Hydro",
    "region"  => "Fontaine",
    "level"   => 90,
    "isArchon"=> true
];


// ==========================================
// ## 1. MENGAKSES DAN MENGUBAH DATA
// ==========================================
echo "--- 1. MENGAKSES DATA DENGAN KEY ---\n";
echo "Nama Karakter : " . $profil["nama"] . "\n";
echo "Elemen        : " . $profil["elemen"] . "\n";
echo "Level         : " . $profil["level"] . "\n";

// Mengubah nilai data
$profil["level"] = 95;
echo "Level baru    : " . $profil["level"] . "\n\n";

// Menambahkan data baru
$profil["senjata"] = "Sword";


// ==========================================
// ## 2. MENGECEK KEY (isset())
// ==========================================
echo "--- 2. MENGECEK KEBERADAAN KEY ---\n";

// isset() mengecek apakah key ada dan nilainya bukan null
echo "Apakah ada key 'elemen'? : ";
var_dump(isset($profil["elemen"])); // bool(true)

echo "Apakah ada key 'hp'?     : ";
var_dump(isset($profil["hp"]));     // bool(false)


// ==========================================
// ## 3. LOOPING KEY DAN VALUE (FOREACH)
// ==========================================
echo "\n--- 3. LOOPING SEMUA PROFIL (KEY => VALUE) ---\n";

// format: foreach ($namaArray as $kunci => $nilai)
foreach ($profil as $kunci => $nilai) {
    echo "- $kunci : $nilai\n";
}


// ==========================================
// ## 4. ARRAY MULTIDIMENSI (TABEL DATA)
// ==========================================
// Kumpulan array di dalam array (seperti baris-baris data database)
echo "\n--- 4. ARRAY MULTIDIMENSI ---\n";

$daftarWaifu = [
    [
        "nama"   => "Furina",
        "elemen" => "Hydro",
        "level"  => 90
    ],
    [
        "nama"   => "Clara",
        "elemen" => "Physical",
        "level"  => 80
    ],
    [
        "nama"   => "Yui",
        "elemen" => "Light",
        "level"  => 75
    ]
];

// Mengakses Clara (baris index 1, kolom 'nama')
echo "Karakter index ke-1: " . $daftarWaifu[1]["nama"] . "\n\n";

// Looping seluruh data tabel
echo "Daftar Seluruh Anggota Tim:\n";
foreach ($daftarWaifu as $index => $w) {
    $nomor = $index + 1;
    echo "$nomor. {$w['nama']} (Elemen: {$w['elemen']}, Level: {$w['level']})\n";
}


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. MENGAKSES DATA DENGAN KEY ---
Nama Karakter : Furina
Elemen        : Hydro
Level         : 90
Level baru    : 95

--- 2. MENGECEK KEBERADAAN KEY ---
Apakah ada key 'elemen'? : bool(true)
Apakah ada key 'hp'?     : bool(false)

--- 3. LOOPING SEMUA PROFIL (KEY => VALUE) ---
- nama : Furina
- elemen : Hydro
- region : Fontaine
- level : 95
- isArchon : 1
- senjata : Sword

--- 4. ARRAY MULTIDIMENSI ---
Karakter index ke-1: Clara

Daftar Seluruh Anggota Tim:
1. Furina (Elemen: Hydro, Level: 90)
2. Clara (Elemen: Physical, Level: 80)
3. Yui (Elemen: Light, Level: 75)
==================================================
*/
