<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'healthylation');
		$result = mysqli_query($connect, "SELECT * FROM user WHERE mail = '" . $_POST['mail'] . "' AND password = '" . $_POST['password'] . "'");
		$r = $result->fetch_assoc();
		if($result->num_rows==0){
		header('Location: http://healthylation/check.php?error="ошибка"');
	}else{
		header('Location: http://healthylation/index.php?id=' . $r['id'] . '');
	}
?>