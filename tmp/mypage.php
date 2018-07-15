<html>
	<head>
		<title>Groo Platform</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<script src="js/jquery_3.3.1_min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/js/bootstrap-dialog.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
		<script src="js/swipe.js"></script>
		<script src="js/ripple.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/css/bootstrap-dialog.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="css/new_app_default.css">
		<link rel="stylesheet" href="css/ripple.css">
	
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		
		<style>
			.swipe {
				overflow: hidden;
				visibility: hidden;
				position: relative;
			}
			.swipe-wrap {
				overflow: hidden;
				position: relative;
			}
			.swipe-wrap > div {
				float:left;
				width:100%;
				position: relative;
			}

			#mySwipe div b {
				display:block;
				font-weight:bold;
				color:#fff;
				font-size:18px;
				margin-left:25px;
				margin-top:135px;
			}

			.gwatop-level_test_bar {
				position: fixed;
				right: 0;
				left: 0;
				bottom: 0;
				border-width: 0 0 1px;
				z-index: 999;
				min-height: 40px;
				background:url(../../img/app_level_test_bar_bg.jpg);
				background-size:100% 100%;
			}

			.default_section {
				float:left;
				width:100%;
				padding-left:12%;
			}

			.main_btn_section {
				position:relative;
				float:left;
				padding-left:12%;
				height:65px;
				top:-32px;
				background:url("../../img/app_center_btn_bg.png");
				background-size:100% 100%;
				margin-left:20px;
				margin-right:20px;
			}

			.section_title {
				color:#43b6cf;
				font-size:17px;
			}

			.subject_icon {
				float:left;
				width:22vw;
				height:22vw;
				background:#3288ea;
			}

			.subject_icon:active {
				background: #2461af;
			}

			.subject_icon2 {
				float:left;
				width:22vw;
				height:22vw;
				background:#43b6cf;
			}

			.subject_icon2:active {
				background: #30829b;
			}

			.review_section {
				width:100%;
				background:#f0eff4;
				margin-top:30px;
				padding-left:6%;
				float:left;
				padding-bottom: 50px;
			}

			.label {
				position: absolute;
				width: 50px;
				background: #fff;
				border-radius: 15px;
				border: 1px solid #000;
				font-size: 12px;
				color: #111111;
				text-align: center;
				left: 12vw;
				z-index: 10;
			}

			.modal-header {
				display: none!important;
			}

			.modal-dialog,
			.modal-content {
				top:10%;
				max-height: 70%;
				border-radius: 0;
			}

			.modal-body {
				overflow-y: scroll;
				padding: 0px;
			}

			.gwatop-chat {
				float:right;
				width:40px;
				height:50px;
				z-index: 999;
				background:#fff;
			}

			.gwatop-chat:active {
				background:#f5f5f5;
			}
		</style>
	</head>
	
	<body>
		<div style=" position:fixed; width:100%;">
			<img src="mypage_top.png" style="width:100%;"/>
		</div>
		
		<div style="height:45px; top:140px; background:#f64789; color:#fff; font-size:25px; padding-left:25px; position:fixed; width:100%;">
			<div style="float:left; margin-left:5px; margin-top:9px; font-size:10px;">보유<br>GROO</div>
			<div id="coin" style="float:left; margin-left:25px; line-height:45px;">0</div>
			<div id="coin" style="float:left; margin-left:5px; line-height:45px; opacity:0.5; font-size:10px;">=</div>
			<div style="float:left; margin-left:5px; margin-top:9px; font-size:10px; opacity:0.5;">KRW<br>120,486</div>
			
			<img class="center" src="mypage_btn.png" style="width:75px; height:27px; float:right; margin-right:15px;"/>
		</div>
		
		<div style="padding-top:190px;">
			<img src="mypage_1.png" style="width:100%;"/>
			<img src="mypage_2.png" style="width:100%;" onclick="location.href='donation.php'" />
			<img src="mypage_1.png" style="width:100%;"/>
			<img src="mypage_2.png" style="width:100%;" onclick="location.href='donation.php'"/>
		</div>

		<script>
			var mycoin = 310.0;
            
			$(document).ready(function(){
				$(".btn").ripple();
				
				$("#graph").animate({width: '77%'}, 700);
				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',');

				// how many decimal places allows
				var decimal_places = 2;
				var decimal_factor = decimal_places === 0 ? 1 : Math.pow(10, decimal_places);

				$('#coin').delay(600).animateNumber({ number: 310.00 * decimal_factor, numberStep: function(now, tween) {
				  var floored_number = Math.floor(now) / decimal_factor,
				  target = $(tween.elem);

				  if (decimal_places > 0) {
					  floored_number = floored_number.toFixed(decimal_places);
				  }

				  target.text(floored_number);
				}}, 1500);
				$("#persent").hide().delay(600).fadeIn();
				
				$("#cointxt").keyup(function(){
					$("#before").text(Number($(this).val()).toFixed(2) + " GROO");
					$("#after").text(Number(mycoin  - $(this).val()).toFixed(2) + " GROO");
				});
				
				$(".btn").click(function(){
					alert($("#cointxt").val() + " GROO를 후원했습니다!");
					location.href='new_home.php';
				});
			});
		</script>
	</body>
</html>
