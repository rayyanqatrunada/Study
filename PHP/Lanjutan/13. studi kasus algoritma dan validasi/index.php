<?php
/* rekap php lanjutan */
/* 13. studi kasus gabungan: algoritma, filter, dan validasi data */

// ==========================================
// ## STUDI KASUS LOGIKA LANJUTAN DI PHP
// ==========================================

/*
Di modul ini kita menggabungkan berbagai materi lanjutan:
1. Algoritma Searching (Binary Search manual)
2. Filter data dinamis pakai array_filter & arrow function
3. Validasi keamanan akun pakai Regex & Exception
4. Penyimpanan data ke format JSON
*/


// --- BAGIAN 1: FILTER DATA DENGAN ARROW FUNCTION ---
echo "--- 1. FILTER KARAKTER LEVEL TINGGI (LEVEL >= 80) ---\n";

$databaseWaifu = [
    ["nama" => "Furina",    "elemen" => "Hydro",    "level" => 90],
    ["nama" => "Clara",     "elemen" => "Physical", "level" => 80],
    ["nama" => "Yui",       "elemen" => "Light",    "level" => 65],
    ["nama" => "Charlotta", "elemen" => "Light",    "level" => 85],
    ["nama" => "Qiqi",      "elemen" => "Cryo",     "level" => 50]
];

// Menyaring hanya karakter yang levelnya >= 80
$waifuPro = array_filter($databaseWaifu, fn($w) => $w['level'] >= 80);

foreach ($waifuPro as $w) {
    echo "- {$w['nama']} (Elemen: {$w['elemen']}, Level: {$w['level']})\n";
}


// --- BAGIAN 2: ALGORITMA BINARY SEARCH MANUAL ---
echo "\n--- 2. BINARY SEARCH PADA DATA TERURUT ---\n";

$angkaTerurut = [10, 20, 35, 48, 62, 77, 85, 99];
$target = 62;

function binarySearchPHP(array $arr, int $target): int {
    $kiri = 0;
    $kanan = count($arr) - 1;

    while ($kiri <= $kanan) {
        $tengah = intdiv($kiri + $kanan, 2);

        if ($arr[$tengah] === $target) {
            return $tengah; // ketemu!
        }
        if ($arr[$tengah] < $target) {
            $kiri = $tengah + 1;
        } else {
            $kanan = $tengah - 1;
        }
    }
    return -1; // tidak ditemukan
}

$hasilCari = binarySearchPHP($angkaTerurut, $target);
echo "Mencari angka $target -> " . ($hasilCari !== -1 ? "Ketemu di index ke-$hasilCari!" : "Tidak ada!") . "\n";


// --- BAGIAN 3: VALIDASI REGISTRASI DENGAN REGEX & EXCEPTION ---
echo "\n--- 3. VALIDASI REGISTRASI AKUN ---\n";

class ValidasiUserException extends Exception {}

function daftarkanPengguna(string $username, string $password): array {
    // 1. Username hanya boleh huruf kecil dan angka (tanpa spasi)
    if (!preg_match("/^[a-z0-9_]+$/", $username)) {
        throw new ValidasiUserException("Username hanya boleh huruf kecil, angka, dan underscore!");
    }

    // 2. Password minimal 8 karakter dan harus mengandung minimal 1 angka
    if (strlen($password) < 8 || !preg_match("/[0-9]/", $password)) {
        throw new ValidasiUserException("Password minimal 8 karakter dan WAJIB mengandung angka!");
    }

    // Return data jika valid
    return [
        "username"    => $username,
        "passwordHash"=> password_hash($password, PASSWORD_BCRYPT), // fungsi hash bawaan PHP!
        "terdaftarPada"=> (new DateTime())->format("d-m-Y H:i:s")
    ];
}

// Uji coba 1: Password lemah (tanpa angka)
try {
    daftarkanPengguna("furina", "sayangbanget");
} catch (ValidasiUserException $e) {
    echo "-> [REGISTRASI GAGAL] " . $e->getMessage() . "\n";
}

// Uji coba 2: Berhasil
try {
    $akunBaru = daftarkanPengguna("furina_hydro", "archon12345");
    echo "-> [REGISTRASI BERHASIL] Akun '{$akunBaru['username']}' sukses didaftarkan!\n";
    echo "   Waktu daftar: {$akunBaru['terdaftarPada']}\n";
    echo "   Bentuk JSON : " . json_encode($akunBaru) . "\n";
} catch (ValidasiUserException $e) {
    echo "-> [GAGAL] " . $e->getMessage() . "\n";
}


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. FILTER KARAKTER LEVEL TINGGI (LEVEL >= 80) ---
- Furina (Elemen: Hydro, Level: 90)
- Clara (Elemen: Physical, Level: 80)
- Charlotta (Elemen: Light, Level: 85)

--- 2. BINARY SEARCH PADA DATA TERURUT ---
Mencari angka 62 -> Ketemu di index ke-4!

--- 3. VALIDASI REGISTRASI AKUN ---
-> [REGISTRASI GAGAL] Password minimal 8 karakter dan WAJIB mengandung angka!
-> [REGISTRASI BERHASIL] Akun 'furina_hydro' sukses didaftarkan!
   Waktu daftar: 25-10-2026 00:14:30
   Bentuk JSON : {"username":"furina_hydro","passwordHash":"...","terdaftarPada":"..."}
==================================================
*/
