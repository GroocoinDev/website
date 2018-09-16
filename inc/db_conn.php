<?php
	$mysql_hostname = "rds.groo.io";
	$mysql_user = "groocoin";
	$mysql_password = "Grooming9999!";
	$mysql_database = "groocoin";
    
	$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");
	mysqli_select_db($db, $mysql_database) or die("db connect error");

	mysqli_query($db, "set session character_set_connection=utf8;");
	mysqli_query($db, "set session character_set_results=utf8;");
	mysqli_query($db, "set session character_set_client=utf8;");
?>
