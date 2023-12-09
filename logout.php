<?php
	unset($_COOKIE['id']);
	unset($_COOKIE['login']);
	setcookie('id','',-10000);
	setcookie('login','',-1000);
	header('Location:' . 'http://tornado/login.php');