<?php
	include_once("../inc/device_check.php");
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
            
            #loading {
                width: 300px;
                height:50px;
                line-height:50px;
                border:1px solid #d2d2d2;
                background: #ffffff;
                border-radius: 5px;
                color:#444444;
                text-align: center;
            }
			
            #loading_bg {
/*
                width:100%;
                background:#000000;
                opacity:0.5;
                position:absolute;
                top:0;
                bottom:0;
*/
            }
		</style>
	<body>
		<? if(is_Kakao() || true ) { ?>
			<div style="padding:10px;" class="center">
				<div style="width:100%; height: 50px; background:rgba(0,0,0,0.85); text-align:center;">
					<img class="center" src="../assets/img/logo.svg" alt="GROO Coin Logo">
				</div>
				<div style="width:100%; padding:15px; background:#e0e0e0; color:#444444; text-align:left; font-size:12px;">
					<span style="font-size:13px;">
						카카오톡 인앱브라우저로 접속하셨습니다.<br><br>
						룰렛 이벤트에 참여하기 위해서 <b>우측 상단 메뉴( ፧ )</b>에서 <b><u>'다른 브라우저로 열기'</u></b> 를 이용해 주세요.<br>
					</span>
					
					<div style="height:1px; background:#c0c0c0; margin-top:15px; margin-bottom:15px;"></div>
					
					<b>[그루코인 커뮤니티]</b><br>
					Groocoin의 공식 채널을 열람하세요<br><br>
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
			<div class="gwatop-navbar-white">
				<div class="gwatop-logo">
					<div style="font-size:18px; font-weight:bold; color:#ffffff; margin-top:12px;">Groo Roulette</div>
				</div>
			</div>

			<div style="width:100%; height:243px; background:#20cbef;">
				<div style="width:100%; height:1px; border-top:1px solid #37d0f1; margin-top:50px;"></div>
				<img class="center_h" src="../../img/app_invitation_content.png" widht="266.5" height="187.5" style="margin-top:25px;" />
			</div>

			<div style="width:100%;">
				<a id="custom-login-btn" href="javascript:loginWithKakao()">카카오 계정으로 시작하기</a>
				<div style="width:100%; height:50px; line-height:50px; padding-left:25px; padding-right:25px; border-bottom:1px solid #f5f5f5;">1. 친구에게 과탑 추천<img class="center" src="../assets/img/app_invitation_icon1.png" width="14" height="17.5" style="float:right;" /></div>
				<div style="width:100%; height:50px; line-height:50px; padding-left:25px; padding-right:23px; border-bottom:1px solid #f5f5f5;">2. 친구가 과탑 앱설치<img class="center" src="../assets/img/app_invitation_icon2.png" width="17.5" height="17.5" style="float:right;" /></div>
				<div style="width:100%; height:50px; line-height:50px; padding-left:25px; padding-right:26px; border-bottom:1px solid #f5f5f5;">3. 가입시 추천인 이메일 주소입력<img class="center" src="../assets/img/app_invitation_icon3.png" width="11.5" height="17.5" style="float:right;" /></div>
				<div style="width:100%; height:50px; line-height:50px; padding-left:25px; padding-right:26px; border-bottom:1px solid #f5f5f5;">4. 친구가 탑 결제시 10탑 지급<img class="center" src="../assets/img/app_invitation_icon4.png" width="12.5" height="17.5" style="float:right;" /></div>
			</div>

			<div style="width:100%;">
				<img class="center_h" src="../assets/img/app_invitation_kakao_btn.png" width="325" height="50" onclick="javascript:sendLink();" style="margin-top:15px; margin-bottom:15px;" />
			</div>

			<div id='loading_bg'></div>
			<div id='loading' class="Absolute-Center"><img src="../assets/img/loading-icon.gif" style="width:20px; height:20px;"/>&nbsp;&nbsp;Loading...</div>
		<? } ?>
		
		<script>
			//<![CDATA[
            $(document).ready(function(){
				Kakao.init('52084ca1d0ecefc89205a8cb188da198');
            });
            
            function loginWithKakao() {
                // 로그인 창을 띄웁니다.
                Kakao.Auth.login({
					throughTalk: true,
                    success: function(authObj) {
                        $('#loading, #loading_bg').removeClass("hide");
                        
                        alert(JSON.stringify(authObj));
                    },
                    fail: function(err) {
                        alert(JSON.stringify(err));
                    }
                });
                
//                Kakao.Auth.login({
//                    success: function(authObj) {
//                        
//
//                        Kakao.API.request({
//                            url: '/v1/user/me',
//                            always: function(res) {
//                                var kakaoInfo = res;
//                                alert(kakaoInfo.id);                                
//
////                            $.post("../app/api/user_api.php", {
////                              "action":"CHECK_REGISTERED_USER",
////                              "email":res.kaccount_email
////                            }, function(data, status) {
////                              var kakao_id = res.id;
////                              var access_token = hex_md5(kakao_id.toString());
////                              var kakao_email = res.kaccount_email;
////                              // alert(hex_md5(res.id));
////                              // console.log(data);
////                              // console.log(res);
////                              var kNickname = "이름없음";
////                              var kProfileImage = "default-profile-pic.jpg";
////                              var kThumbnailImage = "default-profile-pic-thumb.jpg";
////                              if(typeof res.properties != "undefined") {
////                                kNickname = res.properties.nickname;
////                                kProfileImage = res.properties.profile_image;
////                                kThumbnailImage = res.properties.thumbnail_image;
////                              }
//                                
//                            }
//                        });
//                    },
//                    fail: function(err) {
//                        alert("카카오톡 로그인에 실패하였습니다.\n다시 접속해주세요.");
//                    }
//                });
            }
            
			// 카카오링크 - 친구 초대하기
			function sendLink() {
				Kakao.Link.sendDefault({
					objectType: 'feed',
					content: {
					  title: 'Groocoin (그루코인)',
					  description: '그루코인 에어드랍 이벤트!\n룰렛 돌리고 그루코인 무료로 받아가세요 (선착순 1000명).',
					  imageUrl: 'https://pbs.twimg.com/media/Doy2_yNUYAAY5ao.jpg',
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
						  mobileWebUrl: 'http://pf.kakao.com/_rAxbwj/31138151',
						  webUrl: 'http://pf.kakao.com/_rAxbwj/31138151'
						}
					  }
					]
				});
			}
			//]]>
		</script>
	</body>
</html>
