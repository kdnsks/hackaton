<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'healthylation');
	mysqli_query($connect, "INSERT INTO user (name, surname, phone, birth, mail, password) VALUES ('" . $_POST['name'] . "','" . $_POST['surname'] . "', '" . $_POST['phone'] . "', '" . $_POST['birth'] . "', '" . $_POST['mail'] . "', '" . $_POST['password'] . "')");
	mail($_POST['mail'], 'Регистрация на сайте healthylation.com', 'Вы успешно зарегистрировались на сайте healthylation.com. Ваш login:' . $_POST['nickname'] . ' и пароль ' . $_POST['password'] . '');
	header('Location: http://healthylation/check.php');
?>