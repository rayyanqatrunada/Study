<?php
/* rekap php oop */
/* 6. method overriding dan parent */

// ==========================================
// ## METHOD OVERRIDING DAN KEYWORD 'parent'
// ==========================================
/*
1. Method Overriding :
   Proses di mana class anak menulis ulang implementasi method yang sudah ada di class induk
   agar aksinya lebih sesuai dengan kebutuhan class anak.

2. Keyword 'parent::' :
   Jika kita meng-override sebuah method atau constructor, tapi kita MASIH INGIN
   menjalankan logika asli milik class induk, kita bisa memanggilnya dengan 'parent::namaMethod()'.
*/

class Hero
{
    public function __construct(
        public string $nama,
        public int $atk
    ) {}

    // Method dasar serangan
    public function serang(): void
    {
        echo "[$this->nama] Melakukan serangan fisik biasa (Damage: $this->atk)\n";
    }

    public function info(): void
    {
        echo "Hero: $this->nama (ATK: $this->atk)\n";
    }
}

class Archon extends Hero
{
    // 1. Constructor Overriding:
    // Anak menambah properti baru ($elemen) dan wajib memanggil constructor induk pakai parent::__construct()
    public function __construct(
        string $nama,
        int $atk,
        public string $elemen
    ) {
        // Panggil constructor induk agar $nama dan $atk diurus class Hero
        parent::__construct($nama, $atk);
    }

    // 2. Method Overriding:
    // Menimpa method serang() agar serangannya bukan fisik biasa, melainkan sihir elemen
    public function serang(): void
    {
        echo "[$this->nama - Archon] Mengeluarkan 'Salon Solitaire' elemen $this->elemen! (Damage Elemen: " . ($this->atk * 2) . ")\n";
    }

    // 3. Menggabungkan method induk dengan parent::info()
    public function info(): void
    {
        // Jalankan dulu info asli milik class Hero
        parent::info();
        echo "Status Tambahan: Menguasai elemen $this->elemen secara mutlak!\n";
    }
}


// ==========================================
// ## PENGUJIAN PERILAKU OVERRIDING
// ==========================================

echo "--- 1. METHOD MILIK HERO BIASA ---\n";
$prajurit = new Hero("Prajurit Fontaine", 450);
$prajurit->info();
$prajurit->serang();


echo "\n--- 2. METHOD YANG DI-OVERRIDE OLEH ARCHON (FURINA) ---\n";
$furina = new Archon("Furina", 1200, "Hydro");
$furina->info();
$furina->serang();

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. METHOD MILIK HERO BIASA ---
Hero: Prajurit Fontaine (ATK: 450)
[Prajurit Fontaine] Melakukan serangan fisik biasa (Damage: 450)

--- 2. METHOD YANG DI-OVERRIDE OLEH ARCHON (FURINA) ---
Hero: Furina (ATK: 1200)
Status Tambahan: Menguasai elemen Hydro secara mutlak!
[Furina - Archon] Mengeluarkan 'Salon Solitaire' elemen Hydro! (Damage Elemen: 2400)
==================================================
*/
