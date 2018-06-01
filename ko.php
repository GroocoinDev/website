<?php
    include 'src/calcCoin.php';
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GROO Coin</title>
    <meta property="og:title" content="GROO Coin" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://groo.io/" />
    <meta property="og:image" content="https://groo.io/assets/images/open-graph.png" />
    <meta property="og:description" content="Beauty Content Social Media. Connect & Share your Billions of Grooming knowledge." />
    <meta property="og:locale" content="ko_KR" />

    <link rel="stylesheet" href="dist/reset.css">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="stylesheet" href="dist/style.media.query.css">
    <link rel="stylesheet" href="dist/font.ko.css">
    
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico?v=3">
</head>

<body>
    <header id="header">
        <div class="contents no-select">
            <div class="logo"><a href="#"><img src="assets/images/logo.svg" alt="GROO Coin"></a></div>
            <div class="mobile-nav">
                <img src="assets/images/icon-menu.svg" alt="menu">
            </div>
            <nav>
                <ul class="nav-ul">
                    <li><a href="#section-about">About</a></li>
                    <li><a href="#section-members">Our Team</a></li>
                    <li><a href="#section-architecture">Architecture</a></li>
                    <li><a href="#section-road-map">RoadMap</a></li>
                    <li><a href="#section-coin-sale">Distribution</a></li>
                    <li><a href="#section-faq">FAQ</a></li>
                    <li><a href="#section-community">Community</a></li>
                </ul>
                <div class="lang">
                    <a href="javascript://">Korean</a>
                    <ul class="lang-other">
                        <li><a href="index.php">English</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <div id="app">

        <section class="section-main">
            <div class="contents">
                <figure>
                    <img src="assets/images/papers.png" alt="">
                </figure>
            </div>
            <div class="main-txt">
                <h3 id="typing-main">1st Pre-Sale starts on June</h3>
                
                <div id="countdown" style="opacity: 0;">
                    <div class="clock-item clock-days">
                        <div class="inner">
                            <div id="canvas-days" class="clock-canvas"></div>
                            <div class="text">
                                <p class="val">0</p>
                                <p class="type-days type-time">DAYS</p>
                            </div>
                        </div>
                    </div>
                
                    <div class="clock-item clock-hours">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-hours" class="clock-canvas"></div>
                                <div class="text">
                                    <p class="val">0</p>
                                    <p class="type-hours type-time">HRS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="clock-item clock-minutes">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-minutes" class="clock-canvas"></div>
                                <div class="text">
                                    <p class="val">0</p>
                                    <p class="type-minutes type-time">MIN</p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="clock-item clock-seconds">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-seconds" class="clock-canvas"></div>
                                <div class="text">
                                    <p class="val">0</p>
                                    <p class="type-seconds type-time">SEC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="purchase">
                    <a class="btn default">Upcoming!</a>
                </div>
            </div>
        </section>


        <section class="section-two">
            <div class="contents">
                <div class="two-wrapper">
                    <div class="col left">
                        <h1>뷰티 콘텐츠<br>소셜 미디어</h1>
                        <p>Connect & Share your Billions of Grooming knowledge</p>
                        <button class="btn default" @click="downloadWhitePaper">코인 백서</button>
                    </div>
                    
                    <div class="col center">
                        <span class="msg progress">Token Sale Live</span>
                        <div class="sub-msg">1 GROO = $<?= round($grooCoinUSD, 3)?> (<?= round($grooCoinKRW, 1)?>원)</div>
                        <div class="sub-msg">Currency Accepted : ETH</div>
                        <div class="sale-progress">
                            <svg id="sale-progress-svg" width="261" height="34" viewBox="0 0 261 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path id="SOFT CAP" d="M1.344 10.224C1.552 10.536 1.816 10.768 2.136 10.92C2.464 11.064 2.8 11.136 3.144 11.136C3.336 11.136 3.532 11.108 3.732 11.052C3.932 10.988 4.112 10.896 4.272 10.776C4.44 10.656 4.576 10.508 4.68 10.332C4.784 10.156 4.836 9.952 4.836 9.72C4.836 9.392 4.732 9.144 4.524 8.976C4.316 8.8 4.056 8.656 3.744 8.544C3.44 8.424 3.104 8.312 2.736 8.208C2.376 8.096 2.04 7.944 1.728 7.752C1.424 7.56 1.168 7.304 0.96 6.984C0.752 6.656 0.648 6.216 0.648 5.664C0.648 5.416 0.7 5.152 0.804 4.872C0.916 4.592 1.088 4.336 1.32 4.104C1.552 3.872 1.848 3.68 2.208 3.528C2.576 3.368 3.016 3.288 3.528 3.288C3.992 3.288 4.436 3.352 4.86 3.48C5.284 3.608 5.656 3.868 5.976 4.26L5.04 5.112C4.896 4.888 4.692 4.708 4.428 4.572C4.164 4.436 3.864 4.368 3.528 4.368C3.208 4.368 2.94 4.412 2.724 4.5C2.516 4.58 2.348 4.688 2.22 4.824C2.092 4.952 2 5.092 1.944 5.244C1.896 5.396 1.872 5.536 1.872 5.664C1.872 6.024 1.976 6.3 2.184 6.492C2.392 6.684 2.648 6.84 2.952 6.96C3.264 7.08 3.6 7.188 3.96 7.284C4.328 7.38 4.664 7.516 4.968 7.692C5.28 7.86 5.54 8.092 5.748 8.388C5.956 8.676 6.06 9.076 6.06 9.588C6.06 9.996 5.98 10.364 5.82 10.692C5.668 11.02 5.46 11.296 5.196 11.52C4.932 11.744 4.62 11.916 4.26 12.036C3.9 12.156 3.516 12.216 3.108 12.216C2.564 12.216 2.048 12.12 1.56 11.928C1.072 11.736 0.684 11.44 0.396 11.04L1.344 10.224ZM11.66 12.216C11.012 12.216 10.416 12.104 9.87197 11.88C9.32797 11.648 8.85997 11.332 8.46797 10.932C8.08397 10.532 7.77997 10.06 7.55597 9.516C7.33997 8.972 7.23197 8.384 7.23197 7.752C7.23197 7.12 7.33997 6.532 7.55597 5.988C7.77997 5.444 8.08397 4.972 8.46797 4.572C8.85997 4.172 9.32797 3.86 9.87197 3.636C10.416 3.404 11.012 3.288 11.66 3.288C12.308 3.288 12.904 3.404 13.448 3.636C13.992 3.86 14.456 4.172 14.84 4.572C15.232 4.972 15.536 5.444 15.752 5.988C15.976 6.532 16.088 7.12 16.088 7.752C16.088 8.384 15.976 8.972 15.752 9.516C15.536 10.06 15.232 10.532 14.84 10.932C14.456 11.332 13.992 11.648 13.448 11.88C12.904 12.104 12.308 12.216 11.66 12.216ZM11.66 11.136C12.148 11.136 12.588 11.048 12.98 10.872C13.372 10.688 13.708 10.444 13.988 10.14C14.268 9.836 14.484 9.48 14.636 9.072C14.788 8.656 14.864 8.216 14.864 7.752C14.864 7.288 14.788 6.852 14.636 6.444C14.484 6.028 14.268 5.668 13.988 5.364C13.708 5.06 13.372 4.82 12.98 4.644C12.588 4.46 12.148 4.368 11.66 4.368C11.172 4.368 10.732 4.46 10.34 4.644C9.94797 4.82 9.61197 5.06 9.33197 5.364C9.05197 5.668 8.83597 6.028 8.68397 6.444C8.53197 6.852 8.45597 7.288 8.45597 7.752C8.45597 8.216 8.53197 8.656 8.68397 9.072C8.83597 9.48 9.05197 9.836 9.33197 10.14C9.61197 10.444 9.94797 10.688 10.34 10.872C10.732 11.048 11.172 11.136 11.66 11.136ZM17.7443 3.504H23.0843V4.584H18.8963V7.248H22.7963V8.328H18.8963V12H17.7443V3.504ZM26.411 4.584H23.675V3.504H30.299V4.584H27.563V12H26.411V4.584ZM40.7814 5.34C40.5414 5.028 40.2374 4.788 39.8694 4.62C39.5014 4.452 39.1214 4.368 38.7294 4.368C38.2494 4.368 37.8134 4.46 37.4214 4.644C37.0374 4.82 36.7054 5.064 36.4254 5.376C36.1534 5.688 35.9414 6.056 35.7894 6.48C35.6374 6.896 35.5614 7.344 35.5614 7.824C35.5614 8.272 35.6334 8.696 35.7774 9.096C35.9214 9.496 36.1294 9.848 36.4014 10.152C36.6734 10.456 37.0054 10.696 37.3974 10.872C37.7894 11.048 38.2334 11.136 38.7294 11.136C39.2174 11.136 39.6454 11.036 40.0134 10.836C40.3814 10.636 40.6934 10.356 40.9494 9.996L41.9214 10.728C41.8574 10.816 41.7454 10.944 41.5854 11.112C41.4254 11.272 41.2134 11.436 40.9494 11.604C40.6854 11.764 40.3654 11.904 39.9894 12.024C39.6214 12.152 39.1934 12.216 38.7054 12.216C38.0334 12.216 37.4254 12.088 36.8814 11.832C36.3454 11.576 35.8854 11.24 35.5014 10.824C35.1254 10.408 34.8374 9.94 34.6374 9.42C34.4374 8.892 34.3374 8.36 34.3374 7.824C34.3374 7.168 34.4454 6.564 34.6614 6.012C34.8774 5.452 35.1774 4.972 35.5614 4.572C35.9534 4.164 36.4214 3.848 36.9654 3.624C37.5094 3.4 38.1094 3.288 38.7654 3.288C39.3254 3.288 39.8734 3.396 40.4094 3.612C40.9534 3.828 41.3974 4.16 41.7414 4.608L40.7814 5.34ZM45.9787 3.504H47.0227L50.6587 12H49.3147L48.4627 9.9H44.4187L43.5787 12H42.2347L45.9787 3.504ZM48.0427 8.892L46.4587 4.992H46.4347L44.8267 8.892H48.0427ZM51.7639 3.504H54.7519C55.2959 3.504 55.7439 3.58 56.0959 3.732C56.4479 3.876 56.7239 4.064 56.9239 4.296C57.1319 4.52 57.2759 4.776 57.3559 5.064C57.4359 5.344 57.4759 5.616 57.4759 5.88C57.4759 6.144 57.4359 6.42 57.3559 6.708C57.2759 6.988 57.1319 7.244 56.9239 7.476C56.7239 7.7 56.4479 7.888 56.0959 8.04C55.7439 8.184 55.2959 8.256 54.7519 8.256H52.9159V12H51.7639V3.504ZM52.9159 7.248H54.4279C54.6519 7.248 54.8719 7.232 55.0879 7.2C55.3119 7.16 55.5079 7.092 55.6759 6.996C55.8519 6.9 55.9919 6.764 56.0959 6.588C56.1999 6.404 56.2519 6.168 56.2519 5.88C56.2519 5.592 56.1999 5.36 56.0959 5.184C55.9919 5 55.8519 4.86 55.6759 4.764C55.5079 4.668 55.3119 4.604 55.0879 4.572C54.8719 4.532 54.6519 4.512 54.4279 4.512H52.9159V7.248Z" transform="translate(45 21)" fill="black"/>
                                <path id="HARD CAP" d="M1.092 3.504H2.244V7.032H6.648V3.504H7.8V12H6.648V8.112H2.244V12H1.092V3.504ZM12.6505 3.504H13.6945L17.3305 12H15.9865L15.1345 9.9H11.0905L10.2505 12H8.90653L12.6505 3.504ZM14.7145 8.892L13.1305 4.992H13.1065L11.4985 8.892H14.7145ZM18.4357 3.504H21.4238C21.9677 3.504 22.4157 3.58 22.7677 3.732C23.1197 3.876 23.3958 4.064 23.5958 4.296C23.8038 4.52 23.9477 4.776 24.0277 5.064C24.1077 5.344 24.1477 5.616 24.1477 5.88C24.1477 6.152 24.0997 6.416 24.0038 6.672C23.9077 6.92 23.7677 7.148 23.5837 7.356C23.4077 7.556 23.1877 7.728 22.9238 7.872C22.6678 8.008 22.3798 8.092 22.0598 8.124L24.4717 12H23.0318L20.8717 8.256H19.5878V12H18.4357V3.504ZM19.5878 7.248H21.0997C21.3237 7.248 21.5437 7.232 21.7598 7.2C21.9837 7.16 22.1797 7.092 22.3477 6.996C22.5238 6.9 22.6638 6.764 22.7677 6.588C22.8717 6.404 22.9238 6.168 22.9238 5.88C22.9238 5.592 22.8717 5.36 22.7677 5.184C22.6638 5 22.5238 4.86 22.3477 4.764C22.1797 4.668 21.9837 4.604 21.7598 4.572C21.5437 4.532 21.3237 4.512 21.0997 4.512H19.5878V7.248ZM25.5797 3.504H28.5437C29.1437 3.504 29.6677 3.572 30.1157 3.708C30.5717 3.844 30.9637 4.028 31.2917 4.26C31.6277 4.484 31.9037 4.744 32.1197 5.04C32.3437 5.336 32.5197 5.64 32.6477 5.952C32.7757 6.264 32.8677 6.576 32.9237 6.888C32.9797 7.2 33.0077 7.488 33.0077 7.752C33.0077 8.296 32.9077 8.824 32.7077 9.336C32.5077 9.84 32.2117 10.292 31.8197 10.692C31.4277 11.084 30.9397 11.4 30.3557 11.64C29.7797 11.88 29.1117 12 28.3517 12H25.5797V3.504ZM26.7317 10.92H28.1837C28.6717 10.92 29.1317 10.856 29.5637 10.728C30.0037 10.592 30.3877 10.392 30.7157 10.128C31.0437 9.864 31.3037 9.536 31.4957 9.144C31.6877 8.744 31.7837 8.28 31.7837 7.752C31.7837 7.48 31.7397 7.164 31.6517 6.804C31.5637 6.436 31.3957 6.088 31.1477 5.76C30.9077 5.432 30.5717 5.156 30.1397 4.932C29.7077 4.7 29.1477 4.584 28.4597 4.584H26.7317V10.92ZM43.9221 5.34C43.6821 5.028 43.3781 4.788 43.0101 4.62C42.6421 4.452 42.2621 4.368 41.8701 4.368C41.3901 4.368 40.9541 4.46 40.5621 4.644C40.1781 4.82 39.8461 5.064 39.5661 5.376C39.2941 5.688 39.0821 6.056 38.9301 6.48C38.7781 6.896 38.7021 7.344 38.7021 7.824C38.7021 8.272 38.7741 8.696 38.9181 9.096C39.0621 9.496 39.2701 9.848 39.5421 10.152C39.8141 10.456 40.1461 10.696 40.5381 10.872C40.9301 11.048 41.3741 11.136 41.8701 11.136C42.3581 11.136 42.7861 11.036 43.1541 10.836C43.5221 10.636 43.8341 10.356 44.0901 9.996L45.0621 10.728C44.9981 10.816 44.8861 10.944 44.7261 11.112C44.5661 11.272 44.3541 11.436 44.0901 11.604C43.8261 11.764 43.5061 11.904 43.1301 12.024C42.7621 12.152 42.3341 12.216 41.8461 12.216C41.1741 12.216 40.5661 12.088 40.0221 11.832C39.4861 11.576 39.0261 11.24 38.6421 10.824C38.2661 10.408 37.9781 9.94 37.7781 9.42C37.5781 8.892 37.4781 8.36 37.4781 7.824C37.4781 7.168 37.5861 6.564 37.8021 6.012C38.0181 5.452 38.3181 4.972 38.7021 4.572C39.0941 4.164 39.5621 3.848 40.1061 3.624C40.6501 3.4 41.2501 3.288 41.9061 3.288C42.4661 3.288 43.0141 3.396 43.5501 3.612C44.0941 3.828 44.5381 4.16 44.8821 4.608L43.9221 5.34ZM49.1193 3.504H50.1633L53.7993 12H52.4553L51.6033 9.9H47.5593L46.7193 12H45.3753L49.1193 3.504ZM51.1833 8.892L49.5993 4.992H49.5753L47.9673 8.892H51.1833ZM54.9045 3.504H57.8925C58.4365 3.504 58.8845 3.58 59.2365 3.732C59.5885 3.876 59.8645 4.064 60.0645 4.296C60.2725 4.52 60.4165 4.776 60.4965 5.064C60.5765 5.344 60.6165 5.616 60.6165 5.88C60.6165 6.144 60.5765 6.42 60.4965 6.708C60.4165 6.988 60.2725 7.244 60.0645 7.476C59.8645 7.7 59.5885 7.888 59.2365 8.04C58.8845 8.184 58.4365 8.256 57.8925 8.256H56.0565V12H54.9045V3.504ZM56.0565 7.248H57.5685C57.7925 7.248 58.0125 7.232 58.2285 7.2C58.4525 7.16 58.6485 7.092 58.8165 6.996C58.9925 6.9 59.1325 6.764 59.2365 6.588C59.3405 6.404 59.3925 6.168 59.3925 5.88C59.3925 5.592 59.3405 5.36 59.2365 5.184C59.1325 5 58.9925 4.86 58.8165 4.764C58.6485 4.668 58.4525 4.604 58.2285 4.572C58.0125 4.532 57.7925 4.512 57.5685 4.512H56.0565V7.248Z" transform="translate(196 21)" fill="black"/>
                                <rect id="val-total" width="261" height="12" fill="#DEDEDE"/>
                                <rect id="val-current" width="10" height="12" fill="#6D02D5"/>
                                <path id="Vector" d="M0 4.5L2.5 0L5 4.5H0Z" transform="translate(70 15)" fill="#707070"/>
                                <path id="Vector_2" d="M0 4.5L2.5 0L5 4.5H0Z" transform="translate(223 15)" fill="#707070"/>
                            </svg>
                        </div>
                        <div class="sub-msg2"><?=$fundETH?> <span class="unit">ETH</span></div>
                    </div>
                </div>
            </div>
        </section>

    
        
        <modal v-bind="{type, loginFunc, joinFunc, isShowModal}" v-if="isShowModal" @close="hideModal"></modal>

    

        <section class="section section-about" id="section-about">
            <div class="contents">
                <div class="title t1 center">About Project <span>Groo</span></div>
                <div class="sub-title">나에게 맞는 메이크업 & 화장품 정보의 쉽고 빠른 공유</div>

                <div class="center">
                    <img class="arch w-90" src="assets/images/arch01.png" />
                    <button @click="showModal('__IMG_ABOUT__')" class="btn black">자세히 보기</button>
                </div>

            </div>
        </section>


        <section class="section section-chars" id="section-chars">
            <div class="contents">
                <ul class="col-3">
                    <li>
                        <div class="circle">
                            <img src="assets/images/icon-desc1.svg" />
                        </div>
                        <div class="txt">
                            <h3 class="t2">모바일 에코시스템</h3>
                            <p>Groo.io 플랫폼은 다양한 사람들이 각자 보유하고 있는 메이크업 방법 및 화장품 정보를 쉽고 빠르게 공유할 수 있는 새로운 모바일 소셜 미디어 플랫폼 입니다.</p>
                        </div>
                    </li>
                    <li>
                        <div class="circle">
                            <img src="assets/images/icon-desc2.svg" />
                        </div>
                        <div class="txt">
                            <h3 class="t2">플랫폼 활동 보상</h3>
                            <p>플랫폼 활동 점수는Groo.io Platform에서 컨텐츠 작성, 댓글, Up/down 투표, 신고, 참여, 팔로우 등의 활동을 바탕으로 산출 및 지급합니다.</p>
                        </div>
                    </li>
                    <li>
                        <div class="circle">
                            <img src="assets/images/icon-desc3.svg" />
                        </div>
                        <div class="txt">
                            <h3 class="t2">향상된 블록체인</h3>
                            <p>Groo.io 플랫폼은 사용자의 트랜잭션 수수료를 없애고 빠른 트랜잭션 처리를 위해 EOS 블록체인을 사용합니다.</p>
                        </div>
                    </li>
                </ul>
                <ul class="col-2">
                    <li>
                        <div class="circle">
                            <img src="assets/images/icon-desc4.svg" />
                        </div>
                        <div class="txt">
                            <h3 class="t2">완벽한 분산 네트워크</h3>
                            <p>사용자가 업로드한 컨텐츠는 Decentralized core(EOS 블록체인, IPFS)에만 기록되며 Groo.io 서버에는 보관되지 않습니다.</p>
                        </div>
                    </li>
                    <li>
                        <div class="circle">
                            <img src="assets/images/icon-desc5.svg" />
                        </div>
                        <div class="txt">
                            <h3 class="t2">보안성</h3>
                            <p>사용자가 업로드한 컨텐츠는 스마트 컨트랙트가 정의한 구조로 EOS 블록체인에 기록되며, 이는 악의적인 사용자에 의한 데이터 변조를 차단합니다.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        
    
	    <section class="section section-architecture white" id="section-architecture">
        <div class="contents">
            <div class="title t1 center"><span>Groo</span> Architecture</div>
            <div class="sub-title">EOS 블록체인 & IPFS(Inter Planetary) 파일 시스템</div>

            <div class="center">
                <img class="arch w-30" src="assets/images/arch04.png" />
                <button @click="showModal('__IMG_ARCH__')" class="btn black">자세히 보기</button>
            </div>
        </section>


        <section class="section section-architecture2 pink">
            <div class="contents">
                <div class="title t1 center"><span>Groo</span> Mobile Application</div>
                <div class="sub-title">For 1 Billion of Makeup & Cosmetic Customers</div>
            </div>
            <div class="arch-bg"></div>
        </section>
        
    
        <section class="section section-members white" id="section-members">
            <div class="title t1 center">Our Team</div>
            <?php include 'src/ourTeam.php'; ?>
        </section>


        <section class="section section-road-map white" id="section-road-map">
            <div class="title t1 center"><span>Groo</span> Roadmap</div>
            <div class="center">
                <img class="arch w-60 desktop-only" src="assets/images/roadmap.png" />
                <img class="arch w-90 mobile-only" src="assets/images/roadmap-m.png" />
            </div>
        </section>



        <section class="section section-coin-sale" id="section-coin-sale">
            <div class="contents">
                <div class="title t1 center"><span>Groocoin</span> Distribution</div>
                <div class="img-wrap no-select">
                    <canvas id="chartArea"></canvas>
                </div>
                <div class="table-wrap">
                    <table>
                        <tr>
                            <th>Token Initial</th>
                            <td>GROO</td>
                        </tr>
                        <tr>
                            <th>Total supply</th>
                            <td>900,000,000 EA</td>
                        </tr>
                        <tr>
                            <th>Circulating supply</th>
                            <td>720,000,000 EA</td>
                        </tr>
                        <tr>
                            <th>ICO Token Sales</th>
                            <td>270,000,000 EA</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>


        <section class="section section-faq white" id="section-faq">
            <div class="contents">
                <div class="title t1 center">FAQ</div>
                
                <div class="faq-list">
                    <ul data-index="1">
                        <li class="active">
                            <h3 class="no-select">최소 투자금액은 어떻게 되나요?</h3>
                            <p>0.05 ETH 입니다. 그 이하로는 참여할 수 없으며 환불이 불가능 합니다.</p>
                        </li>
                        <li>
                            <h3 class="no-select">거래소 지갑에서 ETH를 보내도 되나요?</h3>
                            <p>반드시 My Ether Wallet에서 전송해 주십시오, 거래소 지갑에서 ETH 전송시 Groocoin을 수령 받지 못할 수도 있으며 저희는 이에 관한 책임을 지지 않습니다.</p>
                        </li>
                        <li>
                            <h3 class="no-select">토큰 수량</h3>
                            <p>총 발행 량 9억 개이며 이 중 2.7억개는ICO 참여자들에게 판매합니다.</p>
                        </li>
                        <li>
                            <h3 class="no-select">토큰 세일에 참여가능한 암호 화폐는 무엇인가요?</h3>
                            <p>ETH</p>
                        </li>
                        <li>
                            <h3 class="no-select">거래소에 상장될 예정인가요?</h3>
                            <p>ICO 종료 후 상장 예정입니다, 거래소들과의 조율 후 최종적으로 공지하겠습니다.</p>
                        </li>
                        <li>
                            <h3 class="no-select">투자자들을 위한 보너스 포인트가 있나요?</h3>
                            <p>
                            투자금액에 비례해 아래 보너스 코인을 지급받을 수 있습니다.<br/>
                            • 10-50 ETH: 보너스 1%<br/>
                            • 51-300ETH: 보너스 2%<br/>
                            • 301-1000 ETH: 보너스 5%<br/>
                            • 1001 ETH 이상: 보너스 10%
                            </p>
                        </li>
                        <li>
                            <h3 class="no-select">판매하지 못한 토큰들은 어떻게 되나요?</h3>
                            <p>판매하지 못한 토큰들은 없으며, Smart contact에 의해 구매자들에 한해 지급예정입니다.  </p>
                        </li>
                        <li>
                            <h3 class="no-select">Groo.io 플랫폼이란?</h3>
                            <p>Groo.io 플랫폼은 전세계 Makeup cosmetic 시장을 포용하는 단일 플랫폼의 구축, 각 시장에서 선호하는 Makeup cosmetic 컨텐츠를 유저들이 TV채널을 검색하듯이 손쉽게 찾고 참조할 수 있으며 이를 통해 플랫폼 활동만으로도 보상을 획득할 수 있는 EOS Blockchain을 활용한 Social media platform입니다. 기업은 Groo.io 플랫폼을 통해 소비자 개인이 선호하는 취향을 손쉽게 분석할 수 있으며 효과적인 Target marketing을 기획할 수 있습니다.</p>
                        </li>
                        <li>
                            <h3 class="no-select">Groopoint와 Groocoin의 차이점</h3>
                            <p>Groopoint은 Groo.io 플랫폼에서 사용이 가능한 Reward point 입니다, 소비자는 특정 컨텐츠의 제작 혹은 해당 컨텐츠의 투표 및 reply를 통해 Groopoint를 발급 받을 수 있습니다. 일정량의 Groopoint는 각 암호화폐 거래소에서 구매/판매가 가능한 Groocoin으로 변환할 수가 있습니다. Groo.io 플랫폼은 EOS의 DApp을 활용한 플랫폼입니다</p>
                        </li>
                        <li>
                            <h3 class="no-select">EOS Blockchain</h3>
                            <p>Groo.io 플랫폼은 이용자의 트랜잭션 수수료를 제거하고 보다 빠른 트랜잭션 처리를 위해 EOS 블록체인을 사용합니다. EOS는 분산형 Application(DApp) 서비스를 위한 스마트 컨트랙트 플랫폼으로서 블록체인 서비스의 사용성 문제인 트랜잭션 수수료와 처리 지연의 문제를 해결합니다. EOS블록체인은 DApp 이용자에게 수수료를 부과하지 않습니다. </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <section class="section section-community" id="section-community">
            <div class="contents">
                <div class="title t1 center">Community</div>
                <ul>
                    <li><a href="https://twitter.com/Groocoinio" target="_blank"><div class="circle"><img class="hover-scale" src="assets/images/icon-twitter.svg" alt="Twitter"></div><h3>Twitter</h3></a></li>
                    <li><a href="https://discord.gg/Sfz7QVZ" target="_blank"><div class="circle"><img class="hover-scale" src="assets/images/icon-discord.svg" alt="discord"></div><h3>Discord</h3></a></li>
                    <li><a href="#" target="_blank"><div class="circle"><img class="hover-scale" src="assets/images/icon-telegram.svg" alt="telegram"></div><h3>Telegram</h3></a></li>
                    <li><a href="https://open.kakao.com/o/gsb5nyM" target="_blank"><div class="circle"><img class="hover-scale" src="assets/images/icon-kakaotalk.svg" alt="KakaoTalk"></div><h3>KakaoTalk</h3></a></li>
                </ul>
            </div>
        </section>

    </div>


    <footer id="footer">
        <div class="contents">
            <div class="left">
                <div class="logo-footer"><a href="#"><img src="assets/images/logo-white.svg" alt="GROO Coin logo"></a></div>
                <div class="copyright">Copyright © 2018 All Rights Reserved</div>
            </div>
        </div>
    </footer>
    
    <script src="assets/lib/vue-2.5.16.min.js"></script>
    <script src="assets/lib/jquery-1.12.4.min.js"></script>
    <script src="assets/lib/Oppear_1.1.2.min.js"></script>
	<script src="assets/lib/jquery.final-countdown.min.js"></script>
	<script src="assets/lib/kinetic.js"></script>
    <script src="assets/lib/typeit.min.js"></script>
    <script src="assets/lib/chart.min.js"></script>
    <script src="assets/lib/chartjs-plugin-datalabels.js"></script>
    <script src="dist/main.js"></script>
</body>
</html>