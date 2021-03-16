<?php session_start(); ?>
<?if (isset($_SESSION['user'])){
    header('Location:../mypage.php');}?>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=na, minimal-ui'>
<link rel='stylesheet' type='text/css' media='screen' href='../css/materialize.css'>
<script src='../js/materialize.js'></script>
</head>
<body>
<div class="Fullform">
<img class="logo" src="../images/main/logovert.png"  alt="Responsive image">
<form style="width:100%" action="mypage.php" method="POST">
<input class="validate" type="text" name="login" style="width:100%" pattern="^[a-zA-Z\0-9\-\_]+$" placeholder="Введите логин" required><br>
<input name="password" id="password" class="validate" type="password" style="width:100%" placeholder="Введите пароль" required><br>
<input name="do_signin" type="submit" class="btn waves-effect waves-light" value="Войти"><p></p>
<button name="loginWOut" type="button" class="btn waves-effect waves-light blue"><a href="../Content/news.php" style="color: #000000;width:100%">Без авторизации</a></button>
</form>
</div>
</body>
</html> 