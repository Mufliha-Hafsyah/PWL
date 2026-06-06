# LAPORAN PRAKTIKUM - WEEK 15 PEMROGRAMAN WEB LANJUT

---

### Identitas Mahasiswa
| Keterangan | Detail |
| :--- | :--- |
| **Nama** | Mufliha Hafsyah Shahieza |
| **NIM** | 244107020147 |
| **Kelas** | TI-2F |

---

## JOBSHEET WEEK 15

### Implementasi Many-to-Many Relationship pada Filament
<br>

<details>
<summary><b>Hasil Praktikum</b></summary>
<br>
<blockquote>

**D. Rollback Migration**
![Hasil Praktikum](img/w15p1.1.png)<br>
![Hasil Praktikum](img/w15p1.2.png)<br>
**E. Membuat Tabel Tags**
![Hasil Praktikum](img/w15p1.3.png)<br>
**F. Membuat Pivot Table**
![Hasil Praktikum](img/w15p1.4.png)<br>
![Hasil Praktikum](img/w15p1.5.png)<br>
![Hasil Praktikum](img/w15p1.6.png)<br>
**G. Membuat Resource Tag pada Filament**
![Hasil Praktikum](img/w15p1.7.png)<br>
**H. Membuat Model Tag**
![Hasil Praktikum](img/w15p1.8.png)<br>
![Hasil Praktikum](img/w15p1.9.png)<br>
![Hasil Praktikum](img/w15p1.10.png)<br><br>
Form Tag<br>
![Hasil Praktikum](img/w15p1.11.png)<br>
![Hasil Praktikum](img/w15p1.12.png)<br><br>
Table Tag<br>
![Hasil Praktikum](img/w15p1.13.png)<br>
![Hasil Praktikum](img/w15p1.14.png)<br>
![Hasil Praktikum](img/w15p1.15.png)<br>
![Hasil Praktikum](img/w15p1.16.png)<br>
**I. Menambahkan Relationship pada Model Post**
![Hasil Praktikum](img/w15p1.17.png)<br>
**J. Menambahkan Relationship pada Model Tags**
![Hasil Praktikum](img/w15p1.18.png)<br>
**K. Menggunakan Relationship pada Form Post**
![Hasil Praktikum](img/w15p1.19.png)<br>
**L. Hasil Form Post**
![Hasil Praktikum](img/w15p1.20.png)<br>
**M. Membuat Relationship Manager**
![Hasil Praktikum](img/w15p1.21.png)<br>
**N. Menghubungkan Relationship Manager**
![Hasil Praktikum](img/w15p1.22.png)<br>
**O. Fitur Relationship Manager**
![Hasil Praktikum](img/w15p1.23.png)<br>
![Hasil Praktikum](img/w15p1.24.png)<br>

</blockquote>
</details>

<br>

<details>
<summary><b>Analisis & Diskusi</b></summary>
<br>
<blockquote>

**1. Apa perbedaan HasMany dan Many-to-Many?**
<br>
Jawab : 

- HasMany (One-to-Many): Hubungan di mana satu data induk bisa memiliki banyak data anak, tapi setiap data anak hanya boleh terikat pada satu induk saja. Contohnya, satu Kategori bisa punya banyak Post, tapi satu Post tidak bisa masuk ke banyak kategori sekaligus. Kolom penghubungnya disimpan langsung di tabel anak.  
- Many-to-Many: Hubungan yang jauh lebih bebas, di mana banyak data di tabel A bisa terikat dengan banyak data di tabel B. Contohnya di jobsheet ini: satu Post bisa punya banyak Tag, dan di waktu yang sama, satu Tag juga bisa dipakai oleh banyak Post berbeda.  

**2. Mengapa pivot table diperlukan?**
<br>
Jawab : 
<br>

Pivot table wajib ada karena struktur database standar tidak bisa menghubungkan relasi Many-to-Many secara langsung tanpa merusak aturan data. Tabel pivot ini bertindak sebagai jembatan khusus di tengah-tengah yang hanya bertugas menyimpan pasangan ID dari kedua tabel utama (kolom post_id dan tag_id), sehingga hubungan antar-data yang rumit bisa tercatat dengan rapi dan efisien.

**3. Apa fungsi attach dan detach pada Filament?**
<br>
Jawab : 
<br>

- Attach: Digunakan untuk menghubungkan data yang sudah ada di tabel tujuan ke data induk yang sedang kita edit. Tombol ini hanya akan membuat catatan hubungan baru di dalam tabel pivot, tanpa membuat data baru di tabel utama.  
- Detach: Kebalikan dari attach, fungsinya untuk memutuskan hubungan antar-data. Filament akan menghapus baris penandanya di dalam tabel pivot, sehingga data tersebut tidak lagi saling terikat, namun data asli di tabel utama sama sekali tidak terhapus. 

**4. Mengapa JSON column kurang baik untuk relasi?**
<br>
Jawab : 
<br>

- Data Tidak Terstruktur: Menyimpan data dalam format JSON membuat database melanggar aturan normalisasi karena memasukkan banyak nilai ke dalam satu kolom tunggal.  
- Performa Query Lemah: Saat data aplikasi makin banyak, proses pencarian atau pemfilteran data berdasarkan tag tertentu akan sangat lambat karena database harus membaca teks JSON satu per satu di setiap baris.  
- Sulit Dimodifikasi: Jika ada nama tag yang salah ketik atau ingin diubah, kita terpaksa harus mengubah string teks di semua baris postingan secara manual, yang rawan membuat data jadi tidak konsisten dan rusak.

</blockquote>
</details>

<br>

---

<p align="right">Tahun Akademik 2025/2026</p>