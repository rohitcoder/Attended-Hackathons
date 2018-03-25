
                            <div class="card server-card">
                                <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li class="red-text"><span class="badge blue-grey lighten-3">Latest</span></li>
                                    </ul>
                                </div>
                                    <span class="card-title">Recent Customers</span> 
                                    <div class="stats-info">
                                        <ul>
										<?php 
										$customers = getAllCustomers();
										foreach($customers as $customer){?>
                                            <li><?php echo $customer['name'];?><div class="percent-info green-text right"><?php echo date('d F y',$customer['time']);?></div></li>
										<?php
										} ?>
                                        </ul>
                                    </div>
                                    <div id="flotchart2"></div>
                                </div>
                            </div> 