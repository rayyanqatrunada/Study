<?php
/* rekap dasar php */
/* 10. perulangan while, do while, break, continue */

// ==========================================
// ## 1. WHILE LOOP
// ==========================================

/*
While loop berjalan selama kondisinya bernilai TRUE.
Jangan lupa buat nambahin counter ($angka++) supaya gak terjadi infinite loop!
*/

echo "--- 1. WHILE LOOP ---\n";
$angka = 0;

while ($angka < 3) {
    $angka++;
    echo "Furina cantik ke-$angka\n";
}
echo "Furina : udah woi!\n\n";


// ==========================================
// ## 2. DO - WHILE LOOP
// ==========================================

/*
Bedanya dengan while biasa:
Do-While AKAN MENJALANKAN AKSI DULU MINIMAL 1 KALI, baru di akhir mengecek kondisi!
Meskipun kondisinya salah/false dari awal, dia tetap sempat jalan 1 kali.
*/

echo "--- 2. DO-WHILE LOOP ---\n";
$angkaDo = 100;

do {
    echo "Ini dijalankan dulu sekali walau kondisi salah (angkaDo = $angkaDo)\n";
    $angkaDo++;
} while ($angkaDo < 5); // kondisinya false (101 < 5 adalah false)
echo "Akhir dari do-while\n\n";


// ==========================================
// ## 3. BREAK DAN CONTINUE
// ==========================================
// continue -> lewati (skip) iterasi saat ini, lanjut ke iterasi berikutnya
// break    -> berhenti paksa dan langsung keluar dari loop

echo "--- 3. CONTOH CONTINUE (SKIP ANGKA 3) ---\n";
for ($i = 1; $i <= 5; $i++) {
    if ($i === 3) {
        continue; // angka 3 di-skip
    }
    echo "Angka: $i\n";
}

echo "\n--- 4. CONTOH BREAK (STOP PAS KETEMU ANGKA 3) ---\n";
for ($i = 1; $i <= 5; $i++) {
    if ($i === 3) {
        break; // loop langsung berhenti total
    }
    echo "Angka: $i\n";
}


/*
==================================================
OUTPUT TERMINAL:
==================================================
--- 1. WHILE LOOP ---
Furina cantik ke-1
Furina cantik ke-2
Furina cantik ke-3
Furina : udah woi!

--- 2. DO-WHILE LOOP ---
Ini dijalankan dulu sekali walau kondisi salah (angkaDo = 100)
Akhir dari do-while

--- 3. CONTOH CONTINUE (SKIP ANGKA 3) ---
Angka: 1
Angka: 2
Angka: 4
Angka: 5

--- 4. CONTOH BREAK (STOP PAS KETEMU ANGKA 3) ---
Angka: 1
Angka: 2
==================================================
*/
