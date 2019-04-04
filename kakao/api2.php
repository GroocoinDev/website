<?php
	header("Content-Type: application/json;charset=utf-8");

	$json1 = file_get_contents('http://api.coinmarketcap.com/v1/ticker/ethereum/?convert=KRW');
    $data1 = json_decode($json1, true);
	$eth_price = $data1[0]['price_krw'];
	
	$json2 = file_get_contents('http://app.stex.com/api2/trades?pair=GROO_ETH');
    $data2 = json_decode($json2, true);
	$groo_price = $data2['result'][0]['price'];
    $groo_price_krw = number_format($groo_price * $eth_price, 2);
    echo "1 GROO = ". $groo_price ."ETH\n1 GROO = ". $groo_price_krw ."원";
?>