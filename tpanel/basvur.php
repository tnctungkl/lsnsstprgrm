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

kontroluser()

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
            <form  class="tuos-lsnss-register"  action="src/init.php" method="POST">
                <h1>Mail</h1>
                <input class="tuos-lsnss-inputs" type="text" name="lssnmail" placeholder="Mail">
                <h1>İsim</h1>
                <input class="tuos-lsnss-inputs" type="text" name="lssnisim" placeholder="İsim">
                <h1>Soyisim</h1>
                <input class="tuos-lsnss-inputs" type="text" name="lssnsoyisim" placeholder="Soyisim">
                <h1>Doğum Tarihi</h1>
                <input class="tuos-lsnss-inputs" type="date" name="lssndtarih" placeholder="Doğum Tarihi">
                <h1>Cinsiyet</h1>
                <input class="tuos-lsnss-inputs" type="text" name="lssncinsiyet" placeholder="Cinsiyet">
                <h1>Bölümü</h1>
                <input class="tuos-lsnss-inputs" type="text" name="lssnbölüm" placeholder="Bölümü">
                <button class="tuos-lsnss-button" name="lsnssregister">
                    Kayıt ol
                </button>
            </form>
            </div>
        </div>
</body>
</html>