<?php
/* project php pemula */
/* 1. kalkulator cli sederhana (pengetes kemampuan basic) */

// ==========================================
// ## PROJECT 1: KALKULATOR TERMINAL SEDERHANA
// ==========================================
/*
MENGGABUNGKAN MATERI BASIC:
- readline() untuk input terminal
- Variabel & tipe data angka
- Operasi aritmatika dasar (+, -, *, /, %, **)
- Percabangan modern 'match'
- Function terpisah
- Perulangan while loop menu
*/

echo "=================================\n";
echo "    KALKULATOR PHP SEDERHANA     \n";
echo "=================================\n";

$sedangBerjalan = true;

while ($sedangBerjalan) {
    // Ambil input angka pertama
    $input1 = readline("\nMasukan angka pertama : ");
    if ($input1 === false || $input1 === "") break;
    $angka1 = (float) $input1;

    // Ambil operator
    $operator = trim(readline("Pilih operator (+, -, *, /, %, **) : "));

    // Ambil angka kedua
    $angka2 = (float) readline("Masukan angka kedua   : ");

    // Hitung hasilnya lewat function
    $hasil = hitungKalkulator($angka1, $angka2, $operator);

    echo "---------------------------------\n";
    echo "Hasil: $angka1 $operator $angka2 = $hasil\n";
    echo "---------------------------------\n";

    // Tanya apakah mau lanjut
    $lanjut = strtolower(trim(readline("Mau menghitung lagi? (y/n): ")));
    if ($lanjut !== 'y') {
        $sedangBerjalan = false;
        echo "\nTerima kasih sudah mencoba! Program kalkulator selesai.\n";
    }
}


// ==========================================
// FUNGSI HITUNG MODULAR DENGAN MATCH EXPRESSION
// ==========================================
function hitungKalkulator(float $a, float $b, string $op): float|string {
    return match ($op) {
        '+' => $a + $b,
        '-' => $a - $b,
        '*' => $a * $b,
        '/' => ($b == 0) ? "Error (Tidak bisa bagi nol!)" : ($a / $b),
        '%' => ($b == 0) ? "Error (Modulus nol!)" : ($a % $b),
        '**'=> $a ** $b,
        default => "Operator tidak dikenali!",
    };
}

/*
==================================================
CONTOH TAMPILAN PROGRAM:
==================================================
=================================
    KALKULATOR PHP SEDERHANA     
=================================

Masukan angka pertama : 20
Pilih operator (+, -, *, /, %, **) : *
Masukan angka kedua   : 5
---------------------------------
Hasil: 20 * 5 = 100
---------------------------------
Mau menghitung lagi? (y/n): n

Terima kasih sudah mencoba! Program kalkulator selesai.
==================================================
*/
