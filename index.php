<?php

/**
 * Contoh penggunaan
 */

//  import autoload terlebih dahulu
include __DIR__ . '/vendor/autoload.php';

// kemudian import class
use ofi\deteksinohpindonesia\Client;

// buat class baru
$client = new Client;

// input nomor telepon
// awal nomor telepon harus 0,
// tidak boleh +62
$deteksi = $client->detect('089655541804');

// cetak hasilnya, karena hasil akan direturn dalam array
print_r($deteksi);

echo "<br>";

/**
 * Contoh kedua
 */

// kamu bisa melakukan mendeteksi
// apakah nomor x itu nomor axis ataukah bukan?
// hasilnya akan di return dalam bentuk boolean (true / false)
// dan selain axis kamu bisa melakukan deteksi 
// dengan menggunakan method dibawah ini

// $client -> isIndosat('nomorHp');
// $client -> isXl('nomorHp');
// $client -> isTelkomsel('nomorHp');
// $client -> isSmartfren('nomorHp');
// $client -> isThree('nomorHp');

echo $client -> isAxis('083839441169');