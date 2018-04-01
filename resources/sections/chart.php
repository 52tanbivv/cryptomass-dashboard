<div class="tradingview-widget-container">
  <div id="tradingview_389e5"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/{$pair}/" rel="noopener" target="_blank"><span class="blue-text"><?php echo $market ?></span> <span class="blue-text">chart</span> by TradingView</a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "<?php echo $market ?>",
  "interval": "30",
  "timezone": "Etc/UTC",
  "theme": "Dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "hide_side_toolbar": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_389e5"
}
  );
  </script>
</div>
