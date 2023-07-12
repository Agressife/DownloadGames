<?php
$host='localhost';
$database='mariagames';
$user='root';
$password='';
$link = mysqli_connect($host, $user, $password, $database) 
    or die(mysqli_error($link));
    $query="SELECT * FROM `games` WHERE `dateOut` >= '2022-01-01' AND `dateOut` <= '2022-12-30'";
    $result= mysqli_query($link,$query) or die(mysqli_error($link));
    while ($row=mysqli_fetch_assoc($result))
    {
        echo "<div class='gameShower'><img src='",$row["imageUrl"],"' class='gameImager'><form class='formShower' method='POST' action='?id=8.php'><input type='text' name='searchTexter' style='display:none;'value='",$row["id"],"'><button type='submit' class='gameSub'><a>",$row["gameName"],"</a></button></form><div class='descShower'>",$row["description"],"</div></div>";
    }
?>