<meta http-equiv='refresh' content='0; url=ok.html'>
<meta charset="UTF-8" />
<?php

/* Тема сообщения */
$sub = "Заявка с сайта рядъ.рф";


$Phone= $_POST['Phone'];
$Name= $_POST['Name'];



$emailTo = 'zakaz@xn--d1ax5as.xn--p1ai'; //Сюда введите Ваш email

$body = "Телефон: $Phone  \n\n Имя : $Name";
$headers = "Content-Type: text/plain; charset=utf-8\r\n".'From: Заявка с сайта рядъ.рф <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $emailTo;
mail($emailTo, $sub, $body, $headers);
$emailSent = true;

?>