<?php
/* rekap php oop */
/* 8. abstract class dan method */

// ==========================================
// ## PENGERTIAN ABSTRACT CLASS DAN METHOD
// ==========================================
/*
1. Abstract Class :
   Class yang masih berupa "rancangan umum / konsep dasar".
   Ciri utamanya: TIDAK BISA diinstansiasi langsung menggunakan kata kunci 'new'!
   Tujuannya untuk dijadikan induk bagi class-class lain.

2. Abstract Method :
   Method di dalam abstract class yang HANYA punya deklarasi nama & parameter (tanpa isi/body {}).
   SEMUA class anak yang mewarisi abstract class ini WAJIB membuat isi method tersebut!
   Jika class anak lupa mengimplementasikannya, PHP akan langsung melempar Fatal Error.
*/

// --- CLASS ABSTRAK INDUK ---
abstract class Senjata
{
    public function __construct(
        public string $nama,
        public int $baseAtk
    ) {}

    // Method biasa (sudah ada implementasinya, otomatis diwarisi anak)
    public function infoSenjata(): void
    {
        echo "Senjata: $this->nama (Base ATK: $this->baseAtk)\n";
    }

    // ABSTRACT METHOD: Wajib diisi oleh masing-masing anak!
    abstract public function aktifkanSkillPasif(): void;
    abstract public function hitungDamageTotal(): int;
}


// --- CLASS ANAK 1: PEDANG (SWORD) ---
class PedangFontaine extends Senjata
{
    // Mengimplementasikan abstract method 1
    public function aktifkanSkillPasif(): void
    {
        echo "[$this->nama] Pasif Aktif: Meningkatkan damage elemen Hydro sebesar 20%!\n";
    }

    // Mengimplementasikan abstract method 2
    public function hitungDamageTotal(): int
    {
        return $this->baseAtk + 250;
    }
}


// --- CLASS ANAK 2: PANAH (BOW) ---
class BusurEs extends Senjata
{
    public function aktifkanSkillPasif(): void
    {
        echo "[$this->nama] Pasif Aktif: Memberikan efek slow dan freeze ke musuh!\n";
    }

    public function hitungDamageTotal(): int
    {
        return $this->baseAtk + 180;
    }
}


// ==========================================
// ## PENGUJIAN
// ==========================================

echo "--- 1. MENCOBA INSTANSIASI ABSTRACT CLASS LANGSUNG ---\n";
// $senjataGhaib = new Senjata("Ghaib", 100);
// Fatal error: Cannot instantiate abstract class Senjata (DILARANG!)
echo "Abstract class tidak bisa di-'new' langsung (aman dan terlindungi).\n";


echo "\n--- 2. MENGGUNAKAN CLASS TURUNAN PEDANG ---\n";
$splendor = new PedangFontaine("Splendor of Tranquil Waters", 542);
$splendor->infoSenjata();
$splendor->aktifkanSkillPasif();
echo "Damage Total Pedang: " . $splendor->hitungDamageTotal() . "\n";


echo "\n--- 3. MENGGUNAKAN CLASS TURUNAN BUSUR ---\n";
$bow = new BusurEs("Polar Star", 608);
$bow->infoSenjata();
$bow->aktifkanSkillPasif();
echo "Damage Total Busur : " . $bow->hitungDamageTotal() . "\n";

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. MENCOBA INSTANSIASI ABSTRACT CLASS LANGSUNG ---
Abstract class tidak bisa di-'new' langsung (aman dan terlindungi).

--- 2. MENGGUNAKAN CLASS TURUNAN PEDANG ---
Senjata: Splendor of Tranquil Waters (Base ATK: 542)
[Splendor of Tranquil Waters] Pasif Aktif: Meningkatkan damage elemen Hydro sebesar 20%!
Damage Total Pedang: 792

--- 3. MENGGUNAKAN CLASS TURUNAN BUSUR ---
Senjata: Polar Star (Base ATK: 608)
[Polar Star] Pasif Aktif: Memberikan efek slow dan freeze ke musuh!
Damage Total Busur : 788
==================================================
*/
