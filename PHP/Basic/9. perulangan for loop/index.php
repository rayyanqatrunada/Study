<?php
/* rekap dasar php */
/* 9. perulangan for loop */

// ==========================================
// ## FOR LOOP DI PHP
// ==========================================

/*
Format dasar:
for ($nilai_awal; $kondisi; $perubahan) {
    aksi yang diulang;
}
*/


// 1. Loop biasa dari 0 sampai 4
echo "--- 1. FOR LOOP BIASA ---\n";
for ($i = 0; $i < 5; $i++) {
    echo "i sekarang -> $i\n";
}
echo "Akhir dari program 1\n\n";


// 2. Loop dengan rentang tertentu (dari 2 sampai 6)
echo "--- 2. FOR LOOP RENTANG 2 SAMPAI 6 ---\n";
for ($i = 2; $i <= 6; $i++) {
    echo "i sekarang -> $i\n";
}
echo "Akhir dari program 2\n\n";


// 3. Loop dengan step / loncat (angka genap dari 0 sampai 10)
echo "--- 3. FOR LOOP LONCAT 2 ---\n";
for ($i = 0; $i <= 10; $i += 2) {
    echo "Genap -> $i\n";
}
echo "Akhir dari program 3\n\n";


// 4. Loop mundur (countdown)
echo "--- 4. FOR LOOP MUNDUR ---\n";
for ($i = 5; $i >= 1; $i--) {
    echo "Hitung mundur: $i\n";
}
echo "Roket Meluncur! 🚀\n\n";


// 5. Loop membaca karakter string
// asyiknya di PHP, string bisa langsung diakses nomor index-nya kayak array!
echo "--- 5. MEMBACA HURUF STRING ---\n";
$teks = "Furina";

for ($i = 0; $i < strlen($teks); $i++) {
    echo "Huruf index ke-$i : " . $teks[$i] . "\n";
}


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. FOR LOOP BIASA ---
i sekarang -> 0
i sekarang -> 1
i sekarang -> 2
i sekarang -> 3
i sekarang -> 4
Akhir dari program 1

--- 2. FOR LOOP RENTANG 2 SAMPAI 6 ---
i sekarang -> 2
i sekarang -> 3
i sekarang -> 4
i sekarang -> 5
i sekarang -> 6
Akhir dari program 2

--- 3. FOR LOOP LONCAT 2 ---
Genap -> 0
Genap -> 2
Genap -> 4
Genap -> 6
Genap -> 8
Genap -> 10
Akhir dari program 3

--- 4. FOR LOOP MUNDUR ---
Hitung mundur: 5
Hitung mundur: 4
Hitung mundur: 3
Hitung mundur: 2
Hitung mundur: 1
Roket Meluncur! 🚀

--- 5. MEMBACA HURUF STRING ---
Huruf index ke-0 : F
Huruf index ke-1 : u
Huruf index ke-2 : r
Huruf index ke-3 : i
Huruf index ke-4 : n
Huruf index ke-5 : a
==================================================
*/
