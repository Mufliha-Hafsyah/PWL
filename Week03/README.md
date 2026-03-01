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
<summary><b>PRAKTIKUM 3 : Membuat file seeder</b></summary>
<br>
<blockquote>

**Membuat file seeder untuk table m_level**
![Hasil Praktkum](img/p3.1.png)
![Hasil Praktkum](img/p3.2.png)
![Hasil Praktkum](img/p3.3.png)
![Hasil Praktkum](img/p3.4.png)

**Membuat file seeder untuk table m_user**
![Hasil Praktkum](img/p3.5.png)
![Hasil Praktkum](img/p3.6.png)
![Hasil Praktkum](img/p3.7.png)
![Hasil Praktkum](img/p3.8.png)

**Membuat file seeder untuk table m_kategori**
![Hasil Praktkum](img/p3.9.png)
![Hasil Praktkum](img/p3.10.png)
![Hasil Praktkum](img/p3.11.png)
![Hasil Praktkum](img/p3.12.png)

**Membuat file seeder untuk table m_supplier**
![Hasil Praktkum](img/p3.13.png)
![Hasil Praktkum](img/p3.14.png)
![Hasil Praktkum](img/p3.15.png)
![Hasil Praktkum](img/p3.16.png)

**Membuat file seeder untuk table m_barang**
![Hasil Praktkum](img/p3.17.png)
![Hasil Praktkum](img/p3.18.png)
![Hasil Praktkum](img/p3.19.png)
![Hasil Praktkum](img/p3.20.png)

**Membuat file seeder untuk table t_stok**
![Hasil Praktkum](img/p3.21.png)
![Hasil Praktkum](img/p3.22.png)
![Hasil Praktkum](img/p3.23.png)
![Hasil Praktkum](img/p3.24.png)

**Membuat file seeder untuk table t_penjualan**
![Hasil Praktkum](img/p3.25.png)
![Hasil Praktkum](img/p3.26.png)
![Hasil Praktkum](img/p3.27.png)
![Hasil Praktkum](img/p3.28.png)

**Membuat file seeder untuk table t_penjualan_detail**
![Hasil Praktkum](img/p3.29.png)
![Hasil Praktkum](img/p3.30.png)
![Hasil Praktkum](img/p3.31.png)
![Hasil Praktkum](img/p3.32.png)

</blockquote>
</details>

<br>

<details>
<summary><b>PRAKTIKUM 4 : Implementasi DB Facade</b></summary>
<br>
<blockquote>

**Membuat controller untuk mengelola data pada table m_level**
![Hasil Praktkum](img/p4.1.png)

**Modifikasi routing di PWL_POS/routes/web.php**
![Hasil Praktkum](img/p4.2.png)

**Modifikasi file LevelController untuk menambahkan 1 data ke table m_level**
![Hasil Praktkum](img/p4.3.png)

**Hasil yang terjadi pada table m_level setelah dijalankan di browser**
![Hasil Praktkum](img/p4.4.png)

**Modifikasi file LevelController untuk meng-update data di table m_level**
![Hasil Praktkum](img/p4.5.png)

**Hasil yang terjadi pada table m_level setelah dijalankan di browser**
![Hasil Praktkum](img/p4.6.png)
![Hasil Praktkum](img/p4.7.png)

**Modifikasi file LevelController untuk melakukan proses hapus data di table m_level**
![Hasil Praktkum](img/p4.8.png)

**Modifikasi file LevelController untuk menampilkan data yang ada di table m_level**
![Hasil Praktkum](img/p4.9.png)

**Membuat view level**

![Hasil Praktkum](img/p4.10.png)

**Hasil menjalankan view level di browser**

![Hasil Praktkum](img/p4.11.png)

</blockquote>
</details>

<br>

<details>
<summary><b>PRAKTIKUM 5 : Implementasi Query Builder</b></summary>
<br>
<blockquote>

**Membuat controller untuk mengelola data pada table m_kategori**
![Hasil Praktkum](img/p5.1.png)

**Modifikasi routing di PWL_POS/routes/web.php**
![Hasil Praktkum](img/p5.2.png)

**Modifikasi file LevelController untuk menambahkan 1 data ke table m_kategori**
![Hasil Praktkum](img/p5.3.png)

**Hasil yang terjadi pada table m_kategori setelah dijalankan di browser**    

![Hasil Praktkum](img/p5.4.png)

![Hasil Praktkum](img/p5.5.png)

**Modifikasi file LevelController untuk meng-update data di table m_kategori**
![Hasil Praktkum](img/p5.6.png)

**Hasil yang terjadi pada table m_kategori setelah dijalankan di browser**
![Hasil Praktkum](img/p5.7.png)
![Hasil Praktkum](img/p5.8.png)

**Modifikasi file LevelController untuk melakukan proses hapus data di table m_kategori**
![Hasil Praktkum](img/p5.9.png)

**Modifikasi file LevelController untuk menampilkan data yang ada di table m_kategori**
![Hasil Praktkum](img/p5.10.png)

**Membuat view kategori**

![Hasil Praktkum](img/p5.11.png)

**Hasil menjalankan view kategori di browser**

![Hasil Praktkum](img/p5.12.png)

<br>

<details>
<summary><b>PRAKTIKUM 6 : Implementasi Eloquent ORM</b></summary>
<br>
<blockquote>

**Membuat file model untuk table m_kategorim_user**
![Hasil Praktkum](img/p6.1.png)

**Modifikasi file UserModel.php**
![Hasil Praktkum](img/p6.2.png)

**Modifikasi route web.php untuk mencoba routing ke controller UserController**
![Hasil Praktkum](img/p6.3.png)

**Membuat file controller UserContoller dan modifikasi**    

![Hasil Praktkum](img/p6.4.png)

![Hasil Praktkum](img/p6.5.png)

**Membuat view user.blade.php**
![Hasil Praktkum](img/p6.6.png)

**Hasil yang terjadi setelah dijalankan di browser**
![Hasil Praktkum](img/p6.7.png)

**Modifikasi lagi file UserController**
![Hasil Praktkum](img/p6.8.png)

**Hasil yang terjadi setelah dijalankan di browser**
![Hasil Praktkum](img/p6.9.png)

**Modifikasi lagi file UserController**
![Hasil Praktkum](img/p6.10.png)

**Hasil yang terjadi setelah dijalankan di browser**

![Hasil Praktkum](img/p6.11.png)



---
<p align="right">Tahun Akademik 2025/2026</p>