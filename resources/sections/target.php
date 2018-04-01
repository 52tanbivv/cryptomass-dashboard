<div class="container" id="target">
    <div class="col-lg-4" id="buy-target"><h3>Buy</h3>
        <div class="form-group">
            <label for="buy-target">Buy Target</label>
            <input type="number" class="form-control" id="buy-target" placeholder="Enter target for reference only">
        </div>
    <form>
        <div class="form-row">
            <div class="form-group col-lg-9">
                    <input type="number" class="form-control" id="bid" placeholder="Bid">
            </div>
            <div class="form-group col-lg-2">
                <button type="submit" id="limit-buy" class="btn btn-primary">Market</button>
            </div>    
        </div><!-- form row bid END -->    
        
        <div class="form-row">
            <div class="form-group col-lg-6">
                <input type="number" class="form-control" id="bid_amount" placeholder="Bid Amount">
            </div>
            <div class="form-group col-lg-6">
                <input type="number" class="form-control" id="bid_percent" placeholder="Bid %">
            </div>
        </div><!-- bid amount END -->  
    </form>
        
        <div class="col-lg-8"><h4>Total: <?php echo $bid_amount * $bid; ?></h4>
        </div>
        <div class="col-lg-4">
            <button type="submit" class="btn btn-primary">Place Bid</button>
        </div>
</div><!-- buy target END -->
    
    <div class="col-lg-4" id="order-book">
        <h3>Order Book</h3>
        <div class="col-lg-1" id="space"></div>
            <div class="col-lg-9">   
            <h4>Bid</h4>
                <?php echo $order_book_bid?>
            <h4>Ask</h4>
                <?php echo $order_book_ask?>
            </div>
    </div><!-- order-book END -->
    <div class="col-lg-4" id="sell-target"><h3>Sell</h3>
        <div class="form-group">
            <label for="sell-target">Sell Target</label>
            <input type="number" class="form-control" id="sell-target" placeholder="Enter target for reference only">
        </div>
    <form>
        <div class="form-row">
            <div class="form-group col-lg-9">
                    <input type="number" class="form-control" id="Ask" placeholder="Ask">
            </div>
            <div class="form-group col-lg-2">
                <button type="submit" id="limit-sell" class="btn btn-primary">Market</button>
            </div>    
        </div><!-- form row ask END -->    
        
        <div class="form-row">
            <div class="form-group col-lg-6">
                <input type="number" class="form-control" id="bid_amount" placeholder="Bid Amount">
            </div>
            <div class="form-group col-lg-6">
                <input type="number" class="form-control" id="bid_percent" placeholder="Bid %">
            </div>
        </div><!-- bid amount END -->  
    </form>
        
        <div class="col-lg-8"><h4>Total: <?php echo $bid_amount * $bid; ?></h4>
        </div>
        <div class="col-lg-4">
            <button type="submit" class="btn btn-primary">Place Ask</button>
        </div>
</div><!-- sell target END -->
</div><!-- target END -->