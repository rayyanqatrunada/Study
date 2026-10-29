<?php
/* rekap php oop */
/* 15. namespace dan use */

// ==========================================
// ## PENGERTIAN NAMESPACE DI PHP
// ==========================================
/*
Namespace adalah cara PHP untuk:
1. Mencegah BENTROK NAMA CLASS (Name Collision).
   Misal: Tim A bikin class 'Hero', dan Tim B juga bikin class 'Hero'.
   Dengan namespace, keduanya bisa hidup damai:
   - Game\Fontaine\Hero
   - Game\Belobog\Hero
2. Mengorganisasi kode menjadi folder virtual yang rapi (standar PSR-4).

CARA PAKAI:
- 'namespace NamaRuang;' di baris paling atas file.
- 'use NamaRuang\NamaClass;' untuk mengimpor class ke file lain.
- 'as NamaAlias;' untuk memberi nama panggilan jika namanya sama.
*/

// Catatan: Di satu file PHP kita bisa membuat sub-namespace menggunakan kurung kurawal {}
// untuk keperluan simulasi pembelajaran.

namespace Game\Fontaine {
    class Karakter
    {
        public function info(): void
        {
            echo "[Fontaine] Furina sang Hydro Archon.\n";
        }
    }
}

namespace Game\Belobog {
    class Karakter
    {
        public function info(): void
        {
            echo "[Belobog] Clara dan robot pelindung Svarog.\n";
        }
    }
}


// --- NAMESPACE UTAMA / KODE YANG MENGGUNAKAN KEDUA CLASS TERSEBUT ---
namespace AplikasiUtama {

    // Mengimpor kedua class 'Karakter' yang bernama sama dari namespace berbeda!
    use Game\Fontaine\Karakter as KarakterFontaine;
    use Game\Belobog\Karakter as KarakterBelobog;

    echo "--- 1. MEMBUAT DUA CLASS BERNAMA SAMA TANPA BENTROK ---\n";

    $heroFontaine = new KarakterFontaine();
    $heroFontaine->info();

    $heroBelobog = new KarakterBelobog();
    $heroBelobog->info();


    echo "\n--- 2. MEMANGGIL LANGSUNG TANPA 'use' (FULLY QUALIFIED NAME) ---\n";
    // Kita juga bisa memanggil langsung dengan path lengkap diawali backslash (\)
    $heroLangsung = new \Game\Fontaine\Karakter();
    $heroLangsung->info();
}

/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. MEMBUAT DUA CLASS BERNAMA SAMA TANPA BENTROK ---
[Fontaine] Furina sang Hydro Archon.
[Belobog] Clara dan robot pelindung Svarog.

--- 2. MEMANGGIL LANGSUNG TANPA 'use' (FULLY QUALIFIED NAME) ---
[Fontaine] Furina sang Hydro Archon.
==================================================
*/
