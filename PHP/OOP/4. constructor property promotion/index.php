<?php
/* rekap php oop */
/* 4. constructor property promotion */

// ==========================================
// ## FITUR MODERN PHP 8+: PROPERTY PROMOTION
// ==========================================
/*
Sebelum PHP 8, membuat class sangat membuang waktu karena harus menulis 3 kali:
1. Deklarasi property di atas class.
2. Tulis parameter di dalam __construct().
3. Masukkan nilainya via $this->property = $property.

Mulai PHP 8.0+, ada fitur "Constructor Property Promotion".
Cukup tambahkan kata kunci 'public', 'protected', atau 'private'
langsung di dalam tanda kurung parameter __construct()!
PHP akan otomatis mendeklarasikan sekaligus mengisinya!
*/

// --- CONTOH GAYA LAMA (PHP 7 ke bawah) ---
class WaifuGayaLama
{
    public string $nama;
    public string $elemen;
    public int $level;

    public function __construct(string $nama, string $elemen, int $level)
    {
        $this->nama = $nama;
        $this->elemen = $elemen;
        $this->level = $level;
    }
}

// --- CONTOH GAYA MODERN PHP 8 (Super Ringkas!) ---
class WaifuModern
{
    // Hanya dengan menulis seperti ini, properti $nama, $elemen, dan $level
    // otomatis dideklarasikan dan diisi oleh PHP!
    public function __construct(
        public string $nama,
        public string $elemen,
        public int $level = 90,
        private string $roleRahasia = "Main Support"
    ) {
        // Body constructor bisa dibiarkan kosong, atau dipakai untuk logika tambahan
        echo "[INFO] Object WaifuModern '$this->nama' berhasil dibuat dengan ringkas!\n";
    }

    public function tampilkanDetail(): void
    {
        echo "Nama: $this->nama | Elemen: $this->elemen | Level: $this->level | Role: $this->roleRahasia\n";
    }
}


// ==========================================
// ## PENGUJIAN
// ==========================================

echo "--- UJI COBA CONSTRUCTOR PROPERTY PROMOTION (PHP 8) ---\n";

$furina = new WaifuModern(
    nama: "Furina",
    elemen: "Hydro",
    level: 90,
    roleRahasia: "Buffer & Healer"
);

$furina->tampilkanDetail();

// Object kedua memanfaatkan default parameter
$clara = new WaifuModern(
    nama: "Clara",
    elemen: "Physical"
);

$clara->tampilkanDetail();

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- UJI COBA CONSTRUCTOR PROPERTY PROMOTION (PHP 8) ---
[INFO] Object WaifuModern 'Furina' berhasil dibuat dengan ringkas!
Nama: Furina | Elemen: Hydro | Level: 90 | Role: Buffer & Healer
[INFO] Object WaifuModern 'Clara' berhasil dibuat dengan ringkas!
Nama: Clara | Elemen: Physical | Level: 90 | Role: Main Support
==================================================
*/
