# 🍔 **Burger King Management Web** 🍟

Selamat datang di **Burger King Management Web**! Proyek ini adalah sebuah aplikasi berbasis web yang dirancang untuk memudahkan pengelolaan data pelanggan dan manajemen operasional di restoran **Burger King**. Dengan sistem yang modern dan interaktif, pengguna dapat mengelola informasi akun, melihat dashboard yang berisi statistik, dan memperbarui profil mereka.

---

## 🚀 **Fitur Utama**

### 1. **Login**
Pengguna dapat masuk ke sistem dengan memasukkan username dan password mereka yang terdaftar. Fitur ini memastikan hanya pengguna yang terverifikasi yang dapat mengakses dashboard dan pengelolaan data.

### 2. **Dashboard**
Setelah login, pengguna akan diarahkan ke halaman dashboard. Halaman ini memberikan gambaran umum mengenai informasi tentang pengelolaan operasional secara real-time.

### 3. **Pengelolaan**
Halaman pengelolaan berisikan tabel produk burger king.

### 4. **Profil**
Pengguna dapat melihat informasi akun mereka melalui halaman profil.

---

## 🌟 **Fitur Tambahan**

- **Keamanan Tinggi**: Data pelanggan dan transaksi dijaga dengan enkripsi yang kuat untuk memastikan keamanan informasi.
- **Desain Responsif**: Web ini dirancang untuk dapat diakses dengan nyaman melalui perangkat apapun, baik desktop maupun perangkat mobile.
- **User-Friendly**: Antarmuka yang mudah digunakan memungkinkan siapa saja untuk mengelola data dengan cepat dan efisien.

---

## 🛠 **Teknologi yang Digunakan**

- **Frontend**: Blade Template
- **Backend**: Laravel (PHP)
- **Database**: MySQL
- **UI/UX**: Tailwind CSS untuk desain responsif yang modern dan intuitif

---

## ⚙️ **Instruksi Penggunaan**

1. **Clone Repo**

    Untuk meng-clone proyek ini ke dalam perangkat lokal Anda, gunakan perintah berikut:

    ```bash
    git clone https://github.com/username/BurgerKingManagement.git
    ```

2. **Instalasi Dependensi**

    Pastikan Anda sudah menginstal Composer dan Laravel. Kemudian, jalankan perintah berikut untuk menginstal dependensi:

    ```bash
    composer install
    ```

3. **Konfigurasi Environment**

    Salin file `.env.example` ke `.env` dan sesuaikan konfigurasi database serta detail lainnya:

    ```bash
    cp .env.example .env
    ```

4. **Migrasi Database**

    Jalankan perintah untuk memigrasi database ke struktur yang terbaru:

    ```bash
    php artisan migrate
    ```

5. **Mulai Server**

    Terakhir, jalankan server lokal menggunakan perintah berikut:

    ```bash
    php artisan serve
    ```

    Akses aplikasi di browser melalui `http://localhost:8000`
