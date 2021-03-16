<?php session_start(); 
if (!isset($_SESSION['user']))
{
// Создаём функцию для удобочитаемого var_dump'a
function pre_var_dump($arr){
    echo '<pre>';
    var_dump($arr);
    echo '</pre>';
}
// Создаём функцию для отправки запроса
function Auth($login, $password)
{
    $errors = array();
    if (trim($login) == '') {
        $error[] = 'Login == Null!';
    }
    if ($password == '') {
        $error[] = 'Password == Null!';
    }
    if (empty($errors)) {
        // Подготовка запроса
        $url = 'http://sputniktv.hldns.ru/sputnik/method/Auth.php?&v=3.1&getInfo=true';
        $url .= "&ulogin=" . $login;
        $url .= "&upassword=" . $password;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        // Получение данных с сервера
        $output = curl_exec($ch);
        $data = json_decode($output, true);
        return $data["response"];
       
    }
    return $errors;
}
// Записываем в переменные полученные данные из GET или POST запроса
$login = (isset($_GET["login"])) ? $_GET["login"] : $_POST["login"];
$password = (isset($_GET["password"])) ? $_GET["password"] : $_POST["password"];
// Выполняем запрос и записываем ответ в $user
$user = Auth($login, $password);
// Обрабатываем данные
if($user['count'] > 0) {
    // Авторизация успешна
    // Сохраняем полученные данные
    $_SESSION['user'] = $user;
	$_SESSION['user']['data']['password2'] = $password;
    // Отображение данных
    // Вывести данные из массива $data
  //  echo '<p>Номер телефона: ' . $user['data']['phone'] . '</p>';
    // Вывсети данные из массива $_SESSION
  //  echo "Адрес: " . $_SESSION['user']['data']['address'];
    // Вывести содержимое массива $data
  //  pre_var_dump($user);
}
else{
	echo 'Ошибка авторизации!';
	header('Location:../index.php');
}
}
?>
