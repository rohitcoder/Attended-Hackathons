
				<div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l8">
                         <div class="card">
						 <div class="card-content">
                                <span class="card-title">Add Suppliers</span><br>
                                <div class="row">
                                    <form class="col s12" id="add_suppliers">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_prefix" type="text" name="name" class="validate" required>
                                                <label for="icon_prefix">Name</label>
                                            </div>
											<div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="phone" type="text" name="phone" class="validate" required>
                                                <label for="phone">Phone</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">add_alert</i>
                                                <input id="email" type="email" name="email" required>
                                                <label for="email">Email</label>
                                            </div>  
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">comment</i> 
                                                <textarea id="address" name="address" class="materialize-textarea"></textarea>
                                                <label for="address">Address</label>
                                            </div>
											<div class="input-field col s12">
                                                <i class="material-icons prefix">comment</i> 
                                                <textarea id="comment" name="comment" class="materialize-textarea"></textarea>
                                                <label for="comment">Notes/Comments</label>
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
                                    <span class="card-title">Suppliers List</span>
                                <table class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th data-field="name">Name</th>
                                            <th data-field="phone">Phone</th>
                                            <th data-field="email">Email</th>
                                            <th data-field="address">Address</th>
                                            <th data-field="comment">Comment</th>
                                            <th data-field="time">Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
									$suppliers = getSuppliers();
									foreach($suppliers as $supplier){?>
                                        <tr>
                                            <td><?php echo $supplier['id'];?></td>
                                            <td><?php echo $supplier['name'];?></td>
                                            <td><?php echo $supplier['phone'];?></td>
                                            <td><?php echo $supplier['email'];?></td>
                                            <td><?php echo $supplier['address'];?></td>
                                            <td><?php echo $supplier['comment'];?></td>
                                            <td><?php echo date('d F y',$supplier['time']);?></td>
                                        </tr>
									<?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
						
                    </div> 
               