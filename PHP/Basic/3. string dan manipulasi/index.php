<?php
/* rekap dasar php */
/* 3. string dan manipulasi */

// ==========================================
// ## BEDA PETIK DUA ("") VS PETIK SATU ('')
// ==========================================

$nama = "Furina";

// PETIK DUA (""): bisa membaca variabel langsung di dalam teks (string interpolation)
echo "Hai $nama, kamu manis banget!\n";

// PETIK SATU (''): menampilkan teks apa adanya secara mentah (variabel gak akan dibaca)
echo 'Hai $nama, ini gak bakal kebaca namanya\n';
echo "\n\n";


// ==========================================
// ## FUNGSI-FUNGSI MANIPULASI STRING BAWAAN
// ==========================================

$kalimat = "Furina is mine";
$namaLengkap = "Furina De Fontaine";

echo "Kalimat awal: " . $kalimat . "\n";
echo "----------------------------------------\n";


// 1. strlen() -> menghitung panjang karakter (spasi juga dihitung)
$panjang = strlen($namaLengkap);
echo "Panjang dari '$namaLengkap' : " . $panjang . " karakter\n";


// 2. str_word_count() -> menghitung jumlah kata
$jumlahKata = str_word_count($kalimat);
echo "Jumlah kata di '$kalimat'    : " . $jumlahKata . " kata\n";


// 3. strrev() -> membalikkan urutan teks
$balikTeks = strrev("KASUR RUSAK");
echo "Hasil strrev('KASUR RUSAK') : " . $balikTeks . "\n";


// 4. strpos() -> mencari posisi index kata tertentu (index mulai dari 0)
// kalau ketemu balikin nomor indexnya, kalau gak ada balikin false
$posisi = strpos($kalimat, "mine");
echo "Kata 'mine' ada di index    : " . $posisi . "\n";


// 5. str_replace() -> mengganti kata tertentu
// format: str_replace(kataLama, kataBaru, teksAsli)
$ganti = str_replace("mine", "the best", $kalimat);
echo "Hasil ganti kata            : " . $ganti . "\n";


// 6. strtoupper() dan strtolower() -> ubah huruf besar / kecil
echo "Huruf besar semua           : " . strtoupper($nama) . "\n";
echo "Huruf kecil semua           : " . strtolower($nama) . "\n";


// 7. substr() -> memotong sebagian teks
// format: substr(teks, indexMulai, panjangKarakter)
$potong = substr($namaLengkap, 0, 6); // ambil 6 huruf dari index 0
echo "Potongan 6 huruf pertama    : " . $potong . "\n"; // "Furina"


// 8. trim() -> menghapus spasi liar di ujung kiri dan kanan
$teksKotor = "   halo furina   ";
echo "Sebelum trim: '" . $teksKotor . "'\n";
echo "Setelah trim: '" . trim($teksKotor) . "'\n";


/*
==================================================
OUTPUT TERMINAL:
==================================================
Hai Furina, kamu manis banget!
Hai $nama, ini gak bakal kebaca namanya\n

Kalimat awal: Furina is mine
----------------------------------------
Panjang dari 'Furina De Fontaine' : 18 karakter
Jumlah kata di 'Furina is mine'    : 3 kata
Hasil strrev('KASUR RUSAK') : KASUR RUSAK
Kata 'mine' ada di index    : 10
Hasil ganti kata            : Furina is the best
Huruf besar semua           : FURINA
Huruf kecil semua           : furina
Potongan 6 huruf pertama    : Furina
Sebelum trim: '   halo furina   '
Setelah trim: 'halo furina'
==================================================
*/
