<p align="center"><strong style="font-size: 26px;">Aplikasi Desaku</strong></p>
<p align="center"><em>Sistem Informasi Data Penduduk dan Mutasi Penduduk</em></p>

<p align="center">
<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
</p>

## Tentang Aplikasi Desaku

**Aplikasi Desaku** adalah aplikasi berbasis web yang dirancang untuk membantu desa dalam mendata penduduk dan mengelola proses mutasi penduduk seperti pindah datang dan pindah keluar. Aplikasi ini dibangun menggunakan framework **Laravel** yang modern dan efisien.

### Fitur Utama:
- **Manajemen Data Penduduk**  
  Menyimpan dan mengelola data identitas penduduk secara digital.

- **Mutasi Penduduk**  
  Mendata proses perpindahan penduduk baik masuk maupun keluar desa.

- **Riwayat dan Laporan**  
  Menyediakan riwayat Laporan PDF.

- **Manajemen Admin**  
  Role admin/operator untuk memproses data sesuai kewenangan.

- **Pencarian & Filter**  
  Mempermudah pencarian data berdasarkan nama, NIK, atau status.

---

## Teknologi yang Digunakan

- **Laravel Framework**
- **Blade Template Engine**
- **Bootstrap 4/5**
- **MySQL Database**
- **Git**

---

## Cara Instalasi

1. Clone repositori:
   ```bash
   git clone https://github.com/username/desaku-app.git

2. Masuk ke direktori project:
   ```bash
       cd desa_apps

3. Install dependency:
     ```bash
        composer install

4. Copy file .env dan generate key:
    ```bash
    cp .env.example .env
    php artisan key:generate

5. Atur konfigurasi database di file .env, lalu jalankan migrasi:
    ```bash
        php artisan migrate
6. Jalankan server Laravel:
    ```bash
        php artisan serve

