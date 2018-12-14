<?php
	use Stocks\StocksExchange;
	require dirname(__FILE__).'/vendor/autoload.php';

    $account = $_GET['account'];
    $trade_type = $_GET['trade_type'];
	$pair = $_GET['pair'];

    try {
        if ($account == "1") {
            $key_1 = 'QLckGtyjKj4L41ZMpx5PHt3I19phasDk4m6R3Sb6'; // API key sample
            $secret_1 = 'YfrTatuHOkIcnvxZP5eyetlSXdjlJiSAoT2ukDYaAmT6HXNF9DzROnLh6EzGZJA5'; // API secret sample
            $account = new StocksExchange($key_1, $secret_1, 'https://app.stocks.exchange/api2', false);
        } else {
            $key_2 = 'cNgplLrB0EchgLxfu5jDn61E2JomwTRSHIxBElgI'; // API key sample
            $secret_2 = 'Xd00O6OTvWWh0h4lFHFgJlsLaHeYqtfgwPF7zp1AFUOUnccx1PylLPuIYYwoAEBx'; // API secret sample
            $account = new StocksExchange($key_2, $secret_2, 'https://app.stex.com/api2', false);
        }
    } catch (Exception $e) {
        echo $e;
    }

	$result = null;
    if ($trade_type == "buy") {
        // BUY
		
		for ($i=0; $i<100; $i++) {
			$amount = mt_rand(10, 100);
			$price = mt_rand(20, 503);
			$price = $price * 0.000001;
			echo $amount.":".$price;
			//$result = $account->setTrade("BUY", $pair, $amount, $price); 
		
//			if( $result->success == 1 ) {
//				echo "BUY ORDER 성공<br>ORDER 번호 : ".$result->data->order_id;
//			} else {
//				echo "BUY ORDER FAIL<br>".var_dump($result);
//			}
		}
    } else if ($trade_type == "sell") {
        // SELL
		$result = $account->setTrade("SELL", $pair, $amount, $price); 
		
		if( $result->success == 1 ) {
			echo "SELL ORDER 성공<br>ORDER 번호 : ".$result->data->order_id;
		} else {
			echo "SELL ORDER FAIL<br>".var_dump($result);
		}
    } else {
        echo "Nothing to do";
    }
?>