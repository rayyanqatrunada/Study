<?php
/* rekap php oop */
/* 11. static property method dan self */

// ==========================================
// ## STATIC PROPERTY DAN STATIC METHOD
// ==========================================
/*
1. static property & static method adalah variabel & fungsi milik CLASS LANGSUNG,
   BUKAN milik perorangan object (instance).
2. Kita TIDAK PERLU membuat object dengan 'new' untuk memanggilnya!
3. Cara panggil dari luar class:
   NamaClass::$namaProperty;
   NamaClass::namaMethod();
4. Cara panggil dari DALAM class:
   Gunakan kata kunci 'self::' (bukan $this->).

5. LATE STATIC BINDING ('static::' vs 'self::'):
   - 'self::' selalu merujuk ke class tempat kode itu pertama kali ditulis.
   - 'static::' merujuk ke class yang sedang aktif mengeksekusi saat runtime (cocok untuk inheritance).
*/

class DatabaseServer
{
    // Static property: menghitung total koneksi dari seluruh pemain
    public static int $totalKoneksi = 0;
    public static string $regionServer = "Asia - Fontaine";

    // Static method: fungsi bantuan / utility
    public static function getStatusServer(): string
    {
        // Panggil static property pakai self::$
        return "Server: " . self::$regionServer . " | Pemain Online: " . self::$totalKoneksi;
    }

    public static function tambahKoneksi(): void
    {
        self::$totalKoneksi++;
    }
}


// --- DEMO LATE STATIC BINDING ('self::' vs 'static::') ---
class ParentClass
{
    public static string $namaClass = "Induk";

    public static function panggilDenganSelf(): void
    {
        echo "Panggil via self::   -> " . self::$namaClass . "\n";
    }

    public static function panggilDenganStatic(): void
    {
        // static:: akan mengecek siapa yang memanggilnya saat runtime!
        echo "Panggil via static:: -> " . static::$namaClass . "\n";
    }
}

class ChildClass extends ParentClass
{
    public static string $namaClass = "Anak";
}


// ==========================================
// ## PENGUJIAN
// ==========================================

echo "--- 1. MEMANGGIL STATIC TANPA MEMBUAT OBJECT ('new') ---\n";
echo "Server Region awal : " . DatabaseServer::$regionServer . "\n";
echo "Total koneksi awal : " . DatabaseServer::$totalKoneksi . "\n";

// Menambah koneksi via method static
DatabaseServer::tambahKoneksi();
DatabaseServer::tambahKoneksi();
DatabaseServer::tambahKoneksi();

echo DatabaseServer::getStatusServer() . "\n";


echo "\n--- 2. PERBEDAAN 'self::' VS 'static::' (LATE STATIC BINDING) ---\n";
echo ">> Dipanggil dari ChildClass: <<\n";
ChildClass::panggilDenganSelf();   // tetap mencetak 'Induk' karena terikat ke class aslinya
ChildClass::panggilDenganStatic(); // mencetak 'Anak'! Karena mendeteksi class pemanggil sebenarnya

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. MEMANGGIL STATIC TANPA MEMBUAT OBJECT ('new') ---
Server Region awal : Asia - Fontaine
Total koneksi awal : 0
Server: Asia - Fontaine | Pemain Online: 3

--- 2. PERBEDAAN 'self::' VS 'static::' (LATE STATIC BINDING) ---
>> Dipanggil dari ChildClass: <<
Panggil via self::   -> Induk
Panggil via static:: -> Anak
==================================================
*/
