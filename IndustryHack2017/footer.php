 <div class="inner-sidebar">
                    <span class="inner-sidebar-title">New Messages</span>
                    <div class="message-list">
                    <div class="info-item message-item"><img class="circle" src="assets/images/profile-image-2.png" alt=""><div class="message-info"><div class="message-author">Shyam</div><small>Accountant</small></div></div>
                    <div class="info-item message-item"><img class="circle" src="assets/images/profile-image.png" alt=""><div class="message-info"><div class="message-author">Ravi</div><small>Site Manager</small></div></div>
                    <div class="info-item message-item"><img class="circle" src="assets/images/profile-image-1.png" alt=""><div class="message-info"><div class="message-author">Rohini </div><small>Sales Manager</small></div></div>
                    </div>
                    <span class="inner-sidebar-title">Group Messaging</span>
                    <span class="info-item">Site A Employees<span class="new badge">12</span></span>
                    <div class="inner-sidebar-divider"></div>
                    <span class="info-item">Victor Employees</span>
                    <div class="inner-sidebar-divider"></div>
                    <span class="info-item disabled">No more events scheduled</span>
                    <div class="inner-sidebar-divider"></div>
                    
                    <span class="inner-sidebar-title">Stats <i class="material-icons">trending_up</i></span>
                    <div class="sidebar-radar-chart"><canvas id="radar-chart" width="170" height="140"></canvas></div>
                </div>
            </main>
			<div class="page-footer">
                <div class="footer-grid container">
                    <div class="footer-l white">&nbsp;</div>
                    <div class="footer-grid-l white">
                    </div>
                    <div class="footer-r white">&nbsp;</div>
                    <div class="footer-grid-r white">
                        <a class="footer-text"> 
                            <center>OayKay &copy; 2017</center>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-sidebar-hover"></div>
 <?php 
$current_time = time();
$firstday_of_this_month = strtotime(date('01-m-Y'));
$lastday_of_this_month = strtotime('last day of this month');
$monthback1 = strtotime("-1 month");
$monthback2 = strtotime("-2 month");
$monthback3 = strtotime("-3 month");
$monthback4 = strtotime("-4 month");
$monthback5 = strtotime("-5 month");
$monthback6 = strtotime("-6 month");
$monthback7 = strtotime("-7 month");
$monthback8 = strtotime("-8 month");
$monthback9 = strtotime("-9 month");
$monthback10 = strtotime("-10 month");
$monthback11 = strtotime("-11 month"); 
?>
		<Script src="assets/js/canvas.js"></script>
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/form_elements.js"></script>
        <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/plugins/chart.js/chart.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/curvedlines/curvedLines.js"></script>
        <script src="assets/plugins/peity/jquery.peity.min.js"></script>
		<?php if(basename($_SERVER['PHP_SELF']) == "index.php"){?>
		<script>
		$( document ).ready(function() {
    
    setTimeout(function(){ Materialize.toast('Last Order Delivered Succesfuly!', 4000) }, 4000);
    setTimeout(function(){ Materialize.toast('You have 4 new notifications', 4000) }, 11000);
    setTimeout(function(){ Materialize.toast('Hydraulic Machine not working properly', 10000) }, 11000);
});	
	</script>
		<?php } ?> 
        <script src="assets/js/pages/dashboard.js?bypass=1"></script>
        <script src="assets/js/custom_code.js?bypass=1"></script> 
        
        <Script>
		$(document).ready(function(){
		$('.tooltipped').tooltip({delay: 50});
		initChartBaby();
		});
		function initChartBaby(){
	   var chart = new CanvasJS.Chart("expense_raw_stocks",
	  {
		animationEnabled: true,
		title:{
			text: "Total Expense on Raw Materials"
		},
		data: [
		{
            color: 'green', name: 'Total amount Spent',
            lineThickness:3,
		    showInLegend: true, 
            toolTipContent: "{name} during {label} : {y} Rs",
			type: "line", // For Sales
			dataPoints: [
				{ label: "<?php echo date('M Y', $monthback11);?>",  y: <?php $sale1=SUMofTotalSoldStocks($monthback11,$monthback10,'raw');echo $sale1;?> },
				{ label: "<?php echo date('M Y', $monthback10);?>",  y: <?php $sale2=SUMofTotalSoldStocks($monthback10,$monthback9,'raw');echo $sale2;?> },
				{ label: "<?php echo date('M Y', $monthback9);?>",  y: <?php $sale3=SUMofTotalSoldStocks($monthback9,$monthback8,'raw');echo $sale3;?> },
				{ label: "<?php echo date('M Y', $monthback8);?>",  y: <?php $sale4=SUMofTotalSoldStocks($monthback8,$monthback7,'raw');echo $sale4;?> },
				{ label: "<?php echo date('M Y', $monthback7);?>",  y: <?php $sale5=SUMofTotalSoldStocks($monthback7,$monthback6,'raw');echo $sale5;?> },
				{ label: "<?php echo date('M Y', $monthback6);?>",  y: <?php $sale6=SUMofTotalSoldStocks($monthback6,$monthback5,'raw');echo $sale6;?> },
				{ label: "<?php echo date('M Y', $monthback5);?>",  y: <?php $sale7=SUMofTotalSoldStocks($monthback5,$monthback4,'raw');echo $sale7;?> },
				{ label: "<?php echo date('M Y', $monthback4);?>",  y: <?php $sale8=SUMofTotalSoldStocks($monthback4,$monthback3,'raw');echo $sale8;?> },                                 
				{ label: "<?php echo date('M Y', $monthback3);?>",  y: <?php $sale9=SUMofTotalSoldStocks($monthback3,$monthback2,'raw');echo $sale9;?> },
				{ label: "<?php echo date('M Y', $monthback2);?>",  y: <?php $sale10=SUMofTotalSoldStocks($monthback2,$monthback1,'raw');echo $sale10;?> },  
				{ label: "<?php echo date('M Y', $monthback1);?>", y: <?php $sale11=SUMofTotalSoldStocks($monthback1,$firstday_of_this_month,'raw');echo $sale11;?> }, 
				{ label: "<?php echo date('M Y');?>", y: <?php $sale12=SUMofTotalSoldStocks($firstday_of_this_month,$lastday_of_this_month,'raw');echo $sale12;?> },
			]
           },
			]
           }
		);

	chart.render();console.info('Chart triggered');
	 var chart = new CanvasJS.Chart("expense_final_this_month",
	  {
		animationEnabled: true,
		title:{
			text: "Monthly Reveneues from each Products."
		},
		data: [
		{
         color: 'green', name: 'Total amount Spent',
         lineThickness:3,
         showInLegend: true, 
         toolTipContent: "{name} on {label} : {y} Rs",
			type: "bar", // For Sales
			dataPoints: [
			/*<?php
			$sales_orders = getAllPurchaseOrdersBetweenMonths($firstday_of_this_month,$lastday_of_this_month,'final');
			foreach($sales_orders as $sales){?>
				{ label: "<?php echo getStockDetails($sales['stock_id'])['name'];?>", y: <?php  echo $sales['price']*$sales['quantity'];?> },
			<?php } ?>*/
			
							{ label: "Combination Wrench", y: 8600 },
							{ label: "Wrench 3.0", y: 5500 },
							{ label: "Flare Nut Wrench", y: 6600 }, 

			]
           },
			]
           }
		);

	chart.render();console.info('Chart triggered');
		 var chart = new CanvasJS.Chart("expense_raw_this_month",
	  {
		animationEnabled: true,
		title:{
			text: "Monthly Expense on raw material."
		},
		data: [
		{
         color: 'green', name: 'Total amount Spent',
         lineThickness:3,
         showInLegend: true, 
         toolTipContent: "{name} on {label} : {y} Rs",
			type: "bar", // For Sales
			dataPoints: [
			<?php
			$sales_orders = getAllPurchaseOrdersBetweenMonths($firstday_of_this_month,$lastday_of_this_month,'raw');
			foreach($sales_orders as $sales){?>
				{ label: "<?php echo getStockDetails($sales['stock_id'])['name'];?>", y: <?php  echo $sales['price']*$sales['quantity'];?> },
			<?php } ?>
			]
           },
			]
           }
		);

	chart.render();console.info('Chart triggered');
	 var chart = new CanvasJS.Chart("consume_raw_this_month",
	  {
		animationEnabled: true,
		title:{
			text: "Daily Consumption Report."
		},
		data: [
		{
                color: 'purple', name: 'Consumed',
                lineThickness:3,
		        showInLegend: true, 
            toolTipContent: "{name} on {label} : {y} Units",
			type: "bar", // For Sales
			dataPoints: [
			/*<?php
			$sales_orders = getAllPurchaseOrdersBetweenMonths($firstday_of_this_month,$lastday_of_this_month,'raw');
			foreach($sales_orders as $sales){?>
				{ label: "<?php echo getStockDetails($sales['stock_id'])['name'];?>", y: <?php echo GetQuantityOfStock($sales['stock_id'],'raw');?> },
			<?php } ?>*/
			{ label: "Nickel", y: 141 },
							{ label: "Iron", y: 91 },
							{ label: "Oil", y: 500 },
							{ label: "Steel", y: 301 },

			]
           },
			]
           }
		);
		
	chart.render();console.info('Chart triggered');
	 var chart = new CanvasJS.Chart("consume_final_this_month",
	  {
		animationEnabled: true,
		title:{
			text: "Daily Orders and Sales Report."
		},
		data: [
		{
                color: 'purple', name: 'Total Orders',
                lineThickness:3,
		        showInLegend: true, 
            toolTipContent: "{name} on {label} : {y} Units",
			type: "bar", // For Sales
			dataPoints: [
			/*<?php
			$sales_orders =  getAllSalesOrders('final');
			foreach($sales_orders as $sales){?>
				{ label: "<?php echo date('d F Y',getStockDetails($sales['stock_id'])['time']);?>", y: <?php echo $sales['quantity'];?> },
			<?php } ?>*/
			                { label: "10 November 2017", y: 201 },
							{ label: "11 November 2017", y: 10 },
							{ label: "12 November 2017", y: 100 },

			]
           },
			]
           }
		);
		
	chart.render();console.info('Chart triggered');
		var chart = new CanvasJS.Chart("expense_final_stocks",
	  {
		animationEnabled: true,
		title:{
			text: "Total Reveneue from your Products"
		},
		data: [
		{
            color: 'green', name: 'Total Revenue',
            lineThickness:3,
		    showInLegend: true, 
            toolTipContent: "{name} during {label} : {y} Rs",
			type: "line", // For Sales
			dataPoints: [
				{ label: "<?php echo date('M Y', $monthback11);?>",  y: <?php $sale1=SUMofTotalSoldStocks($monthback11,$monthback10,'final');echo $sale1;?> },
				{ label: "<?php echo date('M Y', $monthback10);?>",  y: <?php $sale2=SUMofTotalSoldStocks($monthback10,$monthback9,'final');echo $sale2;?> },
				{ label: "<?php echo date('M Y', $monthback9);?>",  y: <?php $sale3=SUMofTotalSoldStocks($monthback9,$monthback8,'final');echo $sale3;?> },
				{ label: "<?php echo date('M Y', $monthback8);?>",  y: <?php $sale4=SUMofTotalSoldStocks($monthback8,$monthback7,'final');echo $sale4;?> },
				{ label: "<?php echo date('M Y', $monthback7);?>",  y: <?php $sale5=SUMofTotalSoldStocks($monthback7,$monthback6,'final');echo $sale5;?> },
				{ label: "<?php echo date('M Y', $monthback6);?>",  y: <?php $sale6=SUMofTotalSoldStocks($monthback6,$monthback5,'final');echo $sale6;?> },
				{ label: "<?php echo date('M Y', $monthback5);?>",  y: <?php $sale7=SUMofTotalSoldStocks($monthback5,$monthback4,'final');echo $sale7;?> },
				{ label: "<?php echo date('M Y', $monthback4);?>",  y: <?php $sale8=SUMofTotalSoldStocks($monthback4,$monthback3,'final');echo $sale8;?> },                                 
				{ label: "<?php echo date('M Y', $monthback3);?>",  y: <?php $sale9=SUMofTotalSoldStocks($monthback3,$monthback2,'final');echo $sale9;?> },
				{ label: "<?php echo date('M Y', $monthback2);?>",  y: <?php $sale10=SUMofTotalSoldStocks($monthback2,$monthback1,'final');echo $sale10;?> },  
				{ label: "<?php echo date('M Y', $monthback1);?>", y: <?php $sale11=SUMofTotalSoldStocks($monthback1,$firstday_of_this_month,'final');echo $sale11;?> }, 
				{ label: "<?php echo date('M Y');?>", y: <?php $sale12=SUMofTotalSoldStocks($firstday_of_this_month,$lastday_of_this_month,'final');echo $sale12;?> },
			]
           },
			]
           }
		);

         chart.render();console.info('Chart triggered');
	
}
 $(".die_machine").find("input[type=checkbox]").on("change",function() {
 var status = $(this).prop('checked');
if(status==true){
$('#die_val').html('On');
}else{
$('#die_val').html('Off');
}
 });
		</script>
		
		<img src=x onerror="initChartBaby();" style="display:none;">
<Style>.canvasjs-chart-credit{display:none;}</style>
    </body>
</html>