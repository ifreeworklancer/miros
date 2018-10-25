<?php

if (isset($_POST['name']) && isset($_POST['email'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$package = $_POST['package'];

	$to = 'admin@alterrafin.com';
	$subject = 'Форма заявки с лендинга для Мирос';

	$message = "
    <html>
        <head>
        <title>{$subject}</title>
        <style>body{font: normal 1rem/1.5 sans-serif;}</style>
        </head>
        <body>
        <h2>Заявка от {$name}</h2>
        <p>Email: {$email}</p>
        <p>Телефон: {$phone}</p>
        <p>Пакет: {$package}</p>";

    $message .= "
        </body>
        </html>
    ";
	$headers = 'From: info@acrnm.pro' . "\r\n" .
			   'Reply-To: ' . $email . "\r\n" .
			   'X-Mailer: PHP/' . phpversion();
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	mail($to, $subject, $message, $headers);

	 header('Location: /thanks.php');
}
