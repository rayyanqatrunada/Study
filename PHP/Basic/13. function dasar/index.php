<?php
/* rekap dasar php */
/* 13. function dasar */

// ==========================================
// ## MEMBUAT DAN MEMANGGIL FUNCTION
// ==========================================

/*
Function adalah kumpulan perintah yang dibungkus agar bisa dipanggil berkali-kali.
Mirip 'def' di Python.
*/


// 1. Function Biasa Tanpa Parameter
function sapa() {
    echo "Halo! Ini dipanggil dari dalam function sapa()\n";
}

echo "--- 1. FUNCTION TANPA PARAMETER ---\n";
sapa();


// 2. Function Dengan Parameter
function sapaNama($nama) {
    echo "Hai $nama, hari ini kamu cantik banget!\n";
}

echo "\n--- 2. FUNCTION DENGAN PARAMETER ---\n";
sapaNama("Furina");
sapaNama("Clara");


// 3. Parameter dengan Nilai Default (Default Argument)
// Kalau pas dipanggil kita gak ngasih nama, otomatis pakai "Furina"
function sapaDefault($nama = "Furina") {
    echo "Hai Yang Mulia $nama!\n";
}

echo "\n--- 3. PARAMETER DENGAN NILAI DEFAULT ---\n";
sapaDefault();        // otomatis pakai Furina
sapaDefault("Clara"); // ditimpa jadi Clara


// 4. Function Dengan Return Value (Mengembalikan Nilai)
function hitungTambah($a, $b) {
    return $a + $b; // mengembalikan hasil penjumlahan
}

echo "\n--- 4. FUNCTION DENGAN RETURN VALUE ---\n";
$hasil1 = hitungTambah(15, 25);
$hasil2 = hitungTambah(100, 250);

echo "Hasil 15 + 25   = $hasil1\n";
echo "Hasil 100 + 250 = $hasil2\n";


// 5. Type Hinting (Fitur Modern PHP)
// Kita bisa menentukan tipe data parameter dan tipe data return-nya agar lebih rapi dan aman
function kali(int $angka1, int $angka2): int {
    return $angka1 * $angka2;
}

echo "\n--- 5. FUNCTION DENGAN TYPE HINTING ---\n";
$hasilKali = kali(4, 5);
echo "kali(4, 5) = $hasilKali\n";


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. FUNCTION TANPA PARAMETER ---
Halo! Ini dipanggil dari dalam function sapa()

--- 2. FUNCTION DENGAN PARAMETER ---
Hai Furina, hari ini kamu cantik banget!
Hai Clara, hari ini kamu cantik banget!

--- 3. PARAMETER DENGAN NILAI DEFAULT ---
Hai Yang Mulia Furina!
Hai Yang Mulia Clara!

--- 4. FUNCTION DENGAN RETURN VALUE ---
Hasil 15 + 25   = 40
Hasil 100 + 250 = 350

--- 5. FUNCTION DENGAN TYPE HINTING ---
kali(4, 5) = 20
==================================================
*/
