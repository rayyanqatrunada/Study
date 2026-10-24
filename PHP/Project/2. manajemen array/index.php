<?php
/* project php pemula */
/* 2. manajemen waifu tim (pengetes kemampuan lanjutan - array crud) */

// ==========================================
// ## PROJECT 2: MANAJEMEN TIM WAIFU (CRUD)
// ==========================================
/*
MENGGABUNGKAN MATERI LANJUTAN:
- Array Asosiatif & Multidimensi
- Fungsi CRUD (Tambah, Tampil, Cari, Hapus)
- Pass by Reference (&) pada modifikasi array
- Looping foreach tabel data
- readline() interaktif
*/

$timWaifu = [
    ["nama" => "Furina", "elemen" => "Hydro", "level" => 90],
    ["nama" => "Clara",  "elemen" => "Physical", "level" => 80]
];

$berjalan = true;

while ($berjalan) {
    echo "\n=================================\n";
    echo "     MANAJEMEN TIM WAIFU PHP     \n";
    echo "=================================\n";
    echo "1. Lihat Anggota Tim\n";
    echo "2. Tambah Karakter Baru\n";
    echo "3. Cari Karakter\n";
    echo "4. Hapus Karakter\n";
    echo "5. Keluar Program\n";
    
    $pilihan = trim(readline("Pilih opsi menu (1-5): "));
    if ($pilihan === false || $pilihan === "") break;

    match ($pilihan) {
        "1" => tampilkanTim($timWaifu),
        "2" => tambahKarakter($timWaifu),
        "3" => cariKarakter($timWaifu),
        "4" => hapusKarakter($timWaifu),
        "5" => ($berjalan = false),
        default => print("Pilihan gak valid! Masukkan angka 1 sampai 5.\n"),
    };
}

echo "Sampai jumpa lagi! Program tim selesai.\n";


// ==========================================
// FUNGSI-FUNGSI CRUD
// ==========================================

// 1. Tampilkan Tim
function tampilkanTim(array $tim): void {
    echo "\n--- DAFTAR ANGGOTA TIM SAAT INI ---\n";
    if (empty($tim)) {
        echo "Tim masih kosong! Tambahkan karakter baru dulu.\n";
        return;
    }

    foreach ($tim as $index => $w) {
        $no = $index + 1;
        echo "$no. {$w['nama']} [Elemen: {$w['elemen']}, Level: {$w['level']}]\n";
    }
    echo "Total: " . count($tim) . " karakter.\n";
}

// 2. Tambah Karakter (pakai pass by reference &$tim agar array asli ter-update)
function tambahKarakter(array &$tim): void {
    $nama = trim(readline("Masukan nama karakter   : "));
    $elemen = trim(readline("Masukan elemen karakter : "));
    $level = (int) readline("Masukan level karakter  : ");

    if (empty($nama)) {
        echo "-> Nama tidak boleh kosong!\n";
        return;
    }

    $tim[] = [
        "nama"   => $nama,
        "elemen" => $elemen ?: "None",
        "level"  => $level ?: 1
    ];

    echo "-> Berhasil menambahkan '$nama' ke dalam tim!\n";
}

// 3. Cari Karakter
function cariKarakter(array $tim): void {
    $target = trim(readline("Masukan nama yang dicari: "));
    $ketemu = false;

    foreach ($tim as $index => $w) {
        if (strcasecmp($w['nama'], $target) === 0) {
            echo "-> Ketemu! '{$w['nama']}' ada di urutan ke-" . ($index + 1) . " (Elemen: {$w['elemen']}, Level: {$w['level']})\n";
            $ketemu = true;
            break;
        }
    }

    if (!$ketemu) {
        echo "-> Karakter '$target' tidak ditemukan di tim!\n";
    }
}

// 4. Hapus Karakter (pakai reference &$tim)
function hapusKarakter(array &$tim): void {
    $target = trim(readline("Masukan nama yang mau dihapus: "));
    $dihapus = false;

    foreach ($tim as $index => $w) {
        if (strcasecmp($w['nama'], $target) === 0) {
            array_splice($tim, $index, 1); // hapus elemen dan rapikan ulang indexnya
            echo "-> Karakter '$target' berhasil dikeluarkan dari tim.\n";
            $dihapus = true;
            break;
        }
    }

    if (!$dihapus) {
        echo "-> Gagal hapus! Karakter '$target' tidak ada di dalam tim.\n";
    }
}

/*
==================================================
CONTOH TAMPILAN PROGRAM:
==================================================
=================================
     MANAJEMEN TIM WAIFU PHP     
=================================
1. Lihat Anggota Tim
2. Tambah Karakter Baru
3. Cari Karakter
4. Hapus Karakter
5. Keluar Program
Pilih opsi menu (1-5): 1

--- DAFTAR ANGGOTA TIM SAAT INI ---
1. Furina [Elemen: Hydro, Level: 90]
2. Clara [Elemen: Physical, Level: 80]
Total: 2 karakter.

Pilih opsi menu (1-5): 5
Sampai jumpa lagi! Program tim selesai.
==================================================
*/
