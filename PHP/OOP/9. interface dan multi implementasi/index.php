<?php
/* rekap php oop */
/* 9. interface dan multiple implements */

// ==========================================
// ## PENGERTIAN INTERFACE
// ==========================================
/*
Interface adalah KONTRAK PERJANJIAN kerja.
- Interface HANYA boleh berisi deklarasi method (semuanya otomatis public dan tanpa body {}).
- Interface TIDAK BISA memiliki property biasa (hanya konstanta).
- Class yang berjanji tunduk pada interface menggunakan kata kunci 'implements'.

KELEBIHAN TERBESAR INTERFACE DIBANDING CLASS EXTENDS:
PHP hanya membolehkan single inheritance untuk class (cuma bisa extends 1),
TETAPI sebuah class boleh meng-implements BANYAK INTERFACE SEKALIGUS!
Contoh: class Robot implements BisaBergerak, BisaMenembak, BisaCasBaterai
*/

// Interface 1: Kontrak untuk karakter yang bisa menyembuhkan
interface BisaHeal
{
    public function heal(string $target): void;
}

// Interface 2: Kontrak untuk karakter yang punya jurus Ultimate panggung
interface PunyaUltimate
{
    public function pemicuBurst(string $namaJurus): void;
}


// --- CLASS 1: FURINA (MENGIMPLEMENTASIKAN DUA INTERFACE SEKALIGUS) ---
class Furina implements BisaHeal, PunyaUltimate
{
    public string $nama = "Furina";

    // Wajib membuat implementasi method heal() dari BisaHeal
    public function heal(string $target): void
    {
        echo "[$this->nama] Menyanyi menenangkan air mata untuk menyembuhkan $target!\n";
    }

    // Wajib membuat implementasi method pemicuBurst() dari PunyaUltimate
    public function pemicuBurst(string $namaJurus): void
    {
        echo "[$this->nama] Mengaktifkan Ultimate panggung: '$namaJurus'! Semua penonton bersorak!\n";
    }
}


// --- CLASS 2: CLARA (HANYA MENGIMPLEMENTASIKAN PUNYA ULTIMATE BERSAMA SVAROG) ---
class Clara implements PunyaUltimate
{
    public string $nama = "Clara";

    public function pemicuBurst(string $namaJurus): void
    {
        echo "[$this->nama] Memanggil Svarog: '$namaJurus'! Perlindungan absolut aktif!\n";
    }
}


// ==========================================
// ## KEKUATAN POLYMORPHISM LEWAT INTERFACE
// ==========================================
// Function ini tidak peduli apakah object-nya Furina, Clara, atau karakter lain.
// Asalkan object tersebut memenuhi kontrak 'PunyaUltimate', function ini bisa menerimanya!
function rayakanPertunjukan(PunyaUltimate $karakter, string $jurus): void
{
    echo ">> Memulai pertunjukan spesial: <<\n";
    $karakter->pemicuBurst($jurus);
}


// ==========================================
// ## PENGUJIAN
// ==========================================

echo "--- 1. UJI COBA IMPLEMENTASI GANDA (FURINA) ---\n";
$furina = new Furina();
$furina->heal("Clara");
$furina->pemicuBurst("Let the People Rejoice");

echo "\n--- 2. UJI COBA POLYMORPHISM DENGAN TYPE-HINT INTERFACE ---\n";
$clara = new Clara();
rayakanPertunjukan($furina, "Tarian Ombak Fontaine");
rayakanPertunjukan($clara, "Perlindungan Svarog");

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. UJI COBA IMPLEMENTASI GANDA (FURINA) ---
[Furina] Menyanyi menenangkan air mata untuk menyembuhkan Clara!
[Furina] Mengaktifkan Ultimate panggung: 'Let the People Rejoice'! Semua penonton bersorak!

--- 2. UJI COBA POLYMORPHISM DENGAN TYPE-HINT INTERFACE ---
>> Memulai pertunjukan spesial: <<
[Furina] Mengaktifkan Ultimate panggung: 'Tarian Ombak Fontaine'! Semua penonton bersorak!
>> Memulai pertunjukan spesial: <<
[Clara] Memanggil Svarog: 'Perlindungan Svarog'! Perlindungan absolut aktif!
==================================================
*/
