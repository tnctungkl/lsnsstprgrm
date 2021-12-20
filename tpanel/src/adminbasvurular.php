<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4276bc68c.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link rel="stylesheet" href="admin.css">
    <script src="index.js"></script>
    <title>TUOS UNIVERSITESI - ADMIN PANEL</title>
</head>

<?php

include 'init.php';

kontrol();

$kullanicisor=$db->prepare("SELECT * FROM admin_lssnbasvurular");
$kullanicisor->execute();


?> 

<body>
<div class="tadmin-admin-sidebar">
    <div class="tadmin-admin-sidebar-contain">
        <a  href="admin.php" class="tadmin-admin-sidebar-options"><i class="fas fa-chart-bar"></i></a>
        <a  href="adminbasvurular.php" class="tadmin-admin-sidebar-options"><i class="fas fa-clipboard-list"></i></a>
    </div>
</div>
<div class="tadmin-admin-container">
<a class="Anasayfa" href="../index.php">Lisansüstü</a>
<a class="logout" href="logout.php">ÇIKIŞ</a>
    <div class="tadmin-admin-playerchart">
    <div class="container">
	<h1 class="admintable-header-title">Gelen Başvurular</h1>
	<div class="table">
		<div class="table-header">
			<div class="header__item"><a id="name" class="filter__link" href="#">Mail</a></div>
			<div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">İsim</a></div>
			<div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">Soyisim</a></div>
			<div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Doğum Tarih</a></div>
            <div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Cinsiyet</a></div>
			<div class="header__item"><a id="total" class="filter__link filter__link--number" href="#">Bölüm</a></div>
		</div>
		<div class="table-content">	
        <?php while($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)) {?>
			<div class="table-row">		
				<div class="table-data"><?php echo $kullanicicek['lssn_mail'] ?></div>
				<div class="table-data"><?php echo $kullanicicek['lssn_isim'] ?></div>
				<div class="table-data"><?php echo $kullanicicek['lssn_soyisim'] ?></div>
				<div class="table-data"><?php echo $kullanicicek['lssn_dtarih'] ?></div>
				<div class="table-data"><?php echo $kullanicicek['lssn_cinsiyet'] ?></div>
                <div class="table-data"><?php echo $kullanicicek['lssn_bolum'] ?></div>
			</div>
        <?php } ?>
		</div>	
	</div>
</div>
    </div>
</div>
</body>
</html>   