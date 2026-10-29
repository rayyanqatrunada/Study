<?php
/* rekap php oop */
/* 7. getter dan setter enkapsulasi */

// ==========================================
// ## PRINSIP ENKAPSULASI: GETTER DAN SETTER
// ==========================================
/*
Enkapsulasi adalah teknik membungkus data agar terlindungi dari modifikasi langsung sembarangan.
Properti dibuat 'private', lalu kita menyediakan:
- GETTER : Method public untuk MEMBACA nilai properti (bisa diformat terlebih dahulu).
- SETTER : Method public untuk MENGUBAH nilai properti (wajib divalidasi terlebih dahulu).

MANFAAT:
- Mencegah data rusak/tidak masuk akal (misal: level karakter diisi -999 atau nama kosong).
*/

class AkunPemain
{
    private string $username;
    private int $level;
    private int $saldoMora;

    public function __construct(string $username, int $levelAwal = 1)
    {
        // Gunakan setter di constructor agar validasi tetap berjalan sejak pembuatan pertama
        $this->setUsername($username);
        $this->setLevel($levelAwal);
        $this->saldoMora = 0;
    }

    // --- GETTER & SETTER USERNAME ---
    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $bersih = trim($username);
        if (strlen($bersih) < 3) {
            echo "[VALIDASI ERROR] Username '$username' terlalu pendek (minimal 3 karakter)!\n";
            return;
        }
        $this->username = $bersih;
        echo "[SUKSES] Username diatur menjadi: '$this->username'\n";
    }

    // --- GETTER & SETTER LEVEL ---
    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): void
    {
        if ($level < 1 || $level > 100) {
            echo "[VALIDASI ERROR] Level harus antara 1 sampai 100! (Nilai input: $level ditolak)\n";
            return;
        }
        $this->level = $level;
        echo "[SUKSES] Level berhasil diperbarui ke: $this->level\n";
    }

    // --- METHOD UNTUK SALDO MORA (HANYA BISA DITAMBAH / DIKURANG SECARA AMAN) ---
    public function getSaldoMora(): string
    {
        // Getter bisa memformat data (misal: menambahkan format angka ribuan)
        return number_format($this->saldoMora, 0, ',', '.') . " Mora";
    }

    public function topUpMora(int $jumlah): void
    {
        if ($jumlah <= 0) {
            echo "[VALIDASI ERROR] Jumlah top-up harus lebih dari 0!\n";
            return;
        }
        $this->saldoMora += $jumlah;
        echo "[SUKSES] Berhasil top up +$jumlah Mora!\n";
    }
}


// ==========================================
// ## PENGUJIAN VALIDASI ENKAPSULASI
// ==========================================

echo "--- 1. MEMBUAT AKUN BARU ---\n";
$player = new AkunPemain("Rayyan", 10);

echo "\n--- 2. MENCOBA MEMASUKKAN DATA TIDAK VALID ---\n";
// Coba masukkan level yang tidak masuk akal:
$player->setLevel(500); // ditolak oleh setter
$player->setLevel(-10); // ditolak oleh setter

// Coba masukkan username terlalu pendek:
$player->setUsername("R"); // ditolak oleh setter

echo "\n--- 3. MEMASUKKAN DATA VALID ---\n";
$player->setLevel(85);
$player->setUsername("Rayyan Fontaine");

echo "\n--- 4. TRANSAKSI SALDO VIA METHOD RESMI ---\n";
$player->topUpMora(2500000);
echo "Saldo Akun Terkini: " . $player->getSaldoMora() . "\n";

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. MEMBUAT AKUN BARU ---
[SUKSES] Username diatur menjadi: 'Rayyan'
[SUKSES] Level berhasil diperbarui ke: 10

--- 2. MENCOBA MEMASUKKAN DATA TIDAK VALID ---
[VALIDASI ERROR] Level harus antara 1 sampai 100! (Nilai input: 500 ditolak)
[VALIDASI ERROR] Level harus antara 1 sampai 100! (Nilai input: -10 ditolak)
[VALIDASI ERROR] Username 'R' terlalu pendek (minimal 3 karakter)!

--- 3. MEMASUKKAN DATA VALID ---
[SUKSES] Level berhasil diperbarui ke: 85
[SUKSES] Username diatur menjadi: 'Rayyan Fontaine'

--- 4. TRANSAKSI SALDO VIA METHOD RESMI ---
[SUKSES] Berhasil top up +2500000 Mora!
Saldo Akun Terkini: 2.500.000 Mora
==================================================
*/
