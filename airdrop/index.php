<?php
	include_once("../inc/device_check.php");
	$join = $_GET['join'];
?>

<html>
	<head>
		<title>Groocoin</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
		<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		</head>
		<style>
			.center {
				position: relative;
				top: 50%; 
				transform: translateY(-50%);
			}

			.center_h {
				position: relative;
				left: 50%; 
				transform: translateX(-50%);
			}
			
			.Absolute-Center {
				margin: auto;
				position: absolute;
				top: 0; left: 0; bottom: 0; right: 0;
			}
			
            .gwatop-navbar-white {
                position: fixed;
                right: 0;
                left: 0;
                top: 0;
                border-width: 0 0 1px;
                z-index: 999;
                min-height: 50px;
                background:rgba(0,0,0,0.85);
            }
		</style>
	<body>
		<?
			if($join == "1") {
				echo '<div style="padding:10px;" class="center">
						<div style="width:100%; height: 50px; background:rgba(0,0,0,0.85); text-align:center;">
							<img class="center" src="../assets/img/logo.svg" alt="GROO Coin Logo">
						</div>
						<div style="width:100%; padding:15px; background:#e0e0e0; color:#444444; text-align:left; font-size:12px;">
							<button id="joinBtn" type="button" class="btn btn-success btn-lg btn-block" onclick="joinKakao();">공식 GROO 카톡방 입장하기</button>
						</div>
					</div>';
			} else {
		?>
		
		<? if(is_Kakao()) { ?>
			<img src="../assets/img/pointer_up_right.png" style="position:fixed; right:-14; top:5; width:100px; height:80px;" />
			<div style="padding:10px;" class="center">
				<div style="width:100%; height: 50px; background:rgba(0,0,0,0.85); text-align:center;">
					<img class="center" src="../assets/img/logo.svg" alt="GROO Coin Logo">
				</div>
				<div style="width:100%; padding:15px; background:#e0e0e0; color:#444444; text-align:left; font-size:12px;">
					<span style="font-size:13px;">
						<b>※ 카카오톡 인앱브라우저로 접속하셨습니다.</b><br><br>
						룰렛 이벤트에 참여하기 위해서 <b>우측 상단 메뉴( ፧ )</b>에서 <b><u>'다른 브라우저로 열기'</u></b> 를 이용해 주세요.<br>
					</span>
					
					<div style="height:1px; background:#c0c0c0; margin-top:15px; margin-bottom:15px;"></div>
					
					<b>[그루코인 커뮤니티]</b><br>
					Groocoin의 공식 채널을 열람하세요.<br><br>
					<b>[Groocoin 커뮤니티]</b><br>
					* 공식 영문 텔레그램 : <a href="https://t.me/groocoin_official_en" target="_blank">https://t.me/groocoin_official_en</a><br>
					* 공식 영문 텔레그램 인포 : <a href="https://t.me/groocoin_info" target="_blank">https://t.me/groocoin_info</a><br>
					* 공식 카카오톡 : <a href="http://bit.ly/groocoin_kakao" target="_blank">http://bit.ly/groocoin_kakao</a><br><br>
					
					<b>[Groocoin 공식 채널]</b><br>
					* 홈페이지 : <a href="https://groo.io" target="_blank">https://groo.io</a><br>
					* 트위터 : <a href="https://twitter.com/groocoinio" target="_blank">https://twitter.com/groocoinio</a><br>
					* 이메일 : <a href="mailto:support@groo.io" target="_blank">support@groo.io</a><br>
				</div>
			</div>
		<? } else { ?>
			<!-- navbar -->
			<div style="width:100%; height: 50px; background:rgba(0,0,0,0.85); text-align:center;">
				<img class="center" src="../assets/img/logo.svg" alt="GROO Coin Logo">
			</div>
		
			<div id="game" style="width:100%; background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, #E6498F 100%), #7A05EF; padding: 40px 0 35px;">
				<div style="width:100%; color:#fff; font-size:24px; text-align:center; text-weight:bold;">
					GROO ROULETTE GAME
				</div>
				
				<img src="../assets/img/roulette_tmp.png" style="width:80%; margin-top:40px; margin-bottom:25px;" class="center_h" />
				
				<div class="not_login" style="color:#fff; text-align:center; padding-left:15px; padding-right:15px;">
					카카오 계정 로그인 후 참여 가능합니다.
					<button type="button" class="btn btn-warning btn-lg btn-block" style="margin-top:10px;" onclick="loginWithKakao();">카카오 계정 로그인</button>
				</div>
				
				<div class="login" style="width:100%; color:#fff; margin-top:25px; margin-bottom:25px; font-size:18px; text-align:center; text-weight:bold;">
					받을 그루코인수 : <span style="color:#ffff88; font-weight:bold;">9999 GROO</span><br>
					재도전 가능 횟수 : 0회
				</div>
				
				<div id="beforeinfo" class="login " style="color:#fff; text-align:center; font-size:12px; padding-left:15px; padding-right:15px;">
					코인을 받을 이더리움(ETH) 지갑 주소를 입력해주세요.<br>
					(MEW, MetaMask, ImToken, Trust Wallet, Ledger, Trezor 등)
					<input id="ethAddress" type="text" class="form-control" maxlength="42" placeholder="이더리움 개인지갑 주소를 입력해주세요. (거래소 X)" style="margin-top:10px;">
				</div>
				
				<div id="dropinfo" class="login hide" style="color:#fff; text-align:center; font-size:12px;">
					내 지갑 주소 : 0xc17195bde49d70cefcf8a9f2ee1759ffc27bf0b1
				</div>
				
				<div class="login" style="width:100%; padding-left:15px; padding-right:15px; margin-top:20px; margin-bottom:15px;">
					<button id="sendBtn" type="button" class="btn btn-success btn-lg btn-block" onclick="requestGROO();">9999 GROO 에어드랍 신청하기</button>
					<button type="button" class="btn btn-info btn-lg btn-block" onclick="sendLink();">친구초대하고 재도전 기회 얻기!</button>
					<button id="joinBtn" type="button" class="hide btn btn-success btn-lg btn-block" onclick="joinKakao();">공식 GROO 카톡방입장(필수)</button>
				</div>
			</div>
		
			<div style="width:100%; background: #7A05EF; padding: 20px 0 35px; padding-left:15px; padding-right:15px;">
				<div style="width:100%; color:#fff; font-size:24px; text-align:center; text-weight:bold;">
					이벤트 규칙
				</div>
				<div style="background:#fff; padding:15px; border-radius:10px; margin-top:20px; font-size:12px;">
					<div style="margin-bottom:10px;">- 이벤트 기간 : 2018년 12월 21일 오전 9시 - 2018년 12월 31일 23시 59초 KST (UTC+9)</div>
					<div style="margin-bottom:10px;">- 룰렛 게임으로 최대 <b>2000 GROO</b>까지 지급 됩니다.</div>
					<div style="margin-bottom:10px;">- 룰렛 게임 참여후 반드시 <b>이더리움 지갑주소</b>를 기입해주셔야 합니다.</div>
					<div style="margin-bottom:10px;">- 룰렛 이벤트 <b>종료 후 2주 이내 GROO 지급</b> 예정입니다.</div>
					<div style="margin-bottom:10px;">- 코인 지급 시점에 <b>공식 그루코인 채널</b>에 입장되어 있지 않은 계정은 무효처리 됩니다.</div>
					<div style="margin-bottom:10px;">- 지갑 주소 오기입으로 인한 불이익은 책임지지 않습니다.</div>
					<div>- Groo Corporation은 본 이벤트에 관한 모든 권한을 갖습니다.</div>
				</div>
			</div>
		
			<footer style="background: #1C1C1C; padding: 30px 30px 40px; text-align: center; overflow: hidden;">
				<div class="contents">
					<div style="float: left; opacity: .7;"><img src="../assets/img/logo.svg" alt="GROO Coin logo"></div>
					<div style="float: left; color: #f2f2f2; font-size: 0.85em; margin-top: 10px; text-align: left; line-height: 20px;">
						Contact : <a href="mailto:support@groo.io" style="color: #f2f2f2;">support@groo.io</a><br>
						Copyright © 2018 All Rights Reserved
					</div>
				</div>
			</footer>
		<? }} ?>
		
		<script>
			//<![CDATA[
            $(document).ready(function(){
				Kakao.init('52084ca1d0ecefc89205a8cb188da198');
				
				$(".login").hide();
//				$(".not_login").hide();
//				$(".login").show();
            });
            
            function loginWithKakao() {
                // 로그인 창을 띄웁니다.
                Kakao.Auth.login({
					throughTalk: true,
                    success: function(authObj) {
						Kakao.API.request({
							url: '/v1/user/me',
							always: function(res) {
								var kakaoInfo = res;
								//alert(kakaoInfo.id);
								
								$(".not_login").hide();
								$(".login").show();
                            }
                        });
                    },
                    fail: function(err) {
						alert("카카오톡 로그인에 실패하였습니다.\n다시 접속해주세요.\nErr_Msg : " + JSON.stringify(err));
                    }
                });
            }
			
			function requestGROO() {
				var ethAddr = $("#ethAddress").val();
				
				if (ethAddr == "") {
					alert('이더리움 주소를 입력해주세요.');
				} else if (ethAddr.length != 42) {
					alert('올바른 이더리움 주소를 입력해주세요.');
				} else {
					alert('에어드랍 신청 완료되었습니다.');
					$("#beforeinfo, #sendBtn").hide();
					$("#joinBtn, #dropinfo").removeClass("hide");
				}
			}
			
			function joinKakao() {
				location.href='https://open.kakao.com/o/gsb5nyM';
			}
            
			// 카카오링크 - 친구 초대하기
			function sendLink() {
				Kakao.Link.sendDefault({
					objectType: 'feed',
					content: {
					  title: 'Groocoin (그루코인)',
					  description: '그루코인 룰렛 에어드랍 이벤트!\n룰렛 돌리고 그루코인 무료로 받아가세요 (선착순 1000명).',
					  imageUrl: 'https://groo.io/assets/img/event_kakao_1.png',
					  link: {
						mobileWebUrl: 'https://open.kakao.com/o/gsb5nyM',
				        webUrl: 'https://open.kakao.com/o/gsb5nyM'
					  }
					},
					buttons: [
					  {
						title: '룰렛 돌리기',
						link: {
						  mobileWebUrl: 'https://groo.io/airdrop/',
						  webUrl: 'https://groo.io/airdrop/'
						}
					  },
					  {
						title: '공식채널입장',
						link: {
						  mobileWebUrl: 'https://groo.io/airdrop/?join=1',
						  webUrl: 'https://groo.io/airdrop/?join=1'
						}
					  }
					]
				});
			}
			//]]>
		</script>
	</body>
</html>
