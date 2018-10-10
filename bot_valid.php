<?php
	include("inc/db_conn.php");

	switch ($_SERVER['REQUEST_METHOD']) {
		case "POST":

			// 리캡챠 검증
			if(isset($_POST['g-recaptcha-response'])){
				$captcha=$_POST['g-recaptcha-response'];
				$secretKey = "6LeKSnQUAAAAACVLxK9nQn0FDNVh1gx8IYM2ewtR";
			} else {
				die("no captcha");
			}

			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
				CURLOPT_POST => true,
				CURLOPT_POSTFIELDS => array(
					'secret' => $secretKey,
					'response' => $captcha,
					'remoteip' => $_SERVER['REMOTE_ADDR']
				)
			));
			$response = curl_exec($curl);
			curl_close($curl);

			if(strpos($response, 'true') > 1 || $dev) {
				// 캡차 검증 성공
				echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
                echo "<a href='https://t.me/groocoinbot'>Please click here to continue</a>";
                exit();
			} else {
				echo "<script>alert('Captcha Error'); history.back();</script>";
				exit();
			}
	}

?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Groocoin</title>

	<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- 부트스트랩 -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
        <div class="container">
            <form class="form-signin" action="bot_valid.php" method="post" onsubmit="return FormSubmit();" style="width:100%; text-align: center;">
                <div class="g-recaptcha" data-sitekey="6LeKSnQUAAAAAOc7qiMg1D6P2Wh4CwKlF9vGYYX-" style="display: inline-block;"></div>
                <button type="button" class="btn btn-primary btn-lg btn-block" onclick="javascript:FormSubmit();">Continue</button>
            </form>
        </div>
        <script>
            function FormSubmit() {
                if (grecaptcha.getResponse() == ""){
                    alert("Please click 'I am not a robot' to vaild.");
                    return false;
                } else {
                    $("form").submit();
                }
            }
        </script>
  </body>
</html>