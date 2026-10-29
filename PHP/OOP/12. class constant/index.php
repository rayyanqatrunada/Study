<?php
/* rekap php oop */
/* 12. class constant */

// ==========================================
// ## KONSTANTA DI DALAM CLASS (class const)
// ==========================================
/*
Konstanta adalah nilai yang BERSIFAT TETAP (immutable) dan tidak akan pernah berubah.
- Di dalam class didefinisikan dengan kata kunci 'const'.
- Penamaan biasanya menggunakan UPPERCASE / huruf kapital (contoh: APP_VERSION, MAX_LEVEL).
- Mulai PHP 7.1+, class constant bisa diberi visibility (public, protected, private).
- Diakses menggunakan tanda double colon '::' (contoh: ClassName::KONSTANTA atau self::KONSTANTA).
*/

class KonfigurasiGame
{
    // Public constant: bisa dibaca dari mana saja
    public const NAMA_GAME = "Genshin Impact";
    public const MAX_LEVEL_KARAKTER = 90;
    public const HARD_PITY_GACHA = 90;

    // Private constant: hanya untuk rahasia internal class ini
    private const SECRET_SALT = "fontaine_secret_salt_2026";

    public function cekStatusPity(int $pullSaatIni): void
    {
        // Memanggil constant dari dalam class pakai self::
        $sisa = self::HARD_PITY_GACHA - $pullSaatIni;
        if ($sisa <= 0) {
            echo "Hard pity tercapai! Pasti dapat bintang 5!\n";
        } else {
            echo "Sisa $sisa pull lagi menuju garansi bintang 5 (" . self::HARD_PITY_GACHA . " pull).\n";
        }
    }

    public function generateKodeSesi(string $user): string
    {
        return hash("sha256", $user . self::SECRET_SALT);
    }
}


// ==========================================
// ## PENGUJIAN
// ==========================================

echo "--- 1. MEMBACA CLASS CONSTANT LANGSUNG DARI LUAR CLASS ---\n";
echo "Judul Game   : " . KonfigurasiGame::NAMA_GAME . "\n";
echo "Level Maks   : " . KonfigurasiGame::MAX_LEVEL_KARAKTER . "\n";
echo "Hard Pity    : " . KonfigurasiGame::HARD_PITY_GACHA . " pull\n";

// Mencoba membaca private constant:
// echo KonfigurasiGame::SECRET_SALT; // Fatal Error: Cannot access private const


echo "\n--- 2. MENGGUNAKAN CONSTANT DI DALAM LOGIKA METHOD ---\n";
$config = new KonfigurasiGame();
$config->cekStatusPity(75);
$config->cekStatusPity(90);

echo "\nKode Hash Sesi: " . substr($config->generateKodeSesi("Furina"), 0, 16) . "...\n";

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. MEMBACA CLASS CONSTANT LANGSUNG DARI LUAR CLASS ---
Judul Game   : Genshin Impact
Level Maks   : 90
Hard Pity    : 90 pull

--- 2. MENGGUNAKAN CONSTANT DI DALAM LOGIKA METHOD ---
Sisa 15 pull lagi menuju garansi bintang 5 (90 pull).
Hard pity tercapai! Pasti dapat bintang 5!

Kode Hash Sesi: 826657e792cd7796...
==================================================
*/
