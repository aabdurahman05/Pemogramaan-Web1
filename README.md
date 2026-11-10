# Web Programming 1 - Modul 10: CRUD Media (PHP Upload + JS DOM)

## Cara menjalankan (Laragon)
1. Ekstrak folder `afteruts` ke `C:\laragon\www\afteruts`
2. Start All (Apache + MySQL) di Laragon.
3. Buka phpMyAdmin (http://localhost/phpmyadmin) -> tab **Import** -> pilih `database/database.sql` -> Go.
   (Otomatis membuat database `web_programming_1`.)
4. Buka http://localhost/afteruts/
5. Login: **admin** / **admin123**

## Jika MySQL kamu pakai password
Edit `config/koneksi.php` (`$db_user`, `$db_pass`).

## Sudah punya tabel mahasiswa dari sesi lama?
Jangan import SQL. Cukup jalankan:

    ALTER TABLE mahasiswa
      ADD foto VARCHAR(255) NULL,
      ADD audio VARCHAR(255) NULL,
      ADD dokumen VARCHAR(255) NULL;

Pastikan juga ada tabel `users` (lihat `database/database.sql`).

## Struktur
- `crud/` : CRUD Mahasiswa lama (teks) - tetap ada
- `crud-media/` : CRUD Media baru (foto, audio, PDF)
- `proses/crud-media/` : tambah, update, hapus (upload + cleanup file)
- `config/media_helper.php` : uploadMedia() dan hapusMediaJikaAda()
- `assets/js/media.js` : preview, validasi client-side, confirm, search
- `uploads/` : tempat file fisik (images, audio, documents)

## Troubleshooting singkat
- `Class "finfo" not found` -> aktifkan `extension=fileinfo` di php.ini, restart Apache.
- File > 2 MB gagal -> cek `upload_max_filesize` dan `post_max_size` di php.ini.
- Redirect ke login terus -> project harus ada di dalam folder `www` Laragon.
