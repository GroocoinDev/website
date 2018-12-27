<?php
	header("Content-Type: application/json;charset=utf-8");
?>

{
	"version" : "2.0",
	"template" : {
		"outputs" : [{
			"basicCard": {
				"title": "그루코인 실시간 가격",
				"description": "1 GROO = 0.00001290 ETH\n1 GROO = 1.6 원",
				"thumbnail": {
					"imageUrl": "https://groo.io/assets/img/open-graph.png?v=1"
				},
				"buttons": [
					{
						"action": "",
						"label": "그루코인 가격차트",
						"webLinkUrl": "https://e.kakao.com/t/hello-ryan"
					},
					{
						"action": "",
						"label": "그루코인 거래하기",
						"webLinkUrl": "https://app.stex.com/en/trade/pair/ETH/GROO/30"
					}
				]
			}
		}]
	}
}