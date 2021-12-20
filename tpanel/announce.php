<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style.css">
    <title>TUOS UNIVERSITESI</title>
</head>

<?php 

include 'src/init.php';

kontroluser();

$kullanicisor=$db->prepare("SELECT * FROM admin_notif");
$kullanicisor->execute();


?>
<body>
                
<a class="logout" href="src/logout.php">ÇIKIŞ</a>
<div class="tindex-main-container">
            <div class="tindex-sidebar-container">
                <a href="index.php">Lisansüstü Anasayfa</a>
                <a href="announce.php">Lisansüstü Duyuru</a>
                <a href="basvurutarih.php">Lisansüstü Başvuru Tarihleri</a>
                <a href="basvurusarlari.php">Lisansüstü Başvuru Şartları</a>
                <a href="mulakat.php">Lisansüstü Mülakat Soruları</a>
                <a href="basvurusss.php">Lisansüstü S.S.S</a>
                <a href="bavurusartlarigenel.php">Lisansüstü Başvuru Şartları Genel</a>
                <a href="basvurugenelform.php">Lisansüstü Başvuru Genel Form</a>
                <a href="basvuruadimlari.php">Lisansüstü Başvuru Adımları</a>
                <a href="programiletisim.php">Lisansüstü İletişim</a>
                <a href="basvur.php">Lisansüstü Başvur</a>
                <a href="">Lisansüstü Onay/Red</a>
            </div>
            <div class="tindex-contents-container"> 
                <div class="tindex-announcements">
                    <div class="tindex-announcements-header">
                        <h1>DUYURU - KONU</h1>
                        <p>DUYURU - SAAT</p>
                    </div>
                    <?php while($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)) {?>
                    <div class="tindex-announcements-options">
                        <h1><?php echo $kullanicicek['notification'] ?></h1>
                        <p><?php echo $kullanicicek['time'] ?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
</body>
</html>