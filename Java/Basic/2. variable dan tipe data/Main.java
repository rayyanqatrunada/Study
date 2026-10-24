/* rekap dasar java */
/* 2. variable dan tipe data */

public class Main {
    public static void main(String[] args) {

        // ==========================================
        // ## VARIABLE DAN TIPE DATA PRIMITIVE
        // ==========================================

        // di Java, tipe data WAJIB ditulis dulu sebelum nama variabelnya (static typing)
        // format: tipeData namaVariable = nilai;


        // ## 1. Bilangan Bulat (Integer)
        // ada 4 jenis berdasarkan rentang ukurannya:

        // byte: rentang kecil (-128 sampai 127), ukuran 1 byte
        byte dataByte = 100;

        // short: rentang sedang (-32.768 sampai 32.767), ukuran 2 byte
        short dataShort = 25000;

        // int: standar yang paling sering dipakai untuk angka bulat, ukuran 4 byte
        int dataInt = 1500000;
        int num1 = 20;
        int num2 = 10;

        // long: untuk angka yang sangat besar, ukuran 8 byte
        // CATATAN: wajib dikasih huruf 'L' atau 'l' di paling belakang nilainya
        long dataLong = 10000000000L;

        System.out.println("byte  : " + dataByte);
        System.out.println("short : " + dataShort);
        System.out.println("int   : " + dataInt);
        System.out.println("num1  : " + num1 + ", num2 : " + num2);
        System.out.println("long  : " + dataLong);


        // ## 2. Bilangan Desimal (Floating Point)
        // ada 2 jenis:

        // float: ukuran 4 byte
        // CATATAN: wajib dikasih huruf 'f' di belakang nilainya
        float dataFloat = 11.5f;

        // double: ukuran 8 byte, standar yang paling umum dipakai (lebih presisi)
        double dataDouble = 11.55432;

        System.out.println("\nfloat  : " + dataFloat);
        System.out.println("double : " + dataDouble);


        // ## 3. Karakter Tunggal (char)
        // hanya bisa menyimpan 1 karakter saja (1 huruf, angka, atau simbol)
        // CATATAN: wajib menggunakan tanda petik SATU ('') bukan petik dua
        char inisial = 'F';
        char nilaiGrade = 'A';
        char simbol = '$';

        System.out.println("\nchar inisial : " + inisial);
        System.out.println("char grade   : " + nilaiGrade);
        System.out.println("char simbol  : " + simbol);


        // ## 4. Boolean (Logika)
        // nilainya cuma ada 2: true dan false
        // CATATAN: huruf kecil semua (beda dengan Python yang True/False kapital)
        boolean isGanteng = true;
        boolean isMalas = false;

        System.out.println("\nisGanteng : " + isGanteng);
        System.out.println("isMalas   : " + isMalas);


        // ## 5. Konstanta (Variable Tetap)
        // pakai kata kunci 'final' di depan tipe data
        // nilainya tidak bisa diubah-ubah lagi setelah diberi nilai awal
        final double PHI = 3.14159;
        final int MAX_HEALTH = 100;

        System.out.println("\nKonstanta PHI        : " + PHI);
        System.out.println("Konstanta MAX_HEALTH : " + MAX_HEALTH);

        // PHI = 3.15; // ini bakal error kalau diaktifkan karena variable final nilainya paten!
    }
}

/*
==================================================
OUTPUT KELUARAN TERMINAL:
==================================================
byte  : 100
short : 25000
int   : 1500000
num1  : 20, num2 : 10
long  : 10000000000

float  : 11.5
double : 11.55432

char inisial : F
char grade   : A
char simbol  : $

isGanteng : true
isMalas   : false

Konstanta PHI        : 3.14159
Konstanta MAX_HEALTH : 100
==================================================
*/
