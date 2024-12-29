# Website Pencatatan Pengguna

**Website Pencatatan Pengguna** adalah aplikasi berbasis web yang memungkinkan pengguna untuk mendaftar, mengelola, dan melihat data pengguna lainnya. Aplikasi ini dibuat dengan menggunakan HTML, CSS, dan PHP, serta memanfaatkan MySQL untuk penyimpanan data.

## Fitur Utama

- **Pendaftaran Pengguna**: Pengguna dapat mendaftar dengan mengisi formulir yang terdiri dari nama, email, jenis kelamin, alamat, dan nomor telepon.
- **Daftar Pengguna**: Menampilkan daftar pengguna yang telah terdaftar, termasuk informasi seperti nama, email, jenis kelamin, alamat, telepon, IP address, dan browser yang digunakan.
- **Tampilan Responsif**: Website ini responsif dan dapat digunakan di berbagai perangkat, termasuk desktop, tablet, dan mobile.

## Teknologi yang Digunakan

- **HTML5**: Struktur dasar halaman web.
- **CSS3**: Styling dan penataan elemen dengan **Bootstrap** untuk membuat tampilan lebih responsif dan profesional.
- **PHP**: Pengolahan data pengguna, termasuk koneksi ke database dan pengelolaan data pengguna.
- **MySQL**: Penyimpanan data pengguna di database.
- **AJAX**: Untuk memuat data pengguna secara dinamis tanpa perlu memuat ulang halaman (opsional jika menggunakan AJAX).

## Struktur Proyek

```
/proyek
├── /server
│   ├── koneksi.php        # Koneksi ke database
│   ├── proses.php         # Pengolahan data (input dan validasi)
│   └── Mahasiswa.php      # Class OOP untuk pengelolaan data
├── index.html             # Halaman utama aplikasi
├── signup.html            # Halaman pendaftaran
├── users.php              # Halaman untuk menampilkan data pengguna
├── style.css              # Gaya tampilan aplikasi
├── script.js              # Logika sisi klien
├── /database              # Folder untuk skrip database
│   └── init.sql           # Skrip SQL untuk membuat tabel dan struktur database
├── .gitignore             # File untuk mengabaikan file tertentu di Git
└── readme.md              # Dokumentasi proyek
```

## Instalasi

### Langkah 1: Kloning atau Unduh Proyek

Kloning repositori atau unduh file zip dari proyek ini.

```bash
git clone https://github.com/username/repository.git
```

### Langkah 2: Menyiapkan Database

1. Buat database baru di MySQL, misalnya `user_database`.
2. Impor file **`init.sql`** ke dalam database yang telah dibuat untuk membuat tabel yang diperlukan.
3. Sesuaikan **`koneksi.php`** dengan informasi koneksi database Anda.

### Langkah 3: Menjalankan Aplikasi

1. Pastikan Anda telah menginstal **XAMPP** atau server lokal lainnya untuk menjalankan PHP dan MySQL.
2. Tempatkan file proyek di folder `htdocs` (jika menggunakan XAMPP).
3. Buka browser dan akses **`http://localhost/your_project_folder`** untuk memulai aplikasi.

## Cara Menggunakan

1. **Halaman Utama**: Halaman utama menampilkan deskripsi tentang website dan navigasi ke halaman lain.
2. **Pendaftaran Pengguna**: Isi formulir pendaftaran dengan data yang diperlukan dan klik tombol **Daftar** untuk menyimpan data ke database.
3. **Daftar Pengguna**: Melihat semua pengguna yang terdaftar dalam bentuk tabel yang mencakup informasi seperti nama, email, telepon, dan IP address.

## Penjelasan Kriteria Penilaian

Berikut adalah rincian kriteria penilaian yang telah diimplementasikan dalam proyek ini:

### **Bagian 1: Client-side Programming (30%)**

1. **Manipulasi DOM dengan JavaScript (15%)**:

   - Formulir pendaftaran pengguna di **signup.html** diisi dengan minimal 4 elemen input, termasuk teks, checkbox, dan radio button.
   - Data ditampilkan menggunakan **DOM Manipulation** di halaman **users.php**.

2. **Event Handling (15%)**:
   - Terdapat **3 event berbeda** untuk menangani interaksi dengan formulir, seperti validasi input saat mengirim formulir.
   - JavaScript digunakan untuk memvalidasi data input sebelum diproses oleh PHP, memastikan tidak ada kolom yang kosong.

### **Bagian 2: Server-side Programming (30%)**

1. **Pengelolaan Data dengan PHP (20%)**:

   - Formulir pendaftaran menggunakan **POST** untuk mengirim data ke **proses.php** dan disimpan ke dalam database.
   - **Validasi server-side** memastikan bahwa data yang diterima valid sebelum disimpan ke database.
   - Informasi tambahan seperti **IP address** dan **browser** pengguna juga disimpan.

2. **Objek PHP Berbasis OOP (10%)**:
   - Sebuah kelas PHP dengan dua metode utama digunakan untuk mengelola data pengguna dan interaksi dengan database.
   - Kelas ini mengelola koneksi database dan pengolahan data pengguna dengan pendekatan berbasis objek.

### **Bagian 3: Database Management (20%)**

1. **Pembuatan Tabel Database (5%)**:
   - Tabel database untuk menyimpan data pengguna dibuat dengan menggunakan **`init.sql`**.
2. **Konfigurasi Koneksi Database (5%)**:
   - **koneksi.php** berfungsi untuk menghubungkan aplikasi dengan database MySQL menggunakan **MySQLi**.
3. **Manipulasi Data pada Database (10%)**:
   - Data yang diterima dari formulir pendaftaran disimpan ke dalam database menggunakan perintah **`INSERT`** yang aman.

### **Bagian 4: State Management (20%)**

1. **State Management dengan Session (10%)**:

   - **session_start()** digunakan untuk menyimpan data pengguna di dalam **session**, memudahkan manajemen autentikasi dan status login pengguna.

2. **Pengelolaan State dengan Cookie dan Browser Storage (10%)**:
   - Fungsi untuk menetapkan, mendapatkan, dan menghapus **cookie** digunakan untuk menyimpan preferensi pengguna atau informasi sementara.

### **Bagian Bonus: Hosting Aplikasi Web (20%)**

1. **Langkah-langkah Meng-host Aplikasi Web (5%)**:
   - Website ini di-hosting menggunakan **GitHub Pages** dan dapat diakses oleh pengguna di platform tersebut.
2. **Penyedia Hosting yang Dipilih (5%)**:

   - Proyek ini dapat di-hosting menggunakan penyedia hosting gratis seperti **GitHub Pages** atau **Netlify**.

3. **Keamanan Aplikasi Web (5%)**:

   - Keamanan aplikasi ini dijaga dengan menggunakan validasi data baik di sisi klien dan server, serta memastikan input dari pengguna tidak membahayakan aplikasi.

4. **Konfigurasi Server yang Diterapkan (5%)**:
   - Server menggunakan **PHP** dan **MySQL** untuk penyimpanan data dan pengelolaan sesi pengguna.

## Bagian Bonus: Hosting Aplikasi Web (20%)

### (5%) Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?

Untuk meng-host aplikasi web ini, berikut adalah langkah-langkah yang dilakukan:

1. **Memilih Penyedia Hosting**:
   - Setelah menentukan kebutuhan aplikasi (seperti PHP, MySQL, dan pengelolaan file statis), saya memilih **Domainesia** sebagai penyedia hosting karena mereka menawarkan paket hosting yang dapat mendukung aplikasi berbasis PHP dan MySQL dengan harga yang kompetitif.
   
2. **Membeli Layanan Hosting dan Domain**:
   - Saya membeli paket hosting yang sesuai dan mendaftarkan domain melalui **Domainesia**.

3. **Mengonfigurasi Database**:
   - Setelah membeli hosting, saya membuat database MySQL melalui **cPanel** dan mengonfigurasi kredensial yang dibutuhkan di file `koneksi.php` aplikasi.

4. **Meng-upload File Aplikasi**:
   - Saya meng-upload file aplikasi menggunakan **File Manager** di **cPanel** atau menggunakan FTP melalui **FileZilla** untuk memindahkan file ke direktori **public_html**.

5. **Mengonfigurasi DNS**:
   - Jika saya membeli domain dari penyedia yang berbeda, saya memastikan DNS diatur dengan benar di **DNS Zone Editor** di **cPanel**, agar domain mengarah ke IP server hosting.

6. **Mengaktifkan SSL (Jika Diperlukan)**:
   - Untuk keamanan, saya mengaktifkan SSL gratis dari **Let's Encrypt** melalui **cPanel** untuk memastikan website menggunakan HTTPS.

---

### (5%) Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda.

Saya memilih **Domainesia** sebagai penyedia hosting untuk aplikasi web ini karena:

1. **Keandalan Layanan**: Domainesia memiliki reputasi baik dalam menyediakan layanan hosting yang stabil dengan uptime yang tinggi.
2. **Harga yang Terjangkau**: Mereka menawarkan paket hosting yang terjangkau dengan berbagai fitur yang dibutuhkan oleh aplikasi web seperti PHP dan MySQL.
3. **Fitur Lengkap**: Domainesia menyediakan **cPanel** untuk manajemen file dan database, serta dukungan untuk **SSL** dan **DNS management**.
4. **Dukungan Pelanggan**: Domainesia menawarkan dukungan pelanggan yang responsif jika ada masalah terkait hosting atau pengaturan server.

---

### (5%) Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?

Beberapa langkah yang diambil untuk memastikan keamanan aplikasi web yang di-host adalah sebagai berikut:

1. **Penggunaan HTTPS**:
   - SSL diaktifkan untuk mengenkripsi data yang dikirim antara server dan pengguna, memastikan data yang sensitif tidak bocor.

2. **Validasi Input Pengguna**:
   - Saya menggunakan validasi input di sisi **klien (JavaScript)** dan **server (PHP)** untuk mencegah **SQL Injection**, **XSS (Cross-Site Scripting)**, dan **CSRF (Cross-Site Request Forgery)**.

3. **Proteksi Password**:
   - Password pengguna disimpan dengan menggunakan teknik **hashing** dan **salting** untuk memastikan bahwa password tidak disimpan dalam format plaintext di database.

4. **Pembatasan Akses**:
   - Fitur seperti login dengan sesi (session management) diterapkan untuk memastikan hanya pengguna yang sah yang dapat mengakses bagian aplikasi yang dilindungi.

5. **Update Sistem dan Software**:
   - Selalu memastikan bahwa perangkat lunak server (seperti **PHP** dan **MySQL**) selalu diperbarui ke versi terbaru dengan patch keamanan yang telah diterbitkan.

---

### (5%) Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.

Aplikasi ini di-host menggunakan **shared hosting** yang disediakan oleh **Domainesia**. Berikut adalah beberapa konfigurasi yang diterapkan untuk mendukung aplikasi:

1. **PHP dan MySQL**:
   - Hosting ini mendukung **PHP** untuk menjalankan aplikasi dan **MySQL** untuk menyimpan data pengguna.
   - Database dikonfigurasi dengan menggunakan **phpMyAdmin** di **cPanel**.

2. **Konfigurasi SSL**:
   - **SSL** diaktifkan menggunakan **Let's Encrypt** untuk memastikan komunikasi yang aman antara server dan pengguna (HTTPS).

3. **Backup Otomatis**:
   - Layanan backup otomatis disediakan oleh Domainesia untuk menjaga data dan file website tetap aman dan dapat dipulihkan jika terjadi kerusakan.

4. **Pengaturan DNS dan A Record**:
   - **DNS management** dilakukan di **cPanel**, memastikan domain mengarah ke IP server yang benar.

5. **Error Logging dan Monitoring**:
   - **Error logs** diaktifkan di **cPanel** untuk memantau dan mengidentifikasi masalah yang terjadi pada aplikasi atau server.
   - Pemantauan **uptime** server dilakukan untuk memastikan aplikasi selalu tersedia.

---

Dengan mengikuti langkah-langkah ini, aplikasi web dapat di-host dengan aman dan efektif menggunakan **Domainesia**. Jika Anda mengalami kesulitan atau perlu bantuan lebih lanjut, Anda bisa menghubungi tim dukungan **Domainesia** atau memeriksa dokumentasi yang disediakan oleh penyedia hosting.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan lakukan fork dan kirimkan **pull request** dengan penjelasan tentang perubahan yang Anda buat.

## Lisensi

Proyek ini dilisensikan di bawah **MIT License** - lihat [LICENSE](LICENSE) untuk lebih jelasnya.

```

```
