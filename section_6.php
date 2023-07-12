<form id="logForm" action="regin.php" method="POST">
<img src="/images/userHead.png" id="boyHead">
    <br>
    <p>Ваше имя</p>
    <input type="text" id="regName" name="regName" required pattern="[A-ZА-Я]{1}[a-zа-я]{1,25}" title="Имя должно начинаться с заглавной буквы русского или латинского алфавита и быть длиной не менее 2 символов">
    <p>Ваш e-mail</p>
    <input type="email" id="regMail" name="regMail"  required>
    <br>
    <p>Ваш логин</p>
    <input type="text" id="regLogin" name="regLogin" required pattern="[a-z]{4,15}" title="Логин должен быть длиной от 4 до 15 символов и состоять из латинских символов в нижнем регистре">
    <br>
    <p>Пароль</p>
    <input type="text" id="regPass" name="regPass" required pattern="[A-Za-z0-9]{6,25}"title="Пароль должен быть длиной не менее 6 символов и состоять из латинских символов в любом регистре и цифр">
    <p>Повторить пароль</p>
    <input type="text" id="regRep" name="regRep" required>
    <br>
    <br>
    <button type="submit" id="logSub">Зарегистрироваться</button>
    <br>
    <br>
    <a id="logReg" href="?id=5">Уже есть аккаунт? Войти</a>
    <br>
    <?php
    session_start();
     echo '<p class="errorer"> ' . $_SESSION['messager'] . ' </p>';
            if ($_SESSION['messager']) {
                echo '<p class="errorer"> ' . $_SESSION['messager'] . ' </p>';
            }
            unset($_SESSION['messager']);
        ?>
</form>