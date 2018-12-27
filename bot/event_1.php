<?php
	use Stocks\StocksExchange;
	require dirname(__FILE__).'/vendor/autoload.php';

    $key = $_GET['key'];
    $secret = $_GET['secret'];
	$pair = "GROO_ETH";

    if(!isset($key)) $key = 'QLckGtyjKj4L41ZMpx5PHt3I19phasDk4m6R3Sb6';
    if(!isset($secret)) $secret = 'YfrTatuHOkIcnvxZP5eyetlSXdjlJiSAoT2ukDYaAmT6HXNF9DzROnLh6EzGZJA5';

    echo "<pre>";

    try {
        $account = new StocksExchange($key, $secret, 'https://app.stex.com/api2', false);
        if(!$account->getInfo()->success) {
            echo "Invalid Key";
            exit;
        } else {
            echo $account->getInfo()->data->email."<BR>";
        }
    } catch (Exception $e) {
        echo $e;
        exit;
    }

    /**
     * @param string $currency
     * @param int $from
     * @param int $count
     * @param int $from_id
     * @param int $end_id
     * @param string $order
     * @param int $since
     * @param int $end
     * @param string $operation
     * @param string $status
     * @return string
     */
	
    $count = 0;
    $buy = 0;
    $sell = 0;
    $hightest_price = 0;
    $last_TradeNumber = null;
    $last_Timestamp = 0;
    $continue = true;

    do {
        if(isset($last_TradeNumber)) $last_TradeNumber = $last_TradeNumber + 1;

        $result = $account->getTradeHistory("GROO_ETH", null, 150, $last_TradeNumber, null, "ASC", null, null, null, "OWN"); 
        $array = $result->data;

        foreach($array as $key=>$data) {
            if ($data->type == "buy") {
                $buy += $data->buy_amount;

                foreach($data->rates as $price_key=>$price_data) {
                    if($price_key > $hightest_price)
                        $hightest_price = $price_key;
                }
            } else {
                $sell += $data->sell_amount;
            }
            
            $last_TradeNumber = $key;
            $last_Timestamp = $data->timestamp;
            //echo $last_TradeNumber."<BR>";
            $count++;

            if($last_Timestamp > 1545350400) {
                $continue = false;
                break;
            }
            
            if($count >= 1000) {
                $continue = false;
                break;
            }
        }
    } while( count((array)$array) == 150 && $continue); 
        
    echo "Last Trading Number : ". $last_TradeNumber."<BR>";
    echo "Last Trading Time : ". date("Y-m-d h:i:s", $last_Timestamp)."<BR><BR>";

    echo "Trading Count : ". $count."<BR>";
    echo "Hightest Buy Price : ".$hightest_price." ETH<BR>";
    echo "Buy GROO : ".$buy." GROO<BR>";
    echo "Sell GROO : ".$sell." GROO<BR>";
    echo "Buy - Sell GROO : ".number_format($buy-$sell, 6, '.', '')."<BR>";
    echo "</pre>";

    echo "<pre>";
    //print_r($array);
    echo "</pre>";

//    $invest = 0;
//    foreach($array as $data) {
//        if ($data->document_type == "buy") {
//            $buy += $data->amount;
//        } else {
//            $sell += $data->amount;
//        }
//    }

//    echo "[total] ". ((float)$buy + (float)$sell) ."<BR>";
?>