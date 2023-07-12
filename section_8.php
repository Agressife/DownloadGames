<?php
session_start();
$host='localhost';
$database='mariagames';
$user='root';
$password='';
$text=$_POST["searchTexter"];
$iders=array();
$link = mysqli_connect($host, $user, $password, $database) 
    or die(mysqli_error($link));
    $query="SELECT * FROM `games` WHERE `id`= '$text'";
    $result=mysqli_query($link,$query) or die(mysqli_error($link));
    while ($row=mysqli_fetch_assoc($result))
    {
        if($_SESSION["username"])
        {
         echo "<div id='fullGame'><p>",$row["gameName"],"</p><img src='",$row["imageUrl"],"' class='fullgameImage'><div class='fullDesc'>",$row["description"],"</div><br>Дата выпуска: ",$row["dateOut"],"<br>Жанр: ",$row["genre"],"<br>Версия: ",$row["version"],"<br>Язык интерфейса: ",$row["lang"],"<br>",$row["videoHtml"],"<br><br><a target='_blank'class='torrentButton' href='",$row["torrentUrl"],"'>Скачать торрент</a></div>";       
        }
        else
        {
        echo "<div id='fullGame'><p>",$row["gameName"],"</p><img src='",$row["imageUrl"],"' class='fullgameImage'><div class='fullDesc'>",$row["description"],"</div><br>Дата выпуска: ",$row["dateOut"],"<br>Жанр: ",$row["genre"],"<br>Версия: ",$row["version"],"<br>Язык интерфейса: ",$row["lang"],"<br>",$row["videoHtml"],"<br><br><a target='_blank'class='torrentButton' href='?id=5'>Войдите в аккаунт, чтобы скачать игру</a></div>";
        }
    }
?>