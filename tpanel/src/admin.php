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
    <title>TOU ADMIN PANEL</title>
</head>

<?php

include 'init.php';

kontrol();

?> 

<body>
<div class="tadmin-admin-sidebar">
    <div class="tadmin-admin-sidebar-contain">
        <a href="admin.php"  class="tadmin-admin-sidebar-options"><i class="fas fa-chart-bar"></i></a>
        <a href="adminbasvurular.php" class="tadmin-admin-sidebar-options"><i class="fas fa-clipboard-list"></i></a>
    </div>
</div>
<div class="tadmin-admin-container">
<a class="Anasayfa" href="../index.php">Lisansüstü</a>
<a class="logout" href="logout.php">ÇIKIŞ</a>
    <div class="tadmin-admin-playerchart">
        <form class="announce-container" action="init.php" method="POST"> 
            <h1 style="color: white;">Announcement</h1>
            <input class="announce-input"  name="notification" type="textarea" placeholder="write announcement">
            <input id="summernote"  name="notification" type="textarea" placeholder="write announcement">
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
</html>   