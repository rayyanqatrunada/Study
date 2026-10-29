<?php
/* rekap php oop */
/* 10. trait dan use */

// ==========================================
// ## PENGERTIAN TRAIT DI PHP
// ==========================================
/*
Trait adalah mekanisme untuk "Copy-Paste method secara pintar" ke dalam banyak class.
Karena PHP tidak mendukung multiple inheritance (class tidak bisa extends 2 induk sekaligus),
maka TRAIT hadir sebagai solusi (mirip konsep Mixin di bahasa lain).

Class bisa menggunakan BANYAK trait sekaligus dengan kata kunci 'use'.
*/

// Trait 1: Kemampuan bersuara / menyapa
trait KemampuanMenyapa
{
    public function sapaPemain(string $namaPlayer): void
    {
        echo "[$this->nama] Halo $namaPlayer! Senang bisa bertemu denganmu hari ini.\n";
    }
}

// Trait 2: Kemampuan mencatat aktivitas ke sistem log
trait FiturLogger
{
    public function catatLog(string $pesan): void
    {
        echo "[SYSTEM LOG - " . date("H:i:s") . "] " . $pesan . "\n";
    }
}


// --- DUA TRAIT DENGAN NAMA METHOD SAMA (SIMULASI KONFLIK) ---
trait SkillApi
{
    public function serang(): void
    {
        echo "[$this->nama] Menyemburkan api Pyro membara!\n";
    }
}

trait SkillEs
{
    public function serang(): void
    {
        echo "[$this->nama] Membekukan musuh dengan salju Cryo!\n";
    }
}


// --- IMPLEMENTASI KE DALAM CLASS ---

class WaifuPetualang
{
    // Memasukkan Trait KemampuanMenyapa dan FiturLogger ke dalam class ini
    use KemampuanMenyapa, FiturLogger;

    public function __construct(public string $nama) {}
}

class WaifuDuaElemen
{
    // Jika ada 2 trait yang punya method sama (serang), selesaikan dengan 'insteadof' dan 'as'
    use SkillApi, SkillEs {
        SkillApi::serang insteadof SkillEs; // pakai serang() milik SkillApi sebagai default
        SkillEs::serang as serangBeku;       // beri nama alias serangBeku() untuk method milik SkillEs
    }

    public function __construct(public string $nama) {}
}


// ==========================================
// ## PENGUJIAN
// ==========================================

echo "--- 1. PENGGUNAAN TRAIT BIASA (FURINA) ---\n";
$furina = new WaifuPetualang("Furina");
$furina->sapaPemain("Rayyan");
$furina->catatLog("Furina baru saja memasuki Opera Epiclese.");


echo "\n--- 2. RESOLUSI KONFLIK TRAIT (INSTEADOF & AS) ---\n";
$charlotta = new WaifuDuaElemen("Charlotta");
// Memanggil method default (SkillApi):
$charlotta->serang();
// Memanggil method yang di-rename alias (SkillEs):
$charlotta->serangBeku();

/*
==================================================
OUTPUT TERMINAL (contoh):
==================================================
--- 1. PENGGUNAAN TRAIT BIASA (FURINA) ---
[Furina] Halo Rayyan! Senang bisa bertemu denganmu hari ini.
[SYSTEM LOG - 01:25:00] Furina baru saja memasuki Opera Epiclese.

--- 2. RESOLUSI KONFLIK TRAIT (INSTEADOF & AS) ---
[Charlotta] Menyemburkan api Pyro membara!
[Charlotta] Membekukan musuh dengan salju Cryo!
==================================================
*/
