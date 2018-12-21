<?php
	use Stocks\StocksExchange;
	require dirname(__FILE__).'/vendor/autoload.php';

    $key = $_GET['key'];
    $secret = $_GET['secret'];
	$pair = "MASH_ETH";

    try {
        $account = new StocksExchange($key, $secret, 'https://app.stex.com/api2', false);
    } catch (Exception $e) {
        echo $e;
        exit;
    }

	$result = $account->getTradeRegisterHistory("MASH_ETH"); 
    var_dump($result);
?>