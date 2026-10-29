<?php
/* rekap php oop */
/* 16. final keyword */

// ==========================================
// ## PENGGUNAAN KEYWORD 'final' DI PHP
// ==========================================
/*
Kata kunci 'final' dipakai untuk MENGUNCI class atau method agar tidak bisa diubah-ubah lagi:

1. final class :
   Class ini TIDAK BISA di-extends / diwariskan sama sekali!
   Jika ada class lain yang mencoba 'class Anak extends ClassFinal', PHP langsung Fatal Error.
   Cocok untuk class keamanan atau class utilitas inti.

2. final method :
   Class-nya masih BOLEH di-extends, TETAPI method yang diberi label 'final'
   TIDAK BISA di-override (ditimpa) oleh class anak.
*/

class AturanKeadilanFontaine
{
    // Method biasa (boleh di-override oleh class turunan)
    public function sapaHakim(): void
    {
        echo "Selamat datang di ruang sidang Opera Epiclese.\n";
    }

    // FINAL METHOD: Terkunci mutlak! Anak dilarang mengubah cara penghitungan denda
    final public function rumusHukumanMutlak(int $tingkatPelanggaran): int
    {
        return $tingkatPelanggaran * 50000;
    }
}

class PengadilanKhusus extends AturanKeadilanFontaine
{
    // Override method biasa (BISA dan DIIJINKAN):
    public function sapaHakim(): void
    {
        echo "Furina memimpin sidang kehormatan hari ini!\n";
    }

    // Jika kita mencoba meng-override method final, akan terjadi Fatal Error:
    // public function rumusHukumanMutlak(int $tingkat): int { ... }
    // Fatal error: Cannot override final method AturanKeadilanFontaine::rumusHukumanMutlak()
}


// --- CONTOH 2: FINAL CLASS (TERKUNCI TOTAL) ---
final class KunciBrankasRahasia
{
    public function __construct(public string $kode) {}

    public function bukaBrankas(): void
    {
        echo "Brankas terbuka dengan kode rahasia: $this->kode\n";
    }
}

// Mencoba mewarisi Final Class:
// class PembobolBrankas extends KunciBrankasRahasia {}
// Fatal error: Class PembobolBrankas cannot extend final class KunciBrankasRahasia


// ==========================================
// ## PENGUJIAN
// ==========================================

echo "--- 1. UJI COBA FINAL METHOD PADA CLASS TURUNAN ---\n";
$sidang = new PengadilanKhusus();
$sidang->sapaHakim(); // menjalankan method override
echo "Denda tingkat 3 (pakai rumus final induk): " . number_format($sidang->rumusHukumanMutlak(3), 0, ',', '.') . " Mora\n";


echo "\n--- 2. UJI COBA FINAL CLASS ---\n";
$brankas = new KunciBrankasRahasia("FONT-999-SEC");
$brankas->bukaBrankas();

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. UJI COBA FINAL METHOD PADA CLASS TURUNAN ---
Furina memimpin sidang kehormatan hari ini!
Denda tingkat 3 (pakai rumus final induk): 150.000 Mora

--- 2. UJI COBA FINAL CLASS ---
Brankas terbuka dengan kode rahasia: FONT-999-SEC
==================================================
*/
