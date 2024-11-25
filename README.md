# **PETANIFY**

**PETANIFY** adalah website pertanian sederhana yang dikembangkan sebagai lanjutan dari Tugas Elearning sebelumnya dan ditujukan untuk memenuhi UTS Pemrograman WEB 1. Website ini menyediakan berbagai fitur baru yang mendukung aktivitas pertanian dengan memanfaatkan teknologi modern untuk memberikan solusi yang bermanfaat bagi pengguna.

---

## **Fitur Utama**

- **Home**: Halaman utama yang menampilkan informasi umum dan akses cepat ke semua fitur yang tersedia.
- **Forum Diskusi**: Ruang diskusi bagi pengguna untuk berbagi ide, pengalaman, dan berdiskusi tentang berbagai topik pertanian. Data topik disimpan menggunakan **PHP** ke file `forum_data.txt` dan dimuat kembali saat halaman dimuat.
- **Konsultasi Ahli**: Fitur untuk berkomunikasi dengan ahli pertanian dan memperoleh solusi atas permasalahan terkait pertanian.
- **Cuaca & Rekomendasi**: Menyediakan prakiraan cuaca dan rekomendasi aktivitas pertanian berdasarkan kondisi cuaca terkini, terintegrasi dengan data dari **API BMKG**.
- **Marketplace**: Membantu pengguna menemukan dan membeli produk pertanian yang diperlukan, seperti benih, pupuk, dan alat pertanian.
- **Jurnal Aktivitas**: Fitur yang memungkinkan pengguna mencatat dan melacak aktivitas pertanian harian mereka. Data aktivitas disimpan menggunakan **PHP** ke file `jurnal_data.txt`, sehingga pengguna dapat melihat riwayat aktivitasnya saat halaman dimuat ulang.
- **Sistem Login dan Register**:
  - Pengguna dapat membuat akun baru melalui `register.php`, dan datanya disimpan di file `users.txt`.
  - Sistem validasi login diimplementasikan menggunakan `users.php` untuk memverifikasi data pengguna yang masuk.

---

## **Fitur Tambahan**

- **Penyimpanan Data Sederhana**:
  - **users.txt**: Menyimpan data akun pengguna (nama lengkap, email/telepon, dan password).
  - **forum_data.txt**: Menyimpan daftar topik diskusi.
  - **jurnal_data.txt**: Menyimpan catatan aktivitas pertanian.
- **Login dan Register**:
  - **register.php**: Memproses pendaftaran pengguna dan menyimpan data ke `users.txt`.
  - **users.php**: Memvalidasi login pengguna dengan membaca data dari `users.txt`.
- **CRUD Data**:
  - **Forum Diskusi**: Tambah dan hapus topik di `forum_data.txt`.
  - **Jurnal Aktivitas**: Tambah dan hapus aktivitas di `jurnal_data.txt`.
- **Responsivitas**:
  - Navbar responsif yang mendukung tampilan pada perangkat kecil seperti ponsel.
  - Tata letak halaman yang responsif menggunakan Bootstrap.

---

## **Teknologi yang Digunakan**

- **HTML5**: Menyediakan struktur dasar halaman web.
- **CSS3**: Digunakan untuk desain dan gaya pada elemen web.
- **Bootstrap 5.3.3**: Framework CSS yang digunakan untuk membuat tata letak responsif dan elemen UI yang konsisten.
- **JavaScript (ES6)**: Bahasa pemrograman yang digunakan untuk menambahkan interaktivitas pada aplikasi.
- **PHP**: Backend sederhana untuk menyimpan dan memuat data pengguna, forum, dan jurnal ke/dari file `.txt`.
- **File `.txt`**: Media penyimpanan sederhana untuk menyimpan data pengguna, jurnal aktivitas, dan forum diskusi.
- **Fetch API**: API JavaScript yang digunakan untuk komunikasi dengan server PHP.
- **API BMKG**: Sumber data cuaca untuk menampilkan prakiraan cuaca secara real-time bagi pengguna.
- **Visual Studio Code**: Editor yang digunakan dalam pengembangan aplikasi ini.

---

## **Struktur Folder**

Berikut adalah daftar file dan fungsi utamanya:

### **HTML**
- **index.html**: Halaman awal (landing page) dengan informasi umum tentang aplikasi.
- **main.html**: Halaman utama setelah pengguna login.
- **login.html**: Halaman login untuk pengguna.
- **register.html**: Halaman untuk pendaftaran akun baru.
- **forum.html**: Halaman forum diskusi komunitas.
- **konsultasi.html**: Halaman untuk konsultasi dengan ahli pertanian.
- **cuaca.html**: Halaman untuk melihat prakiraan cuaca.
- **marketplace.html**: Halaman untuk menemukan produk pertanian.
- **jurnal.html**: Halaman untuk mencatat dan melihat aktivitas pertanian.

### **PHP**
- **register.php**: Memproses data pendaftaran dan menyimpannya ke `users.txt`.
- **users.php**: Memvalidasi login pengguna berdasarkan data di `users.txt`.
- **forum_save.php**: Menyimpan topik baru di forum ke `forum_data.txt`.
- **forum_load.php**: Memuat daftar topik forum dari `forum_data.txt`.
- **jurnal_save.php**: Menyimpan aktivitas jurnal ke `jurnal_data.txt`.
- **jurnal_load.php**: Memuat aktivitas jurnal dari `jurnal_data.txt`.
- **jurnal_delete.php**: Menghapus entri jurnal dari `jurnal_data.txt`.

### **CSS**
- **manual.css**: File gaya kustom untuk memperindah tampilan aplikasi.

### **TXT**
- **users.txt**: File untuk menyimpan data pengguna (nama, email/telepon, dan password).
- **forum_data.txt**: File untuk menyimpan daftar topik diskusi di forum.
- **jurnal_data.txt**: File untuk menyimpan daftar aktivitas di jurnal.

---

## **Fitur CRUD**

### **Forum Diskusi**
- Tambah topik: Data topik disimpan di `forum_data.txt`.

### **Jurnal Aktivitas**
- Tambah aktivitas: Aktivitas disimpan di `jurnal_data.txt`.
- Hapus aktivitas: Aktivitas dapat dihapus dari tampilan dan file `jurnal_data.txt`.

---

