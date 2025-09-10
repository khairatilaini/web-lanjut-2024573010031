# Laporan Modul 1: Perkenalan Laravel
**Mata Kuliah:** Workshop Web Lanjut   
**Nama:** Khairatil Aini  
**NIM:** 2024573010031
**Kelas:** TI 2C 

---

## Abstrak 
 - Lapoaran ini berisi tentang langkah-langkah untuk instalasi dan persiapan awal untuk menggunakan laravel. Di mulai dari menginstal Git, XAMPP, Composer, Node.js, hingga membuat project Laravel. Selain itu, perlu juga di koneksi ke database untuk menjalankan project di phpmyadmin.
 - Tujuan membuat laporan ini adalah untuk memastikan semua alat sudah terpasang dengan benar dan project Laravel bisa dijalankan untuk praktikum selanjutnya.

---

## 1. Pendahuluan
 - Laravel adalah framework PHP modern berbasis MVC yang memudahkan pengembangan aplikasi web secara cepat, terstruktur, dan aman. Framework ini bersifat opinionated dengan aturan dan standar bawaan serta menganut prinsip convention over configuration, sehingga developer bisa fokus pada fitur utama. Laravel cocok digunakan untuk berbagai aplikasi web berbasis database, mulai dari sistem informasi, e-commerce, hingga aplikasi berskala enterprise maupun API modern
 
---

## 2. Komponen Utama Laravel (ringkas)
 - Blade (templating) adalah Mesin template bawaan Laravel untuk membuat tampilan web yang dinamis dan mudah digunakan
 - Eloquent (ORM) untuk memeudahkan interaksi database dengan menggunakan berbasis objek
 - Routing dapat mengatur alur reguest ke aplikasi untuk mendefinisikan URL dan aksi
 - Controllers untuk menjembatani antara model dan view, yang berisi logika aplikasi
 - Migrations & Seeders untuk mengatur struktur database yang mengisi data awal
 - Artisan CLI adalah bawaan laravel yang otomatisasi untuk membuat model, controller, atau migrasi
 - Testing (PHPUnit) untuk mengetes aplikasi secara otomatis agar kualitas dan stabilitas terjamin

---

## 3. Berikan penjelasan untuk setiap folder dan files yang ada didalam struktur sebuah project laravel.
 Struktur folder dan file project laravel
 - app/ → Berisi kode utama aplikasi (Model, Controller, Middleware, dll)
 - bootstrap/ → File untuk proses bootstrap framework dan cache konfigurasi
 - config/ → Menyimpan file konfigurasi (app, database, mail, session, dll)
 - database/ → Berisi file migrasi, seeder, dan factory untuk database
 - public/ → Folder yang diakses browser, berisi index.php, file asset (CSS, JS, gambar)
 - resources/ → Berisi view (Blade template), file bahasa, dan asset (CSS/JS/Images)
 - routes/ → Tempat mendefinisikan semua route aplikasi (web.php, api.php, console.php)
 - storage/ → Menyimpan log, cache, file upload, dan compiled views
 - tests/ → Berisi file untuk unit test dan feature test aplikasi
 - vendor/ → Folder hasil Composer, berisi semua dependency Laravel dan library pihak ketiga.
  File utama
 - env → File environment untuk konfigurasi lokal (database, mail, key aplikasi)
 - .gitignore → Menentukan file/folder yang diabaikan Git
 - artisan → CLI bawaan Laravel untuk menjalankan perintah otomatis (misalnya migrate, make:model)
 - composer.json → Daftar dependency PHP dan konfigurasi Composer
 - package.json → Daftar dependency JavaScript (npm, frontend build)
 - vite.config.js / webpack.mix.js → Konfigurasi build asset frontend
 - phpunit.xml → Konfigurasi testing menggunakan PHPUnit

---

## 4. Diagram MVC dan Cara kerjanya

> Letakkan gambar di dalam folder `laporan1/gambar/`. Kemudian masukkan gambar tersebut ke laporan. 

lihat cara nya disini https://www.ulas.in/komputer/markdown-memasukkan-gambar/

---

## 6. Kelebihan & Kekurangan (refleksi singkat)
 - Laravel memiliki banyak kelebihan yang salah satunya adalah framework PHP paling populer. Dengan menggunakan struktur MVC kode menjadi lebih rapi dan mudah di kelola serta sangat mudah di proses ke aplikasi. Selain itu, laravel juga memiliki tingkat keamanan yang tinggi.
 - Tantangan utama adalah memahami banyaknya konsep baru seperti MVC, routing, migration, ORM. Selain itu, ada juga kebutuhan instalasi seperti Composer, Node.js, database yang bisa membuat langkah awal yang cukup rumit.

---

## 7. Referensi
 - Laravel Documentation https://laravel.com/docs 
 - Laravel Framework https://www.tutorialspoint.com/laravel/index.htm 

 ---
