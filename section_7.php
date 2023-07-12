<?php
session_start();
$host='localhost';
$database='mariagames';
$user='root';
$password='';
$login=$_SESSION["username"];
$link = mysqli_connect($host, $user, $password, $database) 
    or die(mysqli_error($link));
    $query="SELECT * FROM `users` WHERE `login`='$login'";
    $result= mysqli_query($link,$query) or die(mysqli_error($link));
    while ($row=mysqli_fetch_assoc($result))
    {
       echo "<div id='profile'>Логин : <a>",$row["login"],"</a><br>Имя: <a>",$row["name"],"</a><br> Почта: <a>",$row["email"],"</a><br><a href='index.php?id=5'>Выход</a></div>";
    }
?>