# Deteksi No Hp Indonesia
Package ini digunakan untuk mendeteksi otomatis jenis operator nomor hp Indonesia berdasarkan nomor Hp yang diinputkan

# Author
Teguh Rijanandi - teguhrijanandi02@gmail.com

# Instalasi
Mengggunakan composer
<code>
  composer require ofi/deteksinohpindonesia
</code>

Atau kamu juga bisa mengunduh repository ini dan mengimport autoloadnya secara manual, seperti yang sudah di contohkan pada gambar dibawah ini

# Dokumentasi
Untuk cara penggunaan bisa dilihat pada file index.php
https://github.com/teguh02/deteksinohpindonesia/blob/master/index.php

<hr>

Cara Pakai (penjelasan gambar)
1. Import autoload dan class
Sebelum menggunakan package ini, kamu harus mengimport autoload dan classnya terlebih dahulu. 
![carbon](https://user-images.githubusercontent.com/43981051/100326935-2c378700-2ffd-11eb-84cd-1f8ae81df88f.png)

<br>

2. Deteksi nomor secara otomatis
Dengan ini kamu bisa mendeteksi nomor hp yang diinputkan secara otomatis
![carbon (1)](https://user-images.githubusercontent.com/43981051/100327166-7a4c8a80-2ffd-11eb-897d-29351e8c4145.png)

<br>

3. Deteksi nomor berdasarkan operator
Dengan ini kamu bisa melakukan mendeteksi apakah nomor x itu nomor axis ataukah bukan?
hasilnya akan di return dalam bentuk boolean (true / false)
![carbon (4)](https://user-images.githubusercontent.com/43981051/100327389-d1eaf600-2ffd-11eb-8e3e-8222d69d591f.png)



# Demo APP
kami menyediakan demo sekaligus server API deteksi nomor hp secara otomatis,
silahkan lihat di
https://deteksinomerindo.herokuapp.com/

## Cara Penggunaannya adalah

### Single cek nomor hp
https://deteksinomerindo.herokuapp.com/?nomorhp=0895802739233
<br>
https://deteksinomerindo.herokuapp.com/?nomorhp=085600119625
<br>
https://deteksinomerindo.herokuapp.com/?nomorhp=08986642927
<br>
https://deteksinomerindo.herokuapp.com/?nomorhp=081807002845
<br>

### Multi cek nomor hp
Pisahkan nomor hp dengan koma dan harus di encode, contoh kode phpnya seperti ini

<br>

<code>
echo "https://deteksinomerindo.herokuapp.com/?nomorhp=" . urlencode('nomor1,nomor2,nomor3');
</code>

Contohnya seperti ini
https://deteksinomerindo.herokuapp.com/?nomorhp=0895802739233%2C085600119625%2C08986642927%2C081807002845







