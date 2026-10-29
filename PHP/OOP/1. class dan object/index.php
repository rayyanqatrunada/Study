<?php
/* rekap php oop */
/* 1. class dan object */

// ==========================================
// ## 1. PENGERTIAN CLASS DAN OBJECT
// ==========================================
/*
Class adalah BLUEPRINT / cetakan cetak biru.
Object adalah HASIL NYATA (instance) yang dicetak dari blueprint tersebut.

Analogi:
- Class  : Denah istana / Cetakan boneka
- Object : Istana Fontaine yang sudah berdiri / Boneka Svarog yang nyata
*/

// Mendefinisikan Class Karakter
class Karakter
{
    // Property (variabel di dalam class)
    public string $nama;
    public string $elemen;
    public int $level = 1; // nilai default

    // Method (fungsi di dalam class)
    // Kata kunci '$this' dipakai untuk mengakses property/method milik object itu sendiri
    public function serang(): void
    {
        echo "$this->nama menyerang menggunakan elemen $this->elemen! (Level: $this->level)\n";
    }

    public function naikLevel(int $tambah): void
    {
        $this->level += $tambah;
        echo "$this->nama naik level sebanyak +$tambah! Level sekarang: $this->level\n";
    }
}


// ==========================================
// ## 2. MEMBUAT INSTANCE (OBJECT) DENGAN 'new'
// ==========================================

echo "--- 1. MEMBUAT OBJECT PERTAMA (FURINA) ---\n";
// Membuat object baru dari class Karakter
$furina = new Karakter();
$furina->nama = "Furina";
$furina->elemen = "Hydro";
$furina->level = 80;

// Menjalankan method object
$furina->serang();
$furina->naikLevel(10);


echo "\n--- 2. MEMBUAT OBJECT KEDUA (CLARA) ---\n";
// Dari satu class yang sama, kita bisa mencetak banyak object yang mandiri
$clara = new Karakter();
$clara->nama = "Clara";
$clara->elemen = "Physical";
// $clara->level tidak diisi, jadi otomatis pakai nilai default yaitu 1

$clara->serang();
$clara->naikLevel(50);

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. MEMBUAT OBJECT PERTAMA (FURINA) ---
Furina menyerang menggunakan elemen Hydro! (Level: 80)
Furina naik level sebanyak +10! Level sekarang: 90

--- 2. MEMBUAT OBJECT KEDUA (CLARA) ---
Clara menyerang menggunakan elemen Physical! (Level: 1)
Clara naik level sebanyak +50! Level sekarang: 51
==================================================
*/
