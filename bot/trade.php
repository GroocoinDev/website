<?php
	use Stocks\StocksExchange;
	require dirname(__FILE__).'/vendor/autoload.php';

    $account = $_GET['account'];
    $trade_type = $_GET['trade_type'];
    $pair = $_GET['pair'];
    $price = $_GET['price'];
    $amount = $_GET['amount'];

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
		$result = $account->setTrade("BUY", $pair, $amount, $price); 
		
		if( $result->success == 1 ) {
			echo "BUY ORDER 성공<br>ORDER 번호 : ".$result->data->order_id;
		} else {
			echo "BUY ORDER FAIL<br>".var_dump($result);
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
        // CANCEL
        $result = $account->setCancelOrder($_GET['ordernum']);
		
		if( $result->success == 1 ) {
			echo "채결 실패로 ORDER 취소 성공<br>ORDER 번호 : ".$result->data->order_id;
		}
    }
?>
<? if ($trade_type != "cancel") { ?>
<script>
    parent.setOrder(<?=$_GET['account']?>, "<?=$trade_type?>", <?=$amount?>, <?=$price?>, <?=$result->data->order_id; ?>);
</script>
<? } ?>