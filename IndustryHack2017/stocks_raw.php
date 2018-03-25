<?php include('header.php');?>
            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
				<?php
				if(isset($_GET['tab'])){
				$tab = $_GET['tab'];
				}else{
				$tab = '';
				}
				if(empty($tab)){
                 include('include/add_stocks.php');
				} elseif($tab=='update'){
                 include('include/stock_sales.php');
				}elseif($tab=='purchase'){ 
                 include('include/stock_purchase_orders.php');
				}elseif($tab=='suppliers'){
				 include('include/stock_suppliers.php');
				}elseif($tab=='summary'){
				 include('include/stock_sumarry.php');
				} ?>
                </div>
           <?php include('footer.php');?>