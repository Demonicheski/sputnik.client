<?php session_start(); 
?>
<?if (!isset($_SESSION['user'])){
    header('Location:../index.php');
}
include 'get-json.php';
print_r($_SESSION['user']['data']); 
?>
<html>
<head>
    <meta charset='utf-8' name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=na, minimal-ui'>
     <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <link rel="stylesheet" type="text/css" href="css/snap.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel='stylesheet' type='text/css' media='screen' href='../css/materialize.css'>
        <title>Личный кабинет</title>
</head>
<body>
<? include 'menu.html';?>
<div class="row">
    <div class="col s12 left-align">
      <div class="card-panel teal" style="border-radius: 10px;">
        <span class="black-text"><h1><?print_r($_SESSION['user']['data']['balance']);?></h1>
        Кредит  <?print_r($_SESSION['user']['data']['credit']);?>
        </span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12 left-align">
      <div class="card-panel teal green" style="border-radius: 10px;">
      <span class="black-text">Лицевой номер: <?print_r($_SESSION['user']['data']['payid']);?>
        </span><br>
        <span>    <?print_r($_SESSION['user']['data']['status']);?>
        </span>
      </div>
    </div>
  </div>
<div class="row">
    <div class="col s12 center-align">
      <div class="card-panel teal" style="border-radius: 10px;">
        <span class="black-text">ФИО: <?print_r($_SESSION['user']['data']['name']);?><br>
        </span>
        <span class="black-text">Адрес: <?print_r($_SESSION['user']['data']['address']);?><br>
        </span>
        <span class="black-text">Телефон: <?print_r($_SESSION['user']['data']['phone']);?><br>
        </span>
        <span class="black-text">Почта: <?print_r($_SESSION['user']['data']['email']);?>
        </span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12 center-align">
      <div class="card-panel teal" style="border-radius: 10px;">
        <span class="black-text">IP: <?print_r($_SESSION['user']['data']['ip']);?><br>
        </span>
        <span class="black-text">Тариф: <?print_r($_SESSION['user']['data']['tariff']);?><br>
        </span>
        <span class="black-text">Цена тарифа: <?print_r($_SESSION['user']['data']['tariff_cost']);?>
        </span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12 center-align">
      <div class="card-panel teal" style="border-radius: 10px;">
        <span class="black-text">Логин: <?print_r($_SESSION['user']['data']['login']);?><br>
        </span>
        <span class="black-text">Пароль: <?print_r("*".substr($_SESSION['user']['data']['password2'], 1,3)."***");?><br>
        </span>
      
      </div>
    </div>
  </div>
<? include 'menu2.html';?>
</body>
</html>

