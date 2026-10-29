<?php
/* rekap php oop */
/* 18. object cloning dan clone magic method */

// ==========================================
// ## PASS BY REFERENCE VS KEYWORD 'clone'
// ==========================================
/*
Di PHP, jika kita menyalin object dengan tanda sama dengan ($b = $a),
keduanya SEBENARNYA MENUNJUK KE ALAMAT MEMORI YANG SAMA (Reference)!
Jika properti di $b diubah, maka properti di $a ikut berubah!

Untuk membuat DUPLIKAT SEJATI (object baru yang terpisah), kita WAJIB memakai kata kunci 'clone':
$b = clone $a;

MAGIC METHOD __clone() :
Method yang OTOMATIS dijalankan pada object tiruan baru ketika proses cloning terjadi.
Sangat berguna untuk:
- Mereset ID unik agar kloningan tidak punya ID yang sama persis.
- Mengatur status awal kloningan (misal: status = 'Kloningan Baru').
*/

class BonekaMekanik
{
    public function __construct(
        public string $id,
        public string $namaModel,
        public int $level,
        public string $status = "Asli"
    ) {}

    // Magic method yang otomatis dieksekusi saat object ini di-clone
    public function __clone()
    {
        // Ubah ID untuk object hasil kloning agar unik
        $this->id = $this->id . "-CLONE-" . rand(100, 999);
        $this->status = "Hasil Kloningan Svarog";
        echo "[CLONE EVENT] Object baru berhasil dikloning dengan ID: $this->id\n";
    }

    public function info(): void
    {
        echo "ID: $this->id | Model: $this->namaModel | Level: $this->level | Status: $this->status\n";
    }
}


// ==========================================
// ## PENGUJIAN
// ==========================================

echo "--- 1. SALIN BIASA DENGAN '=' (BAHAYA REFERENCE!) ---\n";
$bonekaAsli = new BonekaMekanik("SVR-01", "Svarog Guard", 80);
$bonekaRef = $bonekaAsli; // bukan duplikat, hanya alias ke memori yang sama!

// Ubah level lewat $bonekaRef
$bonekaRef->level = 95;

echo "Level di bonekaRef  : " . $bonekaRef->level . "\n";
echo "Level di bonekaAsli : " . $bonekaAsli->level . " (Ikut berubah karena menunjuk memori yang sama!)\n";


echo "\n--- 2. SALIN RESMI MENGGUNAKAN KEYWORD 'clone' ---\n";
// Membuat duplikat sejati yang independen:
$bonekaDuplikat = clone $bonekaAsli;

// Ubah properti di duplikat
$bonekaDuplikat->level = 50;

echo "\n>> Hasil Perbandingan Setelah Kloning: <<\n";
echo "Boneka Asli      : ";
$bonekaAsli->info();

echo "Boneka Duplikat  : ";
$bonekaDuplikat->info();

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. SALIN BIASA DENGAN '=' (BAHAYA REFERENCE!) ---
Level di bonekaRef  : 95
Level di bonekaAsli : 95 (Ikut berubah karena menunjuk memori yang sama!)

--- 2. SALIN RESMI MENGGUNAKAN KEYWORD 'clone' ---
[CLONE EVENT] Object baru berhasil dikloning dengan ID: SVR-01-CLONE-...

>> Hasil Perbandingan Setelah Kloning: <<
Boneka Asli      : ID: SVR-01 | Model: Svarog Guard | Level: 95 | Status: Asli
Boneka Duplikat  : ID: SVR-01-CLONE-... | Model: Svarog Guard | Level: 50 | Status: Hasil Kloningan Svarog
==================================================
*/
