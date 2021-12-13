<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4276bc68c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin.css">
    <title>TUOS UNIVERSITESI - ADMIN PANEL</title>
</head>

<?php

include 'init.php';

kontrol();

?> 

<body>
<div class="tadmin-admin-sidebar">
    <div class="tadmin-admin-sidebar-contain">
        <div class="tadmin-admin-sidebar-options"><img src="../img/lzsnow.png" alt=""></div>
        <div class="tadmin-admin-sidebar-options"><i class="fas fa-chart-bar"></i></div>
    </div>
</div>
<div class="tadmin-admin-container">
<a class="Anasayfa" href="../index.php">Lisansüstü</a>
<a class="logout" href="logout.php">ÇIKIŞ</a>
    <div class="tadmin-admin-playerchart">
    <form class="announce-container" action="init.php" method="POST">
            <h1 style="color: white;">Announcement</h1>
            <input class="announce-input" name="notification" type="text" placeholder="write announcement">
            <button class="admin-notif-button" name="adminnotif">
                            SEND
            </button>
        </form>
    </div>
    <div class="tadmin-admin-total-status">
        <div class="tadmin-admin-total-status-options"></div>
        <div class="tadmin-admin-total-status-options"></div>
        <div class="tadmin-admin-total-status-options"></div>
        <div class="tadmin-admin-total-status-options"></div>
    </div>
</div>
</body>
</body>

<script>

</script>
</html>   