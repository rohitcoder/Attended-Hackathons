<?php include('header.php');?>
<style>
.switch label .lever{
background-color:red;
}.switch label .lever:after{
background-color:#945959;
}.picker__date-display, .switch label input[type=checkbox]:checked+.lever:after{
background-color:green;
}.switch label input[type=checkbox]:checked+.lever {
    background-color: #2dc35c;
}iframe{ 
   overflow-x:hidden;
   overflow-y:hidden; 
}
</style>
	  <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
				
                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l8">
                            <div class="card visitors-card">
                                <div class="card-content">
                                    <div class="card-options">
                                        <ul>
                                            <li><a href="javascript:void(0)" class="card-refresh"><i class="material-icons">refresh</i></a></li>
                                        </ul>
                                    </div>
                                    <span class="card-title">Machine Output Stats<span class="secondary-title">Showing stats from the last week</span></span>
                                            <!--<div id="flotchart1"></div>-->
											<iframe width="100%" scrolling="no" style="border:1px solid transparent;" height="220" src="https://thingspeak.com/channels/371837/charts/1?bgcolor=%23ffffff&color=green&dynamic=true&results=60&title=Temperature+Monitor&type=spline"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l4">
                            <div class="card server-card">
                                <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li class="red-text"><span class="badge blue-grey lighten-3">optimal</span></li>
                                    </ul>
                                </div>
                                    <span class="card-title">Machine Load</span>
                                                <div class="server-load row">
                                                    <div class="server-stat col s4">
                                                        <p>77.08%</p>
                                                        <span>Uptime</span>
                                                    </div>
                                                    <div class="server-stat col s4">
                                                        <p>22.92%</p>
                                                        <span>Downtime</span>
                                                    </div>
                                                    <div class="server-stat col s4">
                                                        <p>57.4%</p>
                                                        <span>Average</span>
                                                    </div>
                                                </div>
                                    <div class="stats-info">
                                        <ul>
                                            <li>Hydraulic Press Uptime<div class="percent-info green-text right">32% <i class="material-icons">trending_up</i></div></li>
                                            <li>Vertical Milling Machine<div class="percent-info red-text right">20% <i class="material-icons">trending_down</i></div></li>
                                            <li>Slotting Machine Uptime<div class="percent-info green-text right">18% <i class="material-icons">trending_up</i></div></li>
                                            <li>Bending Machine<div class="percent-info red-text right">20% <i class="material-icons">trending_down</i></div></li>
                                            <li>Die Cutting Machine<div class="percent-info green-text right">18% <i class="material-icons">trending_up</i></div></li>
                                            <li>Induction Heater<div class="percent-info red-text right">20% <i class="material-icons">trending_down</i></div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                </div><br>
                                <span class="card-title">Forging Press</span>
                               <div class="setting-item col s6 m6 l6">
                                <div class="setting-text">Status: <span id="die_val">On</span></div>
                                <div class="setting-set">
                                    <div class="switch die_machine">
                                        <label>
                                            <input type="checkbox" checked="">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
							<div class="setting-item col s6 m6 l6">
                                <div class="setting-text">Operating Temperature:</div>
                                <div class="setting-set">
                                    <div class="switch die_machine">
                                        <label>
                                            1,250° Celsius <br>Calibration : 3:1
                                        </label>
                                    </div>
                                </div>
                            </div>
							
                            </div> 
                        </div>
                    </div>
                        <div class="col s12 m12 l8">
                        <div class="card stats-card">
						<Table width="100%">
						 <Tr><Td width="40%">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li><a href="javascript:void(0)"><i class="material-icons">more_vert</i></a></li>
                                    </ul>
                                </div>
                                <span class="card-title">Efficiency Graph</span>
                                <span class="stats-counter"><span class="counter">83710</span><small><br>Products processed this month</small></span>
                            </div>
							</td><Td width="50%">
                              <div id="flotchart2"></div>
							  </td>
						</tr>
                        </table>
                        </div>
                    </div>
                </div>  </div>
				<Script>
				setTimeout( function(){ 
    
				$('.clicker').click();
				}  , 15000 );
				</script>
           <?php include('footer.php');?>