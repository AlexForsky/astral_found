
<?php
 
/* Задаем переменные */
$name = htmlspecialchars($_POST["service__form_name"]);
$name = urldecode($_POST["service__form_name"]);
$email = htmlspecialchars($_POST["service__form_email"]);
$email = urldecode($_POST["service__form_email"]);
$tel = htmlspecialchars($_POST["service__form_phone"]);
$tel = urldecode($_POST["service__form_phone"]);
$message = htmlspecialchars($_POST["service__form_message"]);
$message = urldecode($_POST["service__form_message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);
$spam = htmlspecialchars($_POST["service__form_spam"]);
$spam = urldecode($_POST["service__form_spam"]);
$date_today = date("d.m.y H:i"); 
/* Ваш адрес и тема сообщения */
$address = "ea@gk-soft.ru, unp@gk-soft.ru";
$sub = "Вопрос по доп. услугам";
$sub = iconv("utf-8", "windows-1251", $sub);

 
/* Формат письма */
$mes = "Вопрос по доп. услугам.\n
Имя отправителя: $name \n
Электронный адрес отправителя: $email \n
Телефон отправителя: $tel \n
Текст сообщения: \n
$message \n
Дата отправки: $date_today";
$mes = iconv("utf-8", "koi8-r", $mes);

 
if (empty($bezspama) && $spam == 8) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
$from = iconv("utf-8", "windows-1251", $from);
if (mail($address, $sub, $mes, $from)) {
 header('Refresh: 5; URL=http://gk-soft.ru/dopuslugi.html');
 echo '<head>
    <meta http-equiv="refresh" content="5; URL=http://gk-soft.ru/dopuslugi.html"/><meta charset="utf-8"/></head>
    <body>Письмо отправлено, через 5 секунд вы вернетесь на страницу Дополнительных услуг</body>';}
else {
 header('Refresh: 5; URL=http://gk-soft.ru/dopuslugi.html');
 echo '<head>
    <meta http-equiv="refresh" content="5; URL=http://gk-soft.ru/dopuslugi.html"/><meta charset="utf-8"/></head>
    <body>Письмо отправлено, через 5 секунд вы вернетесь на страницу Дополнительных услуг</body>';}
}
 /* Выход без сообщения, если поле bezspama заполнено спам ботами */ else {
 header('Refresh: 5; URL=http://gk-soft.ru/dopuslugi.html');
 echo '<head>
    <meta http-equiv="refresh" content="5; URL=http://gk-soft.ru/dopuslugi.html"/><meta charset="utf-8"/></head>
    <body>Письмо не отправлено, неверно заполнены поля для запроса, возможно вы спам-бот.</body>';}
?>

