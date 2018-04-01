<!-- <?php include (CLIENT . 'bittrex.php');?>-->

<?php
    $btrxprice=file_get_contents("https://bittrex.com/api/v1.1/public/getticker?market={$current_market}");
    $content = json_decode($btrxprice, true);          
    $last_price = $content["result"]["Last"];
?>

<!--
<?php
$orderbook=file_get_contents("https://bittrex.com/api/v1.1/public/getorderbook?market={$current_market}&type=both");
    $content = json_decode($orderbook, true);          
    $buy_book = $content["result"]["buy"];
    $buy = $buy_book["buy"]["Quantity"];
    $buy_rate = $buy_book["buy"]["Rate"];
?>
return 3 open orders to fit the space
Buy and sell orders
Quantity + Rate
Refresh on new order
-->

