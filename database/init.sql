-- Skrip SQL untuk membuat tabel users
CREATE DATABASE IF NOT EXISTS uas_pemrograman;

USE uas_pemrograman;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    gender ENUM('Laki-laki', 'Perempuan') NOT NULL,
    ip_address VARCHAR(45) NOT NULL,
    browser VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
