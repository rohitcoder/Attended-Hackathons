<?php include('header.php');?>
            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content"> 
                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l12">
                            <div class="card invoices-card">
                                <div class="card-content">
                                    <div class="card-options">
                                        <input type="text" class="expand-search" placeholder="Search" autocomplete="off">
                                    </div>
                                    <span class="card-title">Customer List</span>
                                <table class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th data-field="name">Name</th>
                                            <th data-field="phone">Phone</th>
                                            <th data-field="email">Email</th>
                                            <th data-field="address">Address</th>
                                            <th data-field="comments">Comments</th>
                                            <th data-field="added_on">Added On</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
										<?php 
										$customers = getAllCustomers();
										foreach($customers as $customer){?>
										<tr>
                                            <td>#<?php echo $customer['id'];?></td>
                                            <td><?php echo $customer['name'];?></td>
                                            <td><?php echo $customer['phone'];?></td>
                                            <td><?php echo $customer['email'];?></td>
                                            <td><?php echo $customer['address'];?></td>
                                            <td><?php echo $customer['comments'];?></td>
                                            <td><?php echo date('d F y',$customer['time']);?></td> 
                                        </tr> 
										<?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           <?php include('footer.php');?>