pada tanggal 24/03/2025
Hari ini saya melakukan instalisasi wsl,ubuntu,navicat dan postman bagi yang belum instalisasi
tujuannya untuk mempermudah dalam setup website maupun web app 
docker bertujuan untuk servernya kenapa tidak pakai xampp karena banyak part dan itu tidak efesien di dalam wsl itu sendiri
jika pakai xampp harus menggunakan apache 

-  wsl merupakan environment pada linux yang fungsinya sebagai os tambahan yang memungkinkan akses ke berbagai tools dan untuk melakukan perintah berbasis linux tanpa harus memisahkan os windows
- navicat berguna untuk melihat dan membuat database kita sudah terbuat atau sudah terrelasi satu sama lain 
- visual studio code sarana untuk editor kode yang telah di buat oleh kita dengan berbagai extension pendukung di dalamnya yang memungkinkan pengguna menuliskan kode dengan lebih efesien 

## website 
mempunyai adress seperti youtube
di kita disebut domain untuk projek uts dan uas salah satunya tentang company profile kalau mengambil tamplate cantumkan darimana sumbernya

untuk projeknya sendiri ada
- codingan
- analisa
- portofolio

## docker 
membuat server dengan nama esgul untuk semua pertemuan kecuali uts dan uas tujuannya untuk mempermudah pengecekan terhadap error
langkah pertama membuat docker-compose.yml
langkah kedua membuat .envnya
di dalam .env di buat nama databasenya
di docker composenya di buat buat versi dan service webnya
lanjut buat nginx.comf disebut servernya di dalam isinya ada lokasi dari dianya

- volumes adalah tempat kita menjalankan link filenya 
- port 80 pada host akan di arahkan ke port 80 dalam kontainernya 
- docker compose untuk menjalankan 
- file konfigurasi nginx di ambil dari folder nginx 
- file website mengunnakan src dan untuk desain kita menggunakan html

terjadi terdapat error jika tidak di perhatikan baik baik di docker-compose.yml
mengapa ini terjadi biasanya terjadi terhadap typo yang tidak sesuai oleh prosedurnya sendiri 
bisa karena version, port, serta volumes 
jika terjadi error terminal ubuntu akan memberitahunya dimana itu terjadi

## Html
untuk bahasa saya menggunakan Html untuk versinya menggunakan html 5 yang versi terbaru
menggunakan element dan paragrahp serta menggunakan tag untuk mempercantik halaman website
mempelajari tag html untuk mempermudah pada pembelajaran terakhir di beri tugas berupa html menggunakan tag
agar mempercantik tampilan
