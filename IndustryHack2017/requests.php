<?php
include('assets/config/config.php');
if(isset($_GET['request'])){
$request = $_GET['request'];
}else{
$request = '';
}
//----------------------------------------------
//          Starting All internal Logics
//---------------------------------------------
if($request=='add_customer'){
$name = safeinput($_POST['name']);
$phone = safeinput($_POST['phone']);
$email = safeinput($_POST['email']);
$address = safeinput($_POST['address']);
$comment = safeinput($_POST['comments']);
$time = time();
$query = "INSERT INTO customers (name,phone,email,address,comments,time) VALUES ('$name','$phone','$email','$address','$comment','$time')";
$sql = mysqli_query($dbConnect, $query);
if($sql){
$data = array(
   'status' => 200,
   'msg' => 'Successfully added Customer.'
 );
}else{
  $data = array(
   'status' => 417,
   'msg' => 'Some error Occurred.'
   );
  }
header("Content-type: application/json");
echo json_encode($data, JSON_PRETTY_PRINT);
}elseif($request=='add_stocks'){
$name = safeinput($_POST['name']);
$type = safeinput($_POST['stock_type']);
$threshold = safeinput($_POST['threshold']);
$comment = safeinput($_POST['comment']); 
$time = time();
$query = "INSERT INTO stocks (name,threshold,type,comments,time) VALUES ('$name','$threshold','$type','$comment','$time')";
$sql = mysqli_query($dbConnect, $query);
if($sql){
$data = array(
   'status' => 200,
   'msg' => 'Successfully added New Stock.'
 );
}else{
  $data = array(
   'status' => 417,
   'msg' => 'Some error Occurred.'
   );
  }
header("Content-type: application/json");
echo json_encode($data, JSON_PRETTY_PRINT);
}elseif($request=='add_shopping_products'){ 
$product = safeinput($_POST['product']);
$short_desc = safeinput($_POST['short_desc']);
$long_desc = safeinput($_POST['long_desc']);
$price = safeinput($_POST['price']); 
$category = safeinput($_POST['category']);   
// File upload handelr now
$target_dir = "uploads/"; 
$target_file = $target_dir . basename($_FILES["product_image"]["name"]); 
move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);
$time = time();
$query = "INSERT INTO shopping_portal (name,short_desc,long_desc,pricing,img_path,category) VALUES ('$product','$short_desc','$long_desc','$price','$target_file','$category')";
$sql = mysqli_query($dbConnect, $query);
if($sql){
$data = array(
   'status' => 200,
   'msg' => 'Successfully added this Product to your Shopping Portal.'
 );
}else{
  $data = array(
   'status' => 417,
   'msg' => 'Some error Occurred bro.'
   );
  }
header("Content-type: application/json");
echo json_encode($data, JSON_PRETTY_PRINT);
}elseif($request=="add_sales"){
$stock_id = safeinput($_POST['stock_id']);
$type = safeinput($_POST['type']);
$price = safeinput($_POST['per_price']);
$stock_name = getStockDetails($stock_id)['name'];
$stock_count = GetQuantityOfStock($stock_id,$type);
$quantity = safeinput($_POST['quantity']);
$comments = safeinput($_POST['comments']);
$time = time();
if($quantity>$stock_count){
$data = array(
   'status' => 417,
   'msg' => 'You have no Sufficient '.$stock_name.' in your stock. You have only '.$stock_count.' Units Available.'
 );
header("Content-type: application/json");
echo json_encode($data, JSON_PRETTY_PRINT);
return false;
} 
if($type=='raw'){
$query = "INSERT INTO sales_orders (stock_id,per_price,type,quantity,comment,time) VALUES ('$stock_id','$price','$type','$quantity','$comments','$time')";
$success_msg = 'Consumption Detail Updated Successfully.';
}elseif($type=='final'){
$customer_id = safeinput($_POST['customer_id']);
$query = "INSERT INTO sales_orders (stock_id,per_price,type,quantity,comment,time,customer_id) VALUES ('$stock_id','$price','$type','$quantity','$comments','$time',$customer_id)";
$success_msg = 'Sales Order Added Successfully.';
}
$sql = mysqli_query($dbConnect, $query);
if($sql){
$data = array(
   'status' => 200,
   'msg' => $success_msg
 );
}else{
  $data = array(
   'status' => 417,
   'msg' => 'Some error Occurred.'
   );
  }
header("Content-type: application/json");
echo json_encode($data, JSON_PRETTY_PRINT);
}elseif($request=="add_purchase"){
$type = safeinput($_POST['type']);
$stock_id = safeinput($_POST['stock_id']);
$price = safeinput($_POST['per_price']);
$quantity = safeinput($_POST['quantity']);
$order_date = strtotime(safeinput($_POST['order_date']));
$expected_date = strtotime(safeinput($_POST['expected_date']));
$supplier_id = safeinput($_POST['supplier_id']);
$comments = safeinput($_POST['comments']);
$time = time();
if($type=='raw'){
$query = "INSERT INTO purchase_orders (stock_id,type,price,quantity,supplier_id,order_date,expected_date,comment,time) VALUES ('$stock_id','$type','$price','$quantity','$supplier_id','$order_date','$expected_date','$comments','$time')";
$sql = mysqli_query($dbConnect, $query);
$success_msg = 'Purchased Order Placed Successfully.';
}elseif($type=='final'){
$manufactured_on = safeinput($_POST['manufactured_on']);
$query = "INSERT INTO purchase_orders (stock_id,type,price,quantity,manufactured_on,comment,time) VALUES ('$stock_id','$type','$price','$quantity','$manufactured_on','$comments','$time')";
$sql = mysqli_query($dbConnect, $query);
$success_msg = 'Product Record updated Successfully.';
}
if($sql){
$data = array(
   'status' => 200,
   'msg' => $success_msg
 );
}else{
  $data = array(
   'status' => 417,
   'msg' => 'Some error Occurred.'
   );
  }
header("Content-type: application/json");
echo json_encode($data, JSON_PRETTY_PRINT);
}elseif($request=="add_suppliers"){
$name = safeinput($_POST['name']);
$phone = safeinput($_POST['phone']);
$email = safeinput($_POST['email']);
$address = safeinput($_POST['address']);
$comment = safeinput($_POST['comment']);
$time = time();
$query = "INSERT INTO suppliers (name,email,phone,address,comment,time) VALUES ('$name','$email','$phone','$address','$comment','$time')";
$sql = mysqli_query($dbConnect, $query);
if($sql){
$data = array(
   'status' => 200,
   'msg' => 'Supplier Added Successfully.'
 );
}else{
  $data = array(
   'status' => 417,
   'msg' => 'Some error Occurred.'
   );
  }
header("Content-type: application/json");
echo json_encode($data, JSON_PRETTY_PRINT);
}