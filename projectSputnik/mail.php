<?php 
if(isset($_POST['submit'])){
/* Указываем переменные, в которые будет записываться информация с формы */
$first_name = $_POST['Feed_name'];
$email = $_POST['Feed_email'];
$phone = $_POST['Feed_number'];
$message = $_POST['Feed_msg'];
$subject = "Техической поддержке Спутника";
     
/* Проверка правильного написания e-mail адреса */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
 echo '<script language="javascript">';
echo 'alert("<br /> Е-mail адрес не существует")';
echo '</script>';
}
$to = "bloodingg@gmail.com"; // Здесь нужно написать e-mail, куда будут приходить письма  
$from = "bloodingg@gmail.com"; // Здесь нужно написать e-mail, от кого будут приходить письма
/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
$mail_to_myemail = "Здравствуйте! 
Было отправлено сообщение с сайта! 
Имя отправителя: $first_name
E-mail: $email
Номер телефона: $phone
Текст сообщения: $message
Чтобы ответить на письмо, создайте новое сообщение, скопируйте электронный адрес и вставьте в поле Кому.";  
$headers = "From: $from \r\n";
/* Отправка сообщения, с помощью функции mail() */
mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
echo "<br /><br /><a href='feedback.php'>Вернуться на сайт.</a>";
}
?>
<!--Переадресация на главную страницу сайта, через 2 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="feedback.php");}
window.setTimeout("changeurl();",2000);
</script>