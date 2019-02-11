<?php
    session_start();
	include("../../inc/db_conn.php");

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $success = true;

        if(!isset($_POST['loginId'])) die('fail');				//로그인 ID
        if(!isset($_POST['loginPw'])) die('fail');				//비밀번호

        $loginId=addslashes($_POST['loginId']);
        $loginPw=addslashes($_POST['loginPw']);

        $sql = "SELECT VU.USER_ID
                     , VU.LOGIN_DIV
                     , VU.USER_DIV
                     , VU.NAME
                     , VU.EMAIL
                     , VU.LANGUAGE
                     , VU.USE_YN
                     , CASE WHEN SHA1('". $loginPw ."') = VU.LOGIN_PW THEN 'Y' ELSE 'N' END AS PW_CHECK
                FROM   TB_VS_USER VU
                WHERE  VU.LOGIN_ID = '". $loginId ."'";
        
        $result=mysqli_query($db,$sql);
        $loginUserInfo = @mysqli_fetch_array($result);
        
        echo "<meta charset='utf-8'>";
        if($result == 0) {
            $success = false;
            echo "<script>alert('ID가 없거나 비밀번호가 잘못되었습니다.');</script>";
            echo "<script>location.href='../../login.html';</script>";
            exit();
        }
        if(!isset($loginUserInfo['USER_ID'])) {
            $success = false;
            echo "<script>alert('ID가 없거나 비밀번호가 잘못되었습니다.');</script>";
            echo "<script>location.href='../../login.html';</script>";
            exit();
        }
        if($loginUserInfo['PW_CHECK'] == 'N') {
            $success = false;
            echo "<script>alert('ID가 없거나 비밀번호가 잘못되었습니다.');</script>";
            echo "<script>location.href='../../login.html';</script>";
            exit();
        }
        if($loginUserInfo['USE_YN'] != 'Y') {
            $success = false;
            echo "<script>alert('미사용 유저 입니다.');</script>";
            echo "<script>location.href='../../login.html';</script>";
            exit();
        }
        if($loginUserInfo['USER_DIV'] != 'S' && $loginUserInfo['USER_DIV'] != 'A') {
            $success = false;
            echo "<script>alert('접근 권한이 없는 유저 입니다.');</script>";
            echo "<script>location.href='../../login.html';</script>";
            exit();
        }
        
        $_SESSION['USER_ID'] = $loginUserInfo['USER_ID'];
        $_SESSION['NAME'] = $loginUserInfo['NAME'];
        $_SESSION['EMAIL'] = $loginUserInfo['EMAIL'];
        $_SESSION['USER_DIV'] = $loginUserInfo['USER_DIV'];
        
        echo "<script>location.href='../../index.php';</script>";
        exit();
	}
?>
