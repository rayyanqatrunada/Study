<?php
/* rekap php lanjutan */
/* 8. membaca dan menulis file (file i/o) */

// ==========================================
// ## MEMBACA & MENULIS FILE DI PHP
// ==========================================

/*
Di PHP, operasi file itu SANGAT MUDAH karena ada fungsi sakti:
1. file_put_contents() -> menulis teks ke file (otomatis dibuatkan kalau belum ada).
2. file_get_contents() -> membaca seluruh isi file jadi 1 string.
3. unlink()            -> menghapus file.
*/

$namaFile = __DIR__ . "/catatan.txt";


// ==========================================
// ## 1. MENULIS FILE (WRITE)
// ==========================================
echo "--- 1. MENULIS FILE ---\n";

$teksAwal = "Catatan Belajar PHP Rayyan\n";
$teksAwal .= "1. Furina adalah Hydro Archon terbaik\n";
$teksAwal .= "2. PHP sangat fleksibel dan asyik\n";

// Menulis teks ke file (mode overwrite / menimpa)
file_put_contents($namaFile, $teksAwal);
echo "-> Berhasil menulis ke file: catatan.txt\n";


// Menambahkan baris baru di akhir (mode APPEND)
$teksTambahan = "3. Tambahan catatan baru lewat mode FILE_APPEND\n";
file_put_contents($namaFile, $teksTambahan, FILE_APPEND);
echo "-> Berhasil menambahkan baris baru dengan FILE_APPEND\n\n";


// ==========================================
// ## 2. MEMERIKSA INFORMASI FILE
// ==========================================
echo "--- 2. INFORMASI FILE ---\n";

if (file_exists($namaFile)) {
    echo "Nama File   : " . basename($namaFile) . "\n";
    echo "Ukuran File : " . filesize($namaFile) . " bytes\n\n";
}


// ==========================================
// ## 3. MEMBACA ISI FILE (READ)
// ==========================================
echo "--- 3. MEMBACA ISI FILE (file_get_contents) ---\n";

// Cara 1: membaca langsung jadi satu string utuh
$isiFile = file_get_contents($namaFile);
echo $isiFile;


// Cara 2: membaca file langsung menjadi Array per baris (fungsi file())
echo "\n--- 4. MEMBACA PER BARIS (FUNGSI file()) ---\n";
$barisList = file($namaFile, FILE_IGNORE_NEW_LINES);

foreach ($barisList as $nomor => $baris) {
    echo "[Baris " . ($nomor + 1) . "] $baris\n";
}


// ==========================================
// ## 4. MENGHAPUS FILE (CLEAN UP)
// ==========================================
echo "\n--- 5. MENGHAPUS FILE (unlink) ---\n";

if (unlink($namaFile)) {
    echo "-> File catatan.txt berhasil dihapus setelah selesai demo.\n";
}


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. MENULIS FILE ---
-> Berhasil menulis ke file: catatan.txt
-> Berhasil menambahkan baris baru dengan FILE_APPEND

--- 2. INFORMASI FILE ---
Nama File   : catatan.txt
Ukuran File : 160 bytes

--- 3. MEMBACA ISI FILE (file_get_contents) ---
Catatan Belajar PHP Rayyan
1. Furina adalah Hydro Archon terbaik
2. PHP sangat fleksibel dan asyik
3. Tambahan catatan baru lewat mode FILE_APPEND

--- 4. MEMBACA PER BARIS (FUNGSI file()) ---
[Baris 1] Catatan Belajar PHP Rayyan
[Baris 2] 1. Furina adalah Hydro Archon terbaik
[Baris 3] 2. PHP sangat fleksibel dan asyik
[Baris 4] 3. Tambahan catatan baru lewat mode FILE_APPEND

--- 5. MENGHAPUS FILE (unlink) ---
-> File catatan.txt berhasil dihapus setelah selesai demo.
==================================================
*/
