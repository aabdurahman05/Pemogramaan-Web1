-- Database Modul 10 - Web Programming 1
-- Cara import: phpMyAdmin -> tab Import -> pilih file ini -> Go
-- (file ini otomatis membuat database web_programming_1)

CREATE DATABASE IF NOT EXISTS web_programming_1
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE web_programming_1;

DROP TABLE IF EXISTS mahasiswa;
DROP TABLE IF EXISTS users;

-- Tabel user untuk login
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  nama_lengkap VARCHAR(100) NOT NULL
) ENGINE=InnoDB;

-- Login: username = admin | password = admin123
INSERT INTO users (username, password, nama_lengkap) VALUES
('admin', '$2b$12$ZfqkBLlUZKAj8WnIotJKqO8O.rqaV.fPr7Gmn57G9OpHD5ACkMMBm', 'Administrator');

-- Tabel mahasiswa (sudah termasuk kolom media dari Sesi 10)
CREATE TABLE mahasiswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nim VARCHAR(20) NOT NULL,
  nama VARCHAR(100) NOT NULL,
  program_studi VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  foto VARCHAR(255) NULL,
  audio VARCHAR(255) NULL,
  dokumen VARCHAR(255) NULL
) ENGINE=InnoDB;

INSERT INTO mahasiswa (nim, nama, program_studi, email) VALUES
('2024001', 'Andi Pratama', 'Teknik Informatika', 'andi@example.com'),
('2024002', 'Siti Rahma', 'Sistem Informasi', 'siti@example.com'),
('2024003', 'Budi Santoso', 'Teknik Informatika', 'budi@example.com');

-- ------------------------------------------------------------
-- CATATAN: Jika kamu sudah punya tabel mahasiswa dari sesi sebelumnya
-- dan TIDAK ingin menghapusnya, jangan import file ini. Jalankan saja:
--
-- ALTER TABLE mahasiswa
--   ADD foto VARCHAR(255) NULL,
--   ADD audio VARCHAR(255) NULL,
--   ADD dokumen VARCHAR(255) NULL;
-- ------------------------------------------------------------
