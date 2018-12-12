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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Groocoin</title>
    
    <meta property="og:title" content="Groocoin" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://groo.io/" />
    <meta property="og:image" content="https://groo.io/assets/img/open-graph.png?v=1" />
    <meta property="og:description" content="Beauty Advertising Meets Blockchain. Connect & Share your Billions of Grooming knowledge." />
    <meta property="og:locale" content="en_GB" />

    <link rel="stylesheet" href="assets/style/reset.css">
    <link rel="stylesheet" href="assets/lib/slick.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900">
    <link rel="stylesheet" href="assets/style/main.css?v=2">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico?v=3">
	<script src='https://www.google.com/recaptcha/api.js'></script>
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
                    <a class="lang--current" href="javascript://">English</a>
                    <ul class="lang--ul">
                        <li><a href="/ko.php">한국어</a></li>
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
            <div class="btn btn--white scrollbtn" href="#section-about">Read More</div>
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
<!--            <a class="btn btn--black mr-30" id="downloadPaper">White Paper</a>-->
			<div class="mr-30">
				<a class="btn btn--black btn--sm">White Paper</a>
				<div class="section-two--papers show">
					<a class="btn btn--white btn--sm mr-5" id="downloadPaper">English</a>
					<a class="btn btn--white btn--sm" id="downloadPaperKor">한국어</a>
            	</div>
			</div>
        </div>
        <div class="section-two--right d-w-50 m-w-100">
            <h3 class="section-two--label center">Join Our Mailing List</h3>
            <div class="input-btn">
				<form name="subscribe" method="post" style="margin:0px; padding:0px;">
                	<input id="subscribeValue" name="subscribe_Email" type="text" placeholder="Your Email Address" class="input-btn--input" />
					<button id="submitbtn" class="g-recaptcha"
						data-sitekey="6LeNfHAUAAAAAGzFXgS3b0Ypz2aATlbgjJR0wTJe"
						data-callback="formSubmit">
					</button>
				
                	<a class="btn btn--black input-btn--btn" id="btnSubscribe">Subscribe</a>
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
                    <p class="section-about--cont">The Groocoin project aims to creation of the advertising platform of beauty contents to consolidate the relevant contents diversified throughout the whole world</p>
                </div>
            </div>
            <div class="section-about--item appear">
                <img src="assets/img/section_about_2.png" alt="Image for Why Groo?">
                <div class="section-about--text">
                    <h1 class="title section-about--title">Why Groo?</h1>
                    <p class="section-about--cont">The contents creators are starving to find out suitable advertising platform but contents presented in most of the advertising platforms including social media, they request very high cost for using their efficient product.</p>
                </div>
            </div>
            <div class="section-about--item appear">
                <img src="assets/img/section_about_3.png" alt="Image for How Groo?">
                <div class="section-about--text">
                    <h1 class="title section-about--title">How Groo?</h1>
                    <p class="section-about--cont">The Groo Dapp Platform is provide equivalent cost of service to the contents creators, but their contents to have the diversified evaluation feedback from different consumers and get advantage in a impression.<br>Evaluated data is automatically recorded on the blockchain network anonymously and forward to contents creators for their contents feedback purpose.</p>
                </div>
            </div>
        </div>
    </section>



    <section class="section section-influencers" id="section-influencers">
        <div class="contents appear">
            <h1 class="title center white">
				The First
				<span class="mobile-only"><br/></span>
				Groo Platform
			</h1>
            <div class="influencers--wrap">
				<span class="pc-only">
                	<img src="assets/img/section_viviscreen_content_pc.png" alt="" style="max-width:90%;">
				</span>
				<span class="mobile-only">
					<img src="assets/img/section_viviscreen_content_mobile.png" alt=""  style="width:90%;">
				</span>
            </div>
        </div>
    </section>
	

    <section class="section section-slide">
        <div class="appear contents">
            <h1 class="title center">What We Can Do?</h1>
            <ul class="slider">
                <li class="slider--li">
                    <h3 class="slider--h3">Mobile Ecosystem</h3>
                    <p class="slider--p">Easy and Rapid checking of the Beauty Contents Trend information retained respectively by the diverse types of Companies / Influencers.</p>
                    <img class="slider--img" src="assets/img/section_slide_0.png?v=1" alt="">
                </li>
                <li class="slider--li">
                    <h3 class="slider--h3">Activity Rewards</h3>
                    <p class="slider--p">The Activity rewards is determined on the basis of the activities for watching of advertising, up votes and subscribe content creator.</p>
                    <img class="slider--img" src="assets/img/section_slide_1.png" alt="">
                </li>
                <li class="slider--li">
                    <h3 class="slider--h3">Self-Advertisement</h3>
                    <p class="slider--p">Groo Dapp comes with the platform for Self-Advertisement. The Each contents creators and companies can be allowed to carry their advertising on Self-Advertisement platform for subscribed by Dapp users.</p>
                    <img class="slider--img" src="assets/img/section_slide_2.png" alt="">
                </li>
                <li class="slider--li">
                    <h3 class="slider--h3">Marketing Analytics</h3>
                    <p class="slider--p">The data which can be utilized is planned to be extracted and supplied to the partnership companies in a safe way through the Private API based on the analysis of big data for user preferences</p>
                    <img class="slider--img" src="assets/img/section_slide_3.png" alt="">
                </li>
            </ul>
        </div>


        <div class="section-roadmap appear" id="section-roadmap">
            <h1 class="title center white">Roadmap</h1>
            
            <ul class="roadmap-ul">
                <li class="roadmap-li year">
                    <h3 class="roadmap-title">2018 ~ 2Q</h3>
                    <p class="roadmap-body">
						Project Development
					</p>
                </li>
                <li class="roadmap-li">
                    <h3 class="roadmap-title">3Q</h3>
                    <p class="roadmap-body">
						Developing Smart Contract
					</p>
                </li>
                <li class="roadmap-li last">
                    <h3 class="roadmap-title">4Q</h3>
                    <p class="roadmap-body">
						Groocoin White Paper 1.0<br>
						Open API Spec and Partnership cooperation<br>
						&nbsp;
					</p>
                </li>

                <li class="roadmap-li">
                    <h3 class="roadmap-title">2019 1Q</h3>
                    <p class="roadmap-body">
						1st Dapp(ViVi Screen) Beta Launch
					</p>
                </li>
                <li class="roadmap-li">
                    <h3 class="roadmap-title">2Q</h3>
                    <p class="roadmap-body">1st Dapp(ViVi Screen) Officlal Launch</p>
                </li>
                <li class="roadmap-li">
                    <h3 class="roadmap-title">3Q</h3>
                    <p class="roadmap-body">2nd Dapp Development (To be announced)</p>
                </li>
                <li class="roadmap-li">
                    <h3 class="roadmap-title">4Q</h3>
                    <p class="roadmap-body">Global Launch - China, Japan and East Asia<br>&nbsp;</p>
                </li>
				
				<li class="roadmap-li year">
                    <h3 class="roadmap-title">2020 2Q</h3>
                    <p class="roadmap-body">
						Global Launch Phase 2 - Beyond Asia
					</p>
                </li>
            </ul>
        </div>



        <div class="section-dist appear" id="section-dist">
            <h1 class="title center white">Token Distribution</h1>
			<div style="margin-bottom: 34px; color: #fff; font-weight: 300;">
				<span class="pc-only">Contract Address : <a href="https://etherscan.io/token/0xc17195bde49d70cefcf8a9f2ee1759ffc27bf0b1" target="_blank"  style="color:#fff; text-decoration: underline;">0xc17195bde49d70cefcf8a9f2ee1759ffc27bf0b1</a></span>
			</div>
            <div class="row">
                <div class="section-dist--left d-w-50 m-w-100">
                    <img src="assets/img/section_dist_graph.png?v=1" alt="Token Distribution Graph">
                </div>
                <div class="section-dist--right d-w-50 m-w-100">
                    <div class="section-dist--values">
                        <span class="section-dist--value"><span class="section-dist--total">Total</span>30,000,000,000</span>
                        <span class="section-dist--unit">GROO</span>
                    </div>
                    <div class="section-dist--dist">
                        <table class="section-dist--dist-table">
                            <tbody>
                                <tr>
                                    <td>Token sale</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>Marketing</td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>Platform Rewards</td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>Team</td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>Advisors</td>
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
            <h1 class="title white joy--title">The Joy of Activity</h1>
            <h3 class="joy--sub-title add-mg-b ">Who We Are?</h3>
            <p class="joy--desc joy--desc-sub">
                With 20 Milions+ of Users<br>
                Over 60+ Countries<br>
                No.1 Influencer on Music Arcade Game
            </p>
            <p class="joy--desc joy--desc-top">Groo Dapps are Multi Entertainment Platforms that includes plenty of joyful contents for go beyond traditional advertising platform activities and that improve platform activity experience with pleasure.</p>
            <p class="joy--desc">The main customers of the Groo Dapp platform are women. The Groocoin team include core development members of <span class="joy--desc-em">Audition</span>, <span class="joy--desc-em">Love Beat</span> that online community based music arcade game, and prioritizing platform development that takes care of our main customers with examples of our existing business models.</p>
        </div>
    </section>



<!--
     <section class="section section-partners">
        <h1 class="title center add-mg-b">Strategic Partners</h1>
    </section> 
-->
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
<!--
             <li class="team--li">
                <div class="team--profile">
                    <img src="assets/img/p8.png" alt="Y.H Kong">
                </div>
                <div class="team--name">Y.H Kong</div>
                <div class="team--roll">Marketing Strategy</div>
                <div class="team--desc">
                </div>
            </li> 
-->
        </ul>
    </section>



<!--
     <section class="section section-adviser appear">
        <h1 class="title center white add-mg-b">Advisers</h1>
        <div class="adviser--outer center">
            <div class="adviser--inner"></div>
        </div>
    </section> 
-->

	<section class="section section-partners bg-gray" id="section-partners">
		<h1 class="title center white add-mg-b">Blockchain partners</h1>
		
		<div class="center" style="width: 80%; max-width: 950px;">
			<a href="https://www.stex.com/" target="_blank"><img src="assets/img/stex.svg" class="partner--logo" style="width:200px; margin:25px; vertical-align:middle;"></a>
            <a href="https://forkdelta.app/#!/trade/0xc17195bde49d70cefcf8a9f2ee1759ffc27bf0b1-ETH" target="_blank"><img src="assets/img/Forkdelta.png" class="partner--logo" style="width:200px; margin:25px; vertical-align:middle;"></a>
            <a href="https://tokenjar.io/GROO" target="_blank"><img src="assets/img/tokenjar.png" class="partner--logo" style="width:200px; margin:25px; vertical-align:middle;"></a>
            
            <a href="https://metamask.io/" target="_blank"><img src="assets/img/metamask.png" class="partner--logo" style="width:200px; margin:25px; vertical-align:middle;"></a>
            <a href="https://www.myetherwallet.com/" target="_blank"><img src="assets/img/myetherwallet-logo.png" class="partner--logo" style="width:200px; margin:25px; vertical-align:middle;"></a>
            <a href="https://www.ledger.com/" target="_blank"><img src="assets/img/ledger.svg" class="partner--logo" style="width:200px; margin:25px; vertical-align:middle;"></a>
            
            <a href="https://token.im/" target="_blank"><img src="assets/img/imTokenLogo.png" class="partner--logo" style="width:200px; margin:25px; vertical-align:middle;"></a>
            <a href="https://trustwallet.com/" target="_blank"><img src="assets/img/trustwallet.png" class="partner--logo" style="width:200px; margin:25px; vertical-align:middle;"></a>
            <a href="https://coinmarketcal.com/" target="_blank"><img src="assets/img/Coinmarketcal.png" class="partner--logo" style="width:200px; margin:25px; vertical-align:middle;"></a>
		</div>
		
		<h1 class="title center white add-mg-b" style="margin-top:100px;">Strategic Partners</h1>
		
		<div class="partners--outer center appear">
			<div class="partners--inner">
				<div class="row" style="padding-bottom:50px;">
					<div class="section--partner-logo d-w-30 m-w-100">
						<img src="assets/img/logo_momedia.png" class="partner--logo"/>
					</div>
					<div class="section--information d-w-70 m-w-100 partners--information">
						· Distributing Otter-box, Zagg, Mophie, iFrogz, X mini, House of Marely, iWalk, Skech<br/>
						· Channels: Telecom operators, Duty free, APR, Samsung stores, Best mobile, Dynamica
					</div>
				</div>

				<div class="row" style="padding-bottom:50px;">
					<div class="section--partner-logo d-w-30 m-w-100">
						<img src="assets/img/logo_onetto.png" class="partner--logo"/>
					</div>
					<div class="section--information d-w-70 m-w-100 partners--information">
						· High-quality accessories for Smart phones.<br/>
						· Onetto is a leader in the production and approved by partners (Samsung, LG, Philips)
					</div>
				</div>

				<div class="row">
					<div class="section--partner-logo d-w-30 m-w-100">
						<img src="assets/img/logo_smarttap.png" class="partner--logo"/>
					</div>
					<div class="section--information d-w-70 m-w-100 partners--information">
						· One of the top sellers on Amazon.com for Car accessories<br/>
						· Customer-focused, and to meet user needs through continual improvement. 
					</div>
				</div>
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



    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<!--    <script src="assets/lib/jquery.countdown.min.js"></script>-->
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
            }, 4500);


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
				$("#submitbtn").click();
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
			
			$('input[type="text"]').keydown(function() {
				if (event.keyCode === 13) {
					event.preventDefault();
				}
			});
            
        });
		
		function formSubmit() {
			var inputValue = $('#subscribeValue').val();
			if(inputValue == '') {
				alert('Please input Email address.');
				return;
			}
			
			var exptext = /^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-]+/;
			if(exptext.test(inputValue) == false){
				alert("Invaild Email address");
				return;
			}
			document.subscribe.submit();
		}

    </script>


</body>
</html>