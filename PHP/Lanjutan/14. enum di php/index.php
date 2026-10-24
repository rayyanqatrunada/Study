<?php
/* rekap php lanjutan */
/* 14. enum di php (fitur modern php 8.1+) */

// ==========================================
// ## NATIVE ENUM DI PHP 8.1+
// ==========================================

/*
Sama seperti di Java, sejak PHP 8.1 kita punya tipe data 'Enum'.
Enum digunakan untuk mendefinisikan kumpulan konstanta yang sudah pasti.
Keuntungan: TYPE-SAFE (kebal dari salah ketik / typo string).
*/


// 1. Backed Enum (Enum yang punya nilai string atau int)
enum ElemenKarakter: string {
    case HYDRO = "Hydro";
    case PYRO  = "Pyro";
    case ANEMO = "Anemo";
    case CRYO  = "Cryo";
    case GEO   = "Geo";
}

enum StatusPesanan: int {
    case PENDING = 1;
    case DIPROSES = 2;
    case SELESAI = 3;
}


// ==========================================
// ## 1. MENETAPKAN DAN MEMBACA NILAI ENUM
// ==========================================
echo "--- 1. MENETAPKAN NILAI ENUM ---\n";

$elemenFurina = ElemenKarakter::HYDRO;
$statusOrder = StatusPesanan::SELESAI;

// ->name  : mengambil nama casenya ("HYDRO")
// ->value : mengambil nilai aslinya ("Hydro")
echo "Nama Case Enum : " . $elemenFurina->name . "\n";
echo "Nilai Value    : " . $elemenFurina->value . "\n";
echo "Kode Status    : " . $statusOrder->value . "\n\n";


// ==========================================
// ## 2. ENUM DALAM MATCH EXPRESSION
// ==========================================
echo "--- 2. ENUM DALAM MATCH EXPRESSION ---\n";

function infoElemen(ElemenKarakter $elemen): string {
    return match ($elemen) {
        ElemenKarakter::HYDRO => "Elemen Air: Yang Mulia Furina menguasai lautan!",
        ElemenKarakter::PYRO  => "Elemen Api: Membakar musuh dengan dahsyat!",
        ElemenKarakter::ANEMO => "Elemen Angin: Menghembuskan kebebasan Mondstadt!",
        default               => "Elemen lainnya di Teyvat.",
    };
}

echo infoElemen($elemenFurina) . "\n";
echo infoElemen(ElemenKarakter::PYRO) . "\n\n";


// ==========================================
// ## 3. MENGUBAH STRING KE ENUM (Enum::from)
// ==========================================
echo "--- 3. MENGUBAH STRING INPUT MENJADI ENUM ---\n";

$inputTeks = "Hydro";
$enumHasil = ElemenKarakter::from($inputTeks); // otomatis jadi ElemenKarakter::HYDRO

echo "Hasil konversi: " . $enumHasil->name . "\n\n";


// ==========================================
// ## 4. LOOPING SEMUA DAFTAR ENUM (cases())
// ==========================================
echo "--- 4. DAFTAR SEMUA ELEMEN (cases()) ---\n";

foreach (ElemenKarakter::cases() as $item) {
    echo "- " . $item->name . " => " . $item->value . "\n";
}


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. MENETAPKAN NILAI ENUM ---
Nama Case Enum : HYDRO
Nilai Value    : Hydro
Kode Status    : 3

--- 2. ENUM DALAM MATCH EXPRESSION ---
Elemen Air: Yang Mulia Furina menguasai lautan!
Elemen Api: Membakar musuh dengan dahsyat!

--- 3. MENGUBAH STRING INPUT MENJADI ENUM ---
Hasil konversi: HYDRO

--- 4. DAFTAR SEMUA ELEMEN (cases()) ---
- HYDRO => Hydro
- PYRO => Pyro
- ANEMO => Anemo
- CRYO => Cryo
- GEO => Geo
==================================================
*/
