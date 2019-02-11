<?php
	session_start();
	
	if($_SESSION['USER_DIV'] != "S" && $_SESSION['USER_DIV'] != "A") {
		header("Location: login.html");
		exit;
	}
?>