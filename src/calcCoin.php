<?php
    $test = 'asdfadsfasdfasf';
	$ethAPIHost = "https://api.etherscan.io/api";
	$GrooWallet = "0x1414786Ac5692859eE0647e8E420AA8AcE17d47B";
	$APIKey = "XGPHVECAF8B5KQ3QYRNU3Q94MXFW8W9FMS";

	// ETH 가격 조회
	// https://api.coinmarketcap.com/v2/ticker/1027/?convert=KRW
	if ($fp = fopen("https://api.coinmarketcap.com/v2/ticker/1027/?convert=KRW", 'r')) {
	   $content = '';
	   while ($line = fread($fp, 1024)) {
		   $content .= $line;
	   }

	   $json = json_decode($content);
	}
	$ethUSD = $json->data->quotes->USD->price;
	$ethKRW = $json->data->quotes->KRW->price;
	
	// 1차 : 75000
	// 2차 : 48000
	$grooCoinUSD = $ethUSD/75000;
	$grooCoinKRW = $ethKRW/75000;

	// ETH 지갑 조회
	// https://api.etherscan.io/api?module=account&action=balance&address=0x1414786Ac5692859eE0647e8E420AA8AcE17d47B&tag=latest&apikey=XGPHVECAF8B5KQ3QYRNU3Q94MXFW8W9FMS
	if ($fp = fopen("https://api.etherscan.io/api?module=account&action=balance&address=0x1414786Ac5692859eE0647e8E420AA8AcE17d47B&tag=latest&apikey=XGPHVECAF8B5KQ3QYRNU3Q94MXFW8W9FMS", 'r')) {
	   $content = '';
	   while ($line = fread($fp, 1024)) {
		   $content .= $line;
	   }

	   $json = json_decode($content);
	}

	// Calculation
	$fundETH = $json->result;
	$hardCap = 4320;	// 4320ETH
	$softCap = 2160;	// 2160ETH

	//$grooCoinUSD = 75/75000;
	//$grooCoinKRW = 0.0;
?>