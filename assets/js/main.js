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

	/* ICO 모금액 */
	// $('#myGoal').stepProgressBar({
	// 	currentValue: 200,
	// 	steps: [
	// 		{ value: 100 }, {
	// 		value: 500,
	// 		bottomLabel: '<i class="material-icons">프라이빗판매</i>'
	// 		}, {
	// 			value: 800,
	// 			bottomLabel: '<i class="material-icons">소프트캡</i>'
	// 		}, {  
	// 			value: 1000, 
	// 			bottomLabel: '<i class="material-icons">하드캡</i>',
	// 			mouseOver: function() { alert('mouseOver'); },
	// 			click: function() { alert('click'); }
	// 	}],
	// 	unit: 'ETH'
	// });
	
	/* ICO 시작일 */
	// $("#getting-started")
	// 	.countdown("2017/01/01", function(event) {
	// 	$(this).text(
	// 		event.strftime('%D days %H:%M:%S')
	// 	);
    // });
    
    var d = new Date();

    var start = Math.floor(new Date('1/1/2018').getTime() / 1000);
    var end = Math.floor(new Date('2/1/2018').getTime() / 1000);
    var now = Math.floor(new Date().getTime() / 1000); 

    console.log(start, end, now);

    $('#countdown').final_countdown({
        // start: 1162139200,
        // now: 1287461319,
        // end: 1388461320,
        start: start,
        end: end,
        now: now,
        seconds: {
            borderColor: '#fff',
            borderWidth: '4'
        },
        minutes: {
            borderColor: '#fff',
            borderWidth: '4'
        },
        hours: {
            borderColor: '#fff',
            borderWidth: '4'
        },
        days: {
            borderColor: '#fff',
            borderWidth: '4'
        },
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