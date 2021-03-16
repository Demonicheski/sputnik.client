<?php session_start(); ?>
<html>
<head>
    <meta charset='utf-8' name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=na, minimal-ui'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='materialize/css/materialize.css'> -->
     <!-- <script src='materialize/js/materialize.js'></script>  -->
     <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <link rel="stylesheet" type="text/css" href="../css/snap.css" />
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel='stylesheet' type='text/css' media='screen' href='../css/materialize.css'>
        <script src="../js/jquery-3.2.1.min.js"></script>
        <title>Подключение</title>
</head>
<body>
<? include '../menu.html';?>
<div class="ConnectForm">
<form style="width:100%" action="mailConn.php" method="POST">
<input class="validate" type="text" name="FIO" style="width:100%" placeholder="Введите ФИО*" required><br>
<input name="telefon" class="validate" type="tel" style="width:100%" placeholder="Введите номер телефона*" required><br>
<select required name="Selname">
      <option value="0" disabled selected>Укажите ваш адрес</option>
      <option value="кв-л Железнодорожный">кв-л Железнодорожный</option>
      <option value="кв-л Гвардейский">кв-л Гвардейский</option>
      <option value="кв-л Шахтерский">кв-л Шахтерский</option>
      <option value="кв-л Северный">кв-л Северный</option>
      <option value="кв-л Строитель(К7)">кв-л Строитель(К7)</option>
      <option value="кв-л Химик">кв-л Химик</option>
      <option value="кв-л Металлург">кв-л Металлург</option>
      <option value="кв-л Комсомольский">кв-л Комсомольский</option>
      <option value="ул. Руднева">ул. Руднева</option>
      <option value="ул. Бульвар 8 сентября">ул. Бульвар 8 сентября</option>
      <option value="ул. Ленина">ул. Ленина</option>
      <option value="ул. Цеулковского">ул. Цеулковского</option>
      <option value="ул. Депутатская">ул. Депутатская</option>
    </select> 

    <div style="width:100%; display:flex;">
        <div style="width:40%; display:flex;  margin-right:20%;">
          <input placeholder="№ дома*"  type="text" class="validate" name="dom" required>
          
        </div>
        <div style="width:40%; display:flex">
          <input placeholder="№ квартиры" type="text" class="validate" name="kvart">
          
        </div>
</div>

    <select required name="typec">
      <option value="0" disabled selected>Выберете тип подключения</option>
      <option value="Интернет">Интернет</option>
      <option value="Кабельное">Кабельное</option>
    </select>
    <p></p>
    
          <textarea id="textarea1" class="materialize-textarea" placeholder="Примечание при подклюении" name="msgp"></textarea>
        


<button name="submit" type="submit" class="btn waves-effect waves-light" style="width:100%">Отправить</button>

</form>
</div>
<? include '../menu2.html';?>
</body>
</html>