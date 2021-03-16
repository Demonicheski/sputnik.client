
<?php
if (!isset($_SESSION['user']))
{
  

$login = $_POST["login"];
$password = $_POST["password"];

$errors = array();

if ( trim($login) == '' )
{
	$error[] = 'Login == Null!';
}

if ( $password == '' )
{
	$error[] = 'Password == Null!';
}


if ( empty($errors) )
{
	
	// Подготовка запроса

	$url = 'http://sputniktv.hldns.ru/sputnik/method/Auth.php?ulogin=*&password=*&v=3.1&getInfo=true';

	$url .= "?ulogin=" . $login;
	$url .= "&upassword=" . $password;

	
	 
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);

	// Получение данных с сервера
	$output = curl_exec($ch);
	
	

	// Парсинг Json документа
	$data = json_decode($output,true);

	// Отображение данных
	 
	$_SESSION = $data;
	// $_SESSION['user']['passs']=$password;
	
}
}?>
