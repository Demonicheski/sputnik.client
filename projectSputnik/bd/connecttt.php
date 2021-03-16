<?php
$host = 'localhost'; // адрес сервера 
$database = 'serty'; // имя базы данных
$userbd = 'root'; // имя пользователя
$passwordbd = ''; // пароль
$link = mysqli_connect($host, $userbd, $passwordbd, $database) 
or die("Ошибка " . mysqli_error($link));
// выполняем операции с базой данных
//mysqli_close($link); // закрываем подключение
?>