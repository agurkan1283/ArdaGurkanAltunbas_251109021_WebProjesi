<?php
require_once '../includes/config.php';

if ($_POST) {
    $islem = $_POST['islem'];

    // KAYIT
    if ($islem == "kayit") {
        $ad = $_POST['ad_soyad'];
        $email = $_POST['email'];
        $sifre = $_POST['sifre'];

        $sifre_hash = password_hash($sifre, PASSWORD_DEFAULT);

        $ekle = $pdo->prepare("INSERT INTO 251109021_kullanicilar (ad_soyad, email, sifre, rol) VALUES (?, ?, ?, 'user')");
        $ekle->execute([$ad, $email, $sifre_hash]);

        echo "<script>alert('Kayıt tamamlandı, giriş yap'); window.location.href='../giris.php';</script>";
    }

    // GİRİŞ
    if ($islem == "giris") {
        $email = $_POST['email'];
        $sifre = $_POST['sifre'];

        $cek = $pdo->prepare("SELECT * FROM 251109021_kullanicilar WHERE email = ?");
        $cek->execute([$email]);
        $user = $cek->fetch();

        if ($user) {
            if (password_verify($sifre, $user['sifre'])) {
                $_SESSION['user'] = $user;
                echo "<script>alert('Giriş başarılı'); window.location.href='../index.php';</script>";
            } else {
                echo "<script>alert('Şifre hatalı'); window.location.href='../giris.php';</script>";
            }
        } else {
            echo "<script>alert('Kullanıcı bulunamadı'); window.location.href='../giris.php';</script>";
        }
    }
}
?>