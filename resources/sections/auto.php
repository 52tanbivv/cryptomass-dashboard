<div class="container" id="auto">
    <h3>Auto Order</h3>
    <div class="col-lg-6" id="auto-bid">
        <div class="row"> 
            <div class="col-lg-5">
                <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label"> Enable Auto Bid</label>
                </div><!-- enable-auto-bid END -->    
            </div><!-- col-lg-5 END-->
        </div><!-- row END -->    
        <form>
        <div class="form-group row">
            <div class="col-lg-5">
            <input type="number" class="form-control" id="auto-bid-price" placeholder="price">
            </div><!-- col-lg-5 END -->
            <div class="col-lg-5">
            <input type="number" class="form-control" id="auto-bid-amount" placeholder="amount">
            </div><!-- col-lg-5 END -->
        </div><!-- form-group row END -->
        <div class="form-group row">
            <div class="col-lg-5">
            <input type="number" class="form-control" id="auto-bid-percent" placeholder="% of available">
            </div><!-- col-lg-5 END -->
            <div class="col-lg-5">
            <input type="number" class="form-control" id="auto-bid-percent-price" placeholder="% price increase">
            </div><!-- col-lg-5 END -->
        </div><!-- form-group row END -->
        <div class="form-group row">
            <div class="col-lg-5">
            <div class="form-group">
            <label for="repat-auto-bid">Repeat</label>
            <select class="form-control" id="repat-auto-bid">
                <option>1x</option>
                <option>3x</option>
                <option>5x</option>
                <option>10x</option>
                <option>Until</option>
                <option>Infinite</option>
            </select>
            </div>
            </div><!-- col-lg-5 END -->
            <div class="col-lg-5">
            <div class="form-group">
            <label for="repat-auto-bid">Limit</label>
            <select class="form-control" id="repat-auto-bid">
                <option>1x</option>
                <option>3x</option>
                <option>5x</option>
                <option>10x</option>
                <option>Until</option>
                <option>Infinite</option>
            </select>
            </div>
            </div><!-- col-lg-5 END -->
        </div><!-- form-group row END -->      
        </form>
    </div><!-- auto-bid END -->
        <p><?php echo $auto_bid?></p>
    <div class="col-lg-6" "open-sell">
        <h4>Auto Ask</h4>
        <?php echo $auto_ask?>
    </div><!-- auto-ask END -->
</div><!-- auto END -->