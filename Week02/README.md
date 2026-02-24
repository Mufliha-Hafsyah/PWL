# PEMROGRAMAN WEB LANJUT - JOBSHEET 02
## Routing, Controller, dan View

---

### Identitas Mahasiswa
| Keterangan | Detail |
| :--- | :--- |
| **Nama** | Mufliha Hafsyah Shahieza |
| **NIM** | 244107020147 |
| **Kelas** | TI-2F |

---

### Dokumentasi Praktikum
*Klik pada judul bagian untuk melihat hasil screenshot.*

<br>

<details>
<summary><b>PRAKTIKUM 1 : ROUTE</b></summary>
<br>
<blockquote>

**Membuat Route '/hello'**
Pada tahap ini dilakukan pembuatan route get dengan URL/hello, akan menampilkan teks 'Hello World'.
![Hasil Routing Dasar](img/helloWorld.png)

**Menambahkan Route '/world'**
Pada tahap ini dilakukan pembuatan route dasar untuk menampilkan teks 'World'.
![Hasil Routing Dasar](img/world.png)

**Mengubah Route '/'**
Pada tahap ini dilakukan pembuatan route dasar untuk menampilkan pesan 'Selamat Datang'.
![Hasil Routing Dasar](img/selamatDatang.png)

**Membuat Route '/about'**
Pada tahap ini dilakukan pembuatan route dasar untuk menampilkan identitas mahasiswa (NIM dan Nama).
![Hasil Routing Dasar](img/nimNama.png)

**Membuat Route '/user/{name}'**
Pada tahap ini dilakukan pembuatan route dasar untuk menampilkan teks 'Nama saya NamaAnda'.
![Hasil Routing Dasar](img/userName.png)

**Membuat Route '/user/'**
Pada tahap ini halaman akan menampilkan 'error not found'.
![Hasil Routing Dasar](img/notFound.png)

**Membuat Route yang menerima parameter $postId dan juga $comment.**
Pada tahap ini halaman akan menampilkan 'Post ke- Komentar ke- '.
![Hasil Routing Dasar](img/posKomentar.png)

**Membuat Route '/articles/{id}/'**
Pada tahap ini halaman akan menampilkan 'Halaman Artikel dengan ID {id}'.
![Hasil Routing Dasar](img/idArticle.png)

**Memanggil Route '/user' sekaligus mengirimkan parameter $name yang bersifat opsional (null).**
Pada tahap ini halaman akan menampilkan 'Nama saya '.
![Hasil Routing Dasar](img/nameNull.png)

**Memanggil Route '/user' sekaligus mengirimkan parameter $name yang bersifat opsional(not null).**
Pada tahap ini halaman akan menampilkan 'Nama saya NamaAnda'.
![Hasil Routing Dasar](img/nameNotNull.png)

**Implementasi Optional Parameter**
Pada tahap ini halaman akan menampilkan 'Nama saya John' karena parameter $nama nilai defaultnya adalah 'John'.
![Hasil Routing Dasar](img/john.png)

</blockquote>
</details>

<br>

<details>
<summary><b>PRAKTIKUM 2 : CONTROLLER</b></summary>
<br>
<blockquote>

**Pembuatan Welcome Controller**
Pemindahan logika dari file route ke dalam WelcomeController untuk merapikan struktur kode.
![Hasil Welcome Controller](img/controller1.png)

**Page Controller '/'**
Pembuatan PageController yang menangani beberapa halaman sekaligus (Home, About, dan Articles).
![Hasil Page Controller](img/controller2.png)

**Page Controller '/about/'**
Pembuatan PageController yang menangani beberapa halaman sekaligus (Home, About, dan Articles).
![Hasil Resource Controller](img/controller3.png)

**Page Controller '/articles/'**
Pembuatan PageController yang menangani beberapa halaman sekaligus (Home, About, dan Articles).
![Hasil Resource Controller](img/controller4.png)

**Page Controller '{id}'**
Pembuatan PageController yang menangani beberapa halaman sekaligus (Home, About, dan Articles).
![Hasil Resource Controller](img/controller5.png)

**Single Action Controller**
Hasil akhir yang didapatkan akan ada HomeController, AboutController dan ArticleController
![Single Action Controller](img/singleActionController.png)

**Resource Controller**
Implementasi PhotoController menggunakan tipe Resource untuk menangani fungsi CRUD secara otomatis.
![Hasil Resource Controller](img/photoController.png)

</blockquote>
</details>

<br>

<details>
<summary><b>PRAKTIKUM 3 : VIEW</b></summary>
<br>
<blockquote>

**Implementasi Blade View**
Pada tahap ini, dibuat file hello.blade.php di dalam folder resources/views. Pengamatan menunjukkan bahwa untuk menampilkan struktur HTML yang kompleks, kita harus menggunakan View daripada hanya mengembalikan string dari rute atau controller.
![Hasil Implementasi View](img/view1.png)

**Organisasi View dalam Sub-folder**
File view diletakkan di dalam sub-folder blog. Pengamatan menunjukkan cara pemanggilannya di controller menggunakan notasi titik (blog.hello). Hal ini sangat berguna untuk merapikan file tampilan dalam proyek skala besar.
![Hasil Passing Data](img/view2.png)

**Passing Data ke View**
Dilakukan pengiriman variabel dari Controller ke View menggunakan method with(). Hasil pengamatan menunjukkan bahwa data dapat ditampilkan secara dinamis menggunakan sintaks kurung kurawal ganda {{ $variable }} milik mesin template Blade.
![Hasil Passing Data](img/view3.png)

</blockquote>
</details>

<br>

<details>
<summary><b>TUGAS MANDIRI: APLIKASI POS</b></summary>
<br>
<blockquote>

**Laporan Hasil Pembuatan Project Point of Sales (POS):**

1. **Halaman Home**
   Menampilkan ringkasan utama aplikasi.
   ![Screenshot Home](isi_link_gambar)

2. **Halaman Products (Category)**
   Menampilkan daftar produk berdasarkan kategori menggunakan route prefix.
   ![Screenshot Products](isi_link_gambar)

3. **Halaman User**
   Menampilkan profil pengguna berdasarkan ID dan Nama.
   ![Screenshot User](isi_link_gambar)

4. **Halaman Penjualan (Transactions)**
   Menampilkan antarmuka transaksi penjualan.
   ![Screenshot Penjualan](isi_link_gambar)

</blockquote>
</details>

---
<p align="right">Tahun Akademik 2025/2026</p>