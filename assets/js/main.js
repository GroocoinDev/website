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
	
});