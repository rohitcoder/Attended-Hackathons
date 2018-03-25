
				<div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l8">
                         <div class="card">
						 <div class="card-content">
                                <span class="card-title">Add Raw material Purchase Orders</span><br>
                                <div class="row">
                                    <form class="col s12" id="add_purchase" method="post">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">account_circle</i>
												<select name="stock_id" id="stock_id" required>
												<option value="" disabled selected>Choose your option</option>
													<?php 
													$stocks = getAllStockNames('final');
													foreach($stocks as $stock){?>
													<option value="<?php echo $stock['id'];?>"><?php echo $stock['name'];?></option>
													<?php } ?> 
												</select>
                                                <label for="icon_prefix">Item Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">inr</i>
                                                <input id="manufactured_on" name="manufactued_on" type="text" value="<?php echo date('d F, Y',time());?>" class="datepicker">
                                                <label for="order_date" class="active">Manufactured On</label>
                                            </div>  
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">inr</i>
                                                <input id="quantity" name="quantity" type="number" required>
                                                <label for="quantity">Quantity</label>
                                            </div>  
											<input type="hidden" name="type" value="final">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">comment</i> 
                                                <textarea id="comments" name="comments" class="materialize-textarea"></textarea>
                                                <label for="comments">Notes/Comments</label>
                                            </div>
                                            <div class="input-field col s12">											
												<button class="btn waves-effect waves-light" type="submit">Add
												<i class="material-icons right">add</i>
												</button>										
												<button class="btn waves-effect waves-light" type="reset">Reset
												<i class="material-icons right">refresh</i>
												</button>
                                            </div>          
                                        </div>
                                    </form>
                                </div>
                            </div>
						 </div>
                        </div>
                        <?php include('todo_list_widget.php');?>
						    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l12">
                            <div class="card invoices-card">
                                <div class="card-content">
                                    <div class="card-options">
                                        <input type="text" class="expand-search" placeholder="Search" autocomplete="off">
                                    </div>
                                    <span class="card-title">Current Status of your Products.</span>
                                <table class="responsive-table bordered">
                                    <thead>
                                        <tr> 
                                            <th data-field="number">Product</th>
											<th data-field"avaiable">Stocks Available</th>
                                            <th data-field="total">Manufactured On</th>
                                            <th data-field="total">Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$purchase_order = getPurchaseOrders('final');
									foreach($purchase_order as $orders){?>
                                        <tr> 
                                            <td><?php echo getStockDetails($orders['stock_id'])['name'];?></td>
											<td><b><?php echo GetQuantityOfStock($orders['stock_id'],'final');?> Units</b></td>
                                            <td><?php echo date('d F y',$orders['manufactured_on']);?></td>
                                            <td><?php echo $orders['comment'];?></td>
                                        </tr>
										<?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
						
                    </div> 
               