"use strict";$(function(){var c=!!(navigator.userAgent.match(/Android/i)||navigator.userAgent.match(/webOS/i)||navigator.userAgent.match(/iPhone/i)||navigator.userAgent.match(/iPad/i)||navigator.userAgent.match(/iPod/i)||navigator.userAgent.match(/BlackBerry/i)||navigator.userAgent.match(/Windows Phone/i)),t=document.documentElement.lang,e=$("html, body"),o=$("#header");$("#header nav .nav-ul li a").click(function(){e.animate({scrollTop:$($(this).attr("href")).offset().top},450),$(".mobile-nav").removeClass("active"),$("#header .logo").removeClass("active"),$("#header nav").removeClass("active")}),$(window).on("scroll",function(){var e=Math.max(window.pageYOffset,document.documentElement.scrollTop,document.body.scrollTop);e&&50<e?o.addClass("scroll"):o.hasClass("scroll")&&o.removeClass("scroll")}),$(".mobile-nav").click(function(){$(this).toggleClass("active"),$("#header .logo").toggleClass("active"),$("#header nav").toggleClass("active")}),$("#header > nav > ul > li > a").click(function(){$(".mobile-nav").removeClass("active"),$("#header .logo").removeClass("active"),$("#header nav").removeClass("active")}),Vue.component("modal-inner-login",{props:["hideModal","loginFunc"],template:'\n            <div>\n                <h3 class="modal-title">Sign In</h3>\n                <div>\n                    <input type=\'text\' v-model="email" placeholder="email" />\n                    <input type=\'password\' v-model="password" placeholder="password" />\n                    <button @click="submit">Sign In</button>\n                </div>\n            </div>\n        ',data:function(){return{email:"",password:""}},methods:{submit:function(){console.log(this.email),console.log(this.password),this.loginFunc()}}}),Vue.component("modal-inner-join",{props:["hideModal","joinFunc"],template:'\n            <div>\n                <h3 class="modal-title">Sign Up</h3>\n                <div v-if="!sendEmail">\n                    <input type=\'text\' v-model="email" placeholder="email" />\n                    <input type=\'password\' v-model="password" placeholder="password" />\n                    <input type=\'password\' v-model="password2" placeholder="password configm" />\n                    <button @click="submit">Sign In</button>\n                </div>\n                <div v-if="sendEmail">\n                    인증 이메일을 보냈습니다. 확인 후 로그인해주세요.\n                </div>\n            </div>\n        ',data:function(){return{email:"",password:"",password2:"",sendEmail:!1}},methods:{submit:function(){console.log(this.email),console.log(this.password),console.log(this.password2),this.sendEmail=!0,this.joinFunc()}}}),Vue.component("subscribe",{template:'\n            <div>\n                <h3 class="modal-title">subscribe</h3>\n                <p>\n                <div v-if="!confirm">\n                    <input type=\'text\' v-model="email" placeholder="email" />\n                    <button @click="submit">구독하기</button>\n                </div>\n                <div v-if="confirm">\n                    그루코인 새 소식 전해드립니다\n                </div>\n                </p>\n            </div>\n        ',data:function(){return{email:"",confirm:!1}},methods:{submit:function(){console.log(this.email),this.confirm=!0,this.email=""}}}),Vue.component("modal",{props:["type","loginFunc","joinFunc"],template:'\n            <transition name="modal">\n                <div class="modal-mask" id="modalMask" v-bind:class="type || \'\'" @click="clickMask">\n                    <div class="modal-wrapper">\n                        <div class="modal-container">\n                            <div class=\'modal-close\' @click="$emit(\'close\')">\n                                <img src=\'assets/images/icon-btn-close.svg\' alt=\'close modal\'/>\n                            </div>\n\n                            <div class="modal-body">\n                                <modal-inner-login v-bind="{loginFunc}" v-if="type == \'__LOGIN__\'"></modal-inner-login>\n                                <modal-inner-join v-bind="{joinFunc}" v-if="type == \'__JOIN__\'"></modal-inner-join>\n                                <subscribe v-if="type == \'__SUBSCRIBE__\'"></subscribe>\n                                \n                                <div v-if="type == \'__IMG_ABOUT__\'" class="modal-body-image center">\n                                    <div class="title">About Project Groo</div>\n                                    <div class=\'desc\'>\n                                        <div class=\'left desktop-only\' v-html="aboutMoreText"></div>\n                                        <div class=\'right\'>\n                                            <img class="desktop-only" src=\'assets/images/arch02.png\' alt=\'\'/>\n                                            <img class="mobile-only" src=\'assets/images/arch02-m.png\' alt=\'\'/>\n                                            <p class="mobile-only">Please check more detail on Desktop version</p>\n                                        </div>\n                                    </div>\n                                </div>\n                                <div v-if="type == \'__IMG_ARCH__\'" class="modal-body-image center">\n                                    <div class="title">Groo Architecture</div>\n                                    <div class=\'desc\'>\n                                        <div class=\'left left2 desktop-only\' v-html="archMoreText"></div>\n                                        <div class=\'right right2\'>\n                                            <img src=\'assets/images/arch05-m.png\' alt=\'\'/>\n                                            <p class="mobile-only">Please check more detail on Desktop version</p>\n                                        </div>\n                                </div>\n                            </div>\n\n                            <div class="modal-footer">\n                                <slot name="footer"></slot>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </transition>\n        ',methods:{clickMask:function(e){"modal-wrapper"===e.target.className&&this.$emit("close")}},data:function(){var e="The Groocoin Project aims the creation of the social media platform of beauty contents to consolidate the relevant contents dispersed throughout the whole world by promoting and accumulating the contents of superb quality through the aggressive partnership with the Private Makeup Creators engaged in their activities in different types of social media and blogs.<br><br>The companies can plan the Target Marketing to achieve the maximum efficiency yet at the minimal cost based on the extensive Big Data offered at the Groo.io Platform.<br><br>The users of the Groo.io Platform will be provided with the individual wallets simply by subscribing to the platform and they don’t need to transmit the cryptocurrency to the exchange in order to use the platform contents. After creation of the contents, the users are assigned the Groopoint reward, which is awarded by the company, automatically after completion of the evaluation period of the corresponding contents based on the voting system participated by the individual users.",o="The Blockchain imposes a fee for each of transactions recorded in the Blockchain for compensation of the creator of the Blockchain. With the services offered to the general public such as the Groo.io Platform, more than tens of thousands of transactions should be processed per second in the Blockchain and the transaction fees and the delay in the processing speed incurred at this time pose a very serious impediment to the expansion of the service. <br><br>The Groo.io Platform waives the transaction fees charged to the users and utilizes the EOS Blockchain for faster processing of the transactions.<br><br>The Groo.io Platform intends to achieve the decentralized architecture. The contents uploaded by the users are recorded only in the Decentralized Core (EOS blockchain, IPFS) but not stored in the Groo.io server. To this end, the Groocoin Team makes the platform based on the blockchain network and IPFS (Inter-Planetary File System) and the Smart Contract for implementation of the fair reward system and aims to ensure the transparency of information which can be referred to by everybody.";switch(t){case"ko":e="Groocoin 프로젝트는 여러 Social media 와 블로그에서 활동하는 Private Makeup Creator들과의 적극적인 파트너쉽을 통한 양질의 컨텐츠 육성 및 축적, 전세계에 흩어져 있는 해당 컨텐츠 들을 통합하는 뷰티 컨텐츠 소셜 미디어 플랫폼 제작을 하고 있습니다. <br><br>기업은 Groo.io 플랫폼의 방대한 Big data를 기반으로 최소한의 비용 그러나 최대의 효율을 가지는 Target marketing을 기획할 수 있습니다.<br><br>Groo.io 플랫폼 이용자는 플랫폼의 가입만으로 개인지갑이 지급 되며 플랫폼 컨텐츠를 이용하기 위한 암호화폐를 거래소에서 전송할 필요가 없습니다. 사용자는 컨텐츠 작성, 사용자들 개개인에 의한 Voting system에 의해 해당 컨텐츠의 심사기간 종료 후 자동으로 Groopoint 리워드를 획득하게 되며 이는 회사에서 지급합니다.",o="블록체인은 블록 생산자 보상을 위해 블록체인에 기록되는 모든 트랜잭션에 수수료를 부과합니다. Groo.io 플랫폼 같이 일반인을 대상으로 하는 서비스는 초당 수만 건 이상의 트랜잭션이 블록체인에서 처리 되야 하는데 이 경우 발생되는 트랜잭션 수수료와 처리 속도의 지연은 서비스의 확장에 매우 큰 장벽을 만듭니다. <br><br>Groo.io 플랫폼은 이용자의 트랜잭션 수수료를 제거하고 보다 빠른 트랜잭션 처리를 위해 EOS 블록체인을 사용합니다.<br><br>Groo.io 플랫폼은 탈 중앙화된 아키텍처를 목표로 합니다. 사용자가 업로드한 컨텐츠는 Decentralized Core(EOS 블록체인, IPFS)에만 기록되며 Groo.io 서버에는 보관되지 않습니다. 이를 위해 Groocoin팀은 Blockchain Network와 IPFS(InterPlanetary File System)를 활용한 플랫폼과, 공정한 보상 시스템을 운영 하기 위한 스마트 컨트랙트를 만들고 누구나 열람 가능한 정보의 투명성을 지향합니다."}return{aboutMoreText:e,archMoreText:o}}}),Vue.component("box-logged-out",{props:["showModal"],template:'\n            <div>\n                <span class="msg">Join with GROO</span>\n                <div class="actions-icons">\n                    <ul>\n                        <li><a class="btn black" @click="showModal(\'__JOIN__\')">sign up</a></li>\n                        <li><a class="btn white" @click="showModal(\'__LOGIN__\')">sign in</a></li>\n                    </ul>\n                </div>\n            </div>\n        '}),Vue.component("box-logged-in",{props:["showModal","user","logoutFunc"],template:'\n            <div>\n                <span class="msg">Welcome {{ user.email }}</span>\n                <div class="actions-icons">\n                    <ul>\n                        <li><a class="btn black" @click="showModal(\'__BUY__\')">BUY COIN</a></li>\n                        <li><a class="btn white" @click="logoutFunc">sign out</a></li>\n                    </ul>\n                </div>\n            </div>\n        '}),new Vue({el:"#app",data:function(){return{user:{email:"email@groo.io"},isLoggedIn:!1,isShowModal:!1,type:null,whitePaperUrl:"/assets/whitepaper/180512_Groo Coin_Whitepaper_v1.0.pdf"}},methods:{showModal:function(e){this.isShowModal=!0,$("body").addClass("modal-open"),e&&(this.type=e)},hideModal:function(e){this.isShowModal=!1,$("body").removeClass("modal-open"),this.type=null},joinFunc:function(){},loginFunc:function(){this.isLoggedIn=!0,this.hideModal(),this.user={email:"update된 이메일"}},logoutFunc:function(){this.isLoggedIn=!1,this.hideModal(),this.user={}},downloadWhitePaper:function(){window.open(this.whitePaperUrl)}},mounted:function(){var e,o,t,n=this;this.$nextTick(function(){$(window).on("keyup",function(e){27===e.which&&n.isShowModal&&n.hideModal()})}),$(".section").Oppear({transition:"1s"}),$("#typing-main").typeIt({whatToType:["1st Pre-Sale starts on June","1st Pre-Sale starts on June"],typeSpeed:80}),e=Math.floor(new Date("6/30/2018").getTime()/1e3),o=Math.floor((new Date).getTime()/1e3),t={borderColor:"#F54782",borderWidth:c?"4":"10"},$("#countdown").final_countdown({start:0,end:e,now:o,seconds:t,minutes:t,hours:t,days:t}),setTimeout(function(){$("#countdown").animate({opacity:1},1e3)},500);var i=$(".faq-list"),a=$(".faq-list > ul");a.hide(),a.first().show();var s,l=$(".nav-hor > ul > li"),r=$(".faq-list > ul > li");l.click(function(){l.removeClass("active"),$(this).addClass("active");var e=$(this).data("index");a.hide(),i.find("ul[data-index="+e+"]").show()}),r.click(function(){$(this).toggleClass("active")}),s=document.getElementById("chartArea").getContext("2d"),new Chart(s,{type:"doughnut",data:{datasets:[{data:[40,30,20,10],backgroundColor:["#F54782","#FA9BB8","#FF8C92","#E5B0C3","#FFB0DA"],borderWidth:0}],labels:["Public Sale","ICO participants","Reserved by the company","Initial investors and advisers"]},options:{tooltips:{enabled:!1},maintainAspectRatio:!1,responsive:!0,legend:{display:!0,position:"bottom",labels:{fontColor:"#000",fontSize:14,fontFamily:"'Avenir', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",padding:16,usePointStyle:!0}},layout:{padding:{left:0,right:0,top:0,bottom:0}},animation:{animateScale:!0,animateRotate:!0},plugins:{datalabels:{color:"rgba(255, 255, 255, 1)",font:{size:14,lineHeight:1.5},textAlign:"center",formatter:function(e,o){var t=o.chart.data.labels[o.dataIndex],n=t.split(" ");return 3<n.length&&(n[Math.floor(n.length/2)-1]+="\n",t=n.join(" ")),t+"\n"+e+"%"}}}}})}})});