<html>
	<head>
		<title>Groo Roulette</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
		<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		</head>
		<style>
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

		<script>
			//<![CDATA[
            $(document).ready(function(){
                Kakao.init('52084ca1d0ecefc89205a8cb188da198');
                loginWithKakao();
            });
            
            function loginWithKakao() {
                // 로그인 창을 띄웁니다.
                Kakao.Auth.login({
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
