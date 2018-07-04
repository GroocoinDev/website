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

		<!-- leftbar -->
		<div style="background:#f64789; width:80px; position:fixed; top:0; bottom:0; left:0;">
			<img src="left_menu.png" style="width:80px; " />
		</div>
		
		<div style=" margin-left:80px;">
			<div class="topbar" style="position:fixed; top:0; height:150px; width:calc(100% - 80px); padding-top:20px; color:#fff; text-align:center; background:url('top.png'); background-size:100% 150px;">
				<span style="font-size:20px;">BTS 공식 팬채널</span>
				<div class="center_h" style="margin-top:10px; width:120px; border:1px solid #fff; border-radius:50px;">#BTS_Forever</div>
				
				<div  style="margin-top:20px; color:#b0b0b0;">
					지하철역 광고 모금 시작<br>
					압구정로데오역 전광판 광고 주간입니다.
				</div>
			</div>
			<div class="subtopbar" style="width:calc(100% - 80px); font-size:20px; position:fixed; top:0; height:50px; line-height:50px; color:#fff; text-align:center; background:url('top.png'); background-size:100% 150px;">BTS 공식 팬채널</div>
			<div style="margin-top:180px; margint-left:15px; ">
				<img class="post" src="1.png" style="width:100%;" />
				<img class="post" src="2.png" style="width:100%;" />
				<img class="post" src="3.png" style="width:100%;" />
				<img class="post" src="1.png" style="width:100%;" />
				<img class="post" src="2.png" style="width:100%;" />
				<img class="post" src="3.png" style="width:100%;" />
				<img class="post" src="1.png" style="width:100%;" />
				<img class="post" src="2.png" style="width:100%;" />
				<img class="post" src="3.png" style="width:100%;" />
				<img class="post" src="1.png" style="width:100%;" />
				<img class="post" src="2.png" style="width:100%;" />
				<img class="post" src="3.png" style="width:100%;" />
				<img class="post" src="1.png" style="width:100%;" />
				<img class="post" src="2.png" style="width:100%;" />
				<img class="post" src="3.png" style="width:100%;" />
				<img class="post" src="1.png" style="width:100%;" />
				<img class="post" src="2.png" style="width:100%;" />
				<img class="post" src="3.png" style="width:100%;" />
			</div>
			
			<img id="hh" src="icon.png" style="position:absolute; top:300px; width:150px;"/>
		</div>

		<script>
            // 스크롤 처리
            var navbar = 50;

            $(window).scroll(function (event) {
                var st = $(this).scrollTop();
                if (st < 100) {
                    $(".topbar").css({"opacity":1-(st/100)}).show();
					$(".subtopbar").css({"opacity":0}).hide();
                } else {
                    $(".topbar").css({"opacity":"0"}).hide();

					st = (st - 100) / 100 * 2;
					if(st > 0.7) st = 1;
					$(".subtopbar").css({"opacity":st}).show();
                }
            });

			$(document).ready(function(){
				// 탑 nav 숨김
				$(".subtopbar").hide();
				$("#hh").hide();

				// ripple setting
				$(".class-section").ripple();
				$(".teacher_btn, .story_btn").ripple();
				
				$(".post").click(function(event){
					x = event.pageX;
					y = event.pageY;
					$("#hh").css({"top": y-80, "left":x-80}).fadeIn().fadeOut();
				});
				
			});
		</script>
	</body>
</html>
