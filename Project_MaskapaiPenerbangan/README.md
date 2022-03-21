# WEB PROJECT

Aplikasi Perhitungan harga tiket dan pajak maskapai. Project ini untuk memenuhi tugas pelatihan BPPTIK Junior Web Development.

### Tech

Aplikasi ini dibangun dengan berikut:
* [BOOSTRAP](https://getbootstrap.com/) - The most popular HTML, CSS, and JS library in the world.
* [PHP](https://www.php.net/) - popular general-purpose scripting language that is especially suited to web development.
* [Visual Studio Code](https://developer.mozilla.org/en-US/docs/Learn/CSS/) - awesome web-based text editor
* [PHPSpreadsheet](https://phpspreadsheet.readthedocs.io/en/latest/) - PHPSpreadsheet

### Requirements

* XAMPP 7.4.9 atau versi terakhir atau anda bisa menggunakan aplikasi Web ServerLainnya
* PHP 5.6 atau versi diatasnya

### Folder Structure
Dibawah ini merupakan struktur folder :

```
assets
|-css
|---bootstrap.css
|---bootstrap.css.map
|---bootstrap.min.css
|---bootstrap.min.css.map
|---bootstrap-grid.css
|---bootstrap-grid.css.map
|---bootstrap-grid.min.css
|---bootstrap-grid.min.css.map
|---bootstrap-reboot.css
|---bootstrap-reboot.css.map
|---bootstrap-reboot.min.css
|---bootstrap-reboot.min.css.map
|---style.css
|-fonts
|---glyphicons-halflings-regular.eot
|---glyphicons-halflings-regular.svg
|---glyphicons-halflings-regular.ttf
|---glyphicons-halflings-regular.woff
|---glyphicons-halflings-regular.woff2
|-js
|---bootstrap.min.js
|---jquery.min.js
|---propper.min.js
|---scripts.js
data
|---bandara.json
|---daftar_rute.json
export
vendor
composer.json
composer.lock
export_excel.php
proses.php
index.php
README.md
```

### Installation

Pindahkan semua file ke dalam folder
```
C:\xampp\htdocs\[folder_anda]
```
Kemudian lakukan perintah untuk ambil library yang dibutuhkan

```
composer update
```


Start Apache pada XAMPP Control Panel atau aplikasi webserver yang anda gunakan

Akses pada browser
```
http://localhost/[folder_anda]
```