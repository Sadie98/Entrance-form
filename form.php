
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Форма входа</title>
</head>

<body>
<?php
    session_start();
?>
<div id="container">
    <h1>
        Вход
    </h1>
    <form class="mainform" method="post">
        <link rel="stylesheet" rev="stylesheet" type="text/css" href="styles.css"  />
        <p class="name">
            <input type="text" name="name" value="Имя пользователя" onblur="if(this.value.length == 0) this.value = 'Имя пользователя'" onfocus="if(this.value == 'Имя пользователя') this.value = '' "/>
        </p>
        <link rel="stylesheet" rev="stylesheet" type="text/css" href="styles.css"  />
        <p class="email">
            <input type="text" name="email" value="yourEmail@example.com" onblur="if(this.value.length == 0) this.value = 'yourEmail@example.com'" onfocus="if(this.value == 'yourEmail@example.com') this.value = '' "/>
        </p>
        <link rel="stylesheet" rev="stylesheet" type="text/css" href="styles.css"  />
        <p class="password" >
            <input type="password" name="password" value="•••••••" onblur="if(this.value.length == 0) this.value = '•••••••'" onfocus="if(this.value == '•••••••') this.value = '' "/>
        </p>
        <p class="send" align="center">
            <input type="submit" name="submit" value="Войти"  />
        </p>
        <?php
        $user = "user";
        $pass = "password";
        if(!empty($_POST["submit"])){
            if($user == $_POST["name"] AND $pass == $_POST["password"]){
                header("Location: http://localhost:63343/test_task/entered.html");
            }else echo '<bad>Логин или пароль неверны!</bad>';
        }
        ?>

    </form>
</div>
</body>

</html>