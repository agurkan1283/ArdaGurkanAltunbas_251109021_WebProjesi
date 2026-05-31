CREATE DATABASE IF NOT EXISTS bisiklet_kiralama_251109021;

USE bisiklet_kiralama_251109021;

CREATE TABLE 251109021_kullanicilar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ad_soyad VARCHAR(100),
    email VARCHAR(100),
    sifre VARCHAR(255),
    rol ENUM('user', 'admin') DEFAULT 'user'
);

CREATE TABLE 251109021_bisikletler (
    id INT AUTO_INCREMENT PRIMARY KEY,
    model VARCHAR(100),
    tur VARCHAR(50),
    fiyat_saat DECIMAL(10,2),
    durum VARCHAR(20) DEFAULT 'musait'
);

-- Örnek Admin Hesabı (Şifre: 123456)
INSERT INTO 251109021_kullanicilar (ad_soyad, email, sifre, rol) 
VALUES ('Arda Gürkan Altunbaş', 'admin@bisiklet.com', '123456', 'admin');

-- Örnek Bisikletler
INSERT INTO 251109021_bisikletler (model, tur, fiyat_saat) VALUES 
('Mountain Bike', 'Dag', 45),
('City Bike', 'Sehir', 30),
('Elektrikli Bike', 'Elektrikli', 60);