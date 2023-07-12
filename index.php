<?php
include('config.php');
include('functions.php');
$fileContent=DIR_INCLUDE_SECTIONS.'section_0.php';
$title='MariaGames';
session_start();
if(isset($_GET[GET_ID_SECTION]))
{
    $idContent=(int)$_GET[GET_ID_SECTION];
    $fileContentTemp=DIR_INCLUDE_SECTIONS.'section_'.$idContent.'.php';
    if(file_exists($fileContentTemp))
    {
        $fileContent=$fileContentTemp;
    }
    else
    {
        $fileContent=ERR_FILE_NO_EXISTS;
    }
}
?>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/search.css">
</head>
<body>
    <img src="/images/mainImage.jpg" id="mainImage">
    <div id="crutch"></div>
    <div id="topMenu">
        <a href="?id=0"> <img src="/images/logoTor.png"  class="battery">Главная</a>
        <a href="?id=1"> <img src="/images/battery_full.jpg"  class="battery">Игры 2022</a>
        <a href="?id=2"> <img src="/images/battery_mid.jpg"  class="battery"> Игры 2021</a>
        <a href="?id=3"> <img src="/images/battery_low.jpg"  class="battery"> Игры 2020</a>
        <a href="?id=4"> <img src="/images/galka.jpg"  class="battery"></i> Игры на русском</a>
        <a href="?id=5"> <img src="/images/userHead.png"  class="battery">Авторизация</a>
    </div>
        <form id="searcher" action="?id=9.php" method="POST">
        <input type="text" id="searchTexter" name="searchTexter" placeholder="Поиск">
        <button type="submit" id="searchSub">Найти</button>
</form>
<div class="content">
        <?php 
       include($fileContent);
        ?>
    </div>
</body>
    </html>