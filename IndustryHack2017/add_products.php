<?php include('header.php');?>
            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
				<div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l8">
                         <div class="card">
						 <div class="card-content">
                                <span class="card-title">Add Products for Sale.</span><br>
                                <div class="row">
                                    <form class="col s12" id="add_shopping_products" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_prefix" type="text" name="product" class="validate" required>
                                                <label for="icon_prefix">Name</label>
                                            </div> 
											<div class="input-field col s6">
												<select id="category" name="category">
												  <option value="" disabled selected>Product Category.</option>
												  <option value="wrenches">Wrenches</option>
												  <option value="plier">Pier</option> 
												</select> 
											  </div> 
											<div class="file-field input-field col s6"> 
											  <div class="btn">
												<span>Product Image</span>
												<input type="file" id="product_image" name="product_image" accept="image/*"  class="validate" required>
											  </div>
											  <div class="file-path-wrapper">
												<input class="file-path validate" type="text">
											  </div>
											</div>

                                            <div class="input-field col s12"> 
                                                <input id="short_desc" type="text" name="short_desc" class="validate" required>
                                                <label for="icon_telephone">Short Description</label>
                                            </div> 
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">address</i> 
                                                <textarea id="icon_prefix2" name="long_desc" class="materialize-textarea" required></textarea>
                                                <label for="icon_prefix2">Long Description</label>
                                            </div> 
											
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">address</i> 
                                                <input id="short_desc" type="number" name="price" class="validate" required>
                                                <label for="icon_prefix2">Price in INR (Example 250)</label>
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