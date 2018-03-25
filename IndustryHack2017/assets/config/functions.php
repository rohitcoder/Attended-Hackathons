<?php
function safeinput($string) {
    global $dbConnect;
    $string = trim($string);
	$string = mysqli_real_escape_string($dbConnect, $string);
    $string = htmlspecialchars($string, ENT_QUOTES);
    $string = str_replace('\\r\\n', '<br>',$string);
    $string = str_replace('\\r', '<br>',$string);
    $string = str_replace('\\n\\n', '<br>',$string);
    $string = str_replace('\\n', '<br>',$string);
    $string = str_replace('\\n', '<br>',$string);
    $string = stripslashes($string);
    $string = str_replace('&amp;#', '&#',$string);
    return $string;
}
function getAllCustomers(){
global $dbConnect;
   $query = "SELECT * FROM customers";
   $sql = mysqli_query($dbConnect, $query);
    if (mysqli_num_rows($sql) > 0){
      while($row = mysqli_fetch_assoc($sql)) {
          $fetched_data[] = $row;
          }
    } 
      if (empty($fetched_data)) {
            return array();
      }
return $fetched_data;
}
function getPortalProducts(){
global $dbConnect;
   $query = "SELECT * FROM shopping_portal";
   $sql = mysqli_query($dbConnect, $query);
    if (mysqli_num_rows($sql) > 0){
      while($row = mysqli_fetch_assoc($sql)) {
          $fetched_data[] = $row;
          }
    } 
      if (empty($fetched_data)) {
            return array();
      }
return $fetched_data;
}
function getRecentCustomers(){
global $dbConnect;
   $query = "SELECT * FROM customers ORDER BY id DESC LIMIT 5";
   $sql = mysqli_query($dbConnect, $query);
    if (mysqli_num_rows($sql) > 0){
      while($row = mysqli_fetch_assoc($sql)) {
          $fetched_data[] = $row;
          }
    } 
      if (empty($fetched_data)) {
            return array();
      }
return $fetched_data;
}
function getCustomerDetail($user_id){
global $dbConnect;
$query = "SELECT * FROM customers";
$sql = mysqli_query($dbConnect, $query);
if(mysqli_num_rows($sql)>0){
 $fetched_data = mysqli_fetch_assoc($sql);
 }else{
 $fetched_data = array();
 }
 return $fetched_data;
}
function GetQuantityOfStock($stock_id,$type) {
      global  $dbConnect;
      if (empty($stock_id) || !is_numeric($stock_id) || $stock_id < 0) {
            return false;
      }
      $data           = array();
      $query_one      = "SELECT SUM(quantity) as pur_sum FROM purchase_orders WHERE stock_id=$stock_id AND type='$type'";
      $sql          = mysqli_query($dbConnect, $query_one);
      $fetched_data = mysqli_fetch_assoc($sql);
      $query_one_sales      = "SELECT SUM(quantity) as answer FROM sales_orders WHERE stock_id=$stock_id AND type='$type'";
      $sql_sales          = mysqli_query($dbConnect, $query_one_sales);
      $sales_data = mysqli_fetch_assoc($sql_sales);
      if (empty($sales_data)) {
            return array();
      } 
      $purchased_quantity = $fetched_data['pur_sum'];
      $sales_quantity = $sales_data['answer'];
	  if (empty($sales_quantity)) {
            $sales_quantity = 0;
      }  
      return $purchased_quantity - $sales_quantity;
      mysqli_close($dbConnect);
}
function SUMofTotalSoldStocks($from,$to,$type){
      global  $dbConnect;
      $data           = array(); 
      $query_one      = "SELECT SUM(per_price*quantity) as answer FROM  sales_orders WHERE type='$type' AND time BETWEEN '$from' AND '$to'";
      $sql  = mysqli_query($dbConnect, $query_one);
      $fetched_data = mysqli_fetch_assoc($sql);
      if (empty($fetched_data)) {
            return array();
      } 
      if(empty($fetched_data['answer'])){
      $fetched_data['answer'] = '0';
      }
      return $fetched_data['answer'];
      mysqli_close($dbConnect);
}
function SUMofTotalPurchaseStocks($from,$to,$type){
      global  $dbConnect;
      $data           = array(); 
      $query_one      = "SELECT SUM(price*quantity) as answer FROM  purchase_orders WHERE type='$type' AND expected_date BETWEEN '$from' AND '$to'";
      $sql  = mysqli_query($dbConnect, $query_one);
      $fetched_data = mysqli_fetch_assoc($sql);
      if (empty($fetched_data)) {
            return array();
      } 
      if(empty($fetched_data['answer'])){
      $fetched_data['answer'] = '0';
      }
      return $fetched_data['answer'];
      mysqli_close($dbConnect);
}
function getStocks($type){
global $dbConnect;
   $type = safeinput($type);
   $query = "SELECT * FROM stocks WHERE type='$type'";
   $sql = mysqli_query($dbConnect, $query);
    if (mysqli_num_rows($sql) > 0){
      while($row = mysqli_fetch_assoc($sql)) {
          $fetched_data[] = $row;
          }
    } 
      if (empty($fetched_data)) {
            return array();
      }
return $fetched_data;
}
function getPurchaseOrders($type){
global $dbConnect;
$type = safeinput($type);
$query = "SELECT * FROM purchase_orders WHERE type='$type'";
$sql = mysqli_query($dbConnect, $query);
if (mysqli_num_rows($sql) > 0){
      while($row = mysqli_fetch_assoc($sql)) {
          $fetched_data[] = $row;
          }
    } 
      if (empty($fetched_data)) {
            return array();
      }
 return $fetched_data;
}
function getStockDetails($id){
global $dbConnect;
if(!is_numeric($id)){
return false;
}
$query = "SELECT * FROM stocks WHERE id=$id";
$sql = mysqli_query($dbConnect, $query);
  if (mysqli_num_rows($sql) > 0){
     $row = mysqli_fetch_assoc($sql);
    } 
	else{
	$row = array();
	}
return $row;
}
function getAllSalesOrders($type){
global $dbConnect;
   $query = "SELECT * FROM sales_orders WHERE type='$type'";
   $sql = mysqli_query($dbConnect, $query);
    if (mysqli_num_rows($sql) > 0){
      while($row = mysqli_fetch_assoc($sql)) {
          $fetched_data[] = $row;
          }
    } 
      if (empty($fetched_data)) {
            return array();
      }
return $fetched_data;
}
function getAllPurchaseOrdersBetweenMonths($from,$to,$type){
global $dbConnect;
   if($type=='raw'){
   $query = "SELECT * FROM purchase_orders WHERE type='$type' AND expected_date BETWEEN '$from' AND '$to'";
   }else{
   $query = "SELECT * FROM purchase_orders WHERE type='$type' AND time BETWEEN '$from' AND '$to'";
   }
   $sql = mysqli_query($dbConnect, $query);
    if (mysqli_num_rows($sql) > 0){
      while($row = mysqli_fetch_assoc($sql)) {
          $fetched_data[] = $row;
          }
    } 
      if (empty($fetched_data)) {
            return array();
      }
return $fetched_data;
}
function getSuppliers(){
global $dbConnect;
   $query = "SELECT * FROM suppliers";
   $sql = mysqli_query($dbConnect, $query);
    if (mysqli_num_rows($sql) > 0){
      while($row = mysqli_fetch_assoc($sql)) {
          $fetched_data[] = $row;
          }
    } 
      if (empty($fetched_data)) {
            return array();
      }
return $fetched_data;
}
function getCustomers(){
global $dbConnect;
   $query = "SELECT * FROM customers";
   $sql = mysqli_query($dbConnect, $query);
    if (mysqli_num_rows($sql) > 0){
      while($row = mysqli_fetch_assoc($sql)) {
          $fetched_data[] = $row;
          }
    } 
      if (empty($fetched_data)) {
            return array();
      }
return $fetched_data;
}
function getAllStockNames($type){
global $dbConnect;
   $type = safeinput($type);
   $query = "SELECT id,name FROM stocks WHERE type='$type'";
   $sql = mysqli_query($dbConnect, $query);
    if (mysqli_num_rows($sql) > 0){
      while($row = mysqli_fetch_assoc($sql)) {
          $fetched_data[] = $row;
          }
    } 
      if (empty($fetched_data)) {
            return array();
      }
return $fetched_data;
}