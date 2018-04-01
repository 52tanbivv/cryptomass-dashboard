<div class="container" id="base-info">
    <div class="col-lg-3"><h3><?php echo $symbol?> Price</h3>
        <h4>$ <?php echo number_format((float)$last_price, 2, '.', ''); ?> USD</h4>
    </div>
    <div class="col-lg-3"><h3>Available Ballance</h3>
        <h4><?php echo $available_bal ?></h4>
    </div>
    <div class="col-lg-3"><h3>Total Ballance</h3>
        <h4>$ <?php echo $total_bal ?></h4>
    </div>
    <div class="col-lg-3"><h3>Est. Value</h3>
        <h4>$ <?php echo $est_val ?> USD</h4>
    </div>
</div> <!-- base-info END-->