<?php
	use Stocks\StocksExchange;
	require dirname(__FILE__).'/vendor/autoload.php';

    $account = $_GET['account'];

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

	$data = "<div style='width:100%; height:50px; line-height:50px; text-align:center; background:#b0b0b0;'><B>";
    $data = $data."[".$_GET['account']."] ".$account->getInfo()->data->email."</B></div><div style='text-align:right; padding:5px; border:1px solid #b0b0b0; height:80px;'>";

    foreach ($account->getInfo()->data->funds as $coin => $value) {
        if ($value > 0) {
            $data = $data.number_format($value, 2) ." ". $coin ."<BR>";
        }
    }
    $data = $data."</div>";
?>
<style>
    body {
        margin: 0;
        padding: 0;
    }
</style>

<script>
	parent.setWallet($_GET['account'], "<?=$data?>");
</script>