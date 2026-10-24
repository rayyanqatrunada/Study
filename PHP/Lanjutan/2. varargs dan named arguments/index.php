<?php
/* rekap php lanjutan */
/* 2. varargs, spread operator, dan named arguments */

// ==========================================
// ## 1. VARARGS (VARIABLE ARGUMENTS)
// ==========================================

/*
Mirip seperti *args di Python atau varargs di Java.
Di PHP kita pakai tanda titik tiga (...$namaVariabel).
Fungsi bisa menerima jumlah argumen berapapun, dan otomatis jadi array di dalamnya!
*/

echo "--- 1. VARARGS PENJUMLAHAN ---\n";

function jumlahkan(int ...$kumpulanAngka): int {
    $total = 0;
    foreach ($kumpulanAngka as $angka) {
        $total += $angka;
    }
    return $total;
}

echo "jumlahkan(10, 20)          = " . jumlahkan(10, 20) . "\n";
echo "jumlahkan(5, 10, 15, 20)   = " . jumlahkan(5, 10, 15, 20) . "\n";
echo "jumlahkan(1, 2, 3, 4, 5)   = " . jumlahkan(1, 2, 3, 4, 5) . "\n";
echo "jumlahkan() [tanpa angka]  = " . jumlahkan() . "\n";


// ==========================================
// ## 2. SPREAD OPERATOR (UNPACKING ARRAY)
// ==========================================
/*
Kebalikan dari varargs:
Kalau kita punya array berisi angka, kita bisa "bongkar" isi array itu
menjadi argumen individu menggunakan tanda titik tiga (...) di depan array-nya!
*/

echo "\n--- 2. SPREAD OPERATOR (...) ---\n";

$dataNilai = [50, 25, 25];
// jumlahkan(...$dataNilai) sama artinya dengan jumlahkan(50, 25, 25)
echo "Hasil bongkar array : " . jumlahkan(...$dataNilai) . "\n";


// ==========================================
// ## 3. NAMED ARGUMENTS (FITUR PHP 8+)
// ==========================================
/*
Di PHP 8 ke atas, saat memanggil fungsi kita bisa langsung menyebutkan NAMA parameternya!
Keuntungannya:
1. Gak perlu hafal urutan posisi parameter.
2. Bisa melewati (skip) parameter default yang gak mau kita ubah.
*/

echo "\n--- 3. NAMED ARGUMENTS (PHP 8+) ---\n";

function buatProfilWaifu(string $nama, string $elemen = "Anemo", int $level = 1, string $region = "Mondstadt") {
    echo "Karakter: $nama | Elemen: $elemen | Level: $level | Region: $region\n";
}

// Cara biasa (harus urut dari depan):
buatProfilWaifu("Jean", "Anemo", 80, "Mondstadt");

// Cara Named Arguments: sebutkan nama_param: nilai (urutannya bebas!)
buatProfilWaifu(
    region: "Fontaine",
    level: 90,
    elemen: "Hydro",
    nama: "Furina"
);

// Skip parameter default ($elemen dan $region dibiarkan default, cuma ubah $nama dan $level):
buatProfilWaifu(nama: "Klee", level: 85);


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. VARARGS PENJUMLAHAN ---
jumlahkan(10, 20)          = 30
jumlahkan(5, 10, 15, 20)   = 50
jumlahkan(1, 2, 3, 4, 5)   = 15
jumlahkan() [tanpa angka]  = 0

--- 2. SPREAD OPERATOR (...) ---
Hasil bongkar array : 100

--- 3. NAMED ARGUMENTS (PHP 8+) ---
Karakter: Jean | Elemen: Anemo | Level: 80 | Region: Mondstadt
Karakter: Furina | Elemen: Hydro | Level: 90 | Region: Fontaine
Karakter: Klee | Elemen: Anemo | Level: 85 | Region: Mondstadt
==================================================
*/
