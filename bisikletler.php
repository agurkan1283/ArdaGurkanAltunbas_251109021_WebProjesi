<?php require_once 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bisikletler</title>
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

    <img src="assets/images/bisiklet1.jpg" style="width:100%; height:300px; object-fit:cover;">

    <h2 style="text-align:center; margin:20px;">Bisiklet Listesi</h2>

    <table class="a-fiyat-tablosu" style="width:80%; margin:auto;">
        <tr style="background:#FF8C00; color:white;">
            <th>Model</th>
            <th>Tür</th>
            <th>Fiyat</th>
            <th>Durum</th>
        </tr>
        <?php
        $sorgu = $pdo->query("SELECT * FROM 251109021_bisikletler");
        while($row = $sorgu->fetch()) {
            echo "<tr><td>".$row['model']."</td><td>".$row['tur']."</td><td>".$row['fiyat_saat']." TL</td><td>".$row['durum']."</td></tr>";
        }
        ?>
    </table>

</body>
</html>