
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
													$stocks = getAllStockNames('raw');
													foreach($stocks as $stock){?>
													<option value="<?php echo $stock['id'];?>"><?php echo $stock['name'];?></option>
													<?php } ?> 
												</select>
                                                <label for="icon_prefix">Item Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">inr</i>
                                                <input id="per_price" name="per_price" type="number" required>
                                                <label for="per_price">Per Price (In INR)</label>
                                            </div> 
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">inr</i>
                                                <input id="quantity" name="quantity" type="number" required>
                                                <label for="quantity">Quantity</label>
                                            </div>  
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">inr</i>
                                                <input id="order_date" name="order_date" type="text" class="datepicker">
                                                <label for="order_date">Order Date</label>
                                            </div>  
											<input type="hidden" name="type" value="raw">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">inr</i>
                                                <input id="expected_date" name="expected_date" type="text" class="datepicker">
                                                <label for="expected_date">Expected Date of Arrival</label>
                                            </div>  
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">account_circle</i>
												<select name="supplier_id" id="Supplier" required>
												<option value="" disabled selected>Choose your option</option>
												 <?php 
													$suppliers = getSuppliers();
													foreach($suppliers as $supplier){?>
													<option value="<?php echo $supplier['id'];?>"><?php echo $supplier['name'];?></option>
												<?php } ?> 
												</select>
                                                <label for="Supplier">Supplier</label>
                                            </div>
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
                                    <span class="card-title">Purchased Raw Material List</span>
                                <table class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th data-field="number">Material</th>
											<th data-field"avaiable">Stocks Available</th>
                                            <th data-field="company">Supplier</th>
                                            <th data-field="date">Price</th>
                                            <th data-field="progress">Quantity</th>
                                            <th data-field="total">Order Date</th>
                                            <th data-field="total">Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$purchase_order = getPurchaseOrders('raw');
									foreach($purchase_order as $orders){?>
                                        <tr>
                                            <td>#<?php echo $orders['id'];?></td>
                                            <td><?php echo getStockDetails($orders['stock_id'])['name'];?></td>
											<td><?php echo GetQuantityOfStock($orders['stock_id'],'raw');?></td>
                                            <td><?php echo $orders['supplier_id'];?></td>
                                            <td><?php echo $orders['price']*$orders['quantity'];?></td>
                                            <td><?php echo $orders['quantity'];?></td>
                                            <td><?php echo date('d F y',$orders['order_date']);?></td>
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
               