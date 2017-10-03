<?php
 
/* Задаем переменные */
$name = htmlspecialchars($_POST["service__form_name"]);
$email = htmlspecialchars($_POST["service__form_email"]);
$tel = htmlspecialchars($_POST["service__form_phone"]);
$message = htmlspecialchars($_POST["service__form_message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);
 
/* Ваш адрес и тема сообщения */
$address = "support@gk-soft.ru";
$sub = "Заказ сопровождения";
 
/* Формат письма */
$mes = "Заказ сопровождения с сайта.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Телефон отправителя: $tel
Текст сообщения:
$message";
 
 
if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
 header('Refresh: 5; URL=http://astral.of/service.html');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо отправлено, через 5 секунд вы вернетесь на страницу </body>';}
else {
 header('Refresh: 5; URL=http://astral.of/service.html');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY</body>';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>
<!--
<head>
    <meta charset="utf-8">
    <meta http-equiv='refresh' content='7; url=http://astral.of/service.html'></meta>
</head>    
<p align="center">Ваше сообщение было успешно отправлено!</p>
<p align="center">Если сегодня рабочий день, то в ближайшее время с вами свяжутся.</p>
<p align="center">Если сегодня выходной, то с вами свяжутся в ближайший рабочий день.</p>
<p align="center"><a href="../service.html">Вернуться обратно</a></p>
-->