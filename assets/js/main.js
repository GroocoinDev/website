$(function(){

    const isMobile = detectMobile();
    const IMAGE_PATH = '../images/';
    const lang = document.documentElement.lang;


    // 헤더 부분은 vue의 인스턴스에 포함되지 않으므로, jquery ready에서 실행됨
    var $root = $('html, body');
    var $header = $('#header');
    

    /* smooth scroll */ 
    var $navLinks = $('#header nav .nav-ul li a');
    $navLinks.click(function(){
        $root.animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 450);

        $('.mobile-nav').removeClass('active');
        $('#header .logo').removeClass('active');
        $('#header nav').removeClass('active');
    })

    // scroll event
    $(window).on('scroll', function(){
        const scrollTop = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop)
      
        if (scrollTop && scrollTop > 50 ) {
            $header.addClass('scroll');
        } else {
            $header.hasClass('scroll') && $header.removeClass('scroll');
        }
    })

    /* mobile menu */
    $('.mobile-nav').click(function(){
        $(this).toggleClass('active');
        $('#header .logo').toggleClass('active');
        $('#header nav').toggleClass('active');
    })

    $('#header > nav > ul > li > a').click(function(){
        $('.mobile-nav').removeClass('active');
        $('#header .logo').removeClass('active');
        $('#header nav').removeClass('active');
    })
    
    function countDownInit(){
        /* count down */
        var end = Math.floor(new Date('6/30/2018').getTime() / 1000);
        var now = Math.floor(new Date().getTime() / 1000);
        var borderOption = {
            borderColor: '#F54782',
            borderWidth: isMobile ? '4' : '10',
        }

        $('#countdown').final_countdown({
            start: 0,
            end: end,
            now: now,
            seconds: borderOption,
            minutes: borderOption,
            hours: borderOption,
            days: borderOption,
        });

        setTimeout(function(){
            $('#countdown').animate({'opacity': 1}, 1000);
        }, 500);
    }

    function initChart() {
        const ctx = document.getElementById("chartArea").getContext('2d');
        const myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [40, 30, 20, 10],
                        backgroundColor: [ '#F54782', '#FA9BB8', '#FF8C92', '#E5B0C3', '#FFB0DA'],
                        borderWidth: 0,
                    }],
                    labels: [ 'Public Sale', 'ICO participants', 'Reserved by the company', 'Initial investors and advisers']
                },
                options: {
                    tooltips: {
                        enabled: false,
                    },
                    maintainAspectRatio: false,
                    responsive: true,
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            fontColor: '#000',
                            fontSize: 14,
                            fontFamily: "'Avenir', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                            padding: 16,
                            usePointStyle: true,
                        }
                    },
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    },
                    plugins: {
                        datalabels: {
                            color: 'rgba(255, 255, 255, 1)',
                            font: {
                                size: 14,
                                lineHeight: 1.5,
                            },
                            textAlign: 'center',
                            formatter: function(value, context) {
                                let label = context.chart.data.labels[context.dataIndex];
                                let labelChars = label.split(' ');
                                // 가독성 위해 \n 추가
                                if (labelChars.length > 3) {
                                    labelChars[Math.floor(labelChars.length/2) - 1] += '\n';
                                    label = labelChars.join(' ');
                                }
                                return label + '\n' + value + '%'
                            }
                        }
                    }
                }
            });
    }
    
    function detectMobile() {
        if (navigator.userAgent.match(/Android/i)
            || navigator.userAgent.match(/webOS/i)
            || navigator.userAgent.match(/iPhone/i)
            || navigator.userAgent.match(/iPad/i)
            || navigator.userAgent.match(/iPod/i)
            || navigator.userAgent.match(/BlackBerry/i)
            || navigator.userAgent.match(/Windows Phone/i)
        ) {
            return true;
        } else {
            return false;
        }
    }
    



    // Vue
    Vue.component('modal-inner-login', {
        props: ['hideModal', 'loginFunc'],
        template: `
            <div>
                <h3 class="modal-title">Sign In</h3>
                <div>
                    <input type='text' v-model="email" placeholder="email" />
                    <input type='password' v-model="password" placeholder="password" />
                    <button @click="submit">Sign In</button>
                </div>
            </div>
        `,
        data: function(){
            return {
                email: '',
                password: '',
            }
        },
        methods: {
            submit: function () {
                console.log(this.email);
                console.log(this.password);
                this.loginFunc();
            }
        }
    });

    Vue.component('modal-inner-join', {
        props: ['hideModal', 'joinFunc'],
        template: `
            <div>
                <h3 class="modal-title">Sign Up</h3>
                <div v-if="!sendEmail">
                    <input type='text' v-model="email" placeholder="email" />
                    <input type='password' v-model="password" placeholder="password" />
                    <input type='password' v-model="password2" placeholder="password configm" />
                    <button @click="submit">Sign In</button>
                </div>
                <div v-if="sendEmail">
                    인증 이메일을 보냈습니다. 확인 후 로그인해주세요.
                </div>
            </div>
        `,
        data: function(){
            return {
                email: '',
                password: '',
                password2: '',
                sendEmail: false,
            }
        },
        methods: {
            submit: function () {
                console.log(this.email);
                console.log(this.password);
                console.log(this.password2);
                this.sendEmail = true;
                this.joinFunc();
            }
        }
    });

    Vue.component('subscribe', {
        template: `
            <div>
                <h3 class="modal-title">subscribe</h3>
                <p>
                <div v-if="!confirm">
                    <input type='text' v-model="email" placeholder="email" />
                    <button @click="submit">구독하기</button>
                </div>
                <div v-if="confirm">
                    그루코인 새 소식 전해드립니다
                </div>
                </p>
            </div>
        `,
        data: function(){
            return {
                email: '',
                confirm: false,
            }
        },
        methods: {
            submit: function () {
                console.log(this.email);
                this.confirm = true;
                this.email = '';
            }
        }
    });

    Vue.component('modal', {
        props: ['type', 'loginFunc', 'joinFunc'],
        template: `
            <transition name="modal">
                <div class="modal-mask" id="modalMask" v-bind:class="type || ''" @click="clickMask">
                    <div class="modal-wrapper">
                        <div class="modal-container">

                            <div class='modal-close' @click="$emit('close')">
                                <img src='assets/images/icon-btn-close.svg' alt='close modal'/>
                            </div>

                            <div class="modal-body">
                                <modal-inner-login v-bind="{loginFunc}" v-if="type == '__LOGIN__'"></modal-inner-login>
                                <modal-inner-join v-bind="{joinFunc}" v-if="type == '__JOIN__'"></modal-inner-join>
                                <subscribe v-if="type == '__SUBSCRIBE__'"></subscribe>
                                
                                <div v-if="type == '__IMG_ABOUT__'" class="modal-body-image center">
                                    <div class="title">About Project Groo</div>
                                    <div class='desc'>
                                        <div class='left desktop-only'>{{aboutMoreText}}</div>
                                        <div class='right'>
                                            <img class="desktop-only" src='assets/images/arch02.png' alt=''/>
                                            <img class="mobile-only" src='assets/images/arch02-m.png' alt=''/>
                                            <p class="mobile-only">Please check more detail on Desktop version</p>
                                        </div>
                                    </div>
                                </div>
                                <div v-if="type == '__IMG_ARCH__'" class="modal-body-image center">
                                    <div class="title">Groo Architecture</div>
                                    <div class='desc'>
                                        <div class='left left2 desktop-only'>{{archMoreText}}</div>
                                        <div class='right right2'>
                                            <img src='assets/images/arch05-m.png' alt=''/>
                                            <p class="mobile-only">Please check more detail on Desktop version</p>
                                        </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <slot name="footer">
                                
                                </slot>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>
        `,
        methods: {
            clickMask: function (e) {
                e.target.className === 'modal-wrapper' && this.$emit('close');
            }
        },
        data: function(){
            // 국제화 처리
            let aboutMoreText = 'The Groocoin Project aims the creation of the social media platform of beauty contents to consolidate the relevant contents dispersed throughout the whole world by promoting and accumulating the contents of superb quality through the aggressive partnership with the Private Makeup Creators engaged in their activities in different types of social media and blogs.<br><br>The companies can plan the Target Marketing to achieve the maximum efficiency yet at the minimal cost based on the extensive Big Data offered at the Groo.io Platform.';
            let archMoreText = 'Since the Blockchain has not been commercialized to the level to allow the inclusion of all data comprising the platform at present, the Blockchain records the contents except for the large volume data in the first instance. The large volume data is stored in a distributed pattern by utilizing the IPFS (Inter-Planetary File System) and, before the launch of EOS IPFS Library, the large volume data is stored by using the AWS Storage Service (S3) with only the path to the files recorded in the EOS Blockchain.';

            switch (lang) {
                case 'ko':
                    aboutMoreText = 'Groocoin 프로젝트는 여러 Social media 와 블로그에서 활동하는 Private Makeup Creator들과의 적극적인 파트너쉽을 통한 양질의 컨텐츠 육성 및 축적, 전세계에 흩어져 있는 해당 컨텐츠 들을 통합하는 Beauty Contents Social media 플랫폼의 제작을 목표로 하고 있습니다. 기업은 Groo.io 플랫폼의 방대한 Big data를 기반으로 최소한의 비용 그러나 최대의 효율을 가지는 Target marketing을 기획할 수 있습니다.';    
                    archMoreText = 'Groo.io 플랫폼은 탈 중앙화된 아키텍처를 목표로 합니다. 사용자가 업로드한 컨텐츠는 Decentralized Core(EOS 블록체인, IPFS)에만 기록되며 Groo.io 서버에는 보관되지 않습니다. 이를 위해 Groocoin팀은 Blockchain Network와 IPFS(InterPlanetary File System)를 활용한 플랫폼과, 공정한 보상 시스템을 운영 하기 위한 스마트 컨트랙트를 만들고 누구나 열람 가능한 정보의 투명성을 지향합니다.';
                    break;
            }
            return {
                aboutMoreText: aboutMoreText,
                archMoreText: archMoreText,
            }
        },
    })

    Vue.component('box-logged-out', {
        props: ['showModal'],
        template: `
            <div>
                <span class="msg">Join with GROO</span>
                <div class="actions-icons">
                    <ul>
                        <li><a class="btn black" @click="showModal('__JOIN__')">sign up</a></li>
                        <li><a class="btn white" @click="showModal('__LOGIN__')">sign in</a></li>
                    </ul>
                </div>
            </div>
        `
    })

    Vue.component('box-logged-in', {
        props: ['showModal', 'user', 'logoutFunc'],
        template: `
            <div>
                <span class="msg">Welcome {{ user.email }}</span>
                <div class="actions-icons">
                    <ul>
                        <li><a class="btn black" @click="showModal('__BUY__')">BUY COIN</a></li>
                        <li><a class="btn white" @click="logoutFunc">sign out</a></li>
                    </ul>
                </div>
            </div>
        `
    })

    // start app
    new Vue({
        el: '#app',
        data: {
            user: {
                email: 'email@groo.io',
            },
            isLoggedIn: false,
            isShowModal: false,
            type: null,
        },
        methods: {
            showModal: function (type) {
                this.isShowModal = true;
                $('body').addClass('modal-open');
                if (type) this.type = type;
            },
            hideModal: function (type) {
                this.isShowModal = false;
                $('body').removeClass('modal-open');
                this.type = null;
            },
            joinFunc: function () {

            },
            loginFunc: function() {
                // 로그인 성공ㅣ
                this.isLoggedIn = true;
                // 로그인 성공 시 모달 숨김
                this.hideModal();
                this.user = {
                    email: 'update된 이메일'
                }
            },
            logoutFunc: function(){
                this.isLoggedIn = false;
                this.hideModal();
                this.user = {};
            },
            downloadWhitePaper: function(){
                window.open("/assets/whitepaper/180512_Groo Coin_Whitepaper_v1.0.pdf");
            }
        },
        mounted: function () {
            var vm = this;
            
            // 모든 화면 랜더링 후 실행
            this.$nextTick(function () {
                // 모달 키 이벤트 처리
                $(window).on('keyup', function(e){
                    if (e.which === 27 && vm.isShowModal) {
                        vm.hideModal();
                    }
                })
            });

            /* scroll event */
            $('.section').Oppear({
                transition : '1s',
            });

            /* typing effect */
            // https://www.jqueryscript.net/demo/jQuery-Plugin-For-Customizable-Terminal-Text-Effect-TypeIt/
            $('#typing-main').typeIt({
                whatToType: ["1st Pre-Sale starts on June", "1st Pre-Sale starts on June"],
                typeSpeed: 80
            });

            /* 카운트 다운 이벤트 */
            countDownInit();

            /* init tab menu content */
            var faqList = $('.faq-list');
            var faqListContentWrap = $('.faq-list > ul');
            faqListContentWrap.hide();
            faqListContentWrap.first().show();


            /* Tab Menu */
            var $faqTabItems = $('.nav-hor > ul > li');
            var $faqTabContentList = $('.faq-list > ul > li');

            $faqTabItems.click(function(){
                $faqTabItems.removeClass('active');
                $(this).addClass('active');
                var currentIndex = $(this).data('index');
                faqListContentWrap.hide();
                faqList.find('ul[data-index='+currentIndex+']').show();
            });

            $faqTabContentList.click(function(){
                $(this).toggleClass('active');
            });
            
            /* draw chart */
            initChart();
        }
    })

});
