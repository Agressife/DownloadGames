<?php
  session_start();
  $host='localhost';
$database='mariagames';
$user='root';
$password='';
$login=$_POST["logLogin"];
$passwd=$_POST["logPass"];
$link = mysqli_connect($host, $user, $password, $database) 
    or die(mysqli_error($link));
    $checker=mysqli_query($link,"SELECT * FROM `users` WHERE `login`='$login' AND `password`='$passwd'");
    if(mysqli_num_rows($checker) == 0)
    {
      $_SESSION["messager"]="Неверный логин или пароль!";
      header('Location:'. $_SERVER['HTTP_REFERER']);
    }
    else
    {
      $_SESSION["username"]=$login;
      header('Location: ../index2.php');
      exit;
    }
?>