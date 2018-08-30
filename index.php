<?
	if(!isset($_GET['accesscode'])) {
		header("Location: comingsoon/index.html");
		exit;
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
    <meta property="og:image" content="https://groo.io/assets/img/open-graph.png" />
    <meta property="og:description" content="Beauty Content Social Media. Connect & Share your Billions of Grooming knowledge." />
    <meta property="og:locale" content="en_GB" />

    <link rel="stylesheet" href="assets/style/reset.css">
    <link rel="stylesheet" href="assets/lib/slick.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900">
    <link rel="stylesheet" href="assets/style/main.css">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico?v=3">
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
                    <li><a href="#section-creators">Creators</a></li>
                    <li><a href="#section-community">Community</a></li>
                </ul>
                <div class="header--lang">
                    <a class="lang--current" href="javascript://">English</a>
                    <ul class="lang--ul">
                        <li><a href="/ko.php">Korean</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <section class="section section-main">
        <div class="section-main--title-wrap Aligner-item--top">
            <h1 class="section-main--title center" id="typingEffect" data-typeit-whattotype="1st Pre-Sale starts on July">1st Pre-Sale starts on July</h1>
        </div>
        <div id="clock" class="clock"></div>
        <div class="center">
            <div class="btn btn--white">Upcoming!</div>
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
            <a class="btn btn--black mr-30" id="downloadPaper">White Paper</a>
        </div>
        <div class="section-two--right d-w-50 m-w-100">
            <h3 class="section-two--label center">Join Our Mailing List</h3>
            <div class="input-btn">
                <input id="subscribeValue" type="text" placeholder="Your Email Address" class="input-btn--input" />
                <a class="btn btn--black input-btn--btn" id="btnSubscribe">Subscribe</a>
            </div>
        </div>
    </section>

    
    <section class="section section-about" id="section-about">
        <div class="contents">
            <div class="section-about--item appear">
                <img src="assets/img/section_about_1.png" alt="Image for What is Groo?">
                <div class="section-about--text">
                    <h1 class="title section-about--title">What is Groo?</h1>
                    <p class="section-about--cont">The Groocoin project aims to creation of the social media platform of beauty contents to consolidate the relevant contents dispersed throughout the whole world</p>
                </div>
            </div>
            <div class="section-about--item appear">
                <img src="assets/img/section_about_2.png" alt="Image for Why Groo?">
                <div class="section-about--text">
                    <h1 class="title section-about--title">Why Groo?</h1>
                    <p class="section-about--cont">The consumers are starving to find out the cosmetics and makeup suitable for themselves but the contents presented in most of the platforms including the social media exhibit the features of corporate sponsorship</p>
                </div>
            </div>
            <div class="section-about--item appear">
                <img src="assets/img/section_about_3.png" alt="Image for How Groo?">
                <div class="section-about--text">
                    <h1 class="title section-about--title">How Groo?</h1>
                    <p class="section-about--cont">The Groo.io Platform is allow to the consumers to autonomously create and share the contents to have the diversified evaluation feedback from different consumers</p>
                </div>
            </div>
        </div>
    </section>



    <section class="section section-influencers" id="section-influencers">
        <div class="contents appear">
            <h1 class="title center white">Top <span class="pink">Influencers</span> <span class="mobile-only"><br/></span>Of This Week!</h1>
            <div class="influencers--wrap">
                <img src="assets/img/section_influncers_content.png" alt="">
            </div>
        </div>
    </section>



    <section class="section section-slide">
        <div class="appear contents">
            <h1 class="title center">What We Can Do?</h1>
            <ul class="slider">
                <li class="slider--li">
                    <h3 class="slider--h3">Mobile Ecosystem</h3>
                    <p class="slider--p">Easy and Rapid sharing of the makeup cosmetic information retained respectively by the diverse types of people. </p>
                    <img class="slider--img" src="assets/img/section_slide_0.png" alt="">
                </li>
                <li class="slider--li">
                    <h3 class="slider--h3">Activity Rewards</h3>
                    <p class="slider--p">The Activity Point is determined on the basis of the activities for posting of the contents, comments, up/down votes, participation in reporting, follow and others</p>
                    <img class="slider--img" src="assets/img/section_slide_1.png" alt="">
                </li>
                <li class="slider--li">
                    <h3 class="slider--h3">Self-Advertisement</h3>
                    <p class="slider--p">Groo.io Platform comes with the platform for Self-Advertisement. The individuals and companies can be allowed to carry the advertisement for specific products.</p>
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
                    <p class="roadmap-body">Project Development</p>
                </li>
                <li class="roadmap-li">
                    <h3 class="roadmap-title">3Q</h3>
                    <p class="roadmap-body">Demo Dapp Development</p>
                </li>
                <li class="roadmap-li last">
                    <h3 class="roadmap-title">4Q</h3>
                    <p class="roadmap-body">Groo.io Platform Alpha Test</p>
                </li>

                <li class="roadmap-li">
                    <h3 class="roadmap-title">2019 1Q</h3>
                    <p class="roadmap-body">Groo.io Platform Beta Test</p>
                </li>
                <li class="roadmap-li">
                    <h3 class="roadmap-title">2Q</h3>
                    <p class="roadmap-body">Groo.io Platform Officlal Launch</p>
                </li>
                <li class="roadmap-li">
                    <h3 class="roadmap-title">3Q</h3>
                    <p class="roadmap-body">Groo.io Platform Mobile Application Launch</p>
                </li>
                <li class="roadmap-li">
                    <h3 class="roadmap-title">4Q</h3>
                    <p class="roadmap-body">Groo Analytics Closed Beta</p>
                </li>
            </ul>
        </div>



        <div class="section-dist appear" id="section-dist">
            <h1 class="title center white">Token Distribution</h1>
            <div class="row">
                <div class="section-dist--left d-w-50 m-w-100">
                    <img src="assets/img/section_dist_graph.png" alt="Token Distribution Graph">
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
                                    <td>60%</td>
                                </tr>
                                <tr>
                                    <td>Marketing</td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>Platform Rewards</td>
                                    <td>10%</td>
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
            <p class="joy--desc joy--desc-top">Groo.io is a Multi Entertainment Platform that includes plenty of joyful contents for go beyond traditional social media platform activities that focused on creating and sharing content only, and that improve platform activity experience with pleasure.</p>
            <p class="joy--desc">The main customers of the Groo.io platform are women. The Groocoin team include core development members of <span class="joy--desc-em">Audition</span>, <span class="joy--desc-em">Love Beat</span> that online community based music arcade game, and prioritizing platform development that takes care of our main customers with examples of our existing business models.</p>
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
                    Dev Director, NURIDA (present)<br>
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
                    System Engineer, eBay Korea (present)<br>
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
                    CSO, HSM (present)<br>
                    B2B Coordinator, EC21<br>
                    B2B Coordinator, KITA<br>
                    Dankook Univ.
                </div>
            </li>
            <li class="team--li">
                <div class="team--profile">
                    <img src="assets/img/p4.png" alt="H.C Kim">
                </div>
                <a class="team--name linkedin" target="_blank" href="https://www.linkedin.com/in/hyung-cheol-kim-0391b2112">H.C Kim</a>
                <div class="team--roll">Intermediate Developer</div>
                <div class="team--desc">
                    Web Developer, ANYFIVE (present)<br>
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



    <!-- <section class="section section-creators bg-gray" id="section-creators">
        <h1 class="title center add-mg-b">Beauty Contents Creators</h1>
    </section> -->
    
    
    
    <section class="section section-community bg-gray" id="section-community">
        <div class="contents">
            <h1 class="title">Community</h1>
            <div class="community--wrapper">
                <ul>
                    <li><a href="https://twitter.com/Groocoinio" target="_blank"><h3>Twitter</h3><img class="hover-scale" src="assets/img/icon-twitter.svg" alt="Twitter"></a></li>
                    <li><a href="https://discord.gg/Sfz7QVZ" target="_blank"><h3>Discord</h3><img class="hover-scale" src="assets/img/icon-discord.svg" alt="discord"></a></li>
                    <li><a href="https://t.me/groocoin_announcement" target="_blank"><h3>Telegram</h3><img class="hover-scale" src="assets/img/icon-telegram.svg" alt="telegram"></a></li>
                    <li><a href="https://open.kakao.com/o/gsb5nyM" target="_blank"><h3>KakaoTalk</h3><img class="hover-scale" src="assets/img/icon-kakaotalk.svg" alt="KakaoTalk"></a></li>
                </ul>
            </div>
        </div>
    </section>




    <footer class="footer">
        <div class="contents">
            <div class="footer--logo"><a href="#"><img src="assets/img/logo.svg" alt="GROO Coin logo"></a></div>
            <div class="footer--copyright">Copyright © 2018 All Rights Reserved</div>
        </div>
    </footer>    



    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="assets/lib/jquery.countdown.min.js"></script>
    <script src="assets/lib/typeit.min.js"></script>
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
            $('#clock').countdown('2018/07/04 00:00:00', function (event) {
                $(this).html(event.strftime(''
                    + '<span class="clock--bold">%d</span><span class="clock--days">DAYS</span>'
                    + '<span class="clock--bold">%H</span><span class="clock--dot">:</span>'
                    + '<span class="clock--bold">%M</span><span class="clock--dot">:</span>'
                    + '<span>%S</span>'));
            });


            /* typing effect */
            // https://www.jqueryscript.net/demo/jQuery-Plugin-For-Customizable-Terminal-Text-Effect-TypeIt/
            $('#typingEffect').typeIt({
                typeSpeed: 80
            });

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
            $('.header--nav--ul > li > a').on('click', function(){
                $root.animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 400);
                $('.header').removeClass('header--nav-show');
            });
            
            /* 구독 버튼 */
            $('#btnSubscribe').click(function(){
                var inputValue = $('#subscribeValue').val();
                alert(inputValue);
                $('#subscribeValue').val('');
            });

            /* 화이트페이퍼 다운 */
            $('#downloadPaper').click(function(){
				alert('Coming Soon');
                //window.open('/assets/whitepaper/180627_Groo Coin_Whitepaper_EN.pdf');
            });
            
        });

    </script>


</body>
</html>