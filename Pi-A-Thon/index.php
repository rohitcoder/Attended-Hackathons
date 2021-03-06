<?php include('header.php');?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb"> 
        <li class="breadcrumb-item active">Search Blood</li>
      </ol> 
	  <div class="row">
        <div class="col-lg-6">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Add Blood Consumption</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12 my-auto">
                  <form method="post" action="request.php?type=add_blood_consumption" id="add_blood_consumption" enctype="multipart/form-data">
				  <div id="add_blood_consumption_response" class="col-md-12 col-xs-12 col-sm-12 col-lg-12"></div>
				  <div class="form-group">
					<label class="control-label col-md-12 col-sm-12 col-xs-12" for="bank">Select Bank<span class="required">*</span> </label>
					<div class="col-md-12 col-sm-12 col-xs-12">
					  <select id="bank" name="bank" class="form-control col-md-12 col-xs-12" required>
					  <?php
				      $banks = getBanks();
					  foreach($banks as $bank){?>
					  <option value="<?php echo $bank['id'];?>"><?php echo $bank['name'];?></option>
					  <?php } ?>
					  </select>
					</div>
				  </div> 
				  <div class="form-group">
				  <label class="control-label col-md-12 col-sm-12 col-xs-12" for="blood_type">Blood type<span class="required">*</span> </label>
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
				  <div class="form-group">
				  <label class="control-label col-md-12 col-sm-12 col-xs-12" for="user">Select User<span class="required">*</span> </label>
					<div class="col-md-12 col-sm-12 col-xs-12">
					  <select id="user" name="user" class="form-control col-md-12 col-xs-12" required>
					  <option value="Rohit Kumar">Rohit Kumar</option>
					  <option value="Mohit Kumar">Mohit Kumar</option>
					  <option value="Vishal Kumar">Vishal Kumar</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-md-12 col-sm-12 col-xs-12" for="consumed">Required Units<span class="required">*</span> </label>
					<div class="col-md-12 col-sm-12 col-xs-12">
					  <input type="number" id="consumed" name="consumed" class="form-control col-md-12 col-xs-12" required>
					</div>
				  </div> 
				  <div class="form-group"> 
					  <button type="submit" class="form-control col-md-12 col-xs-12 btn-primary"> Add</button>
				  </div>
				  </form>
                </div> 
              </div>
            </div> 
          </div> 
        </div> 
        <div class="col-lg-6">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> Add Blood</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12 my-auto">
                  <form method="post" id="add_new_blood" action="request.php?type=add_new_blood">
				  <div id="add_new_blood_response" class="col-md-12 col-xs-12 col-sm-12 col-lg-12"></div>
				  <div class="form-group">
					<label class="control-label col-md-12 col-sm-12 col-xs-12" for="class">Blood Type:<span class="required">*</span> </label>
					<div class="col-md-12 col-sm-12 col-xs-12">
					<select name="blood" class="form-control col-md-12 col-xs-12" >
					  <?php
				      $bloods = getBloods();
					  foreach($bloods as $blood){?>
					  <option value="<?php echo $blood['id'];?>"><?php echo $blood['name'];?></option>
					  <?php } ?>
					  </select>
					</div>
				  </div> 
				   <div class="form-group">
					<label class="control-label col-md-12 col-sm-12 col-xs-12" for="class">Bank Name:<span class="required">*</span> </label>
					<div class="col-md-12 col-sm-12 col-xs-12">
				     <select id="bank" name="bank" class="form-control col-md-12 col-xs-12" required>
					  <?php
				      $banks = getBanks();
					  foreach($banks as $bank){?>
					  <option value="<?php echo $bank['id'];?>"><?php echo $bank['name'];?></option>
					  <?php } ?>
					  </select>
					</div>
				  </div> 
				  <div class="form-group">
					<label class="control-label col-md-12 col-sm-12 col-xs-12" for="units">New Units<span class="required">*</span> </label>
					<div class="col-md-12 col-sm-12 col-xs-12">
					  <input type="number" id="units" name="units" class="form-control col-md-12 col-xs-12" required>
					</div>
				  </div> 
				  <div class="form-group"> 
					  <button type="submit" class="form-control col-md-12 col-xs-12 btn-primary"> Submit</button>
				  </div>
				  </form>
                </div> 
              </div>
            </div> 
          </div>  
        </div>   
    </div>
	</div>
	<script> 
$(document).ready(function(){
$("#add_blood_consumption").submit(function(e)
{   
    $('#add_blood_consumption_response').html("<div class='alert alert-success'>Please wait....</div>");
	var postData = $(this).serializeArray();
	$("button[type='submit']").prop('disabled',true);
	var formURL = "request.php?type=add_blood_consumption";
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
				$('#add_blood_consumption_response').html("<div class='alert alert-success'>"+data.msg+"</div>");
				}else{
				$('#add_blood_consumption_response').html("<div class='alert alert-danger'>"+data.msg+"</div>");
				}
		},
		error: function(jqXHR, textStatus, errorThrown) 
		{
				$("button[type='submit']").prop('disabled',false);
                $('#add_blood_consumption_response').html("<div class='alert alert-danger'>Please Check Connection....</div>");
		}
	});
    e.preventDefault();	//STOP default action
});

$("#add_new_blood").submit(function(e)
{   
    $('#add_new_blood_response').html("<div class='alert alert-success'>Please wait....</div>");
	var postData = $(this).serializeArray();
	$("button[type='submit']").prop('disabled',true);
	var formURL = "request.php?type=add_new_blood";
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
				$('#add_new_blood_response').html("<div class='alert alert-success'>"+data.msg+"</div>");
				}else{
				$('#add_new_blood_response').html("<div class='alert alert-danger'>"+data.msg+"</div>");
				}
		},
		error: function(jqXHR, textStatus, errorThrown) 
		{
				$("button[type='submit']").prop('disabled',false);
                $('#add_new_blood_response').html("<div class='alert alert-danger'>Please Check Connection....</div>");
		}
	});
    e.preventDefault();	//STOP default action
});
});
	</script>
	<?php include('footer.php');?>
