<?php include('header.php');?>
            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
				<div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l8">
                         <div class="card">
						 <div class="card-content">
                                <span class="card-title">Add Customer</span><br>
                                <div class="row">
                                    <form class="col s12" id="add_customer">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_prefix" type="text" name="name" class="validate" required>
                                                <label for="icon_prefix">Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">phone</i>
                                                <input id="icon_telephone" type="tel" name="phone" class="validate" required>
                                                <label for="icon_telephone">Phone</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">email</i>
                                                <input id="icon_telephone" type="email" name="email" class="validate" required>
                                                <label for="icon_telephone">Email</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">address</i> 
                                                <textarea id="icon_prefix2" name="address" class="materialize-textarea" required></textarea>
                                                <label for="icon_prefix2">Complete Address</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">comment</i> 
                                                <textarea id="icon_prefix2" name="comments" class="materialize-textarea"></textarea>
                                                <label for="icon_prefix2">Notes/Comments</label>
                                            </div>
											
                                            <div class="input-field col s12">											
												<button class="btn waves-effect waves-light disable_buttons" type="submit">Add
												<i class="material-icons right">add</i>
												</button>										
												<button class="btn waves-effect waves-light disable_buttons" type="reset">Reset
												<i class="material-icons right">refresh</i>
												</button>
                                            </div>        
                                        </div>
                                    </form>
                                </div>
                            </div>
						 </div>
                        </div>
                        <div class="col s12 m12 l4">
                            <?php include('recent_customers.php');?>
                        </div>
                    </div> 
                </div>
          
           <?php include('footer.php');?>