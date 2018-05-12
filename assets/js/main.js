var ethAPIHost = "https://api.etherscan.io/api";
var APIKey = "XGPHVECAF8B5KQ3QYRNU3Q94MXFW8W9FMS";
var GrooWallet = "0x1414786Ac5692859eE0647e8E420AA8AcE17d47B";

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
	$.post(ethAPIHost,
		  {"module":"account", "action":"balance", "address":GrooWallet, "tag":"latest", "apikey":APIKey},
		  function(data){
		$('#title').html(data);
		//var walletJson = jQuery.parseJSON(data);
		//alert(walletJson.result);
		
	});*/
	/* progress */
    setTimeout(function(){
        var totalValue = parseInt($('#val-total').attr('width'));
        var percent = 0;
        var currentWidth = totalValue * percent;
        $('#val-current').animate({'width': currentWidth});
    }, 700)
	
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
	
	var start = 0;
    var end = Math.floor(new Date('6/4/2018').getTime() / 1000);
    var now = Math.floor(new Date().getTime() / 1000);
    
	$('#countdown').final_countdown({
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