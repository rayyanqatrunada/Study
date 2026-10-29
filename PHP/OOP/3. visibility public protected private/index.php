<?php
/* rekap php oop */
/* 3. visibility public protected private */

// ==========================================
// ## PENJELASAN 3 JENIS VISIBILITY DI PHP
// ==========================================
/*
1. public    : Bebas diakses dari mana saja (di dalam class, class anak, maupun dari luar class).
2. protected : HANYA bisa diakses oleh class itu sendiri dan class turunannya (anak / extends).
3. private   : HANYA bisa diakses oleh class itu sendiri secara internal. Class anak pun DILARANG akses langsung!
*/

class KarakterDasar
{
    public string $nama;             // Siapa saja boleh lihat dan ubah
    protected string $senjataRahasia;// Hanya karakter ini dan murid/anaknya yang tahu
    private int $hpRahasia;          // Rahasia mutlak! Cuma class ini yang boleh kelola

    public function __construct(string $nama, string $senjata, int $hp)
    {
        $this->nama = $nama;
        $this->senjataRahasia = $senjata;
        $this->hpRahasia = $hp;
    }

    // Public method sebagai pintu masuk yang aman untuk membaca private property
    public function getStatusHp(): int
    {
        return $this->hpRahasia;
    }

    public function terimaDamage(int $dmg): void
    {
        $this->hpRahasia -= $dmg;
        if ($this->hpRahasia < 0) {
            $this->hpRahasia = 0;
        }
        echo "[$this->nama] Terkena damage $dmg! Sisa HP internal: $this->hpRahasia\n";
    }
}

// Class Anak (turunan dari KarakterDasar)
class Paladin extends KarakterDasar
{
    public function tampilkanInfoLengkap(): void
    {
        // 1. $this->nama (PUBLIC) -> BISA diakses langsung!
        echo "Nama Ksatria : $this->nama\n";

        // 2. $this->senjataRahasia (PROTECTED) -> BISA diakses oleh class anak!
        echo "Senjata      : $this->senjataRahasia\n";

        // 3. $this->hpRahasia (PRIVATE) -> TIDAK BISA! Bakal Error jika di-uncomment:
        // echo $this->hpRahasia; // Fatal Error: Cannot access private property
        // Solusinya: gunakan method getStatusHp() yang bersifat public
        echo "HP Terkini   : " . $this->getStatusHp() . "\n";
    }
}


// ==========================================
// ## EKSEKUSI PENGUJIAN DARI LUAR CLASS
// ==========================================

echo "--- 1. AKSES DARI LUAR CLASS ---\n";
$charlotta = new Paladin("Charlotta", "Holy Greatsword", 5000);

// Akses properti PUBLIC dari luar:
echo "Nama dari luar class: " . $charlotta->nama . " (Bisa langsung diakses)\n";

// Coba akses properti PROTECTED atau PRIVATE dari luar:
// echo $charlotta->senjataRahasia; // Error: Cannot access protected property!
// echo $charlotta->hpRahasia;      // Error: Cannot access private property!

echo "\n--- 2. AKSES DARI DALAM CLASS ANAK ---\n";
$charlotta->tampilkanInfoLengkap();

echo "\n--- 3. MODIFIKASI DATA PRIVATE LEWAT METHOD RESMI ---\n";
$charlotta->terimaDamage(1500);
echo "HP Charlotta sekarang (cek lewat method): " . $charlotta->getStatusHp() . "\n";

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. AKSES DARI LUAR CLASS ---
Nama dari luar class: Charlotta (Bisa langsung diakses)

--- 2. AKSES DARI DALAM CLASS ANAK ---
Nama Ksatria : Charlotta
Senjata      : Holy Greatsword
HP Terkini   : 5000

--- 3. MODIFIKASI DATA PRIVATE LEWAT METHOD RESMI ---
[Charlotta] Terkena damage 1500! Sisa HP internal: 3500
HP Charlotta sekarang (cek lewat method): 3500
==================================================
*/
