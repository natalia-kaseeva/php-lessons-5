<?php 

if (!empty($_POST)) {
	
	$message="Вам пришло новое сообщение с сайта: \n"
	."Имя отправителя: ". $_POST['userName'] . "\n"
	. "Email отправителя: ".  $_POST['userEmail'] . "\n"
	. "Сообщение: \n  " . $_POST['message'];

	$headers="From: info@student.ru";
	$to="nataliakasss@yandex.ru";
	$subject="Сообщение с сайта";

	$resultMail=mail($to, $subject, $message, $headers);

	if ($resultMail) {
		//echo "Сообщение отправлено успешно!";
		header("Location:success.html");
		exit();
	} else {
		echo "Что то пошло не так. Письмо не отправлено.";
	}
}

 ?>

 <form action="index.php" method="post">
	<input type="text" name="userName" placeholder="Ваше имя"><br>
	<input type="text" name="userEmail" placeholder="Ваш Email"><br>
	<textarea name="message" id="" cols="30" rows="10" placeholder="Сообщение"></textarea><br>
	<input type="submit" value="Отправить форму!">
</form>