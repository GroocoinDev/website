<?php
	include_once("../inc/device_check.php");
	$join = $_GET['join'];
	$r = $_GET['r'];
	$dev = $_GET['dev'];

	if(!isset($r))
		$r = 0;
?>

<html>
	<head>
		<title>Groocoin</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<meta property="og:title" content="Groocoin Airdrop" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://groo.io/airdrop" />
		<meta property="og:image" content="https://groo.io/assets/img/event_kakao_1.png" />
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
		<script src="../assets/lib/jQueryRotate.js"></script>
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
			<? if (is_ios()) { ?>
				<img src="../assets/img/pointer_up_right.png" style="position:fixed; right:-25; bottom:5; width:100px; height:80px; transform: rotateX(180deg);" />
			<? } else { ?>
				<img src="../assets/img/pointer_up_right.png" style="position:fixed; right:-14; top:5; width:100px; height:80px;" />
			<? } ?>
			<div style="padding:10px;" class="center">
				<div style="width:100%; height: 50px; background:rgba(0,0,0,0.85); text-align:center;">
					<img class="center" src="../assets/img/logo.svg" alt="GROO Coin Logo">
				</div>
				<div style="width:100%; padding:15px; background:#e0e0e0; color:#444444; text-align:left; font-size:12px;">
					<span style="font-size:13px;">
						<b>※ 카카오톡 인앱브라우저로 접속하셨습니다.</b><br><br>
						<? if (is_ios()) { ?>
							룰렛 이벤트에 참여하기 위해서 <b>우측 하단 메뉴</b>에서 <b><u>'Safari로 열기'</u></b> 를 이용해 주세요.<br>
						<? } else { ?>
							룰렛 이벤트에 참여하기 위해서 <b>우측 상단 메뉴( ፧ )</b>에서 <b><u>'다른 브라우저로 열기'</u></b> 를 이용해 주세요.<br>
						<? } ?>
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
		
			<? if(isset($dev)) { ?>
				<button onclick="loginTEST();">LOGIN</button>
			<? } ?>
		
			<div id="game" style="width:100%; background: url('../assets/img/event_kakao_bg.png'); background-size:100%; padding: 40px 0 35px;">
				<div style="width:100%; color:#fff; font-size:24px; text-align:center; text-weight:bold;">
					<img src="../assets/img/event_kakao_title.png" style="max-width:80%;" />
				</div>
				
				
				<div style="width:80%; margin-top:40px; margin-bottom:25px;" class="center_h" >
					<img id="roulette" src="../assets/img/event_kakao_roulette.png" style="width:100%;" />
					<img class="center_h" src="../assets/img/event_kakao_point.png" style="width:12%; height:18%; top:-4%; position:absolute;" />
					<img onclick="startBtn();" class="Absolute-Center" src="../assets/img/event_kakao_startbtn.png" style="width:34%; height:34%; position:absolute;" />
				</div>
				
				<div class="not_login" style="color:#fff; text-align:center; padding-left:15px; padding-right:15px;">
					카카오 계정 로그인 후 참여 가능합니다.
					<button type="button" class="btn btn-warning btn-lg btn-block" style="margin-top:10px;" onclick="loginWithKakao();">카카오 계정 로그인</button>
				</div>
				
				<div class="login" style="width:100%; color:#fff; margin-top:25px; margin-bottom:25px; font-size:18px; text-align:center; text-weight:bold;">
					획득한 그루코인 : <span id="groocoin_count" style="color:#ffff88; font-weight:bold;">0 GROO</span><br>
					참여 횟수 : <span id="retry_count" style="color:#ffff88; font-weight:bold;">0 회</span><br>
					초대한 친구 : <span id="friend_count" style="color:#ffff88; font-weight:bold;">0 명</span>
				</div>
				
				<div class="login " style="background:#fff; padding:10px; border-radius:10px; margin-top:20px; font-size:12px; margin-left:15px; margin-right:15px;">
					<div id="beforeinfo" style="color:#444444; text-align:center; font-size:12px; padding-left:0px; padding-right:0px;">
						코인 수령을 위한 이더리움(ETH) 지갑주소를 입력하세요.<br>
						<b>(거래소 지갑은 절대로 입력하지 마세요!)</b>
						<input id="ethAddress" type="text" class="form-control" maxlength="42" placeholder=" 개인 이더리움 지갑주소를 입력해주세요." style="margin-top:10px;">
					</div>
					
					<div id="dropinfo" style="color:#444444; text-align:center; font-size:12px; margin-top:15px;">
						내 이더리움 주소<br>
						<span id="ethaddress_info"></span>
					</div>

					<div style="width:100%; padding-left:15px; padding-right:15px; margin-top:20px; margin-bottom:15px;">
						<button id="sendBtn" type="button" class="btn btn-success btn-lg btn-block" onclick="requestGROO();">에어드랍 신청하기</button>
						<button type="button" class="btn btn-info btn-lg btn-block" onclick="sendLink();">친구초대하고 재도전 기회 얻기!</button>
						<button id="joinBtn" type="button" class="hide btn btn-success btn-lg btn-block" onclick="joinKakao();">공식 GROO 카톡방입장(필수)</button>
						
						<div style="color:#444444; text-align:center; font-size:12px; margin-top:15px;">
							내 레퍼럴 주소<br>
							<a href="javascript:copy();">https://groo.io/airdrop/?r=<span id="refferalID"></span></a><br>
							친구 초대시 1회 재도전가능 (최대 5회)
						</div>
					</div>
				</div>
			</div>
		
			<div style="width:100%; background: #7A05EF; padding: 20px 0 35px; padding-left:15px; padding-right:15px;">
				<div style="width:100%; color:#fff; font-size:24px; text-align:center; text-weight:bold;">
					이벤트 규칙
				</div>
				<div style="background:#fff; padding:15px; border-radius:10px; margin-top:20px; font-size:12px;">
					<div style="margin-bottom:10px;">1. 코인 수령을 위해 <b><u>반드시 공식채널에 입장해 주세요.</u></b></div>
					<div style="margin-bottom:10px;">2. 룰렛 게임만 참여하는 경우 코인이 지급 되지 않습니다.</div>
					<div style="margin-bottom:10px;">3. 룰렛 이벤트 종료 후 2주 이내 코인 지급 예정입니다.</div>
					<div style="margin-bottom:10px;">4. 거래소의 이더리움(ETH) 주소는 코인 수령이 <b>불가능</b>합니다.</div>
					<div style="margin-bottom:10px;">5. 부정 참여는 예고없이 무효처리 됩니다.</div>
					<div style="margin-bottom:10px;">6. 이벤트 : 2018년 12월 21일 9AM - 2018년 12월 31일 11PM <u>(2000명 참여시 조기 마감)</u></div>
					<div>* Groo Corporation은 본 이벤트에 관한 모든 권한을 갖습니다.</div>
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
			
			var spining = false;
			var mykakaoID = 0;
			var r = <?=$r?>;
			
            $(document).ready(function(){
				Kakao.init('52084ca1d0ecefc89205a8cb188da198');
				
				$(".login").hide();
            });
			
			function copyToClipboard(val) {
				var t = document.createElement("textarea");
				document.body.appendChild(t);
				t.value = val;
				t.select();
				document.execCommand('copy');
				document.body.removeChild(t);
			}
			
			function copy() {
				copyToClipboard('https://groo.io/airdrop/?r=' + mykakaoID);
				alert('복사 되었습니다!');
			}
			
			<? if(isset($dev)) { ?>
			function loginTEST() {
				mykakaoID = 1234;
				r = 5555;
				
				// 로그인 처리
				$.ajax({
					type : "GET",
					url : "info.php",
					dataType : "json",
					data : "action=login&kakao_id=" + mykakaoID + "&refferal=" + r,
					success : function(json) {
						if(json.isSuccess) {
							$("#refferalID").text(mykakaoID);
							$(".not_login").hide();
							$(".login").show();

							$("#friend_count").text(json.friend + " 명");
							$("#groocoin_count").text(json.groocoin + " GROO");
							$("#retry_count").text(json.trycount + " 회");

							if(json.ethaddress != null) {
								// 이더 주소가 세팅되어있다면
								$("#beforeinfo, #sendBtn").hide();
								$("#joinBtn").removeClass("hide");
								$("#ethaddress_info").text(json.ethaddress);
							} else {
								// 이더 주소가 없으면
								$("#dropinfo").hide();
							}
						} else {
							alert(json.reason);
						}
					},
					error : function(e) {
						alert("처리중 장애가 발생하였습니다.");
					}
				});
			}
			<? } ?>
            
            function loginWithKakao() {
                // 로그인 창을 띄웁니다.
                Kakao.Auth.login({
					throughTalk: true,
                    success: function(authObj) {
						Kakao.API.request({
							url: '/v1/user/me',
							always: function(res) {
								var kakaoInfo = res;
								mykakaoID = kakaoInfo.id;
								
								$("#refferalID").text(mykakaoID);
								$(".not_login").hide();
								$(".login").show();
								
								// 로그인 처리
								$.ajax({
									type : "GET",
									url : "info.php",
									dataType : "json",
									data : "action=login&kakao_id=" + mykakaoID + "&refferal=" + r,
									success : function(json) {
										if(json.isSuccess) {
											$("#friend_count").text(json.friend + " 명");
											$("#groocoin_count").text(json.groocoin + " GROO");
											$("#retry_count").text(json.trycount + " 회");
											
											if(json.ethaddress != null) {
												// 이더 주소가 세팅되어있다면
												$("#beforeinfo, #sendBtn").hide();
												$("#joinBtn").removeClass("hide");
												$("#ethaddress_info").text(json.ethaddress);
											} else {
												// 이더 주소가 없으면
												$("#dropinfo").hide();
											}
											
										} else {
											alert(json.reason);
										}
									},
									error : function(e) {
										alert("처리중 장애가 발생하였습니다.");
									}
								});
                            }
                        });
                    },
                    fail: function(err) {
						alert("카카오톡 로그인에 실패하였습니다.\n다시 접속해주세요.\nErr_Msg : " + JSON.stringify(err));
                    }
                });
            }
			
			function startBtn() {
				if (spining)
					return;
				
				if(mykakaoID == 0) {
					alert("카카오 계정 로그인후 이벤트 참여가능합니다.");
					return;
				}
				
				spining = true;
				
				// 게임 참여 처리
				$.ajax({
					type : "GET",
					url : "info.php",
					dataType : "json",
					data : "action=spin&kakao_id=" + mykakaoID,
					success : function(json) {
						if(json.isSuccess) {
							
							$("#roulette").rotate({
								angle:0,
								animateTo:json.spin,
								center: ["50%", "50%"],
								easing: $.easing.easeInOutElastic,
								callback: function(){
									var n = $(this).getRotateAngle();
									// 회전 완료

									var result = n % 360;

									if(result > 0 && result < 45) {
										// 100
										alert('100 GROO 당첨!');

									} else if(result > 45 && result < 90) {
										// 1,000
										alert('1,000 GROO 당첨!');
									} else if(result > 90 && result < 135) {
										// 500
										alert('500 GROO 당첨!');
									} else if(result > 135 && result < 180) {
										// 10,000
										alert('10,000 GROO 당첨!');
									} else if(result > 180 && result < 225) {
										// 500
										alert('500 GROO 당첨!');
									} else if(result > 225 && result < 270) {
										// 1,000
										alert('1,000 GROO 당첨!');
									} else if(result > 270 && result < 315) {
										// 500
										alert('500 GROO 당첨!');
									} else if(result > 315 && result < 360) {
										// 20,000
										alert('20,000 GROO 당첨!');
									}
									
									$("#groocoin_count").text(json.groocoin + " GROO");
									$("#retry_count").text(json.trycount + " 회");
									spining = false;
								},
								duration:5000
							});
						} else {
							alert(json.reason);
							spining = false;
						}
					},
					error : function(e) {
						alert("처리중 장애가 발생하였습니다.");
						spining = false;
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
					$.ajax({
						type : "GET",
						url : "info.php",
						dataType : "json",
						data : "action=setAddress&kakao_id=" + mykakaoID + "&ethaddress=" + ethAddr,
						success : function(json) {
							if(json.isSuccess) {
								alert('에어드랍 신청 완료되었습니다.\n\n공식 채널은 반드시 입장해주세요.');
								$("#beforeinfo, #sendBtn").hide();
								$("#joinBtn").removeClass("hide");
								$("#dropinfo").show();
								$("#ethaddress_info").text(ethAddr);
							} else {
								alert(json.reason);
							}
						},
						error : function(e) {
							alert("처리중 장애가 발생하였습니다.");
							spining = false;
						}
					});
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
					  description: '그루코인 룰렛 에어드랍 이벤트!\n룰렛 돌리고 그루코인 무료로 받아가세요 (선착순 2000명).',
					  imageUrl: 'https://groo.io/assets/img/event_kakao_1.png',
					  link: {
						mobileWebUrl: 'https://groo.io/airdrop/?r=' + mykakaoID,
				        webUrl: 'https://groo.io/airdrop/?r=' + mykakaoID
					  }
					},
					buttons: [
					  {
						title: '룰렛 돌리기',
						link: {
						  mobileWebUrl: 'https://groo.io/airdrop/?r=' + mykakaoID,
						  webUrl: 'https://groo.io/airdrop/?r=' + mykakaoID
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
