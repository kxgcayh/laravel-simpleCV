<!-- INSTALASI -->

## Instalasi

1. Buka Command Prompt dalam Folder Lokal Server.
2. Clone Repository dengan:
    1. SSH: `git clone git@github.com:kxgcayh/laravel-simpleCV.git simpleCV` atau
    2. HTTPS: `git clone https://github.com/kxgcayh/laravel-simpleCV.git`.
3. Buka XAMPP dan Buatlah Database Baru
4. Masuk ke Dalam Folder SMSBC Website Landing `cd simpleCV`
5. Install Composer `composer install`
6. Konfigurasi Aplikasi
    1. Buat file .env `cp .env.example .env`
    2. Buat key dalam .env `php artisan key:generate`
    3. Buka file .env dan edit file tersebut
    ```sh
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE='NAMA DATABASE'
    DB_USERNAME='USERNAME ANDA'
    DB_PASSWORD='PASSWORD ANDA'
    ```

8. Migrate dan Seed Data ke Database `php artisan migrate:fresh --seed`

---

## Database
> Example Login with

|       Email       | Password |
| :---------------: | :------: |
| example@cv.com    | password |
