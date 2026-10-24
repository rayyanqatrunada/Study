<?php
/* rekap php lanjutan */
/* 11. operator & fitur modern php 8+ */

// ==========================================
// ## 1. NULL COALESCING ASSIGNMENT (??=)
// ==========================================

/*
Operator '??=' adalah shortcut:
"Jika variabel ini belum ada atau bernilai null, isi dengan nilai default di kanannya!"
*/

echo "--- 1. NULL COALESCING ASSIGNMENT (??=) ---\n";

$pengaturan = [];

// Jika key 'tema' belum ada, otomatis diisi "Gelap"
$pengaturan['tema'] ??= "Gelap";
echo "Tema pertama kali: " . $pengaturan['tema'] . "\n";

// Jika diisi lagi, karena nilainya sudah ada, tidak akan ditimpa
$pengaturan['tema'] ??= "Terang";
echo "Tema setelahnya  : " . $pengaturan['tema'] . "\n"; // tetap "Gelap"


// ==========================================
// ## 2. HELPER STRING MODERN (PHP 8+)
// ==========================================
// Di PHP 8+, kita gak perlu ribet pakai strpos() lagi untuk cek isi teks!
echo "\n--- 2. FUNGSI STRING MODERN PHP 8 ---\n";

$pesan = "Furina is the best Hydro Archon";

// str_contains(): apakah mengandung kata tertentu
echo "str_contains('Hydro')   : ";
var_dump(str_contains($pesan, "Hydro")); // bool(true)

// str_starts_with(): apakah diawali kata tertentu
echo "str_starts_with('Furina'): ";
var_dump(str_starts_with($pesan, "Furina")); // bool(true)

// str_ends_with(): apakah diakhiri kata tertentu
echo "str_ends_with('Archon') : ";
var_dump(str_ends_with($pesan, "Archon")); // bool(true)


// ==========================================
// ## 3. UNION TYPES (BISA BANYAK TIPE DATA)
// ==========================================
// Parameter fungsi bisa menerima beberapa tipe data sekaligus (misal int ATAU float)
echo "\n--- 3. UNION TYPES (int|float) ---\n";

function hitungDiskon(int|float $harga, int|float $persen): float {
    return $harga - ($harga * ($persen / 100));
}

echo "Diskon int   : " . hitungDiskon(100000, 10) . "\n";   // 90000
echo "Diskon float : " . hitungDiskon(250000.5, 20.5) . "\n"; // 198750.3975


// ==========================================
// ## 4. NULLSAFE OPERATOR (?->)
// ==========================================
// Memanggil method/properti pada objek yang mungkin null tanpa bikin crash
echo "\n--- 4. NULLSAFE OPERATOR (?->) ---\n";

class ProfilPengguna {
    public ?string $bio = null;
    public function getStatus(): string {
        return "Online";
    }
}

$userAda = new ProfilPengguna();
$userKosong = null; // objek kosong / null

// Kalau pakai $userKosong->getStatus() biasa, PHP akan FATAL ERROR crash!
// Tapi kalau pakai '?->' (Nullsafe), PHP akan mengembalikan null dengan aman tanpa error:
echo "User ada    : " . $userAda?->getStatus() . "\n";
echo "User kosong : ";
var_dump($userKosong?->getStatus()); // NULL (aman tanpa error crash!)


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. NULL COALESCING ASSIGNMENT (??=) ---
Tema pertama kali: Gelap
Tema setelahnya  : Gelap

--- 2. FUNGSI STRING MODERN PHP 8 ---
str_contains('Hydro')   : bool(true)
str_starts_with('Furina'): bool(true)
str_ends_with('Archon') : bool(true)

--- 3. UNION TYPES (int|float) ---
Diskon int   : 90000
Diskon float : 198750.3975

--- 4. NULLSAFE OPERATOR (?->) ---
User ada    : Online
User kosong : NULL
==================================================
*/
