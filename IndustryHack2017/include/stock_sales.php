
				<div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l8">
                         <div class="card">
						 <div class="card-content">
                                <span class="card-title">Update Raw material Consumption</span><br>
                                <div class="row">
                                    <form class="col s12" id="add_sales">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">account_circle</i>
                                        <select name="stock_id" required>
                                            <option value="" disabled selected>Choose your option</option>
											<?php 
											$stocks = getAllStockNames('raw');
											foreach($stocks as $stock){?>
                                            <option value="<?php echo $stock['id'];?>"><?php echo $stock['name'];?></option>
											<?php } ?> 
                                        </select>
                                                <label for="icon_prefix">Item Name</label>
                                            </div>
											<input type="hidden" name="type" value="raw">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">inr</i>
                                                <input id="icon_telephone" name="per_price" type="number" required>
                                                <label for="icon_telephone">Per Price</label>
                                            </div> 
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">inr</i>
                                                <input id="quantity" name="quantity" type="number" required>
                                                <label for="quantity">Quantity</label>
                                            </div>  
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">comment</i> 
                                                <textarea id="icon_prefix2" name="comments" class="materialize-textarea"></textarea>
                                                <label for="icon_prefix2">Notes/Comments</label>
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
                                    <span class="card-title">Consumptions Details</span>
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
                                            <td><?php echo GetQuantityOfStock($sales['stock_id'],'raw');?></td>
                                            <td><?php echo $sales['quantity'];?></td>
                                            <td><?php echo $sales['per_price']*$sales['quantity'];?></td> 
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
               