<?php include('header.php');?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb"> 
        <li class="breadcrumb-item active">Search Blood</li>
      </ol> 
	  <div class="row">
        <div class="col-lg-12">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Search Blood from Different Banks.</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12 my-auto">
                  <form method="post" action="request.php?type=search_blood" id="search_blood" enctype="multipart/form-data">
				  <div id="search_blood_response" class="col-md-12 col-xs-12 col-sm-12 col-lg-12"></div>
				  <div class="row">
				  <div class="col-md-3 col-sm-12 col-xs-12" style="display:none;">
						  <div class="form-group"> 
							<div class="col-md-12 col-sm-12 col-xs-12">
							  <select id="bank" name="bank" class="form-control col-md-12 col-xs-12" required>
							  <option value="all">All Banks</option>
							  <?php
							  $banks = getBanks();
							  foreach($banks as $bank){?>
							  <option value="<?php echo $bank['id'];?>"><?php echo $bank['name'];?></option>
							  <?php } ?>
							  </select>
							</div>
						  </div> 
				  </div>
				  <div class="col-md-4 col-sm-12 col-xs-12">
							  <div class="form-group"> 
								<div class="col-md-12 col-sm-12 col-xs-12">
								  <select id="blood_type" name="blood" class="form-control col-md-12 col-xs-12" required>
								  <?php
								  $bloods = getBloods();
								  foreach($bloods as $blood){?>
								  <option value="<?php echo $blood['id'];?>"><?php echo $blood['name'];?></option>
								  <?php } ?>
								  </select>
								</div>
							  </div>
				 </div>
				 <div class="col-md-4 col-sm-12 col-xs-12">
						  <div class="form-group"> 
							<div class="col-md-12 col-sm-12 col-xs-12">
							  <input type="number" id="units" name="units" class="form-control col-md-12 col-xs-12" required>
							</div>
						  </div> 
				</div>
				<input type="hidden" name="lat" id="current_lat">
				<input type="hidden" name="long" id="current_long">
				<div class="col-md-4 col-sm-12 col-xs-12">
					  <div class="form-group"> 
						  <button type="submit" class="form-control col-md-12 col-xs-12 btn-primary"> Search</button>
					  </div>
				</div>
				  </form>
                </div> 
              </div>
            </div> 
          </div> 
        </div>  
		</div>
		 <div class="col-lg-12">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Search Results</div>
            <div class="card-body">
              <div class="row">
				 <ul class="nav nav-tabs col-md-12 col-xs-12 col-sm-12 col-lg-12" id="myTab" role="tablist">
				  <li class="nav-item">
					<a class="nav-link active" id="nearest-tab" data-toggle="tab" href="#nearest" role="tab" aria-controls="nearest" aria-selected="true">Nearest Banks</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="false">All Banks</a>
				  </li> 
				</ul>
				<div class="tab-content col-md-12 col-xs-12 col-sm-12 col-lg-12" id="myTabContent">
				  <div class="tab-pane fade show active" id="nearest" role="tabpanel" aria-labelledby="nearest-tab">
				    <br>
				  <ul class="list-group" id="append_nearest_data">
						<li class="list-group-item">Nothing found here, Please search something</li>
				  </ul>
				  </div>
				  <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
				  <br>
				  <ul class="list-group" id="append_all_data">
						<li class="list-group-item">Nothing found here, Please search something</li>
				  </ul>
				  </div> 
				</div>
              </div>
            </div> 
          </div> 
        </div>  
		</div>
		
	</div>
	<script> 
$(document).ready(function(){
$("#search_blood").submit(function(e)
{   
    $('#search_blood_response').html("<div class='alert alert-success'>Searching....</div>");
	var postData = $(this).serializeArray();
	$("button[type='submit']").prop('disabled',true);
	var formURL = "request.php?type=search_blood";
	$.ajax(
	{
        url: formURL,
		type: "POST",
		data : postData,
        dataType: 'json',
		success:function(data, textStatus, jqXHR) 
		{
				$("button[type='submit']").prop('disabled',false);
		        if(data.status==200){
				$('#append_all_data').html(data.all_banks);
				$('#append_nearest_data').html(data.nearest_bank);
				$('#search_blood_response').html("<div class='alert alert-success'>"+data.msg+"</div>");
				}else{
				$('#search_blood_response').html("<div class='alert alert-danger'>"+data.msg+"</div>");
				}
		},
		error: function(jqXHR, textStatus, errorThrown) 
		{
				$("button[type='submit']").prop('disabled',false);
                $('#search_blood_response').html("<div class='alert alert-danger'>Please Check Connection....</div>");
		}
	});
    e.preventDefault();	//STOP default action
});

});
var geocoder;
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
} 
//Get the latitude and the longitude;
function successFunction(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
//	lat = "31.2156891";lng="75.77276189999999";
    $('#current_lat').val(lat);
	$('#current_long').val(lng);
}

function errorFunction(){
    alert("Geocoder failed");
}

  function initialize() {
    initate();
    geocoder = new google.maps.Geocoder();
 }
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyCL9NmBOOTXUeESTPpiWqQ8SXLsO4hmOYE"></script> 
	<?php include('footer.php');?>
