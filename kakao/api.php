<?php
	header("Content-Type: application/json;charset=utf-8");

	$json1 = file_get_contents('http://api.coinmarketcap.com/v1/ticker/ethereum/?convert=KRW');
    $data1 = json_decode($json1, true);
	$eth_price = $data1[0]['price_krw'];
	
	$json2 = file_get_contents('http://app.stex.com/api2/trades?pair=GROO_ETH');
    $data2 = json_decode($json2, true);
	$groo_price = $data2['result'][0]['price'];
    $groo_price_krw = $groo_price * $eth_price;
?>

{
	"version" : "2.0",
	"template" : {
		"outputs" : [{
			"basicCard": {
				"title": "그루코인 실시간 가격",
				"description": "1 GROO = <?=$groo_price?> ETH\n1 GROO = <?=$groo_price_krw?> 원",
				"thumbnail": {
					"imageUrl": "https://groo.io/assets/img/open-graph.png?v=1"
				},
				"buttons": [
					{
						"action": "webLink",
						"label": "그루코인 가격차트",
						"webLinkUrl": "https://www.coingecko.com/en/price_charts/groocoin/krw"
					},
					{
						"action": "webLink",
						"label": "그루코인 거래하기",
						"webLinkUrl": "https://app.stex.com/en/trade/pair/ETH/GROO/30"
					}
				]
			}
		}]
	}
}