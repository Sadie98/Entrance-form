<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Форма входа</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" rev="stylesheet" type="text/css" href="styles.css"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script type="text/javascript" src="validation.js"></script>
</head>
<body>
<div id="container">
    <h1>
        Вход
    </h1>
    <form name='form' method="post" action="">
        <p class="name">
            <input type="text" name="name" id="name1" required placeholder="Логин"/>
        </p>
        <p class="password">
            <input type="password" name="password" required placeholder="Пароль"/>
        </p>
        <p class="tel">
            <input type="tel" id="tel" name="phone" required placeholder="Номер телефона"/>
            <div id="valid"></div>
        </p>
        <p class="send" align="center">
            <input type="submit" name="submit" value="Войти" onClick="return checkSubmitStatus()"/>
        </p>
    </form>
    <?php
    #session_start();
    $user = "user";
    $pass = "password";
    if (!empty($_POST["submit"])) {
        if ($user == $_POST["name"] AND $pass == $_POST["password"]) {
            header("Location: entered.html");
        } else echo '<div class="bad">Логин или пароль неверны!</div>';
    }
    ?>
</div>
</body>
</html>
