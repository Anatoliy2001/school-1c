<?php

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['imya'];
$textmsg = $_POST['text'];
$email = $_POST['email'];


$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = '1c_lessonmail@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'ZEzcX3JeBBk0ajjMNpkU'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('a0758860'); // от кого будет уходить письмо?
$mail->addAddress('xacelar194@octovie.com');     // Кому будет уходить письмо 

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' . $name . ' оставил заявку, его сообщение ' . $textmsg . '<br>Почта этого пользователя: ' . $email;
$mail->AltBody = '';

if (!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
