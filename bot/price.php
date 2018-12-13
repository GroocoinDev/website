<style>
    body {
        margin: 0;
        padding: 0;
        font-size:13px;
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

<?php
    $pair = $_GET['pair'];
    $coin = str_replace("_ETH", "", $pair);

    $json = file_get_contents("https://app.stex.com/api2/trades?pair=".$pair);
    $data = array();
    $data = json_decode($json, true);

    $json2 = file_get_contents("https://app.stex.com/api2/ticker");
    $data2 = array();
    $data2 = json_decode($json2, true);

    // 상수
    $UTC9 = 32400;
    $ETH_PRICE = floatval($_GET['ethprice']);

    use Stocks\StocksExchange;
	require dirname(__FILE__).'/vendor/autoload.php';
    $key_1 = 'QLckGtyjKj4L41ZMpx5PHt3I19phasDk4m6R3Sb6'; // API key sample
    $secret_1 = 'YfrTatuHOkIcnvxZP5eyetlSXdjlJiSAoT2ukDYaAmT6HXNF9DzROnLh6EzGZJA5'; // API secret sample
    $account = new StocksExchange($key_1, $secret_1, 'https://app.stocks.exchange/api2', false);
    $orderbooks = $account->getOrderBook($pair);
    
    $data = "<table width='30%'>";
    $data = $data."<tr><td height='300'>";

    for ($i = 0; $i < count($data2); $i++) {
        if ($data2[$i]["market_name"] == $pair) {
            $change = number_format((floatval($data2[$i]["last"]*1000000)/floatval($data2[$i]["lastDayAgo"]*1000000)- 1)*100, 2);
            $data = $data. "[가격]";
            $data = $data. " (".$change."%)";
            $data = $data. "<br>현재 : ".$data2[$i]["last"]." ETH (".sprintf('₩ %0.2f', $data2[$i]["last"]*$ETH_PRICE).")";
            $data = $data. "<br>어제 : ".$data2[$i]["lastDayAgo"]." ETH (".sprintf('₩ %0.2f', $data2[$i]["lastDayAgo"]*$ETH_PRICE).")";
            $data = $data. "<br>볼륨 : ".number_format($data2[$i]["vol"] * $data2[$i]["last"], 5)." ETH<br><br>";
            break;
        }
    }
    
    $data = $data. "[매수]<br>금액 : ".$orderbooks->result->buy[0]->Rate." ETH<br>개수 : ".number_format($orderbooks->result->buy[0]->Quantity)." ".$coin."<br>비용 : ".number_format($orderbooks->result->buy[0]->Quantity * $orderbooks->result->buy[0]->Rate, 8)." ETH<br><br>";
    $data = $data. "[매도]<br>금액 : ".$orderbooks->result->sell[0]->Rate." ETH<br>개수 : ".number_format($orderbooks->result->sell[0]->Quantity)." ".$coin."<br>비용 : ".number_format($orderbooks->result->sell[0]->Quantity * $orderbooks->result->sell[0]->Rate, 8)." ETH";

    $data = $data. "</tr></td>";
    $data = $data. "</table>";

    $data = $data. "<table width='70%'>";
    $data = $data. "<tr height='50' align='center' style='background:#b0b0b0;'><td width='200'>Time</td><td>Type</td><td width='200'>Quantity</td><td width='200'>Price</td></tr>";
    for ($i = 0; $i < 5; $i++) {
        $data = $data. "<tr align='center' height='50'>
                <td align='center'>". date("Y-m-d H:i:s", $data["result"][$i]["timestamp"] + $UTC9) ."</td>
                <td>".$data["result"][$i]["type"]."</td>
                <td align='right'>".number_format($data["result"][$i]["quantity"])." ".$coin."</td>
                <td align='right'>".$data["result"][$i]["price"]. " ETH</td>
              </tr>";
    }
    $data = $data. "</table>";
?>
<meta charset="UTF-8">
<script>
	parent.setRealTime("<?=$data?>");
    parent.setPrice(<?=$orderbooks->result->sell[0]->Rate?>, <?=$orderbooks->result->buy[0]->Rate?>);
</script>
