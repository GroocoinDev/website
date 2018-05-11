$(function(){

    var $root = $('html, body');
    /* smooth scroll */ 
    var $navLinks = $('#header nav li a');
    $navLinks.click(function(){
        $root.animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 450);
    })

    /* scroll event */
    $('.section').Oppear({
        transition : '1.5s',
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


    /* Chart */
    var ctx = $("#myChart");
    var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: {
            label: '# of Votes',
            datasets: [{
                data: [40, 20, 10, 30],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                // borderColor: [
                //     'rgba(255,99,132,1)',
                //     'rgba(54, 162, 235, 1)',
                //     'rgba(255, 206, 86, 1)',
                //     'rgba(75, 192, 192, 1)'
                // ],
                borderWidth: 0
            }],
            labels: [
                'Contributor', 'Yellow'
            ],
        },
        // options: {
        //     legend: {
        //         display: true,
        //         labels: {
        //             fontColor: 'rgb(255, 99, 132)'
        //         }
        //     }
        // }
    });

});