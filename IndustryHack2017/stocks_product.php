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
                 include('include/add_products.php');
				} elseif($tab=='sales'){
                 include('include/product_sales.php');
				}elseif($tab=='daily_update'){ 
                 include('include/daily_product_update.php');
				}elseif($tab=='summary'){
				 include('include/product_sumarry.php');
				}elseif($tab=='tracking'){
				 include('include/product_tracking.php');
				} ?>
                </div>
           <?php include('footer.php');?>