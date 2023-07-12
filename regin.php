<?php
  $host='localhost';
$database='mariagames';
$user='root';
$password='';
$link = mysqli_connect($host, $user, $password, $database) 
    or die(mysqli_error($link));
    $username=$_POST["regName"];
    $login=$_POST["regLogin"];
    $email=$_POST["regMail"];
    $password=$_POST["regPass"];
    $rep_password=$_POST["regRep"];
    $checker=mysqli_query($link,"SELECT * FROM `users` WHERE `login`='$login' OR `email`='$email'");
    if(mysqli_num_rows($checker) == 0)
    {
        if($password==$rep_password)
        {
            session_start();
            $sql="INSERT INTO `users`(`id`,`login`,`name`,`password`,`email`) VALUES (null,'$login','$username','$password','$email')";
            mysqli_query($link, $sql);
            $_SESSION["username"]=$login;
            header('Location: ../index2.php');
                    exit;
        }
        else
        {         
            sesson_start();
            $_SESSION['messager'] = 'Повтор пароля неверный!';
            header('location:' . $_SERVER['HTTP_REFERER']);
            exit;
        }
    }
    else
    {
        sesson_start();
        $_SESSION['messager'] = 'Пользователь с таким логином или почтой уже зарегестрирован!<a href="?id=5">Войти</a>';
            header('location:' . $_SERVER['HTTP_REFERER']);
            exit;
    }
?>