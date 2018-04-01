<?php include '../resources/config.php';?>

<!-- define page content -->
<?php
// set Tradingbiew chart paramaters
$market = "BITTREX:BTCUSDT";

// set Bittrex market
$current_market = "usdt-btc";

// set Bittrext symbol
$symbol = "BTC";

$title = "{$market}";
?>

<?php 
// Bittrex public market info
include (CLIENT . 'bittrex-market.php');

// Bittrex account details ($current_market)
include (CLIENT . 'bittrex-market-acc.php');
?>

<?php
// page structure
include (SECTION . 'header.php');
/*
include (SECTION . 'chart.php'); commented for faster load while testing
*/
// display current price, ballance, estimated value
include (SECTION . 'base-info.php');

// input a target price. reference for placing future orders
include (SECTION . 'target.php');

// display any open orders in current market
include (SECTION . 'open.php');

// set auto trade paramaters
include (SECTION . 'auto.php');

// display order history + calculate dollar cost average
include (SECTION . 'history.php');

include (SECTION . 'footer.php');
?>
