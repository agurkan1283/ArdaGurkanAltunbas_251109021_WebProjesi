<?php require_once 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="a-ust-menu">
        <ul>
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="bisikletler.php">Bisikletler</a></li>
            <li><a href="giris.php">Giriş</a></li>
            <li><a href="kayit.php">Kayıt</a></li>
        </ul>
    </nav>

    <div style="width:400px; margin:60px auto; background:white; padding:30px; border:1px solid #ddd;">
        <h2>Kayıt Ol</h2>
        <form action="islemler/kullanici_islemleri.php" method="POST">
            <input type="hidden" name="islem" value="kayit">
            <p>Ad Soyad:</p>
            <input type="text" name="ad_soyad" required style="width:100%; padding:10px;">
            <p>Email:</p>
            <input type="email" name="email" required style="width:100%; padding:10px;">
            <p>Şifre:</p>
            <input type="password" name="sifre" required style="width:100%; padding:10px;">
            <button type="submit" style="width:100%; padding:12px; background:#FFA500; color:white; border:none; margin-top:15px;">Kayıt Ol</button>
        </form>
    </div>

</body>
</html>