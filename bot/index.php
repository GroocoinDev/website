<?php
	if (!isset($_GET["passcode"])) {
		echo "<form><input type='password' name='passcode'/><button type='submit'>LOGIN</button></form>";
		exit;
	} else {
		if ($_GET["passcode"] != "Grooming9") {
			echo "<form><input type='password' name='passcode'/><button type='submit'>LOGIN</button></form>";
			echo "WRONG PASSCODE";
			exit;
		}
	}

    // RTH, DCTO, RPM, MASH
    $target = "GROO";
    if (isset($_GET['pair']))
        $target = $_GET['pair'];

    $ETH_PRICE = 100000;
    if (isset($_GET['ethprice']))
        $ETH_PRICE = $_GET['ethprice'];
?>
<html>
    <head>
		<meta charset="UTF-8">
        <title>Auto Trading</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.js"
                  integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
                  crossorigin="anonymous"></script>
        <style>
			body {
				margin: 0;
				padding: 0;
			}
            iframe {
                border: none;
                padding: 0;
                margin: 0;
            }
			
			table {
				border-collapse: collapse;
				float:left; 
				font-size:13px;
			}
			td {
				border: 1px solid #444444;
				padding: 10px;
				font-size:13px;
			}
        </style>
    </head>
    
    <div style="width:100%; height:50px; line-height:50px; background:#b0ffb0; padding-left:20px;">
        <div style="float:left; margin-right:50px;">Target : <?=$target?>/ETH</div>
        
        <div style="float:left; margin-right:50px;">
            Trading Option : 
            
            <select id="whosell">
                <option value='2to1' selected>1번계정 BUY, 2번계정 SELL</option>
                <option value='1to2'>1번계정 SELL, 2번계정 BUY</option>
            </select>
        </div>
        
        <div style="float:left; margin-right:50px;">Trade Interval : 
            <select id="interval" name='interval_option'>
                <option value='30' selected>30초</option>
                <option value='60'>1분</option>
                <option value='300'>5분</option>
                <option value='600'>10분</option>
                <option value='900'>15분</option>
                <option value='1800'>30분</option>
                <option value='3600'>60분</option>
            </select>
        </div>
        
        <div style="float:left; margin-right:10px;"><input type="checkbox" id="rndVol" value="1" checked>Random Volume</div>
        <div id="remain_sec" style="float:left; margin-right:10px;"></div>
        
        <div style="float:left; margin-right:50px;">
            <input id="trade-vol" type="text" style="width:100px;" value="10" align="right" style="text-align:right;" /> <?=$target?>
            <select id="tradingType">
                <option value='high' selected>고점</option>
                <option value='low'>저점</option>
            </select>
            거래
        </div>
        
        <div style="float:left; margin-right:50px;">ETH PRICE (KRW) : 
            <?=$ETH_PRICE?> KRW
        </div>
		
		<div id="tradingCount" style="float:left; margin-right:50px;">
			Trading Count : 0
        </div>
        
        <button id="stopBotBtn" style="float:right; margin-right:25px; color:#fff; background:#ff0000; height:50px;" onclick="botStop();">Bot 중지</button>
        <button id="startBotBtn" style="float:right; margin-right:25px; color:#fff; background:#0000ff; height:50px;" onclick="botStart();">Bot 시작</button>
    </div>

    <div style="float:left; width:40%;">
        
        <div style="float:left; width:50%;">
            <iframe class="" src="price_flat.php?currencyid=bitcoin" width="100%" height="300"></iframe>
        </div>
        <div style="float:left; width:50%;">
            <iframe class="" src="price_flat.php?currencyid=ethereum" width="100%" height="300"></iframe>
        </div>
                
        <div style="float:left; width:50%;">
            <iframe class="iframe" src="wallet.php?account=1" width="1" height="1" style="opacity:0;"></iframe>
			<div id="account1" ></div>
        </div>
        <div style="float:left; width:50%;">
            <iframe class="iframe" src="wallet.php?account=2" width="1" height="1" style="opacity:0;"></iframe>
			<div id="account2" ></div>
        </div>
        <div style="float:left; width:50%;">
            <div style="width:100%; height:50px; line-height:50px; background:#b0b0b0; text-align:center;">Trading History</div>
            <div id="account1_history" style="height:400px; font-size:13px; overflow-y:scroll; line-height:20px; padding-left:10px;"></div>
        </div>
        <div style="float:left; width:50%;">
            <div style="width:100%; height:50px; line-height:50px; background:#b0b0b0; text-align:center;">Trading History</div>
            <div id="account2_history" style="height:400px; font-size:13px; overflow-y:scroll; line-height:20px; padding-left:10px;"></div>
        </div>
    </div>
    
    <div style="float:left; width:60%;">
        <div id="info" style="float:left; width:100%;">
            <iframe class="iframe" src="price.php?pair=<?=$target?>_ETH&ethprice=<?=$ETH_PRICE?>" width="1" height="1" style="opacity:0;"></iframe>
			<div id="realTimeInfo" ></div>
        </div>
        <div id="tradeView1" style="float:left; width:100%; border-top:1px solid #b0b0b0; border-bottom:1px solid #b0b0b0;">
            <iframe id="tradeFrame1" src="" width="100%" height="150"></iframe>
<!--            <iframe src="trade.php?account=1&trade_type=cancel&ordernum=28586959" width="100%" height="150"></iframe>-->
        </div>
        <div id="tradeView2" style="float:left; width:100%; border-top:1px solid #b0b0b0; border-bottom:1px solid #b0b0b0;">
            <iframe id="tradeFrame2" src="" width="100%" height="150"></iframe>
        </div>
    </div>
    
    <script>
        var tradingCount = 0;
        var waitTimer = 0;
        var trading = false;
        
        var target = "<?=$target?>";
        var highPrice = 0;
        var lowPrice = 0;
        var ethPrice = <?=$ETH_PRICE?>;
        
        var oneTimer;
        var refreshTimer;
        
        $(document).ready(function() { 
            waitTimer = $("#interval").val();
            
            $("#interval").change(function(){
                waitTimer = $("#interval").val();
            });
            
            $("#startBotBtn").show();
            $("#stopBotBtn").hide();
            refreshTimer = setInterval(refreshIframe, 5000);
        });
        
        function botStart() {
            oneTimer = setInterval(oneTimer, 1000);
            $("#startBotBtn").hide();
            $("#stopBotBtn").show();
        }
        
        function botStop() {
            clearInterval(oneTimer);
            oneTimer = null;
            
            $("#startBotBtn").show();
            $("#stopBotBtn").hide();
        }
        
        function refreshIframe() {
            $(".iframe").attr("src", function(i, val) {return val;});
        }
        
        function oneTimer() {
            waitTimer = waitTimer - 1;
            if(waitTimer <= 0) {
                var assumePrice = 0;
                var assumeVol = 0;
                
                if ($("#tradingType").val() == "high") {
                    // 고점 거래
                    assumePrice = highPrice - 0.00000001;
                    assumePrice = assumePrice.toFixed(8);
                } else {
                    // 저점 거래
                    assumePrice = lowPrice + 0.00000001;
                    assumePrice = assumePrice.toFixed(8);
                }
                
                if($("#rndVol").is(":checked") == true) {
                    assumeVol = Math.random() * ($("#trade-vol").val() - 0.1) + 0.1;
                    assumeVol = assumeVol.toFixed(2);
                } else {
                    assumeVol = $("#trade-vol").val();
                }
                
                // Trade
                if($("#whosell").val() == "2to1") {
                    $("#tradeFrame1").attr("src", "trade.php?account=1&trade_type=buy&pair=<?=$target?>_ETH&price=" + assumePrice + "&amount=" + assumeVol);
                    $("#tradeFrame2").attr("src", "trade.php?account=2&trade_type=sell&pair=<?=$target?>_ETH&price=" + assumePrice + "&amount=" + assumeVol);
                } else {
                    $("#tradeFrame1").attr("src", "trade.php?account=2&trade_type=buy&pair=<?=$target?>_ETH&price=" + assumePrice + "&amount=" + assumeVol);
                    $("#tradeFrame2").attr("src", "trade.php?account=1&trade_type=sell&pair=<?=$target?>_ETH&price=" + assumePrice + "&amount=" + assumeVol);
                }
                
                // 타이머 초기화
                waitTimer = $("#interval").val();
				
				tradingCount = tradingCount + 1;
				$("#tradingCount").text("Trading Count : " + tradingCount);
				
				if (tradingCount % 50 == 0) {
					$("#account1_history").html("");
					$("#account2_history").html("");
				}
            } else {
                var hour = parseInt(waitTimer/3600);
                var min = parseInt((waitTimer%3600)/60);
                var sec = waitTimer%60;

                $("#remain_sec").text(min + "분 " + sec + "초 후 " );
            }
        }
		
		function setWallet(id, value) {
			if (id == 1) {
				$("#account1").html("").html(value);
			} else {
				$("#account2").html("").html(value);
			}
		}
		
		function setRealTime(value) {
			$("#realTimeInfo").html("").html(value);
		}
        
        function setPrice(HP, LP) {
            highPrice = HP;
            lowPrice = LP;
        }
        
        function setOrder(account, type, amount, price) {
            var $history;
            if (account == 1) {
                $history = $("#account1_history");
            } else {
                $history = $("#account2_history");
            }
            
            var krwPrice = ethPrice*price;
            krwPrice = krwPrice.toFixed(3);
            
            if(type == "buy") {
                $history.append("<span style='color:green;'>[" + type.toUpperCase() + "] " + amount + " " + target + " at " + price + " ETH (₩ " + krwPrice + ")</span><br>");
            } else {
                $history.append("<span style='color:red;'>[" + type.toUpperCase() + "] " + amount + " " + target + " at " + price + " ETH (₩ " + krwPrice + ")</span><br>");
            }
            
            
            $history.scrollTop($history[0].scrollHeight);
            
        }
    </script>
</html>