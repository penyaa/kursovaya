<?php

/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);


/* Ваш адрес и тема сообщения */
$address = "disa1144@gmail.com";
$sub = "Сообщение с сайта http://kursovaya/index.php";

/* Формат письма */
$mes = "Сообщение с сайта http://kursovaya/index.php.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Текст сообщения:
$message";

{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
	header('Refresh: 5; URL=http://kursovaya/index.php');
	echo '
    
    Письмо отправлено, через 5 секунд вы вернетесь на страницу http://kursovaya/index.php';}
else {
	header('Refresh: 5; URL=http://kursovaya/index.php');
	echo '
    
    Письмо не отправлено, через 5 секунд вы вернетесь на страницу http://kursovaya/index.php';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>





