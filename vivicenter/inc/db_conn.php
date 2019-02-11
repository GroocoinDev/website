<?php
    $dev = false;    

    // 개발용 모드
    if($_SERVER["HTTP_HOST"] == "localhost") {
        $dev=true;
    } else {
        $dev=false;
    }

    $mysql_hostname = "rds.groo.io";
    $mysql_user = "groocoin";
    $mysql_password = "Grooming9999!";

    if(!$dev) {
        $mysql_database = "vivi_screen";
    } else {
        $mysql_database = "vivi_screen";
    }

	$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");
	mysqli_select_db($db, $mysql_database) or die("db connect error");

	mysqli_query($db, "set session character_set_connection=utf8;");
	mysqli_query($db, "set session character_set_results=utf8;");
	mysqli_query($db, "set session character_set_client=utf8;");

	// 개발용이면서 API가 아닌경우
	if($dev && strpos($request_uri, "/api/") < 0)
		echo "<div style='background:red; z-index:9999; position:absolute; left:0px; top:0px;'>개발 모드입니다.</div>";

?>
