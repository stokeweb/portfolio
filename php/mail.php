<?php
    require 'class.phpmailer.php';
    require 'class.smtp.php';
    $mail = new PHPMailer;
    $mail->CharSet = "utf-8";

    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $text = $_POST['user_text'];

    $mail->isSMTP();
    $mail->Host = 'smtp.mail.ru';
    $mail->SMTPAuth = true;
    $mail->Username = 'stokeweb@mail.ru';
    $mail->Password = 'MMMore19861';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('stokeweb@mail.ru');
    $mail->addAddress('stokeweb@gmail.com');
    $mail->isHTML(true);

    $mail->Subject = 'Текст с сайта';
    $mail->Body = " Имя $name . Емэйл $email . Текст $text";

    if(!$mail->send()){
        echo 'Error';
    } else {
    echo '<script> alert ("Ваше сообщение отправлено"); window.location="http://mail2.ru/"; </script>';
}

?>