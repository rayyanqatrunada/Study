<?php
/* rekap php oop */
/* 5. inheritance pewarisan */

// ==========================================
// ## KONSEP INHERITANCE (PEWARISAN CLASS)
// ==========================================
/*
Inheritance memungkinkan sebuah class (anak / child class / subclass)
mewarisi semua properti dan method yang bersifat 'public' dan 'protected'
dari class induk (parent class / superclass) menggunakan kata kunci 'extends'.

KEUNTUNGAN:
- Menghindari duplikasi kode (DRY: Don't Repeat Yourself).
- Class anak bisa menambahkan fitur spesifik miliknya sendiri.
- CATATAN DI PHP: PHP hanya mendukung Single Inheritance (1 anak hanya boleh punya 1 induk langsung).
*/

// --- CLASS INDUK (PARENT CLASS) ---
class Karakter
{
    public function __construct(
        public string $nama,
        public int $level,
        public int $hp
    ) {}

    public function infoDasar(): void
    {
        echo "Nama: $this->nama | Level: $this->level | Max HP: $this->hp\n";
    }

    public function istirahat(): void
    {
        echo "$this->nama sedang beristirahat untuk memulihkan tenaga.\n";
    }
}

// --- CLASS ANAK 1: HEALER ---
class Healer extends Karakter
{
    // Healer mewarisi $nama, $level, $hp, infoDasar(), dan istirahat()
    // ditambah method khusus milik Healer:
    public function pulihkanTeman(string $target, int $jumlahHeal): void
    {
        echo "$this->nama mengeluarkan sihir penyembuh kepada $target sebesar +$jumlahHeal HP!\n";
    }
}

// --- CLASS ANAK 2: SWORDSMAN ---
class Swordsman extends Karakter
{
    // Method khusus milik Swordsman:
    public function tebasanPedang(string $target): void
    {
        echo "$this->nama menebaskan pedang suci ke arah musuh $target!\n";
    }
}


// ==========================================
// ## PENGUJIAN INSTANCE
// ==========================================

echo "--- 1. INSTANCE DARI CLASS HEALER (QIQI) ---\n";
$qiqi = new Healer("Qiqi", 85, 22000);
// Menggunakan method warisan dari class Karakter:
$qiqi->infoDasar();
$qiqi->istirahat();
// Menggunakan method spesifik milik Healer:
$qiqi->pulihkanTeman("Furina", 4500);


echo "\n--- 2. INSTANCE DARI CLASS SWORDSMAN (CHARLOTTA) ---\n";
$charlotta = new Swordsman("Charlotta", 90, 18500);
$charlotta->infoDasar();
$charlotta->tebasanPedang("Hilichurl Chieftain");


echo "\n--- 3. PENGECEKAN TIPE DATA DENGAN 'instanceof' ---\n";
// Operator 'instanceof' dipakai untuk mengecek apakah sebuah object merupakan turunan dari class tertentu
echo "Apakah Qiqi adalah Healer?   : " . ($qiqi instanceof Healer ? "Ya" : "Bukan") . "\n";
echo "Apakah Qiqi adalah Karakter? : " . ($qiqi instanceof Karakter ? "Ya (karena turunan)" : "Bukan") . "\n";
echo "Apakah Qiqi adalah Swordsman?: " . ($qiqi instanceof Swordsman ? "Ya" : "Bukan") . "\n";

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. INSTANCE DARI CLASS HEALER (QIQI) ---
Nama: Qiqi | Level: 85 | Max HP: 22000
Qiqi sedang beristirahat untuk memulihkan tenaga.
Qiqi mengeluarkan sihir penyembuh kepada Furina sebesar +4500 HP!

--- 2. INSTANCE DARI CLASS SWORDSMAN (CHARLOTTA) ---
Nama: Charlotta | Level: 90 | Max HP: 18500
Charlotta menebaskan pedang suci ke arah musuh Hilichurl Chieftain!

--- 3. PENGECEKAN TIPE DATA DENGAN 'instanceof' ---
Apakah Qiqi adalah Healer?   : Ya
Apakah Qiqi adalah Karakter? : Ya (karena turunan)
Apakah Qiqi adalah Swordsman?: Bukan
==================================================
*/
