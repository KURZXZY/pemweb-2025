# **Analisa**

## **1. Pendahuluan**
 **WSL, Docker, dan HTML5** dalam proyek ini bertujuan untuk menciptakan ekosistem pengembangan yang lebih stabil, fleksibel, serta mudah untuk dikonfigurasi. Teknologi yang digunakan memungkinkan integrasi yang lebih baik antara Windows dan Linux, pengelolaan database yang lebih terstruktur, serta pengembangan antarmuka berbasis standar web modern seperti Laravel.

### **5W + 1H dalam Konteks Pengembangan Web**
- **What (Apa)?**
  - Proyek ini bertujuan untuk mengembangkan website menggunakan **WSL, Docker, dan HTML5** dengan ekosistem pengembangan yang efisien.
- **Why (Mengapa)?**
  - Menggunakan teknologi ini memungkinkan lingkungan yang lebih stabil, fleksibel, dan terstruktur dibandingkan metode konvensional.
- **Who (Siapa)?**
  - Pengembang web, tim IT, dan profesional yang ingin mengoptimalkan alur kerja pengembangan web.
- **Where (Di mana)?**
  - Implementasi dilakukan pada sistem berbasis Windows yang memanfaatkan WSL dan Docker.
- **When (Kapan)?**
  - Digunakan dalam tahap pengembangan hingga deployment proyek berbasis web.
- **How (Bagaimana)?**
  - Dengan memanfaatkan WSL sebagai lingkungan pengembangan berbasis Linux, Docker untuk containerisasi aplikasi, dan HTML5 sebagai dasar tampilan website.

---

## **2. Pemilihan Lingkungan Pengembangan**
### **Windows Subsystem for Linux (WSL)**
**WSL (Windows Subsystem for Linux)** adalah lapisan kompatibilitas yang memungkinkan pengguna Windows menjalankan sistem berbasis Linux tanpa perlu menggunakan mesin virtual atau dual-boot, sehingga memudahkan pengguna untuk berpindah OS tanpa perlu rebooting.

#### **Manfaat WSL dalam proyek ini:**
- **Akses ke ekosistem Linux**: Mendukung berbagai tools dan perintah berbasis Linux yang umum digunakan dalam pengembangan web.  
- **Performa lebih baik dibandingkan VM**: Tidak perlu menjalankan sistem operasi penuh di atas Windows.  
- **Integrasi langsung dengan Windows**: File sistem dapat diakses secara bersamaan oleh Windows dan Linux.

### **Navicat untuk Manajemen Database**
**Navicat** adalah alat yang memudahkan dalam pembuatan, pengelolaan, dan pemantauan database. Penggunaannya dalam proyek ini bertujuan untuk memastikan bahwa struktur database telah dibuat dengan benar dan memiliki relasi yang sesuai.

---

## **3. Penggunaan Docker untuk Manajemen Server**
Proyek ini mengadopsi **Docker** untuk manajemen database dan server. Docker menyediakan solusi yang lebih efisien dibandingkan XAMPP karena bekerja dalam bentuk container yang lebih fleksibel dan terisolasi.

### **Alasan Menggunakan Docker**
- **Mempermudah deployment**: Lingkungan yang digunakan dalam pengembangan bisa sama dengan yang digunakan dalam produksi.  
- **Menghilangkan dependency conflict**: Setiap layanan berjalan dalam container terpisah, sehingga tidak saling bergantung pada konfigurasi sistem host.  
- **Skalabilitas tinggi**: Bisa dengan mudah diperluas dengan tambahan container jika diperlukan.  

### **Konfigurasi Docker**
#### **Langkah-langkah setup Docker dalam proyek ini:**
- **Membuat file `docker-compose.yml`**  
   File ini berisi konfigurasi layanan yang diperlukan, seperti database dan web server.  
- **Membuat file `.env`**  
   Digunakan untuk menyimpan variabel lingkungan seperti nama database dan kredensial.  
- **Menggunakan Nginx sebagai reverse proxy**  
   Konfigurasi disimpan dalam file `nginx.conf`, yang mengatur lalu lintas jaringan antar layanan di dalam container.  
- **Mengatur volume dan port**  
   - **Volume** digunakan untuk menyimpan data agar tetap tersedia meskipun container dihentikan.  
   - **Port mapping** memastikan bahwa layanan yang berjalan di dalam container bisa diakses dari sistem host.  

#### **Potensi Error dalam Konfigurasi Docker**
Beberapa kesalahan umum yang mungkin terjadi dalam penggunaan Docker antara lain:  
- **Kesalahan dalam penulisan `docker-compose.yml`**  
  - Salah indentasi atau kesalahan format YAML dapat menyebabkan layanan tidak berjalan dengan baik.  
- **Port conflict**  
  - Jika port yang digunakan dalam Docker sudah dipakai oleh aplikasi lain, maka layanan tidak bisa dijalankan.  
- **Masalah dependency antar container**  
  - Beberapa layanan mungkin memerlukan urutan startup tertentu agar dapat berfungsi dengan benar.  

---

## **4. Struktur Website dan Penggunaan HTML5**
### **Domain dan Identitas Website**
Setiap website membutuhkan domain sebagai identitas uniknya. Dalam proyek ini, struktur alamat website diatur sedemikian rupa agar mirip dengan situs populer seperti YouTube.  

Jika menggunakan **template dari sumber eksternal**, maka sumbernya harus dicantumkan agar tetap mengikuti etika penggunaan konten digital.  

### **Elemen Dasar dalam Pengembangan Website**
Proyek ini menggunakan **HTML5** sebagai dasar pengembangan tampilan website. HTML5 dipilih karena:  
- **Dukungan terhadap berbagai perangkat** (mobile-friendly)  
- **Struktur semantik yang lebih baik**  
- **Integrasi yang lebih mudah dengan CSS dan JavaScript**  

**Beberapa elemen yang digunakan dalam proyek ini:**  
- **Tag `<header>`, `<section>`, `<article>`**: Untuk meningkatkan keterbacaan kode dan membantu SEO.  
- **Tag `<nav>`**: Digunakan untuk navigasi website.  
- **Form (`<input>`, `<button>`, `<label>`)**: Untuk interaksi dengan pengguna.  

Selain itu, proyek ini akan melibatkan latihan dan tugas akhir untuk membuat halaman web yang lebih menarik dengan berbagai elemen HTML.  

---

## **5. Kesimpulan dan Tantangan yang Mungkin Dihadapi**
### **Kesimpulan**
Pendekatan yang digunakan dalam proyek ini mengadopsi berbagai teknologi modern yang meningkatkan efisiensi dalam pengembangan web.  
- **WSL memungkinkan akses ke tool berbasis Linux di dalam Windows** tanpa perlu sistem operasi terpisah.  
- **Docker menggantikan XAMPP** dengan solusi berbasis container yang lebih stabil dan fleksibel.  
- **HTML5 digunakan sebagai dasar tampilan website**, dengan struktur yang lebih rapi dan modern.  

Dengan pendekatan ini, pengembangan website menjadi lebih **modular, scalable, dan efisien**.  

### **Tantangan yang Mungkin Dihadapi**
- **Kesalahan dalam konfigurasi Docker**  
   - Perlu memahami syntax YAML dan debugging melalui terminal.  
- **Kendala integrasi WSL dan Windows**  
   - Beberapa tools mungkin tidak sepenuhnya kompatibel tanpa konfigurasi tambahan.  
- **Pemahaman HTML5 bagi pemula**  
   - Mempelajari struktur semantik dan elemen lanjutan seperti **canvas** atau **SVG** bisa menjadi tantangan.  



