  $('.datepicker2').pickadate({
    selectMonths: true,
    selectYears: 15,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false
  });
  $("#add_customer").submit(function(e)
{   $('.disable_buttons').attr('disabled',true);
	var postData = $(this).serializeArray();
	var formURL = $(this).attr("action");
	$.ajax(
	{
		url : 'requests.php?request=add_customer',
		type: "POST",
		data : postData,
        dataType: 'json',
		success:function(data, textStatus, jqXHR) 
		{   
		   $('.disable_buttons').attr('disabled',false);
           Materialize.toast(data.msg, 4000); 
		   for(i=0;i<=5;i++){ $('form')[i].reset(); }
        },
		error: function(jqXHR, textStatus, errorThrown) 
		{
		$('.disable_buttons').attr('disabled',false);
		 Materialize.toast('Some error Occurred. Please Check', 4000); 
		 for(i=0;i<=5;i++){ $('form')[i].reset(); }
		}
	});
    e.preventDefault();	//STOP default action
});
$("#add_suppliers").submit(function(e)
{   $('.disable_buttons').attr('disabled',true);
	var postData = $(this).serializeArray();
	var formURL = $(this).attr("action");
	$.ajax(
	{
		url : 'requests.php?request=add_suppliers',
		type: "POST",
		data : postData,
        dataType: 'json',
		success:function(data, textStatus, jqXHR) 
		{   
		   $('.disable_buttons').attr('disabled',false);
           Materialize.toast(data.msg, 4000); 
		   for(i=0;i<=5;i++){ $('form')[i].reset(); }
        },
		error: function(jqXHR, textStatus, errorThrown) 
		{
		$('.disable_buttons').attr('disabled',false);
		 Materialize.toast('Some error Occurred. Please Check', 4000); 
		 for(i=0;i<=5;i++){ $('form')[i].reset(); }
		}
	});
    e.preventDefault();	//STOP default action
});
$("#add_shopping_products").submit(function(e)
{   $('.disable_buttons').attr('disabled',true);
	var postData = $(this).serializeArray();
	var formURL = $(this).attr("action");
	$.ajax(
	{
		url : 'requests.php?request=add_shopping_products',
		type:"POST",dataType:'json',data:new FormData(this),contentType:false,cache:false,processData:false,
		success:function(data, textStatus, jqXHR) 
		{   
		   $('.disable_buttons').attr('disabled',false);
           Materialize.toast(data.msg, 4000); 
		   for(i=0;i<=5;i++){ $('form')[i].reset(); }
        },
		error: function(jqXHR, textStatus, errorThrown) 
		{
		$('.disable_buttons').attr('disabled',false);
		 Materialize.toast('Some error Occurred. Please Check', 4000); 
		 for(i=0;i<=5;i++){ $('form')[i].reset(); }
		}
	});
    e.preventDefault();	//STOP default action
});
$("#add_stocks").submit(function(e)
{   $('.disable_buttons').attr('disabled',true);
	var postData = $(this).serializeArray();
	var formURL = $(this).attr("action");
	$.ajax(
	{
		url : 'requests.php?request=add_stocks',
		type: "POST",
		data : postData,
        dataType: 'json',
		success:function(data, textStatus, jqXHR) 
		{   
		   $('.disable_buttons').attr('disabled',false);
           Materialize.toast(data.msg, 4000); 
		   for(i=0;i<=5;i++){ $('form')[i].reset(); }
        },
		error: function(jqXHR, textStatus, errorThrown) 
		{
		$('.disable_buttons').attr('disabled',false);
		 Materialize.toast('Some error Occurred. Please Check', 4000); 
		 for(i=0;i<=5;i++){ $('form')[i].reset(); }
		}
	});
    e.preventDefault();	//STOP default action
});
$("#add_sales").submit(function(e)
{   $('.disable_buttons').attr('disabled',true);
	var postData = $(this).serializeArray();
	var formURL = $(this).attr("action");
	$.ajax(
	{
		url : 'requests.php?request=add_sales',
		type: "POST",
		data : postData,
        dataType: 'json',
		success:function(data, textStatus, jqXHR) 
		{   
		   $('.disable_buttons').attr('disabled',false);
           Materialize.toast(data.msg, 4000); 
		   for(i=0;i<=5;i++){ $('form')[i].reset(); }
        },
		error: function(jqXHR, textStatus, errorThrown) 
		{
		$('.disable_buttons').attr('disabled',false);
		 Materialize.toast('Some error Occurred. Please Check', 4000); 
		 for(i=0;i<=5;i++){ $('form')[i].reset(); }
		}
	});
    e.preventDefault();	//STOP default action
});
$("#add_purchase").submit(function(e)
{   $('.disable_buttons').attr('disabled',true);
	var postData = $(this).serializeArray();
	var formURL = $(this).attr("action");
	$.ajax(
	{
		url : 'requests.php?request=add_purchase',
		type: "POST",
		data : postData,
        dataType: 'json',
		success:function(data, textStatus, jqXHR) 
		{   
		   $('.disable_buttons').attr('disabled',false);
           Materialize.toast(data.msg, 4000); 
		   for(i=0;i<=5;i++){ $('form')[i].reset(); }
        },
		error: function(jqXHR, textStatus, errorThrown) 
		{
		$('.disable_buttons').attr('disabled',false);
		 Materialize.toast('Some error Occurred. Please Check', 4000); 
		 for(i=0;i<=5;i++){ $('form')[i].reset(); }
		}
	});
    e.preventDefault();	//STOP default action
});