<?php
/* rekap php oop */
/* 2. constructor dan destructor */

// ==========================================
// ## PENGERTIAN CONSTRUCTOR DAN DESTRUCTOR
// ==========================================
/*
1. __construct() :
   Method ajaib (magic method) yang OTOMATIS dijalankan saat kita membuat object baru dengan kata kunci 'new'.
   Sangat berguna untuk langsung mengisi data awal properti agar object langsung siap pakai.

2. __destruct() :
   Method ajaib yang OTOMATIS dijalankan ketika object dihapus dari memori,
   baik karena di-unset($object) maupun saat seluruh script selesai dieksekusi.
   Cocok untuk bersih-bersih resource (misal: menutup koneksi file / database).
*/

class Waifu
{
    public string $nama;
    public string $region;
    public int $level;

    // Constructor: langsung menerima input saat 'new Waifu(...)' dipanggil
    public function __construct(string $nama, string $region = "Fontaine", int $level = 1)
    {
        $this->nama = $nama;
        $this->region = $region;
        $this->level = $level;
        echo "[SPAWN] Object '$this->nama' berhasil dibuat dari region $this->region!\n";
    }

    public function perkenalan(): void
    {
        echo "Halo, aku $this->nama dari $this->region (Level: $this->level)\n";
    }

    // Destructor: dipanggil saat object dibersihkan dari memori
    public function __destruct()
    {
        echo "[DESPAWN] Object '$this->nama' dihapus dari memori.\n";
    }
}


// ==========================================
// ## EKSEKUSI PENGGUNAAN
// ==========================================

echo "--- 1. MEMBUAT DUA OBJECT BARU ---\n";
// Begitu 'new' dipanggil, constructor langsung otomatis dieksekusi!
$furina = new Waifu("Furina", "Fontaine", 90);
$clara = new Waifu("Clara", "Belobog", 80);

echo "\n--- 2. MENJALANKAN METHOD OBJECT ---\n";
$furina->perkenalan();
$clara->perkenalan();

echo "\n--- 3. MENGHAPUS OBJECT SECARA MANUAL (UNSET) ---\n";
// Kita bisa memicu destructor lebih awal memakai unset()
unset($clara); // Destructor Clara langsung jalan di sini!

echo "\n--- 4. AKHIR PROGRAM SCRIPT ---\n";
echo "Script PHP sudah selesai dieksekusi.\n";
// Perhatikan: Destructor Furina akan otomatis jalan di bawah sini karena program berakhir!

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. MEMBUAT DUA OBJECT BARU ---
[SPAWN] Object 'Furina' berhasil dibuat dari region Fontaine!
[SPAWN] Object 'Clara' berhasil dibuat dari region Belobog!

--- 2. MENJALANKAN METHOD OBJECT ---
Halo, aku Furina dari Fontaine (Level: 90)
Halo, aku Clara dari Belobog (Level: 80)

--- 3. MENGHAPUS OBJECT SECARA MANUAL (UNSET) ---
[DESPAWN] Object 'Clara' dihapus dari memori.

--- 4. AKHIR PROGRAM SCRIPT ---
Script PHP sudah selesai dieksekusi.
[DESPAWN] Object 'Furina' dihapus dari memori.
==================================================
*/
