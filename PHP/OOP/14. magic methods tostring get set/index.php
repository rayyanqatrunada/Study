<?php
/* rekap php oop */
/* 14. magic methods tostring get set */

// ==========================================
// ## MAGIC METHODS UTAMA DI PHP
// ==========================================
/*
Magic Methods di PHP adalah method khusus yang diawali dengan dua garis bawah '__'.
Method ini otomatis dipicu oleh event-event tertentu pada siklus hidup object.

Beberapa Magic Methods paling populer:
1. __toString() : Terpicu saat object di-echo atau diubah jadi teks string.
2. __get($key)  : Terpicu saat mencoba membaca property yang private atau TIDAK ADA.
3. __set($k, $v): Terpicu saat mencoba mengisi property yang private atau TIDAK ADA.
4. __call()     : Terpicu saat memanggil method yang TIDAK ADA di class.
5. __invoke()   : Terpicu saat object dipanggil seolah-olah dia adalah sebuah FUNCTION ($object()).
*/

class BiodataWaifu
{
    private array $dataDinamis = [];

    public function __construct(
        public string $nama,
        public string $region
    ) {}

    // 1. __toString: saat object dicetak langsung dengan echo
    public function __toString(): string
    {
        return "[Waifu: $this->nama | Asal: $this->region]";
    }

    // 2. __set: menangkap properti apa saja yang ditambahkan secara dinamis
    public function __set(string $key, mixed $value): void
    {
        echo "[__set] Menambahkan properti dinamis: '$key' = '$value'\n";
        $this->dataDinamis[$key] = $value;
    }

    // 3. __get: mengambil properti dinamis jika ada
    public function __get(string $key): mixed
    {
        if (array_key_exists($key, $this->dataDinamis)) {
            return $this->dataDinamis[$key];
        }
        return "[Properti '$key' tidak ditemukan]";
    }

    // 4. __call: menangani pemanggilan method yang tidak ada agar tidak fatal error
    public function __call(string $namaMethod, array $arguments): void
    {
        $argumenStr = implode(", ", $arguments);
        echo "[__call] Method '$namaMethod($argumenStr)' tidak terdaftar di class!\n";
    }

    // 5. __invoke: membuat object bisa dijalankan seperti function $object()
    public function __invoke(string $salam): void
    {
        echo "[__invoke] $this->nama berkata: '$salam'\n";
    }
}


// ==========================================
// ## PENGUJIAN SEMUA MAGIC METHOD
// ==========================================

echo "--- 1. UJI COBA __toString() ---\n";
$furina = new BiodataWaifu("Furina", "Fontaine");
// Mencetak object secara langsung
echo "Info object: " . $furina . "\n";


echo "\n--- 2. UJI COBA __set() DAN __get() ---\n";
// Mengisi properti 'elemen' dan 'makananFavorit' yang tidak dideklarasikan di class
$furina->elemen = "Hydro";
$furina->makananFavorit = "Macaron Fontaine";

// Membaca properti tersebut via __get()
echo "Elemen Furina           : " . $furina->elemen . "\n";
echo "Makanan Favorit         : " . $furina->makananFavorit . "\n";
echo "Mencoba membaca hobi    : " . $furina->hobi . "\n";


echo "\n--- 3. UJI COBA __call() ---\n";
// Memanggil method yang sama sekali tidak ada di dalam class
$furina->jurusLegendaris("Ombak Mahkamah", 9999);


echo "\n--- 4. UJI COBA __invoke() ---\n";
// Menjalankan object $furina seolah-olah dia function!
$furina("Keadilan akan selalu bersinar di panggung opera!");

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. UJI COBA __toString() ---
Info object: [Waifu: Furina | Asal: Fontaine]

--- 2. UJI COBA __set() DAN __get() ---
[__set] Menambahkan properti dinamis: 'elemen' = 'Hydro'
[__set] Menambahkan properti dinamis: 'makananFavorit' = 'Macaron Fontaine'
Elemen Furina           : Hydro
Makanan Favorit         : Macaron Fontaine
Mencoba membaca hobi    : [Properti 'hobi' tidak ditemukan]

--- 3. UJI COBA __call() ---
[__call] Method 'jurusLegendaris(Ombak Mahkamah, 9999)' tidak terdaftar di class!

--- 4. UJI COBA __invoke() ---
[__invoke] Furina berkata: 'Keadilan akan selalu bersinar di panggung opera!'
==================================================
*/
