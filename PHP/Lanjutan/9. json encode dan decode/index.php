<?php
/* rekap php lanjutan */
/* 9. json encode dan decode (standar data api) */

// ==========================================
// ## JSON (JAVASCRIPT OBJECT NOTATION)
// ==========================================

/*
Ketika kita membuat Web API atau backend (misal integrasi dengan frontend React/Vue),
data hampir selalu dikirim dalam format teks JSON.

Di PHP ada 2 fungsi utama:
1. json_encode() -> mengubah Array PHP menjadi teks JSON (buat dikirim ke user/frontend).
2. json_decode() -> mengubah teks JSON menjadi Array PHP (buat diproses di backend).
*/


// ==========================================
// ## 1. ARRAY PHP KE JSON (json_encode)
// ==========================================
echo "--- 1. ARRAY PHP KE JSON STRING ---\n";

$dataKarakter = [
    "nama"      => "Furina",
    "elemen"    => "Hydro",
    "level"     => 90,
    "senjata"   => ["Splendor of Tranquil Waters", "Festering Desire"],
    "isArchon"  => true
];

// json_encode(): ubah array jadi teks JSON
// JSON_PRETTY_PRINT: opsi agar tampilan JSON rapi ada enter dan spasinya
$jsonString = json_encode($dataKarakter, JSON_PRETTY_PRINT);
echo $jsonString . "\n\n";


// ==========================================
// ## 2. JSON KE ARRAY PHP (json_decode)
// ==========================================
echo "--- 2. JSON STRING KEMBALI KE ARRAY PHP ---\n";

$teksJsonMasuk = '{
    "nama": "Clara",
    "elemen": "Physical",
    "level": 80,
    "teman": "Svarog"
}';

/*
PERHATIAN PENTING PADA json_decode:
Parameter kedua ($associative) WAJIB bernilai 'true'!
json_decode($json, true) -> diubah jadi ARRAY ASOSIATIF (bisa diakses $arr["nama"]).
Kalau parameter kedua lupa diisi true, PHP akan mengubahnya jadi stdClass Object ($obj->nama).
*/

$arrayHasil = json_decode($teksJsonMasuk, true);

echo "Tipe data hasil decode : " . gettype($arrayHasil) . "\n";
echo "Nama Karakter          : " . $arrayHasil["nama"] . "\n";
echo "Elemen                 : " . $arrayHasil["elemen"] . "\n";
echo "Teman Pelindung        : " . $arrayHasil["teman"] . "\n";


// ==========================================
// ## 3. MENGECEK ERROR JSON (json_last_error_msg)
// ==========================================
echo "\n--- 3. PENGECEKAN JIKA FORMAT JSON RUSAK ---\n";

$jsonRusak = '{"nama": "Furina", rusak format ini...}';
$hasilRusak = json_decode($jsonRusak, true);

if ($hasilRusak === null) {
    echo "-> Gagal decode JSON! Pesan error: " . json_last_error_msg() . "\n";
}


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. ARRAY PHP KE JSON STRING ---
{
    "nama": "Furina",
    "elemen": "Hydro",
    "level": 90,
    "senjata": [
        "Splendor of Tranquil Waters",
        "Festering Desire"
    ],
    "isArchon": true
}

--- 2. JSON STRING KEMBALI KE ARRAY PHP ---
Tipe data hasil decode : array
Nama Karakter          : Clara
Elemen                 : Physical
Teman Pelindung        : Svarog

--- 3. PENGECEKAN JIKA FORMAT JSON RUSAK ---
-> Gagal decode JSON! Pesan error: Syntax error
==================================================
*/
