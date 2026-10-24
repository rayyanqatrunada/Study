<?php
/* rekap dasar php */
/* 8. switch case dan match expression */

// ==========================================
// ## 1. SWITCH CASE TRADISIONAL
// ==========================================

/*
Kapan pakai switch case?
Saat kita mencocokkan satu variabel dengan banyak pilihan nilai yang SUDAH PASTI.
Wajib pakai 'break' di setiap case supaya tidak bablas ke bawah!
*/

$hari = "Sabtu";

echo "Hari ini: $hari\n";
echo "Rencana : ";

switch ($hari) {
    case "Senin":
        echo "Awal minggu, semangat mulai belajar!\n";
        break; // stop di sini
    case "Jumat":
        echo "Besok udah akhir pekan!\n";
        break;
    
    // menggabungkan beberapa case jika aksinya sama:
    case "Sabtu":
    case "Minggu":
        echo "Weekend! Waktunya santai bareng Furina.\n";
        break;
    
    default:
        echo "Hari biasa, jalani seperti biasa.\n";
        break;
}


// ==========================================
// ## 2. MATCH EXPRESSION (FITUR MODERN PHP 8+)
// ==========================================

/*
Di PHP 8 ke atas ada fitur baru namanya 'match'.
Ini mirip banget sama match-case yang ada di Python!

Keunggulan match dibanding switch:
1. Gak butuh nulis 'break' lagi (gak bakal bablas).
2. Perbandingannya ketat / strict (===), jadi jauh lebih aman.
3. Bisa langsung mengembalikan nilai ke variabel!
*/

echo "\n--- MATCH EXPRESSION (PHP 8+) ---\n";

$kodeMenu = 2;

// nilai langsung ditampung ke variabel $pesanan
$pesanan = match ($kodeMenu) {
    1 => "Nasi Goreng Spesial",
    2 => "Mie Ayam Bakso",
    3 => "Es Teh Manis",
    default => "Menu tidak ada!",
};

echo "Pilihan menu ke-$kodeMenu adalah: $pesanan\n";


// Contoh match dengan nama karakter (mirip gaya belajarmu di Python)
$nama = "Furina";

$respon = match ($nama) {
    "Furina"    => "Hai cantikk!",
    "Yui"       => "Hai manisss!",
    "Charlotta" => "Hai imutt!",
    default     => "Oh, namamu $nama",
};

echo "Respon untuk $nama : $respon\n";


/*
==================================================
OUTPUT TERMINAL:
==================================================
Hari ini: Sabtu
Rencana : Weekend! Waktunya santai bareng Furina.

--- MATCH EXPRESSION (PHP 8+) ---
Pilihan menu ke-2 adalah: Mie Ayam Bakso
Respon untuk Furina : Hai cantikk!
==================================================
*/
