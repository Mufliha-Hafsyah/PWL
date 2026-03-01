# PEMROGRAMAN WEB LANJUT - JOBSHEET 03
## MIGRATION, SEEDER, DB FAÇADE, QUERY BUILDER, dan ELOQUENT ORM

---

### Identitas Mahasiswa
| Keterangan | Detail |
| :--- | :--- |
| **Nama** | Mufliha Hafsyah Shahieza |
| **NIM** | 244107020147 |
| **Kelas** | TI-2F |

---

### Dokumentasi Praktikum
<br>

<details>
<summary><b>PRAKTIKUM 1 : Pengaturan Database</b></summary>
<br>
<blockquote>

**Membuat database baru dengan nama PWL_POS**
![Hasil Praktikum](img/p1.1.png)

**Menyesuaikan file .env dengan database PWL_POS**
![Hasil Praktikum](img/p1.2.png)

</blockquote>
</details>

<br>

<details>
<summary><b>PRAKTIKUM 2.1 : Pembuatan file migrasi tanpa relasi</b></summary>
<br>
<blockquote>

**Membuat file migrasi untuk table m_level**
![Hasil Praktkum](img/p2.1.1.png)
![Hasil Praktkum](img/p2.1.2.png)
![Hasil Praktkum](img/p2.1.3.png)
![Hasil Praktkum](img/p2.1.4.png)

**Membuat file migrasi untuk table m_kategori**
![Hasil Praktkum](img/p2.1.5.png)
![Hasil Praktkum](img/p2.1.6.png)
![Hasil Praktkum](img/p2.1.7.png)
![Hasil Praktkum](img/p2.1.8.png)

**Membuat file migrasi untuk table m_supplier**
![Hasil Praktkum](img/p2.1.9.png)
![Hasil Praktkum](img/p2.1.10.png)
![Hasil Praktkum](img/p2.1.11.png)
![Hasil Praktkum](img/p2.1.12.png)

</blockquote>
</details>

<br>

<details>
<summary><b>PRAKTIKUM 2.2 : Pembuatan file migrasi dengan relasi</b></summary>
<br>
<blockquote>

**Membuat file migrasi untuk table m_user**
![Hasil Praktkum](img/p2.2.1.png)
![Hasil Praktkum](img/p2.2.2.png)
![Hasil Praktkum](img/p2.2.3.png)
![Hasil Praktkum](img/p2.2.4.png)

**Membuat file migrasi untuk table m_barang**
![Hasil Praktkum](img/p2.2.5.png)
![Hasil Praktkum](img/p2.2.6.png)
![Hasil Praktkum](img/p2.2.7.png)
![Hasil Praktkum](img/p2.2.8.png)

**Membuat file migrasi untuk table t_penjualan**
![Hasil Praktkum](img/p2.2.9.png)
![Hasil Praktkum](img/p2.2.10.png)
![Hasil Praktkum](img/p2.2.11.png)
![Hasil Praktkum](img/p2.2.12.png)

**Membuat file migrasi untuk table t_stok**
![Hasil Praktkum](img/p2.2.13.png)
![Hasil Praktkum](img/p2.2.14.png)
![Hasil Praktkum](img/p2.2.15.png)
![Hasil Praktkum](img/p2.2.16.png)

**Membuat file migrasi untuk table t_penjualan_detail**
![Hasil Praktkum](img/p2.2.17.png)
![Hasil Praktkum](img/p2.2.18.png)
![Hasil Praktkum](img/p2.2.19.png)
![Hasil Praktkum](img/p2.2.20.png)

**Tampilan designer pada phpMyAdmin setelah semua file migrasi telah dibuat**
![Hasil Praktkum](img/p2.2.21.png)


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
---
<p align="right">Tahun Akademik 2025/2026</p>