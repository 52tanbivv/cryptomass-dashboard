<!-- Display open orders for current market
"https://bittrex.com/api/v1.1/market/getopenorders?apikey=API_KEY&market={$current_market}";   
-->

<?php
$open_bid = 
    "<ul>
    <li>bid 1</li>
    <li>bid 2</li>
    <li>bid 3</li>
    </ul>";
$open_bids = "[cal total bids]";

$open_ask = "<ul>
    <li>ask 1</li>
    <li>ask 2</li>
    <li>ask 3</li>
    </ul>";
$open_asks = "[cal total asks]";
?>

<!-- get order history
https://bittrex.com/api/v1.1/account/getorderhistory   
-->

<?php $buy_history = "<ul>
<li>Buy 1 price - Amount - Total</li>
<li>Buy 2 price - Amount - Total</li>
<li>Buy 3 price - Amount - Total</li>
</ul>"
?>

<?php $sell_history = "<ul>
<li>Sell 1 price - Amount - Total</li>
<li>Sell 2 price - Amount - Total</li>
<li>Sell 3 price - Amount - Total</li>
</ul>"
?>

<?php $available_bal = "[api result]"?>

<?php $total_bal = "[api result]"?>

<?php $est_val = "[calculated val]"?>

<?php $btc_av_buy= "8000"; //Calculate using DCA
?>

<?php $btc_av_sell= "8500";
//placeholder. Calculate using DCA
?>

<?php $av_profit = "calc"
// av_buy / av_sell *100
?>


<?php 
//Auto Order
    $auto_bid = ""?>

<!-- get order history
https://bittrex.com/api/v1.1/account/getorderhistory   
-->

<?php $buy_history = "<ul>
<li>Buy 1 price - Amount - Total</li>
<li>Buy 2 price - Amount - Total</li>
<li>Buy 3 price - Amount - Total</li>
</ul>"
?>

<?php $sell_history = "<ul>
<li>Sell 1 price - Amount - Total</li>
<li>Sell 2 price - Amount - Total</li>
<li>Sell 3 price - Amount - Total</li>
</ul>"
?>

<?php $dca_buy = "[dca calc.]"?>
<?php $dca_sell = "[dca calc.]"?>