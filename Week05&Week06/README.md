# LAPORAN PRAKTIKUM - WEEK 05 PEMROGRAMAN WEB LANJUT

---

### Identitas Mahasiswa
| Keterangan | Detail |
| :--- | :--- |
| **Nama** | Mufliha Hafsyah Shahieza |
| **NIM** | 244107020147 |
| **Kelas** | TI-2F |

---
## JOBSHEET WEEK 05 
### JOBSHEET 1 Instalasi dan Setup Filament PHP v4 pada Laravel 11

#### Dokumentasi Praktikum
<br>

<details>
<summary><b>Hasil Praktikum</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/w5p1.png)

</blockquote>
</details>

<br>

<details>
<summary><b>Analisis & Diskusi</b></summary>
<br>
<blockquote>

**1. Apa kelebihan Filament dibanding membuat admin panel manual?**
Jawab : 
Penggunaan Filament sebagai framework untuk panel admin menawarkan efisiensi yang signifikan dibandingkan metode pengembangan manual. Keunggulan utamanya terletak pada aspek produktivitas, di mana fitur-fitur esensial seperti Create, Read, Update, Delete (CRUD), sistem pencarian (search), filter data, serta paginasi telah tersedia secara out-of-the-box. Hal ini meminimalkan penulisan kode berulang (boilerplate code) pada sisi Controller dan View. Selain itu, Filament menjamin konsistensi antarmuka pengguna (UI) karena menggunakan standar desain Tailwind CSS yang modern dan responsif, serta telah mengimplementasikan praktik keamanan terbaik sesuai standar ekosistem Laravel terbaru.

**2. Mengapa Filament menggunakan Livewire?**
Jawab : 
Filament mengadopsi Livewire sebagai basis teknologinya untuk menyajikan pengalaman pengembangan full-stack yang reaktif tanpa memerlukan kompleksitas framework JavaScript eksternal seperti React atau Vue. Livewire memungkinkan komponen pada panel admin berinteraksi secara dinamis, seperti validasi formulir secara real-time dan pembaruan data tanpa pemuatan ulang halaman (page refresh), hanya dengan menggunakan logika PHP. Hal ini menyederhanakan struktur kode dan mempercepat proses sinkronisasi antara logika bisnis di sisi server dengan tampilan di sisi client.

**3. Apa perbedaan SQLite dan MySQL dalam development?**
Jawab : 
Perbedaan mendasar antara SQLite dan MySQL terletak pada arsitektur dan skalabilitasnya:

- Arsitektur: SQLite merupakan database berbasis file tunggal yang tersimpan secara lokal di dalam direktori proyek, sehingga sangat portabel dan tidak memerlukan proses instalasi server yang rumit. Sebaliknya, MySQL adalah sistem manajemen database relasional (RDBMS) berbasis client-server yang memerlukan layanan servis terpisah untuk beroperasi.

- Konfigurasi: SQLite tidak memerlukan konfigurasi pengguna (username) atau kata sandi (password) pada tahap pengembangan awal. MySQL memerlukan pengaturan kredensial dan port khusus (biasanya melalui Laragon atau XAMPP).

- Penggunaan: SQLite lebih optimal digunakan untuk tahap prototyping, pengujian (testing), atau aplikasi dengan skala data kecil. MySQL lebih diprioritaskan untuk lingkungan produksi (production) yang menangani trafik tinggi dan konkurensi data yang kompleks.

**4. Apa fungsi Panel Builder?**
Jawab : 
Panel Builder merupakan komponen inti dalam ekosistem Filament yang berfungsi sebagai orkestrator utama untuk mengelola seluruh sumber daya (resources), halaman kustom (custom pages), dan dasbor dalam satu kesatuan navigasi yang terintegrasi. Secara fungsional, Panel Builder memungkinkan pengembang untuk membangun beberapa panel administrasi yang berbeda dalam satu aplikasi Laravel yang sama (misalnya: memisahkan antara Panel Admin, Panel Vendor, dan Panel Pelanggan) dengan konfigurasi, otentikasi, dan hak akses yang spesifik bagi masing-masing peran pengguna.

</blockquote>
</details>

<br>

---

### JOBSHEET 2 Membuat CRUD Resource dengan Filament v4

#### Dokumentasi Praktikum
<br>

<details>
<summary><b>Hasil Praktikum</b></summary>
<br>
<blockquote>

**Menjalankan Aplikasi**
![Hasil Praktikum](img/w5p2.1.png)
![Hasil Praktikum](img/w5p2.2.png)
![Hasil Praktikum](img/w5p2.3.png)

**Membuat Form Input (Create & Edit)**
![Hasil Praktikum](img/w5p2.4.png)
![Hasil Praktikum](img/w5p2.5.png)
![Hasil Praktikum](img/w5p2.6.png)
![Hasil Praktikum](img/w5p2.7.png)

**Menampilkan Data pada Tabel**
![Hasil Praktikum](img/w5p2.8.png)

**Mengganti Icon Menu Resource**
![Hasil Praktikum](img/w5p2.9.png)
</blockquote>
</details>

<br>

<details>
<summary><b>Analisis & Diskusi</b></summary>
<br>
<blockquote>

**1. Mengapa Filament dapat membuat CRUD tanpa banyak coding?**
Jawab : 
Filament menggunakan konsep Resource yang mengintegrasikan Model Laravel dengan komponen antarmuka secara otomatis. Dengan mendefinisikan skema pada satu file Resource, Filament secara cerdas menghasilkan halaman daftar (List), formulir tambah (Create), serta halaman ubah (Edit) tanpa perlu membangun Controller dan View secara manual satu per satu.

**2. Apa perbedaan Form Schema dan Table Schema?**
Jawab : 
- Form Schema: Berfungsi untuk mendefinisikan struktur inputan pada halaman tambah dan ubah data. Fokusnya adalah pada jenis komponen input (seperti TextInput, Select, FileUpload) dan aturan validasi data yang masuk.

- Table Schema: Berfungsi untuk mengatur tampilan data pada halaman daftar (List). Fokusnya adalah pada kolom mana yang ingin ditampilkan (seperti TextColumn, ImageColumn), pengaturan pengurutan (sorting), fitur pencarian, serta filter data.

**3. Bagaimana jika kita ingin menambahkan validasi email unik?**
Jawab : 
Validasi email unik dapat ditambahkan pada komponen TextInput di dalam form() menggunakan fungsi berantai (chained method) unique(). 
- Contoh implementasinya:
Forms\Components\TextInput::make('email')->email()->required()->unique(ignoreRecord: true)
- Parameter ignoreRecord: true penting ditambahkan agar validasi unik tidak menyebabkan error saat kita sedang mengedit data yang sama.

**4. Mengapa password tidak perlu kita hash manual?**
Jawab : 
Dalam standar Filament v4, secara default pengamanan kata sandi sudah ditangani secara otomatis melalui Model User yang menggunakan trait HasPassword atau melalui pengaturan pada skema formulir. Filament akan mendeteksi field password dan melakukan hashing menggunakan algoritma Bcrypt atau Argon2 sebelum data disimpan ke dalam database, sehingga menjamin integritas keamanan tanpa intervensi manual dari pengembang.

</blockquote>
</details>

<br>

---

### JOBSHEET 3 Membuat Migration, Model, Relasi & Resource Category

#### Dokumentasi Praktikum
<br>

<details>
<summary><b>Hasil Praktikum</b></summary>
<br>
<blockquote>

**Mendesain Tabel Categories**
![Hasil Praktikum](img/w5p3.1.png)

**Membuat Resource Category di Filament**
![Hasil Praktikum](img/w5p3.2.png)
![Hasil Praktikum](img/w5p3.3.png)
![Hasil Praktikum](img/w5p3.4.png)
![Hasil Praktikum](img/w5p3.5.png)

</blockquote>
</details>

<br>

<details>
<summary><b>Analisis & Diskusi</b></summary>
<br>
<blockquote>

**1. Mengapa kita perlu $fillable?**
Jawab : 
$fillable digunakan untuk menentukan kolom mana saja yang diizinkan untuk diisi secara massal (mass assignment). Hal ini merupakan fitur keamanan Laravel untuk mencegah pengguna mengirimkan data berbahaya (seperti mengubah status is_admin secara ilegal) melalui form input.

**2. Apa fungsi $casts pada Laravel?**
Jawab : 
$casts berfungsi untuk mengonversi tipe data dari database ke tipe data yang kita inginkan di PHP secara otomatis. Contohnya, kolom yang di database bertipe string "true/false" bisa di-cast menjadi boolean murni di Laravel agar lebih mudah diolah dalam logika pemrograman.

**3. Apa perbedaan integer biasa dengan foreign key?**
Jawab : 
- Integer biasa: Hanya menyimpan angka tanpa ada keterikatan dengan tabel lain.

- Foreign Key: Adalah kolom yang menjadi "jembatan" atau referensi ke Primary Key di tabel lain. Foreign key menjaga integritas data agar tidak ada Post yang merujuk ke Category yang tidak eksis.

**4. Bagaimana jika category dihapus tetapi masih ada post?**
Jawab : 
Hal ini bergantung pada pengaturan foreign key constraint yang digunakan:

- Cascade: Jika kategori dihapus, maka semua post di bawahnya ikut terhapus otomatis.

- Set Null: Jika kategori dihapus, kolom category_id di tabel post akan berubah jadi NULL.

- Restrict (Default): Laravel/MySQL akan menolak penghapusan kategori selama masih ada post yang terhubung dengannya.

</blockquote>
</details>

<br>

---
## JOBSHEET WEEK 06 
### JOBSHEET 1 – Implementasi Form Elements & Resource Post di Filament

#### Dokumentasi Praktikum
<br>

<details>
<summary><b>1. Membuat Resource Post</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/w6p1.1.png)
![Hasil Praktikum](img/w6p1.2.png)

</blockquote>
</details>

<br>

<details>
<summary><b>2. Implementasi Form Elements</b></summary>
<br>
<blockquote>
**a. Text Input (Title&Slug)**
![Hasil Praktikum](img/w6p1.3.png)

**b. Select (Relasi Category)**
![Hasil Praktikum](img/w6p1.4.png)
![Hasil Praktikum](img/w6p1.5.png)
![Hasil Praktikum](img/w6p1.6.png)

**c. Color Picker**
![Hasil Praktikum](img/w6p1.7.png)

**d. Markdown**
![Hasil Praktikum](img/w6p1.8.png)

**e. RichEditor**
![Hasil Praktikum](img/w6p1.9.png)

**f. File Upload (Image)**
![Hasil Praktikum](img/w6p1.10.png)
![Hasil Praktikum](img/w6p1.11.png)

**g. Tags Input**
![Hasil Praktikum](img/w6p1.12.png)

**h. Checkbpx (Published)**
![Hasil Praktikum](img/w6p1.13.png)

**i. Date Picker (Published At)**
![Hasil Praktikum](img/w6p1.14.png)

</blockquote>
</details>

<br>

<details>
<summary><b>3. Menampilkan Data di Tabel</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/w6p1.15.png)
![Hasil Praktikum](img/w6p1.16.png)
![Hasil Praktikum](img/w6p1.17.png)

</blockquote>
</details>

<br>
<br>
<details>
<summary><b>Analisis & Diskusi</b></summary>
<br>
<blockquote>

**1. Mengapa kita perlu storage:link?**
Jawab : 
Secara default, Laravel menyimpan file yang diunggah (seperti gambar post) di dalam folder storage/app/public, yang mana folder ini tidak dapat diakses secara langsung melalui browser demi keamanan. Perintah php artisan storage:link berfungsi untuk membuat symbolic link (pintasan) dari folder public/storage ke storage/app/public. Dengan adanya link ini, file yang tersimpan di direktori internal storage dapat diakses dan ditampilkan oleh aplikasi web melalui URL publik.

**2. Apa fungsi $casts untuk field JSON?**
Jawab : 
Properti $casts pada model Laravel digunakan untuk mengubah tipe data field saat data disimpan atau diambil dari database secara otomatis. Untuk field bertipe JSON (seperti field tags), kita perlu melakukan cast ke tipe array. Hal ini dilakukan agar data JSON yang tersimpan sebagai string di database dapat langsung diolah sebagai struktur data array di dalam kode PHP (Filament), sehingga komponen seperti TagsInput dapat berfungsi dengan benar.

**3. Mengapa kita menggunakan category.name bukan category_id?**
Jawab : 
Penggunaan category.name pada tabel bertujuan agar data yang ditampilkan lebih komunikatif bagi pengguna (user-friendly). Jika kita menggunakan category_id, tabel hanya akan menampilkan angka ID yang sulit dipahami. Dengan memanggil relasi category.name, Filament akan mengambil nama kategori dari tabel terkait (relasi belongsTo) sehingga informasi yang muncul adalah nama kategori yang sebenarnya (misal: "Laravel" atau "PHP").

**4. Apa perbedaan RichEditor dan MarkdownEditor?**
Jawab : 
Meskipun keduanya digunakan untuk mengolah konten teks panjang, perbedaannya terletak pada format penyimpanan dan antarmukanya:
- MarkdownEditor: Digunakan untuk menulis teks dengan sintaks Markdown (seperti # untuk judul, ** untuk tebal). Data yang disimpan di database adalah teks mentah beserta kode Markdown tersebut.

- RichEditor: Merupakan editor WYSIWYG (What You See Is What You Get) yang memungkinkan pengguna memformat teks secara langsung melalui tombol-tombol (seperti MS Word). Data yang disimpan biasanya berupa tag HTML (seperti <b> atau <h1>)

</blockquote>
</details>

<br>

---

### JOBSHEET 2 Custom Layout Form dengan Section & Group di Filament

#### Dokumentasi Praktikum
<br>

<details>
<summary><b>1. Mengatur Layout Dasar dengan Column</b></summary>
<br>
<blockquote>

**a. Membuat 3 field dalam satu baris**
![Hasil Praktikum](img/w6p2.1.png)
**b. Membuat layout yang berbeda**
![Hasil Praktikum](img/w6p2.2.png)

</blockquote>
</details>

<br>

<details>
<summary><b>2. Menggunakan Section</b></summary>
<br>
<blockquote>

**a. Membuat Section "Post Details"**
![Hasil Praktikum](img/w6p2.3.png)
**b. Membuat Section Meta Data**
![Hasil Praktikum](img/w6p2.4.png)
![Hasil Praktikum](img/w6p2.5.png)

</blockquote>
</details>

<br>

<details>
<summary><b>3. Menggunakan Group untuk Layout Horizontal</b></summary>
<br>
<blockquote>
![Hasil Praktikum](img/w6p2.6.png)
![Hasil Praktikum](img/w6p2.7.png)

</blockquote>
</details>

<br>

<details>
<summary><b>4. Mengatur Lebar Field Individual</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/w6p2.8.png)

</blockquote>
</details>

<br>

<details>
<summary><b>Analisis & Diskusi</b></summary>
<br>
<blockquote>

**1. Mengapa layout form penting dalam aplikasi admin?**
Jawab : 
Layout form sangat penting untuk meningkatkan pengalaman pengguna (User Experience/UX) dan efisiensi kerja. Dalam aplikasi admin yang memiliki banyak inputan, layout yang berantakan akan membingungkan admin. Dengan layout yang terstruktur (seperti penggunaan kolom dan pengelompokan), proses penginputan data menjadi lebih cepat, mengurangi risiko kesalahan input, dan membuat tampilan aplikasi terlihat lebih profesional serta modern.

**2. Apa perbedaan Section dan Group?**
Jawab : 
- Section: Adalah komponen layout yang memiliki tampilan visual. Section membungkus field di dalam sebuah kotak (card), serta bisa memiliki judul, deskripsi, dan ikon. Section berfungsi untuk memisahkan logika bagian-bagian form secara jelas secara visual.

- Group: Adalah komponen layout yang bersifat logis/tidak terlihat secara visual. Group digunakan untuk mengatur struktur kolom di dalam komponen lain (seperti di dalam Section) tanpa menambah elemen kotak atau garis baru, sehingga sangat berguna untuk pengaturan layout yang lebih kompleks tanpa merusak desain.

**3. Kapan kita menggunakan columnSpanFull()?**
Jawab : 
Kita menggunakan columnSpanFull() saat ingin sebuah komponen form (seperti RichEditor, MarkdownEditor, atau Textarea) mengambil seluruh lebar kolom yang tersedia dalam satu baris. Ini biasanya digunakan untuk inputan teks panjang atau area konten utama agar pengguna memiliki ruang yang lebih luas untuk menulis.

**4. Apa keuntungan sistem grid 12 kolom?**
Jawab : 
Sistem grid 12 kolom memberikan fleksibilitas tinggi dalam mengatur proporsi lebar field. Angka 12 sangat mudah dibagi (bisa dibagi 2, 3, 4, atau 6), sehingga kita bisa membuat kombinasi layout yang sangat variatif. Misalnya, kita bisa membuat layout dengan perbandingan 2/3 untuk konten utama (span 8) dan 1/3 untuk informasi tambahan atau sidebar (span 4) agar tampilan form lebih dinamis dan tidak kaku.

</blockquote>
</details>

<br>

---

### JOBSHEET 3 Implementasi Form Validation pada Filament

#### Dokumentasi Praktikum
<br>

<details>
<summary><b>1. Menambahkan Validasi</b></summary>
<br>
<blockquote>

**a. Menggunakan Method required()**
![Hasil Praktikum](img/w6p3.1.png)

**b. Menggunakan rule()**
![Hasil Praktikum](img/w6p3.2.png)

**c. Menggunakan rules() (Multiple Validation) Format String (Pipe)**
![Hasil Praktikum](img/w6p3.3.png)

**d. Menggunakan rules() (Multiple Validation) Format Array**
![Hasil Praktikum](img/w6p3.4.png)

</blockquote>
</details>

<br>

<details>
<summary><b>2. Validasi Unique</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/w6p3.5.png)

</blockquote>
</details>

<br>

<details>
<summary><b>3. Mengganti Pesan Error (Custom Message)</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/w6p3.6.png)

</blockquote>
</details>

<br>

<details>
<summary><b>4. Validasi Lengkap Post</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/w6p3.7.png)

</blockquote>
</details>

<br>

<details>
<summary><b>Analisis & Diskusi</b></summary>
<br>
<blockquote>

**1. Mengapa validasi penting pada admin panel?**
Jawab : 
Validasi sangat penting untuk menjaga integritas data dan keamanan sistem. Meskipun admin panel digunakan oleh staf internal, kesalahan input (seperti format email yang salah, field kosong yang seharusnya wajib, atau input yang terlalu panjang) dapat merusak struktur database atau menyebabkan error pada sisi tampilan front-end. Validasi memastikan bahwa hanya data yang memenuhi kriteria bisnis yang dapat masuk ke dalam sistem.

**2. Apa perbedaan validasi client-side dan server-side?**
Jawab : 
- Validasi Client-side: Terjadi di browser pengguna sebelum data dikirim ke server (contohnya atribut required pada HTML5). Fungsinya untuk memberikan umpan balik instan kepada pengguna tanpa perlu reload halaman, namun mudah dimanipulasi oleh pengguna yang ahli.

- Validasi Server-side: Terjadi di server (Laravel/Filament) setelah data dikirim. Ini adalah baris pertahanan utama karena tidak dapat diakali oleh pengguna. Validasi ini memastikan keamanan data secara mutlak sebelum diproses ke database.

**3. Mengapa unique otomatis bekerja saat edit data?**
Jawab : 
Pada Filament, saat kita menggunakan validasi unique, sistem secara cerdas akan mengecualikan (ignore) record yang sedang diedit tersebut. Jika tidak dikecualikan, saat kita menekan tombol save tanpa mengubah slug/judul, validasi akan menolak (error) karena menganggap data tersebut sudah ada di database (padahal itu adalah data milik record itu sendiri). Filament menangani pengecualian ID ini secara otomatis di latar belakang agar proses edit berjalan lancar.

**4. Kapan kita perlu menggunakan rules array dibanding string?**
Jawab : 
- String ('required|min:5|max:255'): Digunakan untuk validasi yang sederhana dan standar. Lebih ringkas dan mudah dibaca untuk aturan yang pendek.

- Array (['required', 'min:5', new CustomRule]): Digunakan ketika validasi menjadi lebih kompleks, misalnya ketika kita menyertakan Custom Validation Rule (objek kelas), menggunakan logika kondisional, atau jika aturan validasi mengandung karakter pipa (|) di dalamnya yang bisa membingungkan parser string Laravel.

</blockquote>
</details>

<br>
--- 


<p align="right">Tahun Akademik 2025/2026</p>