<?php
/* rekap php oop */
/* 17. readonly property dan readonly class */

// ==========================================
// ## FITUR MODERN IMMUTABILITY DI PHP 8.1 & 8.2
// ==========================================
/*
1. Readonly Property (PHP 8.1+) :
   Properti yang HANYA BISA DIISI 1 KALI (biasanya di constructor).
   Setelah diisi, nilainya DIKUNCI MATI (immutable) dan tidak bisa diubah lagi!
   Jika ada kode yang mencoba mengubah nilainya, PHP akan melempar Error:
   'Cannot modify readonly property'.

2. Readonly Class (PHP 8.2+) :
   Jika sebuah class dideklarasikan sebagai 'readonly class', maka SEMUA property
   di dalamnya OTOMATIS menjadi readonly tanpa perlu menulis kata 'readonly' berkali-kali!
   Sangat populer untuk membuat DTO (Data Transfer Object) atau data transaksi aman.
*/

// --- CONTOH 1: READONLY PROPERTY (PHP 8.1) ---
class RekeningBank
{
    // Properti nomorRekening terkunci, sedangkan saldo tetap bisa berubah
    public function __construct(
        public readonly string $nomorRekening,
        public readonly string $pemilik,
        public int $saldo
    ) {}

    public function setor(int $jumlah): void
    {
        $this->saldo += $jumlah;
    }
}


// --- CONTOH 2: READONLY CLASS (PHP 8.2) ---
// Seluruh properti di class ini otomatis readonly dan tidak bisa diubah selamanya!
readonly class DataKarakterDTO
{
    public function __construct(
        public string $id,
        public string $nama,
        public string $elemen,
        public int $baseAtk
    ) {}
}


// ==========================================
// ## PENGUJIAN
// ==========================================

echo "--- 1. UJI COBA READONLY PROPERTY ---\n";
$rekening = new RekeningBank("FONT-777888", "Furina", 500000);

echo "Nomor Rekening : " . $rekening->nomorRekening . "\n";
echo "Pemilik        : " . $rekening->pemilik . "\n";
echo "Saldo Awal     : " . number_format($rekening->saldo, 0, ',', '.') . " Mora\n";

// Mengubah saldo (BISA, karena saldo bukan readonly):
$rekening->setor(250000);
echo "Saldo Baru     : " . number_format($rekening->saldo, 0, ',', '.') . " Mora\n";

// Mencoba mengubah properti readonly:
// $rekening->nomorRekening = "HACK-000"; 
// Fatal error: Cannot modify readonly property RekeningBank::$nomorRekening


echo "\n--- 2. UJI COBA READONLY CLASS (PHP 8.2) ---\n";
$dto = new DataKarakterDTO(
    id: "CHR-001",
    nama: "Clara",
    elemen: "Physical",
    baseAtk: 1450
);

echo "Data DTO Aman: [{$dto->id}] {$dto->nama} - Elemen: {$dto->elemen} (ATK: {$dto->baseAtk})\n";

// Mencoba mengubah properti readonly class:
// $dto->nama = "Clara Alter";
// Fatal error: Cannot modify readonly property DataKarakterDTO::$nama

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. UJI COBA READONLY PROPERTY ---
Nomor Rekening : FONT-777888
Pemilik        : Furina
Saldo Awal     : 500.000 Mora
Saldo Baru     : 750.000 Mora

--- 2. UJI COBA READONLY CLASS (PHP 8.2) ---
Data DTO Aman: [CHR-001] Clara - Elemen: Physical (ATK: 1450)
==================================================
*/
