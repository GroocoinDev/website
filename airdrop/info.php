<?php
	header("Content-Type: application/json;charset=utf-8");

	include_once("../inc/db_conn.php");
	$action = $_GET['action'];

	switch ($action) {
		case "login":
			$success = true;
			$result = mysqli_query($db,"SET AUTOCOMMIT=0");
			$result = mysqli_query($db,"BEGIN");
			
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
						, FRIEND
						, CREATE_DATETIME
					) VALUES (
						null
						, '". $kakao_id ."'
						, NULL
						, 0
						, 0
						, '". $refferal ."'
						, 0
						, SYSDATE()
					)";
				
				$result=mysqli_query($db,$sql);
				if($result == 0) $success = false;
				
				if($refferal != $kakao_id) {
					$sql="UPDATE event_roulette_kakao SET
								FRIEND = FRIEND + 1
								WHERE KAKAO_ID = '". $refferal ."'";
					$result=mysqli_query($db,$sql);
					if($result == 0) $success = false;
				}
				
				// 트렌젝션 끝
				if($success) {
					$result = mysqli_query($db,"COMMIT");
					$rootObj->isSuccess = true;
				} else {
					$result = mysqli_query($db,"ROLLBACK");
					$rootObj->isSuccess = false;
					$rootObj->reason = "서버 오류";
					$jsonData = json_encode($rootObj);
					echo $jsonData;
					exit;
				}
				
				$rootObj->trycount = 0;
				$rootObj->groocoin = 0;
				$rootObj->friend = 0;
				$rootObj->ethaddress = null;
			} else {
				$user = mysqli_fetch_array($result);
				$rootObj->isSuccess = true;
				$rootObj->groocoin = $user['GROOCOIN'];
				$rootObj->trycount = $user['TRYCOUNT'];
				$rootObj->friend = $user['FRIEND'];
				$rootObj->ethaddress = $user['ETHADDRESS'];
			}
			break;
			
		case "spin":
			$success = true;
			$result = mysqli_query($db,"SET AUTOCOMMIT=0");
			$result = mysqli_query($db,"BEGIN");
			
			$kakao_id=addslashes($_REQUEST['kakao_id']);

			$sql = "SELECT * FROM event_roulette_kakao
					WHERE KAKAO_ID = ". $kakao_id;
			$result=mysqli_query($db,$sql);
			$user = mysqli_fetch_array($result);
			
			// 가입전 유저(ERR)
			$rootObj->isSuccess = false;
			$rootObj->reason = "룰렛 이벤트는 종료되었습니다.";
			$jsonData = json_encode($rootObj);
			echo $jsonData;
			exit;

			if(mysqli_num_rows($result) == 0) {
				// 가입전 유저(ERR)
				$rootObj->isSuccess = false;
				$rootObj->reason = "로그인 유저가 아닙니다.";
				$jsonData = json_encode($rootObj);
				echo $jsonData;
				exit;
				
			} else if($user['TRYCOUNT'] > 5) {
				// 최대 5번
				$rootObj->isSuccess = false;
				$rootObj->reason = "룰렛 이벤트는 최대 6회 참여 가능합니다.";
				$jsonData = json_encode($rootObj);
				echo $jsonData;
				exit;
				
			} else if($user['TRYCOUNT'] > 0 && $user['FRIEND'] <= $user['TRYCOUNT']-1) {
				// 초대자보다 참여횟수가 적어야함 (ERR)
				$rootObj->isSuccess = false;
				$rootObj->reason = "친구 초대시 추가로 1회 참여 가능합니다.";
				$jsonData = json_encode($rootObj);
				echo $jsonData;
				exit;
				
			} else {
				// 확률 계산
				$rndNum = mt_rand(1, 1000);
				$angle = 2520;
				
				if ($rndNum > 0 and $rndNum <= 300) {
					// 1 ~ 300 (30%)
					$groocoin = 500;
					$angle = $angle + mt_rand(90, 135);
					
				} else if ($rndNum > 700 and $rndNum <= 1000) {
					// 700 ~ 1000 (30%)
					$groocoin = 500;
					$angle = $angle + mt_rand(180, 225);
					
				} else if ($rndNum == 401) {
					// 0.1%
					$groocoin = 20000;
					$angle = $angle + mt_rand(315, 360);
					
				} else if ($rndNum == 402 or $rndNum == 403 or $rndNum == 404) {
					// 0.3%
					$groocoin = 10000;
					$angle = $angle + mt_rand(135, 180);
					
				} else if ($rndNum > 450 and $rndNum <= 550) {
					// 451 ~ 550 (10%)
					$groocoin = 1000;
					$angle = $angle + mt_rand(45, 90);
					
				} else {
					// 14.6%
					$groocoin = 100;
					$angle = $angle + mt_rand(0, 45);
				}
				
				$sql="UPDATE event_roulette_kakao SET
							TRYCOUNT = TRYCOUNT + 1,
							GROOCOIN = GROOCOIN + $groocoin
							WHERE KAKAO_ID = '". $kakao_id ."'";
				$result=mysqli_query($db,$sql);
				if($result == 0) $success = false;
				
				// 트렌젝션 끝
				if($success) {
					$result = mysqli_query($db,"COMMIT");
					$rootObj->isSuccess = true;
					$rootObj->groocoin = $user['GROOCOIN'] + $groocoin;
					$rootObj->trycount = $user['TRYCOUNT'] + 1;
					$rootObj->friend = $user['FRIEND'];
					$rootObj->ethaddress = $user['ETHADDRESS'];
					$rootObj->spin = $angle;
				} else {
					$result = mysqli_query($db,"ROLLBACK");
					$rootObj->isSuccess = false;
					$rootObj->reason = "서버 오류";
					$jsonData = json_encode($rootObj);
					echo $jsonData;
					exit;
				}
			}
			break;
			
		case "setAddress":
			$success = true;
			$result = mysqli_query($db,"SET AUTOCOMMIT=0");
			$result = mysqli_query($db,"BEGIN");
			
			$kakao_id=addslashes($_REQUEST['kakao_id']);
			$ETH_ADDRESS=addslashes($_REQUEST['ethaddress']);
			
			$sql="UPDATE event_roulette_kakao SET
						ETHADDRESS = '". $ETH_ADDRESS ."'
						WHERE KAKAO_ID = '". $kakao_id ."'";
			$result=mysqli_query($db,$sql);
			if($result == 0) $success = false;

			// 트렌젝션 끝
			if($success) {
				$result = mysqli_query($db,"COMMIT");
				$rootObj->isSuccess = true;
			} else {
				$result = mysqli_query($db,"ROLLBACK");
				$rootObj->isSuccess = false;
				$rootObj->reason = "서버 오류";
				$jsonData = json_encode($rootObj);
				echo $jsonData;
				exit;
			}
			break;
	}

	$jsonData = json_encode($rootObj);
	echo $jsonData;
?>