<?php
/* rekap php oop */
/* 13. anonymous class */

// ==========================================
// ## ANONYMOUS CLASS (CLASS TANPA NAMA)
// ==========================================
/*
Sama seperti anonymous function, PHP (sejak versi 7.0) mendukung Anonymous Class.
Ini adalah class sekali pakai yang langsung diinstansiasi tanpa diberi nama file / nama class.

KAPAN COCOK DIPAKAI?
- Ketika kita butuh object sekali pakai (one-off object).
- Mocking / unit testing saat membuat data tiruan.
- Mengimplementasikan interface sederhana secara on-the-fly.
*/

interface PengirimPesan
{
    public function kirim(string $tujuan, string $pesan): void;
}

// Function yang meminta object dengan kontrak PengirimPesan
function notifikasiAdmin(PengirimPesan $service, string $isi): void
{
    $service->kirim("Rayyan Admin", $isi);
}


// ==========================================
// ## PENGUJIAN ANONYMOUS CLASS
// ==========================================

echo "--- 1. ANONYMOUS CLASS DASAR ---\n";
// Membuat object langsung tanpa deklarasi 'class NamaClass'
$monsterDummy = new class("Slime Air Fontaine", 1500) {
    public function __construct(
        public string $nama,
        public int $hp
    ) {}

    public function terimaSerangan(int $dmg): void
    {
        $this->hp -= $dmg;
        echo "[$this->nama] Terkena serangan! Sisa HP: $this->hp\n";
    }
};

echo "Nama Monster Tiruan : " . $monsterDummy->nama . "\n";
$monsterDummy->terimaSerangan(300);


echo "\n--- 2. ANONYMOUS CLASS MENGIMPLEMENTASIKAN INTERFACE ---\n";
// Langsung mengimplementasikan interface 'PengirimPesan' on-the-fly
$emailService = new class implements PengirimPesan {
    public function kirim(string $tujuan, string $pesan): void
    {
        echo "[KIRIM PESAN VIA EMAIL] Ke: $tujuan | Isi: '$pesan'\n";
    }
};

notifikasiAdmin($emailService, "Furina telah berhasil menyelesaikan panggung sidang!");

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. ANONYMOUS CLASS DASAR ---
Nama Monster Tiruan : Slime Air Fontaine
[Slime Air Fontaine] Terkena serangan! Sisa HP: 1200

--- 2. ANONYMOUS CLASS MENGIMPLEMENTASIKAN INTERFACE ---
[KIRIM PESAN VIA EMAIL] Ke: Rayyan Admin | Isi: 'Furina telah berhasil menyelesaikan panggung sidang!'
==================================================
*/
