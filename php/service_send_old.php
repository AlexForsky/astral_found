<?php 
/* Осуществляем проверку вводимых данных и их защиту от враждебных 
скриптов */
$your_name = htmlspecialchars($_POST["service__form_name"]);
$your_phone = htmlspecialchars($_POST["service__form_phone"]);
$your_name = urldecode($_POST["service__form_name"]);
$your_phone = urldecode($_POST["service__form_phone"]);
$your_email = htmlspecialchars($_POST["service__form_email"]);
$your_email = urldecode($_POST["service__form_email"]);
$your_message = htmlspecialchars($_POST["service__form_message"]);
$your_message = urldecode($_POST["service__form_message"]);

/* Устанавливаем e-mail адресата */
$myemail = "aa_a@bk.ru, unp@gk-soft.ru";

/* Проверяем заполнены ли обязательные поля ввода, используя check_input 
функцию */

$your_name = check_input($_POST["service__form_name"], "Введите ваше имя!");
$your_email = check_input($_POST["service__form_email"], "Введите ваш e-mail!");
$your_phone = check_input($_POST["service__form_phone"], "Введите ваш телефон!");


/* Добавляем дату сообщения */
$date_today = date("d.m.y H:i");

/* Создаем сообщение */
$message_to_myemail = "Здравствуйте! 
Поступила заявка на обслуживание программ 1С. 
Имя отправителя: $your_name 
Электронная почта: $your_email
Телефон: $your_phone
Текст сообщения: $your_message
Дата отправки: $date_today 
Конец";
$from  = "От кого: сайт GK-SOFT.RU \r\n ";
$subject = "Запрос со страницы 1С-Ообслуживание";
$subject = iconv("utf-8", "windows-1251", $subject);
$message_to_myemail = iconv("utf-8", "koi8-r", $message_to_myemail);
$from = iconv("utf-8", "koi8-r", $from);

/* Отправляем сообщение, используя mail() функцию */
mail($myemail, $subject, $message_to_myemail, $from);

 ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv='refresh' content='7; url=http://astral.gk-soft.ru/service.html'></meta>
</head>    
<p align="center">Ваше сообщение было успешно отправлено!</p>
<p align="center">Если сегодня рабочий день, то в ближайшее время с вами свяжутся.</p>
<p align="center">Если сегодня выходной, то с вами свяжутся в ближайший рабочий день.</p>
<p align="center"><a href="../service.html">Вернуться обратно</a></p>
<?php
/* Если при заполнении формы были допущены ошибки сработает 
следующий код: */
function check_input($data, $problem = "")
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}
function show_error($myError)
{
?>
<html>
<body>
<p>Пожалуйста исправьте следующую ошибку:</p>
<?php echo $myError; ?>
</body>
</html>
<?php
exit();
}
?> 


<!--
<?php
 
/* Задаем переменные */
$name = htmlspecialchars($_POST["service__form_name"]);
$email = htmlspecialchars($_POST["service__form_email"]);
$tel = htmlspecialchars($_POST["service__form_phone"]);
$message = htmlspecialchars($_POST["service__form_message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);
$date_today = date("d.m.y H:i"); 
/* Ваш адрес и тема сообщения */
$address = "aa_a@bk.ru";
$sub = "Заказ сопровождения";
 
/* Формат письма */
$mes = "Заказ сопровождения с сайта.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Телефон отправителя: $tel
Текст сообщения:
$message
Дата отправки: $date_today";
 
 
if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
 header('Refresh: 5; URL=http://u91084b2.beget.tech/samples/astral/service.html');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо отправлено, через 5 секунд вы вернетесь на страницу </body>';}
else {
 header('Refresh: 5; URL=http://u91084b2.beget.tech/samples/astral/service.html');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY</body>';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>


-->