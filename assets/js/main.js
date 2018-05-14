$(function(){
    var $root = $('html, body');
    var $header = $('#header');

    /* smooth scroll */ 
    var $navLinks = $('#header nav li a');
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
        var scrollTop = $root.scrollTop();
        
        if (scrollTop && scrollTop > 50 ) {
            $header.addClass('scroll');
        } else {
            $header.hasClass('scroll') && $header.removeClass('scroll');
        }
    })

    /* scroll event */
    $('.section').Oppear({
        transition : '1s',
    });

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
	
    /* count down */
    var end = Math.floor(new Date('6/4/2018').getTime() / 1000);
    var now = Math.floor(new Date().getTime() / 1000);
    var borderColor = '#D0107D';

	$('#countdown').final_countdown({
        start: 0,
        end: end,
        now: now,
        seconds: { borderColor: borderColor, borderWidth: '4' },
        minutes: { borderColor: borderColor, borderWidth: '4' },
        hours: { borderColor: borderColor, borderWidth: '4' },
        days: { borderColor: borderColor, borderWidth: '4' },
    });


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
                <div class="modal-mask" v-bind:class="type || ''">
                    <div class="modal-wrapper">
                        <div class="modal-container">

                        <div class="modal-body">
                            <modal-inner-login v-bind="{loginFunc}" v-if="type == '__LOGIN__'"></modal-inner-login>
                            <modal-inner-join v-bind="{joinFunc}" v-if="type == '__JOIN__'"></modal-inner-join>
                            <subscribe v-if="type == '__SUBSCRIBE__'"></subscribe>
                        </div>

                        <div class="modal-footer">
                            <slot name="footer">
                            default footer
                            <button class="modal-default-button" @click="$emit('close')">Close</button>
                            </slot>
                        </div>
                        </div>
                    </div>
                </div>
            </transition>
        `,
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
                if (type) this.type = type;
            },
            hideModal: function (type) {
                this.isShowModal = false;
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
            })
        }
    })
	
});