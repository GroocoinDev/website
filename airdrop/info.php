<?php
	header("Content-Type: application/json;charset=utf-8");

	include_once("../inc/db_conn.php");
	$action = $_GET['action'];

	switch ($action) {
		case "login":
			$kakao_id=addslashes($_REQUEST['kakao_id']);
			$refferal=addslashes($_REQUEST['refferal']);

			$sql = "SELECT * FROM event_roulette_kakao
					WHERE KAKAO_ID = ". $kakao_id;
			$result=mysqli_query($db,$sql);

			if(mysqli_num_rows($result) == 0) {
				// 가입시켜주기
				
				$sql = "INSERT INTO event_roulette_kakao (
						ID
						, KAKAO_ID
						, ETHADDRESS
						, GROOCOIN
						, TRYCOUNT
						, REFFERAL
					) VALUES (
						null
						, '". $nickname ."'
						, '". $kaccount_email ."'
						, SYSDATE()
						, '". $kaccount_id ."'
						, '". $kaccount_email_verified ."'
						, '". $thumbnail_image ."'
						, '". $profile_image ."'
						, '". $access_token ."'
					)";

				//echo $sql; exit;
				$result=mysqli_query($db,$sql);
				if($result == 0) $success = false;
				
				$rootObj->trycount = 0;
				$rootObj->groocoin = 0;
			} else {
				$user = mysqli_fetch_array($result);
				$rootObj->groocoin = $user['GROOCOIN'];
				$rootObj->trycount = $user['TRYCOUNT'];
			}
			break;
	}

	$jsonData = json_encode($rootObj);
	echo $jsonData;
?>