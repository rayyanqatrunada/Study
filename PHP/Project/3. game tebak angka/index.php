<?php
/* project php pemula */
/* 3. mini game tebak angka (pengetes gabungan basic & lanjutan) */

// ==========================================
// ## PROJECT 3: MINI GAME TEBAK ANGKA
// ==========================================
/*
MENGGABUNGKAN MATERI BASIC & LANJUTAN:
- mt_rand(1, 100) untuk angka acak komputer
- readline() untuk input tebakan
- try-catch & throw Exception untuk validasi input (anti-crash kalau user ketik huruf)
- while loop & if-elseif-else untuk logika tebakan
- Counter percobaan & function penilaian peringkat
*/

echo "==========================================\n";
echo "      MINI GAME: TEBAK ANGKA RAHASIA      \n";
echo "==========================================\n";
echo "Komputer sudah memilih 1 angka dari 1 - 100.\n";
echo "Coba tebak dalam sesedikit mungkin percobaan!\n\n";

$angkaRahasia = mt_rand(1, 100);
$jumlahTebakan = 0;
$berhasilTebak = false;

while (!$berhasilTebak) {
    $rawInput = readline("Tebakan kamu: ");
    if ($rawInput === false || $rawInput === "") {
        echo "\nPermainan dihentikan.\n";
        break;
    }

    $rawInput = trim($rawInput);

    // Penerapan TRY-CATCH dari tingkat lanjutan:
    // Mencegah game crash jika pemain salah memasukkan huruf!
    try {
        if (!is_numeric($rawInput)) {
            throw new InvalidArgumentException("Harap masukkan ANGKA saja, bukan teks huruf!");
        }

        $tebakan = (int) $rawInput;

        if ($tebakan < 1 || $tebakan > 100) {
            throw new RangeException("Angka tebakan harus berada di rentang 1 sampai 100!");
        }

        $jumlahTebakan++;

        // Logika perbandingan tebakan
        if ($tebakan === $angkaRahasia) {
            $berhasilTebak = true;
            echo "\n🎉 SELAMAT! Tebakan kamu TEPAT SEKALI!\n";
            echo "Angka rahasianya memang: $angkaRahasia\n";
            echo "Kamu berhasil menebak dalam $jumlahTebakan kali percobaan.\n";
            tampilkanPeringkat($jumlahTebakan);
        } elseif ($tebakan < $angkaRahasia) {
            echo "-> Terlalu KECIL! Coba angka yang lebih besar.\n\n";
        } else {
            echo "-> Terlalu BESAR! Coba angka yang lebih kecil.\n\n";
        }

    } catch (Exception $e) {
        echo "-> [Input Salah!] " . $e->getMessage() . "\n\n";
    }
}


// Function penilai performa pemain
function tampilkanPeringkat(int $percobaan): void {
    echo "------------------------------------------\n";
    if ($percobaan <= 4) {
        echo "Peringkat: S (Jenius! Furina bangga banget sama kamu!)\n";
    } elseif ($percobaan <= 7) {
        echo "Peringkat: A (Hebat, tebakan logikamu sangat tajam!)\n";
    } elseif ($percobaan <= 10) {
        echo "Peringkat: B (Bagus, terus latihan lagi ya!)\n";
    } else {
        echo "Peringkat: C (Berhasil, walau butuh banyak percobaan!)\n";
    }
    echo "------------------------------------------\n";
}

/*
==================================================
CONTOH TAMPILAN PROGRAM:
==================================================
==========================================
      MINI GAME: TEBAK ANGKA RAHASIA      
==========================================
Komputer sudah memilih 1 angka dari 1 - 100.
Coba tebak dalam sesedikit mungkin percobaan!

Tebakan kamu: 50
-> Terlalu KECIL! Coba angka yang lebih besar.

Tebakan kamu: halo
-> [Input Salah!] Harap masukkan ANGKA saja, bukan teks huruf!

Tebakan kamu: 75
-> Terlalu BESAR! Coba angka yang lebih kecil.

Tebakan kamu: 63
🎉 SELAMAT! Tebakan kamu TEPAT SEKALI!
Angka rahasianya memang: 63
Kamu berhasil menebak dalam 3 kali percobaan.
------------------------------------------
Peringkat: S (Jenius! Furina bangga banget sama kamu!)
------------------------------------------
==================================================
*/
