<?php
/* rekap dasar php */
/* 1. output dan echo */

// ==========================================
// ## CARA MEMUNCULKAN TEKS (OUTPUT)
// ==========================================

// 1. menggunakan echo
// ini cara paling umum dan paling sering dipakai di PHP
echo "Hello World!\n";
echo "Lagi belajar dasar PHP bareng Furina\n";


// 2. menggunakan print
// print fungsinya mirip echo, tapi echo lebih cepat dan lebih populer
print "Hai Furina cantik\n";


// 3. buat ganti baris (enter)
// kalau di terminal (CLI), kita pakai "\n"
// kalau di browser (HTML), kita pakai tag "<br>"
echo "\n"; // bikin 1 baris kosong


// 4. penggabungan string (concatenation)
// PENTING: di PHP gabung teks BUKAN pakai tanda '+' tapi tanda TITIK (.)
echo "Nama saya " . "Rayyan" . " dan waifu saya " . "Furina" . "\n";


// 5. var_dump() dan print_r()
// ini fungsi sakti bawaan PHP buat ngecek tipe data dan isi variabel (sering banget dipake buat debugging)
echo "\n--- FUNGSI DEBUGGING (NGINTIP DATA) ---\n";

$nama = "Furina";
$umur = 500;
$status = true;

// var_dump nampilin tipe data + panjang karakter + nilainya
var_dump($nama);   // string(6) "Furina"
var_dump($umur);   // int(500)
var_dump($status); // bool(true)

// print_r cuma nampilin isi datanya saja (lebih ringkas dan enak dibaca)
print_r("Halo Furina!\n");


/*
==================================================
OUTPUT TERMINAL:
==================================================
Hello World!
Lagi belajar dasar PHP bareng Furina
Hai Furina cantik

Nama saya Rayyan dan waifu saya Furina

--- FUNGSI DEBUGGING (NGINTIP DATA) ---
string(6) "Furina"
int(500)
bool(true)
Halo Furina!
==================================================
*/
