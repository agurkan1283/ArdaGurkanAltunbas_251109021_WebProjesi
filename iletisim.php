<?php require_once 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="a-ust-menu">
        <ul>
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="bisikletler.php">Bisikletler</a></li>
            <li><a href="giris.php">Giriş</a></li>
            <li><a href="kayit.php">Kayıt</a></li>
            <li><a href="iletisim.php">İletişim</a></li>
        </ul>
    </nav>

    <!-- Form Resmi -->
    <img src="assets/images/form-resim.jpg" style="width:100%; height:280px; object-fit:cover;">

    <div style="width:500px; margin:30px auto; background:white; padding:25px; border:1px solid #ddd;">
        <h2>İletişim Formu</h2>
        <form action="#" method="POST">
            <p>Ad Soyad:</p>
            <input type="text" required style="width:100%; padding:10px;">
            
            <p>Email:</p>
            <input type="email" required style="width:100%; padding:10px;">
            
            <p>Konu:</p>
            <input type="radio" name="konu" value="sikayet"> Şikayet
            <input type="radio" name="konu" value="talep"> Talep
            <input type="radio" name="konu" value="diger"> Diğer <br><br>
            
            <p>Bisiklet Türü:</p>
            <select style="width:100%; padding:10px;">
                <option>Dağ Bisikleti</option>
                <option>Şehir Bisikleti</option>
                <option>Elektrikli</option>
            </select>
            
            <p>Mesaj:</p>
            <textarea style="width:100%; height:120px;"></textarea>
            
            <button type="submit" style="width:100%; padding:12px; background:#FFA500; color:white