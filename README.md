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
/proyek-anda
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

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan lakukan fork dan kirimkan **pull request** dengan penjelasan tentang perubahan yang Anda buat.

## Lisensi

Proyek ini dilisensikan di bawah **MIT License** - lihat [LICENSE](LICENSE) untuk lebih jelasnya.

```

```
