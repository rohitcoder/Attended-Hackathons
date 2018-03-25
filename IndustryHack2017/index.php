<?php include('header.php');?>
            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li class="red-text"><span class="badge cyan lighten-1">gross</span></li>
                                    </ul>
                                </div>
                                <span class="card-title">Profit/Loss</span>
                                <span class="stats-counter">Rs <span class="counter">48190</span><small>This week</small></span>
                            </div>
                            <div id="sparkline-bar"></div>
                        </div>
                    </div>
                        <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li><a href="javascript:void(0)"><i class="material-icons">more_vert</i></a></li>
                                    </ul>
                                </div>
                                <span class="card-title">Sales Order</span>
                                <span class="stats-counter"><span class="counter">83710</span><small>This month</small></span>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <span class="card-title">Growth Rate</span>
                                <span class="stats-counter">Rs <span class="counter">2820</span><small>Since 1 week</small></span>
                                <div class="percent-info green-text">30% <i class="material-icons">trending_up</i></div>
                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                </div> 

        <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <span class="card-title">Out Of Stock</span>
                                <span class="stats-counter"><span class="counter">2</span><small> Tons Steel Left</small></span>
                            </div>
                            <div id="sparkline-bar"></div>
                        </div>
                    </div>
                        <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content"> 
                                <span class="card-title">New Orders</span>
                                <span class="stats-counter"><span class="counter">103</span><small>New orders found</small></span>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <span class="card-title">Product Delivery (0)</span>
                                <span class="stats-counter"><small>All Products Delivered Successfully</small></span>
                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 70%"></div>
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
                                    <span class="card-title">Invoices</span>
                                <table class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th data-field="number">Payment Type</th>
                                            <th data-field="company">Company</th>
                                            <th data-field="date">Date</th>
                                            <th data-field="progress">Progress</th>
                                            <th data-field="total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#203</td>
                                            <td>PayPal</td>
                                            <td>Curabitur Libero Corp</td>
                                            <td>Dec 16, 18:12</td>
                                            <td><span class="pie">3/8</span></td>
                                            <td>Rs 5430</td>
                                        </tr>
                                        <tr>
                                            <td>#202</td>
                                            <td>American Express</td>
                                            <td>Integer Mattis Ltd</td>
                                            <td>Nov 29, 13:56</td>
                                            <td><span class="pie">5/8</span></td>
                                            <td>Rs 1400</td>
                                        </tr>
                                        <tr>
                                            <td>#200</td>
                                            <td>Discover</td>
                                            <td>Pellentesque Inc</td>
                                            <td>Nov 17, 19:14</td>
                                            <td><span class="pie">3/8</span></td>
                                            <td>Rs 1250</td>
                                        </tr>
                                        <tr>
                                            <td>#199</td>
                                            <td>MasterCard</td>
                                            <td>Curabitur Libero Corp</td>
                                            <td>Oct 21, 12:16</td>
                                            <td><span class="pie">5/8</span></td>
                                            <td>Rs 1349</td>
                                        </tr>
                                        <tr>
                                            <td>#198</td>
                                            <td>Amex</td>
                                            <td>Integer Mattis Ltd</td>
                                            <td>Oct 14, 22:43</td>
                                            <td><span class="pie">3/8</span></td>
                                            <td>Rs 980</td>
                                        </tr>
                                        <tr>
                                            <td>#197</td>
                                            <td>PayPal</td>
                                            <td>Pellentesque Inc</td>
                                            <td>Sept 29, 10:33</td>
                                            <td><span class="pie">5/8</span></td>
                                            <td>Rs 679</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           <?php include('footer.php');?>