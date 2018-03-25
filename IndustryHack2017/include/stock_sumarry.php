
				<div class="row no-m-t no-m-b">
                        <div class="col s6 m6 l6">
                         <div class="card">
						 <div class="card-content">
                                <span class="card-title">Monthly Expense on Raw Materials Annually.</span><br>
                                <div class="row">
								
								<!-- Delete it later on no use -->
								   <div id="expense_final_stocks" style="height: 300px; width: 100%;display:none;"></div>
								   <div id="expense_final_this_month" style="height: 300px; width: 100%;display:none;"></div>
                                   <div id="consume_final_this_month" style="height: 300px; width: 100%;display:none;"></div>
								<!-- Till here -->
                                   <div id="expense_raw_stocks" style="height: 300px; width: 100%;"></div>
                                </div>
                            </div>
						 </div>
                        </div>
						 <div class="col s6 m6 l6">
                         <div class="card">
						 <div class="card-content">
                                <span class="card-title">Expense on Raw Materials this Month.</span><br>
                                <div class="row">
                                   <div id="expense_raw_this_month" style="height: 300px; width: 100%;"></div>
                                </div>
                            </div>
						 </div>
                        </div>
						 <div class="col s12 m12 l12">
                         <div class="card">
						 <div class="card-content">
                                <span class="card-title">Consumption of Raw Materials in day by day Activity.</span><br>
                                <div class="row">
                                   <div id="consume_raw_this_month" style="height: 300px; width: 100%;"></div>
                                </div>
                            </div>
						 </div>
                        </div>
						
						    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l12">
                            <div class="card invoices-card">
                                <div class="card-content">
                                    <div class="card-options">
                                        <input type="text" class="expand-search" placeholder="Search" autocomplete="off">
                                    </div>
                                    <span class="card-title">Consumptions Report</span>
                                <table class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th data-field="number">Material</th>
                                            <th data-field="number">Stock Available</th>
                                            <th data-field="company">Consumed</th>
                                            <th data-field="date">Final Price</th>
                                            <th data-field="progress">Comment</th>
                                            <th data-field="total">Consumed on</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
									<?php 
									$sales_orders = getAllSalesOrders('raw');
									foreach($sales_orders as $sales){?>
                                        <tr>
                                            <td><?php echo $sales['id'];?></td>
                                            <td><?php echo getStockDetails($sales['stock_id'])['name'];?></td>
                                            <td><b><?php echo GetQuantityOfStock($sales['stock_id'],'raw');?> Units</b></td>
                                            <td><b><?php echo $sales['quantity'];?> Units</b></td>
                                            <td><?php echo $sales['per_price']*$sales['quantity'];?> Rs</td> 
                                            <td><?php echo $sales['comment'];?></td> 
                                            <td><?php echo date('d F y',$sales['time']);?></td>
                                        </tr>
										<?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
						
                    </div> 
               