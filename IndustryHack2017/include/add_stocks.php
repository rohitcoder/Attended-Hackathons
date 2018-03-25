
				<div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l8">
                         <div class="card">
						 <div class="card-content">
                                <span class="card-title">Add Stocks - Register Your New Raw materials (eg: Oil, Iron)</span><br>
                                <div class="row">
                                    <form class="col s12" id="add_stocks">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">local_activity</i>
                                                <input id="icon_prefix" type="text" name="name" class="validate" required>
                                                <label for="icon_prefix">Material Name</label>
                                            </div>
                                            <div class="input-field col s6 tooltipped"  data-position="bottom" data-delay="50" data-tooltip="Threshold will give you a notification whenever your raw materials reaches to this level.">
                                                <i class="material-icons prefix">add_alert</i>
                                                <input id="icon_telephone"  name="threshold" type="number" required>
                                                <label for="icon_telephone">Threshold</label>
                                            </div>   
											<div class="input-field col s12" style="display:none;">
                                                <i class="material-icons prefix"></i>
												<select name="stock_type" id="stock_type" required>
												<option value="" disabled selected>Choose your option</option>
												  <option value="raw" selected>Raw Material</option> 
												  <option value="final">Final Product</option> 
												  <option value="other">Other</option> 
												</select>
                                                <label for="Supplier">Material Type</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">comment</i> 
                                                <textarea id="icon_prefix2"  name="comment" class="materialize-textarea"></textarea>
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
						<div class="row">
    <div id="test1" class="col s12">
                            <div id="final" class="card invoices-card">
                                <div class="card-content">
                                    <div class="card-options">
                                        <input type="text" class="expand-search" placeholder="Search" autocomplete="off">
                                    </div>
                                    <span class="card-title">Raw Material List</span>
                                <table class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th data-field="material">Material</th>
                                            <th data-field="threshold">Threshold</th>
                                            <th data-field="comment">Comments</th>
                                            <th data-field="time">Time</th> 
                                        </tr>
                                    </thead>
                                    <tbody> 
									<?php 
									$stocks_arr = getStocks('final');
									foreach($stocks_arr as $stocks){?>
									    <tr>
                                            <td><?php echo $stocks['id'];?></td>
                                            <td><?php echo $stocks['name'];?></td>
                                            <td><?php echo $stocks['threshold'];?></td>
                                            <td><?php echo $stocks['comments'];?></td> 
                                            <td><?php echo date('d F y',$stocks['time']);?></td>
                                        </tr>
										<?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div> 
  </div> 
                
						
                    </div> 
					</div>
               