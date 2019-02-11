<?php
	include_once("inc/db_conn.php");
	include_once("inc/device_check.php");

	if(isset($_POST['subscribe_Email'])) {
		
		if(isset($_POST['g-recaptcha-response'])){
			$captcha=$_POST['g-recaptcha-response'];
		}

		$secretKey = "6LeNfHAUAAAAANq4kPbK9uuUua9RjSVwSzjhPwtV";
		$ip = $_SERVER['REMOTE_ADDR'];

		$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
		$responseKeys = json_decode($response,true);

		if(intval($responseKeys["success"]) !== 1) {
			echo '<script>alert("Sorry, Captcha Test Fail");</script>';
		} else {
			$email = addslashes($_POST['subscribe_Email']);

			$sql="INSERT INTO subscribe (
							ID
							, EMAIL
						)
						VALUES (
							NULL
							, '". $email ."'
						)";

			$result = mysqli_query($db,$sql);
			
			echo '<script>alert("Thank you for subscribe");</script>';
		}
	}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>그루코인</title>
    
    <meta name="description" content="블록체인 기반 뷰티 광고 서비스">
    <meta property="og:title" content="그루코인" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://groo.io/" />
    <meta property="og:image" content="https://groo.io/assets/img/open-graph.png?v=1" />
    <meta property="og:description" content="블록체인 기반 뷰티 광고 서비스" />
    <meta property="og:locale" content="ko_KR" />
    
    <link rel="canonical" href="https://groo.io/ko.php">
    <link rel="stylesheet" href="assets/style/reset.css">
    <link rel="stylesheet" href="assets/lib/slick.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900">
    <link rel="stylesheet" href="assets/style/main.css?v=3">
    <link rel="stylesheet" href="assets/style/font.ko.css">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico?v=3">
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
        .btn2 {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        
        .btn-danger {
            color: #dc3545;
            background-color: transparent;
            background-image: none;
            border-color: #dc3545;
        }
        
        .btn-primary {
            color: #007bff;
            background-color: transparent;
            background-image: none;
            border-color: #007bff;
        }
        
        .btn-dark {
            color: #343a40;
            background-color: transparent;
            background-image: none;
            border-color: #343a40;
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="contents no-select">
            <div class="header--logo"><a href="#"><img src="assets/img/logo.svg" alt="GROO Coin Logo"></a></div>
            <div class="header--mobile-menu pointer">
                <img class="menu-open" src="assets/img/icon-menu.svg" alt="menu open">
                <img class="menu-close" src="assets/img/icon-close.svg" alt="menu close">
            </div>
            <nav class="header--nav">
                <ul class="header--nav--ul">
                    <li><a href="#section-about">About</a></li>
                    <li><a href="#section-roadmap">Roadmap</a></li>
                    <li><a href="#section-dist">Distribution</a></li>
                    <li><a href="#section-team">Team</a></li>
                    <li><a href="#section-partners">Partners</a></li>
                    <li><a href="#section-community">Community</a></li>
                </ul>
                <div class="header--lang">
                    <a class="lang--current" href="javascript://">한국어</a>
                    <ul class="lang--ul">
                        <li><a href="/">English</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <section class="section section-main">
        <div class="section-main--title-wrap Aligner-item--top">
            <h1 class="section-main--title center" id="typingEffect">
				<? if(!is_Mobile()) { ?>
					<img id="logo" src="assets/img/logo.png" alt="GROO Coin Logo" style="width:40px; margin-right:10px; vertical-align:-5px; display:none;"><span style="">Groocoin</span><br>
				<? } ?>
				Beauty Advertising Meets Blockchain
			</h1>
        </div>
        <div id="clock" class="clock"></div>
        <div class="center">
            <div class="btn btn--white scrollbtn" href="#section-about">더 알아보기</div>
        </div>
    </section>

    <img src="assets/img/main_bg_1.jpg" alt="" style="display: none;">
    <img src="assets/img/main_bg_2.jpg" alt="" style="display: none;">
    <img src="assets/img/main_bg_3.jpg" alt="" style="display: none;">
    <img src="assets/img/main_bg_4.jpg" alt="" style="display: none;">
    <img src="assets/img/main_bg_5.jpg" alt="" style="display: none;">

    <section class="section-two row">
        <div class="section-two--left d-w-50 m-w-100">
            <h3 class="section-two--label">Connect & Share<br/>Your Billions of Grooming<br/>Knowledge</h3>
            <div class="mr-30">
                <a class="btn btn--black btn--sm">White Paper</a>
                <div class="section-two--papers show">
                    <a class="btn btn--white btn--sm mr-5" id="downloadPaper">English</a>
                    <a class="btn btn--white btn--sm" id="downloadPaperKor">한국어</a>
                </div>
            </div>
        </div>
        <div class="section-two--right d-w-50 m-w-100">
            <h3 class="section-two--label center">Groocoin의 최신 뉴스를 구독하세요!</h3>
            <div class="input-btn">
				<form name="subscribe" method="post" style="margin:0px; padding:0px;">
                	<input id="subscribeValue" name="subscribe_Email" type="text" placeholder="이메일 주소 입력" class="input-btn--input" />
					<button class="g-recaptcha"
						data-sitekey="6LeNfHAUAAAAAGzFXgS3b0Ypz2aATlbgjJR0wTJe"
						data-callback="formSubmit">
					</button>
				
                	<a class="btn btn--black input-btn--btn" id="btnSubscribe">구독하기</a>
				</form>
            </div>
        </div>
    </section>

    
    <section class="section section-about" id="section-about">
        <div class="contents">
            <div class="section-about--item appear">
                <img src="assets/img/section_about_1.png" alt="Image for What is Groo?">
                <div class="section-about--text">
                    <h1 class="title section-about--title">What is Groo?</h1>
                    <p class="section-about--cont">Groocoin 프로젝트는 기업, 여러 소셜 미디어와 블로그에서 활동하는 콘텐츠 제작자 들과의 적극적인 파트너쉽을 통한 양질의 컨텐츠 축적, 전세계에 흩어져 있는 해당 컨텐츠 들을 통합하는 뷰티 컨텐츠 광고 미디어 플랫폼의 제작을 목표로 하고 있습니다.</p>
                </div>
            </div>
            <div class="section-about--item appear">
                <img src="assets/img/section_about_2.png" alt="Image for Why Groo?">
                <div class="section-about--text">
                    <h1 class="title section-about--title">Why Groo?</h1>
                    <p class="section-about--cont">콘텐츠 제작자들은 본인에게 적절한 광고플랫폼을 찾기 위해 항상 노력을 하고 있으나, 소셜미디어를 포함한 대부분의 광고 플랫폼들은 그들의 효과적인 서비스를 이용하는데 많은 비용을 요구 합니다.</p>
                </div>
            </div>
            <div class="section-about--item appear">
                <img src="assets/img/section_about_3.png" alt="Image for How Groo?">
                <div class="section-about--text">
                    <h1 class="title section-about--title">How Groo?</h1>
                    <p class="section-about--cont">Groo Dapp 플랫폼은 콘텐츠 제작자에게 동일한 서비스 비용을 제공하지만, 해당 콘텐츠들은 소비자 들로부터 다양한 평가 및 피드백 등을 통해 콘텐츠의 광고 노출에서 이점을 얻게 됩니다.<br>소비자들의 평가 데이터들은 익명화된 상태로 블록체인 네트워크에 기록이 되며 콘텐츠 제작자들의 신규 콘텐츠 제작을 위한 피드백 용도로 전달이 됩니다.</p>
                </div>
            </div>
        </div>
    </section>


	<section class="section section-influencers" id="section-influencers">
        <div class="contents appear">
            <h1 class="title center white">
				첫 번째
				<span class="mobile-only"><br/></span>
				Groo 플랫폼
			</h1>
            <div class="influencers--wrap">
				<span class="pc-only">
                	<img src="assets/img/section_viviscreen_content_pc_ko.png" alt="" style="max-width:90%;">
				</span>
				<span class="mobile-only">
					<img src="assets/img/section_viviscreen_content_mobile_ko.png" alt=""  style="width:90%;">
				</span>
            </div>
        </div>
    </section>
	
    <section class="section section-slide">
        <div class="appear contents">
            <h1 class="title center">What We Can Do?</h1>
            <ul class="slider">
                <li class="slider--li">
                    <h3 class="slider--h3">모바일 생태계</h3>
                    <p class="slider--p">다양한 기업, 개인 광고주들이 희망하는 뷰티 컨텐츠 트렌드 정보를 쉽고 빠르게 신청/시청 할 수 있는 신개념 광고 플랫폼 입니다.</p>
                    <img class="slider--img" src="assets/img/section_slide_0.png?v=1" alt="">
                </li>
                <li class="slider--li">
                    <h3 class="slider--h3">플랫폼 활동 보상</h3>
                    <p class="slider--p">활동 보상은 각각의 앱 사용자가 특정 광고 컨텐츠의 시청, up  votes 혹은 해당 광고주의 채널을 구독함으로써 산정됩니다.</p>
                    <img class="slider--img" src="assets/img/section_slide_1.png" alt="">
                </li>
                <li class="slider--li">
                    <h3 class="slider--h3">셀프 - 광고 서비스</h3>
                    <p class="slider--p">Groo Dapp 서비스는 기업, 개인 광고주들의 광고 컨텐츠를 모아서 관리할 수 있는 Self-Advertisement 플랫폼을 제공 합니다. 해당 플랫폼은 앱 사용자들에 의해 구독이 가능하며 광고 컨텐츠 뿐만이 아니라 개인의 플랫폼에 의한 광고 효과를 기대할 수 있습니다.</p>
                    <img class="slider--img" src="assets/img/section_slide_2.png" alt="">
                </li>
                <li class="slider--li">
                    <h3 class="slider--h3">마케팅 분석</h3>
                    <p class="slider--p">익명화된 사용자들의 메이크업, 선호 화장품의 Big data 분석을 통해 활용 가능한 데이터로 변환 및 추출하여 파트너 사들이 마케팅 참조 데이터로 활용이 가능한 Private API를 제작하여 제공할 예정입니다.</p>
                    <img class="slider--img" src="assets/img/section_slide_3.png" alt="">
                </li>
            </ul>
        </div>


        <div class="section-roadmap appear" id="section-roadmap">
            <h1 class="title center white">로드 맵</h1>
            
            <ul class="roadmap-ul">
                <li class="roadmap-li year">
                    <h3 class="roadmap-title">2018 ~ 2Q</h3>
                    <p class="roadmap-body">프로젝트 개발</p>
                </li>
                <li class="roadmap-li">
                    <h3 class="roadmap-title">3Q</h3>
                    <p class="roadmap-body">
						스마트계약 개발
					</p>
                </li>
                <li class="roadmap-li last">
                    <h3 class="roadmap-title">4Q</h3>
                    <p class="roadmap-body">
						Groocoin 백서 1.0 출시<br>
						API 스펙 공개 및 파트너십 확대<br>
						&nbsp;
					</p>
                </li>

                <li class="roadmap-li">
                    <h3 class="roadmap-title">2019 1Q</h3>
                    <p class="roadmap-body">첫 번째 Dapp(ViVi Screen) 데모 베타버전 출시</p>
                </li>
                <li class="roadmap-li">
                    <h3 class="roadmap-title">2Q</h3>
                    <p class="roadmap-body">첫 번째 Dapp(ViVi Screen) 공식 출시</p>
                </li>
                <li class="roadmap-li">
                    <h3 class="roadmap-title">3Q</h3>
                    <p class="roadmap-body">두 번째 Dapp 개발 (추후 공지 예정)</p>
                </li>
                <li class="roadmap-li">
                    <h3 class="roadmap-title">4Q</h3>
                    <p class="roadmap-body">글로벌 버전 확장 출시 - 아시아권 국가<br>&nbsp;</p>
                </li>
				
				<li class="roadmap-li year">
                    <h3 class="roadmap-title">2020 2Q</h3>
                    <p class="roadmap-body">
						글로벌 버전 확장 출시 - 비 아시아권 국가
					</p>
                </li>
            </ul>
        </div>



        <div class="section-dist appear" id="section-dist">
            <h1 class="title center white">토큰 분배</h1>
			<div style="margin-bottom: 34px; color: #fff; font-weight: 300;">
				<span class="pc-only">스마트계약 주소 : <a href="https://etherscan.io/token/0xc17195bde49d70cefcf8a9f2ee1759ffc27bf0b1" target="_blank"  style="color:#fff; text-decoration: underline;">0xc17195bde49d70cefcf8a9f2ee1759ffc27bf0b1</a></span>
			</div>
            <div class="row">
                <div class="section-dist--left d-w-50 m-w-100">
                    <img src="assets/img/section_dist_graph.png?v=1" alt="Token Distribution Graph">
                </div>
                <div class="section-dist--right d-w-50 m-w-100">
                    <div class="section-dist--values">
                        <span class="section-dist--value"><span class="section-dist--total">총 발행량</span>30,000,000,000</span>
                        <span class="section-dist--unit">GROO</span>
                    </div>
                    <div class="section-dist--dist">
                        <table class="section-dist--dist-table">
                            <tbody>
                                <tr>
                                    <td>토큰 판매</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>마케팅</td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>플랫폼 보상</td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>개발팀</td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>어드바이저</td>
                                    <td>5%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section section-joy">
        <div class="joy--img-wrap">
            <img class="joy--img joy--img-top" src="assets/img/section_evolving_1.png" alt="">
            <img class="joy--img joy--img-bottom" src="assets/img/section_evolving_2.png" alt="">
            <span class="joy--img-copyright2">Copyright© NCSOFT Corporation. <br> All Rights Reserved</span>
        </div>
        <div class="appear">
            <h1 class="title white joy--title">플랫폼 활동의 즐거움!</h1>
            <h3 class="joy--sub-title add-mg-b ">Who We Are?</h3>
            <p class="joy--desc joy--desc-sub">
                With 20 Milions+ of Users<br>
                Over 60+ Countries<br>
                No.1 Influencer on Music Arcade Game
            </p>
            <p class="joy--desc joy--desc-top">Groo Dapp 은 전통적인 광고 플랫폼 활동에서 나아가, 플랫폼 활동 자체를 즐겁게 할 수 있는 여러 가지 요소들을 포함한 Multi Entertainment 플랫폼입니다.</p>
            <p class="joy--desc">Groo Dapp 플랫폼의 주 고객은 여성들입니다. Groocoin 팀원들은 온라인 커뮤니티 기반 뮤직 아케이드 게임인 Audition, Love Beat의 핵심 개발진들로 구성되어 있으며, 기존 비즈니스 모델의 사례를 통해 주 고객층을 세심하게 배려하는 플랫폼 제작을 우선순위로 하고 있습니다.</p>
        </div>
    </section>



    <!-- <section class="section section-partners">
        <h1 class="title center add-mg-b">Strategic Partners</h1>
    </section> -->
    <!--  -->
    <!--  -->
    <!-- partners 채우고 아래 inline-style 삭제 -->
    <!--  -->
    <!--  -->
    <section class="section section-team bg-gray appear" id="section-team" style="padding-top: 100px;">
        <h1 class="title center add-mg-b">Team Members</h1>
        <ul class="team--ul contents">
            <li class="team--li">
                <div class="team--profile">
                    <img src="assets/img/p1.png" alt="W.M Sim">
                </div>
                <a class="team--name linkedin" target="_blank" href="https://www.linkedin.com/in/wonmoon-sim-5637875a/">W.M Sim</a>
                <div class="team--roll">CEO</div>
                <div class="team--desc">
                    Dev Director, NURIDA<br>
                    CEO, BEATRAIN<br>
                    Dev Director, Crazy Diamond<br>
                    Design Director, T3 Entertainment<br>
                    <!-- Design Director, HIWIN<br> -->
                    <!-- Kyung Hee Univ -->
                </div>
            </li>
            <li class="team--li">
                <div class="team--profile">
                    <img src="assets/img/p10.png" alt="J.M Choi">
                </div>
                <a class="team--name linkedin" target="_blank" href="https://www.linkedin.com/in/underboychoi/">J.M Choi</a>
                <div class="team--roll">Executive Project Manager</div>
                <div class="team--desc">
                    Executive PM, Golfzone&Entertainment<br>
                    Project Manager, Crazy Diamond <br>
                    Project Manager, NCSOFT <br>
                    Publishing Manager, MGAME
                </div>
            </li>
            <li class="team--li">
                <div class="team--profile">
                    <img src="assets/img/p11.png" alt="D.Y Kim">
                </div>
                <div class="team--name">D.Y Kim</div>
                <div class="team--roll">Development Director</div>
                <div class="team--desc">
                    Programming Manager, ATEAM<br>
                    Senior Developer, JOYCITY<br>
                    Senior Developer, NEOWIZGAMES<br>
                    Senior Developer, JCE Entertainment
                </div>
            </li>
            <li class="team--li">
                <div class="team--profile">
                    <img src="assets/img/p12.png" alt="Y.H Kim">
                </div>
                <a class="team--name linkedin" target="_blank" href="https://www.linkedin.com/in/yang-whan-kim-49a953167">Y.H Kim</a>
                <div class="team--roll">Business Development</div>
                <div class="team--desc">
                    Director, Captains<br>
                    Project Manager, T3 Entertainment<br>
                    Project Manager, BattleGame<br>
                    Project Manager, HanbitSoft
                </div>
            </li>
            <li class="team--li">
                <div class="team--profile">
                    <img src="assets/img/p2.png" alt="J.K Jang">
                </div>
                <a class="team--name linkedin" target="_blank" href="https://www.linkedin.com/in/jangjungkyu">J.K Jang</a>
                <div class="team--roll">Intermediate Developer</div>
                <div class="team--desc">
                    System Engineer, eBay Korea<br>
                    Software Developer, Samsung<br>
                    Android Developer, Vital Hint<br>
                    <!-- Software Developer, APPKNOT<br> -->
                    Dankook Univ.     
                </div>
            </li>
            <li class="team--li">
                <div class="team--profile">
                    <img src="assets/img/p3.png" alt="Sean Jo">
                </div>
                <a class="team--name linkedin" target="_blank" href="https://www.linkedin.com/in/sean-jo-18156a6a">Sean Jo</a>
                <div class="team--roll">Operations Manager</div>
                <div class="team--desc">
                    CSO, HSM<br>
                    B2B Coordinator, EC21<br>
                    B2B Coordinator, KITA<br>
                    Dankook Univ.
                </div>
            </li>
            <li class="team--li">
                <div class="team--profile">
                    <img src="assets/img/p4.jpg?v=1" alt="H.C Kim">
                </div>
                <a class="team--name linkedin" target="_blank" href="https://www.linkedin.com/in/hyung-cheol-kim-0391b2112">H.C Kim</a>
                <div class="team--roll">Intermediate Developer</div>
                <div class="team--desc">
                    Web Developer, ANYFIVE<br>
                    Web Developer, LG CNS<br>
                    Cloud Architect, Oracle<br>
                    IT Security Engineer, KISA
                </div>
            </li>
            <li class="team--li">
                <div class="team--profile">
                    <img src="assets/img/p6.png" alt="J.H Park">
                </div>
                <a class="team--name linkedin" target="_blank" href="https://www.linkedin.com/in/cnaa97">J.H Park</a>
                <div class="team--roll">Frontend Developer</div>
                <div class="team--desc">
                    Frontend Developer, Bankware Global<br>
                    UX/UI Designer, BeNative<br>
                    KookMin Univ.
                </div>
            </li>
            <!-- <li class="team--li">
                <div class="team--profile">
                    <img src="assets/img/p8.png" alt="Y.H Kong">
                </div>
                <div class="team--name">Y.H Kong</div>
                <div class="team--roll">Marketing Strategy</div>
                <div class="team--desc">
                </div>
            </li> -->
        </ul>
    </section>



    <!-- <section class="section section-adviser appear">
        <h1 class="title center white add-mg-b">Advisers</h1>
        <div class="adviser--outer center">
            <div class="adviser--inner"></div>
        </div>
    </section> -->



    <section class="section section-blockchain-partners" id="section-partners">
		<h1 class="title center white add-mg-b">블록체인 파트너사</h1>
		
		<div class="center" style="max-width: 1200px; padding-left:20px; padding-right:20px;">
			<div class="partner-box">
				<a href="https://www.stex.com/" target="_blank"><img src="assets/img/stex.png?v=1" class="center" style="width:70%;"></a>
			</div>
<!--
			<div class="partner-box">
            	<a href="https://www.bitc3.com" target="_blank"><img src="assets/img/bitc3.png?v=1" class="center" style="width:70%;"></a>
			</div>
-->
			<div class="partner-box">
				<a href="https://exchange.inerex.io/" target="_blank"><img src="assets/img/inerex.png?v=1" class="center" style="width:70%;"></a>
			</div>
			<div class="partner-box">
				<a href="https://forkdelta.app/#!/trade/0xc17195bde49d70cefcf8a9f2ee1759ffc27bf0b1-ETH" target="_blank"><img src="assets/img/Forkdelta.png?v=1"  class="center" style="width:70%;"></a>
			</div>
			<div class="partner-box">
				<a href="https://tokenjar.io/GROO" target="_blank"><img src="assets/img/tokenjar.png?v=1" class="center" style="width:70%;"></a>
			</div>
            
            
			<div class="partner-box">
            	<a href="https://metamask.io/" target="_blank"><img src="assets/img/metamask.png?v=1" class="center" style="width:70%;"></a>
			</div>
			<div class="partner-box">
				<a href="https://www.myetherwallet.com/" target="_blank"><img src="assets/img/myetherwallet-logo.png?v=1" class="center" style="width:70%;"></a>
			</div>
			<div class="partner-box">
				<a href="https://token.im/" target="_blank"><img src="assets/img/imTokenLogo.png?v=1" class="center" style="width:70%;"></a>
			</div>
			<div class="partner-box">
				<a href="https://trustwallet.com/" target="_blank"><img src="assets/img/trustwallet.png?v=1" class="center" style="width:70%;"></a>
			</div>
			
			<div class="partner-box">
            	<a href="https://www.ledger.com/" target="_blank"><img src="assets/img/ledger.png?v=1" class="center" style="width:70%;"></a>
			</div>
			<div class="partner-box">
				<a href="https://trezor.io/" target="_blank"><img src="assets/img/trezor.png?v=1" class="center" style="width:70%;"></a>
			</div>
			<div class="partner-box">
				<a href="https://www.coingecko.com/en/coins/groocoin" target="_blank"><img src="assets/img/coingecko.png?v=1" class="center" style="width:70%;"></a>
			</div>
			<div class="partner-box">
				<a href="https://coinmarketcal.com/" target="_blank"><img src="assets/img/Coinmarketcal.png?v=1" class="center" style="width:70%;"></a>
			</div>
			
			<div class="partner-box">
				<a href="http://sharex.co.kr/" target="_blank"><img src="assets/img/sharex.png?v=1" class="center" style="width:70%;"></a>
			</div>
			<div class="partner-box">
				<a href="http://imblock.network/" target="_blank"><img src="assets/img/imblock.png?v=1" class="center" style="width:70%;"></a>
			</div>
			<div class="partner-box">
				<a href="http://beebit.co.kr" target="_blank"><img src="assets/img/beebit.png?v=1" class="center" style="width:70%;"></a>
			</div>
		</div>
	</section>
	
	<section class="section section-strategic-partners" id="section-partners">
		<h1 class="title center white add-mg-b" style="margin-bottom:50px;">전략 파트너사</h1>
		
		<div class="center" style="max-width: 1200px; padding-left:20px; padding-right:20px;">
			<div class="partner-box">
				<img src="assets/img/partner-polar.png" class="center" style="width:100%;">
			</div>
			<div class="partner-box">
				<img src="assets/img/partner-teeki.png" class="center" style="width:100%;">
			</div>
			<div class="partner-box">
				<img src="assets/img/partner-bigelow.png" class="center" style="width:100%;">
			</div>
			<div class="partner-box">
				<img src="assets/img/partner-ucf.png" class="center" style="width:100%;">
			</div>
			
			<div class="partner-box">
				<img src="assets/img/partner-greenapple.png" class="center" style="width:100%;">
			</div>
			<div class="partner-box">
				<img src="assets/img/partner-tazo.png" class="center" style="width:100%;">
			</div>
			<div class="partner-box">
				<img src="assets/img/partner-lakme.png" class="center" style="width:100%;">
			</div>
			<div class="partner-box">
				<img src="assets/img/partner-satoshi-capital.png" class="center" style="width:100%;">
			</div>
			
			<!-- 3 -->
			<div class="partner-box2">
				<img src="assets/img/partner-society.png" class="center" style="width:100%;">
			</div>
			<div class="partner-box2">
				<img src="assets/img/partner-greengarden.png" class="center" style="width:100%;">
			</div>
			<div class="partner-box2">
				<img src="assets/img/partner-kao.png" class="center" style="width:100%;">
			</div>
			<div class="partner-box2">
				<img src="assets/img/partner-duncans.png" class="center" style="width:100%;">
			</div>
			
			<!-- 4 -->
			<div class="partner-box3">
				<img src="assets/img/partner-alphacoin.png" class="center" style="width:100%;">
			</div>
			<div class="partner-box3">
				<img src="assets/img/partner-skinna.png" class="center" style="width:100%;">
			</div>
			<div class="partner-box3">
				<img src="assets/img/partner-naunau.png" class="center" style="width:100%;">
			</div>
			<div class="partner-box3">
				<img src="assets/img/partner-prana.png" class="center" style="width:100%;">
			</div>
		</div>
	</section>
    
    
    
    <section class="section section-community bg-gray" id="section-community">
        <div class="contents">
            <h1 class="title">Community</h1>
            <div class="community--wrapper">
                <ul>
<!--					<li><a href="mailto:support@groo.io" target="_blank"><h3>Email</h3><img class="hover-scale" src="assets/img/icon-email.png" alt="Email"></a></li>-->
                    <li><a href="https://twitter.com/Groocoinio" target="_blank"><h3>Twitter</h3><img class="hover-scale" src="assets/img/icon-twitter.svg" alt="Twitter"></a></li>
<!--                    <li><a href="javascript:alert('Coming Soon');" target="_blank"><h3>Discord</h3><img class="hover-scale" src="assets/img/icon-discord.svg" alt="discord"></a></li>-->
                    <li><a href="https://t.me/groocoin_official_en" target="_blank"><h3>Telegram</h3><img class="hover-scale" src="assets/img/icon-telegram.svg" alt="telegram"></a></li>
                    <li><a href="https://open.kakao.com/o/gsb5nyM" target="_blank"><h3>KakaoTalk</h3><img class="hover-scale" src="assets/img/icon-kakaotalk.svg" alt="KakaoTalk"></a></li>
                </ul>
            </div>
        </div>
    </section>




    <footer class="footer">
        <div class="contents">
            <div class="footer--logo"><a href="#"><img src="assets/img/logo.svg" alt="GROO Coin logo"></a></div>
            <div class="footer--copyright">
				Contact : <a href="mailto:support@groo.io">support@groo.io</a><br>
				Copyright © 2018 All Rights Reserved
			</div>
        </div>
    </footer>    
    
    <span itemscope="" itemtype="http://schema.org/Organization">
        <link itemprop="url" href="http://groo.io">
        <a itemprop="sameAs" href="https://twitter.com/Groocoinio"></a>
        <a itemprop="sameAs" href="https://medium.com/@groocoinio"></a>
        <a itemprop="sameAs" href="https://t.me/groocoin_official_en"></a>
        <a itemprop="sameAs" href="https://github.com/GroocoinDev"></a>
        <a itemprop="sameAs" href="https://bitcointalk.org/index.php?topic=5072274"></a>
        <a itemprop="sameAs" href="https://groo.io/assets/whitepaper/Groocoin_Whitepaper_v1.0_EN.pdf"></a>        
    </span>

<!--
    <div id="banner" style="position: fixed; top:0px; bottom:0px; left:0px; right:0px; background: rgba(0,0,0,0.70); z-index: 99;">
        <div class="center" style="margin-top:10%;">
            <img src="assets/img/ieo_banner_kr.jpg" style="width:90%; max-width: 600px;" />
        </div>
        <div class="center" style="padding-bottom:11px; padding-top: 11px; background: #ffffff; width: 90%; max-width: 600px;">
            <a href="https://exchange.inerex.io" target="_blank"><button class="btn2 btn-danger">이너렉스 접속</button></a>
            <a href="http://sharex.co.kr" target="_blank"><button class="btn2 btn-primary">쉐어렉스 접속</button></a>
            <button class="btn2 btn-dark" onclick="javascript:$('#banner').fadeOut();">창닫기</button>
        </div>
    </div>
-->


    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="assets/lib/jquery.countdown.min.js"></script>
    <script src="assets/lib/typeit.min.js?v=1"></script>
    <script src="assets/lib/Oppear_1.1.2.min.js"></script>
    <script src="assets/lib/slick.min.js"></script>
    <script src="assets/lib/lodash.min.js"></script>
    <script>

        $(document).ready(function () {

            var $root = $('html, body');
            var $header = $('.header');

            /* 메인 상단 배경 변경 */
            var currentBg = [1, 2, 3];
            var currentBgIndex = 0;
            setInterval(function(){
                $('.section-main').fadeTo(2000, 0.8, function() {
                    $('.section-main').removeClass('bg' + currentBg[currentBgIndex]);
                    currentBgIndex += 1;
                    if (!currentBg[currentBgIndex]) {
                        currentBgIndex = 0;
                    }
                    $('.section-main').addClass('bg' + currentBg[currentBgIndex]);
                }).fadeTo(2000, 1);
            }, 10000);


            /* 메인 상단 타이머 */
//            $('#clock').countdown('2018/07/04 00:00:00', function (event) {
//                $(this).html(event.strftime(''
//                    + '<span class="clock--bold">%d</span><span class="clock--days">DAYS</span>'
//                    + '<span class="clock--bold">%H</span><span class="clock--dot">:</span>'
//                    + '<span class="clock--bold">%M</span><span class="clock--dot">:</span>'
//                    + '<span>%S</span>'));
//            });


            /* typing effect */
			$("#logo").show()
			new TypeIt('#typingEffect');

            /* oppear effect */
            $('.appear').Oppear({
                transition : '1s',
            });
            
            /* 슬라이더 */
            var moveSlider = 0;
            $('.slider').slick({
                dots: true,
            });

            /* 스크롤 위치에 따른 헤더 처리 */
            window.pageYOffset > 0 && $header.addClass('scroll');
            $(window).on('scroll', _.throttle(function(){
                var scrollTop = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop);

                if (scrollTop && scrollTop > 100 ) {
                    $header.addClass('scroll');
                } else {
                    $header.hasClass('scroll') && $header.removeClass('scroll');
                }

                // 스크롤 이동 시 슬라이드 이동
                if ($('.slider').offset().top > document.documentElement.scrollTop && document.documentElement.scrollTop > $('.slider').offset().top - 200) {
                    if (moveSlider < 2) {
                        moveSlider++;
                        $('.slick-next').trigger('click');
                    }
                }
            }, 100));

            /* 모바일 메뉴 */
            $('.header--mobile-menu').on('click', function(){
                $('.header').toggleClass('header--nav-show');
            });
            $('.header--nav--ul > li > a, .scrollbtn').on('click', function(){
                $root.animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 400);
                $('.header').removeClass('header--nav-show');
            });
            
            /* 구독 버튼 */
            $('#btnSubscribe').click(function(){
                formSubmit();
            });

            /* 화이트페이퍼 다운 */
            $('#downloadPaper').click(function(){
				//alert('Coming Soon');
                window.open('/assets/whitepaper/Groocoin_Whitepaper_v1.0_EN.pdf');
            });

            $('#downloadPaperKor').click(function(){
				//alert('Coming Soon');
                window.open('/assets/whitepaper/Groocoin_Whitepaper_v1.0_KO.pdf');
            });

//            $('.section-two--left').on('mouseenter', function(){
//                !$('.section-two--papers').hasClass('show') && $('.section-two--papers').addClass('show');
//            });
//
//            $('.section-two--left').on('mouseleave', function(){
//                $('.section-two--papers').hasClass('show') && $('.section-two--papers').removeClass('show');
//            });
			
			$('input[type="text"]').keydown(function() {
				if (event.keyCode === 13) {
					event.preventDefault();
				}
			});

        });

		function formSubmit() {
			var inputValue = $('#subscribeValue').val();
			if(inputValue == '') {
				alert('이메일 주소를 입력해주세요.');
				return;
			}
			
			var exptext = /^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-]+/;
			if(exptext.test(inputValue) == false){
				alert("유효하지 않은 이메일 주소입니다.");
				return;
			}
			document.subscribe.submit();
		}

    </script>


</body>
</html>