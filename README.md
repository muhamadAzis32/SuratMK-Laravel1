<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

![suratmasuk-keluar](https://user-images.githubusercontent.com/88225954/176642533-bd7c6527-c343-4b67-bccb-84c0396db320.jpg)
![suratmasuk-keluar2](https://user-images.githubusercontent.com/88225954/176642968-fff28d69-6caf-4c44-9bfb-af50db72f8aa.jpg)

## Sistem informasi pengelolaan arsip surat masuk dan surat keluar berbasis web 

Sistem informasi ini bertujuan untuk meningkatkan efisiensi, ketepatan dan keamanan dokumen yang diarsipkan. Diharapkan dengan adanya sistem informasi pengarsipan ini, dapat merubah proses pengarsipan surat masuk dan surat keluar menjadi lebih efektif dan efisien. Dari masalah itu maka di buatlah Sistem Informasi Pengelolaan Arsip Surat Masuk Dan Surat Keluar Berbasis Web. 

### Feature
- Login dan registrasi via form
- Mengelola data user
- Mengelola data surat masuk
- Mengelola data surat keluar
- Mengelola data jenis surat


## Instalasi
#### Via Git
```bash
git clone https://github.com/muhamadAzis32/SuratMK-Laravel1.git
```

### Download ZIP
[Link](https://codeload.github.com/muhamadAzis32/SuratMK-Laravel1/zip/refs/heads/main)

### Setup Aplikasi
Jalankan perintah 
```bash
composer update
```
atau:
```bash
composer install
```
Copy file .env dari .env.example
```bash
cp .env.example .env
```
Konfigurasi file .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_suratMK
DB_USERNAME=root
DB_PASSWORD=
```
Opsional
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:VrU4MAnOVXV150T+TxpH2sn6M2uwHiOls2oxBEomlXA=
APP_DEBUG=true
APP_URL=http://localhost
```
Generate key
```bash
php artisan key:generate
```
Menjalankan aplikasi
```bash
php artisan serve
```

<!--
Migrate database
```bash
php artisan migrate
```
Seeder table User, Pengaturan
```bash
php artisan db:seed
```
-->

### Built With
- HTML
- CSS
- Javascript
- Bootsrap
- Php
- Mysql


### Demo
For Demo of this template you can [Youtube](https://youtu.be/32Fbvy55pds)

### Contact

Muhamad Azis - [Linkedin](https://www.linkedin.com/in/muhamadazis32/) - muhamadazis9a@gmail.com

Project Link : [https://github.com/muhamadAzis32/SuratMK-Laravel8](https://github.com/muhamadAzis32/SuratMK-Laravel8)

