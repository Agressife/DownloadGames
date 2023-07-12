<html>
<form id="logForm" action="login.php" method="POST">
<img src="/images/userHead.png" id="boyHead">
    <br>
    <p>Ваш логин</p>
    <input type="text" id="logLogin" name="logLogin" required>
    <p>Пароль</p>
    <input type="password" id="logPass" name="logPass" required>
    <br>
    <br>
    <button type="submit" id="logSub">войти</button>
    <br>
    <br>
    <a id="logReg" href="?id=6">Нет аккаунта?Регистрация</a>
    <br>
    <?php
            if ($_SESSION['messager']) {
                echo '<p class="errorer"> ' . $_SESSION['messager'] . ' </p>';
            }
            unset($_SESSION['messager']);
        ?>
</form>
</html>
<?php
unset($_SESSION["username"]);
?>