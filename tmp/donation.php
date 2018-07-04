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
		<div style="background:url('donation_bg.png'); height:285px; background-size:100% 100%;">
			<div style="position:absolute; top:215px; left:25px; color:#b0b0b0; font-size:10px;">130 GROO / 15일 남음</div>
			<div style="position:absolute; top:240px; width:100%; height:45px; background:#00000033">
				<div id="graph" style="width:0%; color:#fff; font-size:25px; background:#f64789; height:45px;">
					<div id="coin" style="float:left; margin-left:25px; line-height:45px;">0 </div>
					<div style="float:left; margin-left:5px; margin-top:9px; font-size:10px;">GROO<br>후원</div>
					<div id="persent" style="float:right; margin-right:10px;line-height:45px; opacity:0.4;">77%</div>
				</div>
			</div>
		</div>
		
		<div style="background:#f5f5f5; ">
			<div style="padding-top:20px; margin-left:25px; margin-right:25px; font-weight:bold; font-size:15px;">후원내용</div>
			<input type="number" class="form-control" id="cointxt" placeholder="후원 희망금액을 입력해주세요." maxlength="15" style="width:calc(100% - 50px); margin-left:25px; height:50px; font-size:16px;">
						
			<div style="margin-top:25px; background:#fff; height:100px; width:calc(100% - 50px); border:1px solid #d0d0d0; margin-left:25px; margin-right:25px; border-radius:5px; padding:20px;">
				<div style="float:left; width:100%;" >
					<div style="font-size:13px; color:#888888; float:left; line-height:30px;">후원 희망금액</div>
					<div id="before" style="font-size:18px; color:#888888; float:right; line-height:30px;">0.00 GROO</div>
				</div>
				<div style="float:left; width:100%;" >
					<div style="font-size:13px; color:#444444; float:left; line-height:30px;">결제 후 내 지갑 잔액</div>
					<div id="after" style="font-size:18px; color:#3288ea; float:right; line-height:30px;">325.00 GROO</div>
				</div>
			</div>
			
			<div class="btn" style="margin-top:25px; background:#f64789; width:calc(100% - 50px); margin-left:25px; margin-right:25px; height:50px; border-radius:5px; color:#fff; font-size:15px; line-height:30px; text-align:center;">
				후원하기 >
			</div>
		</div>

		<script>
			var mycoin = 325.0;
            
			$(document).ready(function(){
				$(".btn").ripple();
				
				$("#graph").animate({width: '77%'}, 700);
				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',');

				// how many decimal places allows
				var decimal_places = 3;
				var decimal_factor = decimal_places === 0 ? 1 : Math.pow(10, decimal_places);

				$('#coin').delay(600).animateNumber({ number: 82.429 * decimal_factor, numberStep: function(now, tween) {
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
