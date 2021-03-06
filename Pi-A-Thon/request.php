<?php
include('config/config.php');
include('config/functions.php');
$type = $_GET['type'];
header("Content-Type: application/json");
$data = array('status' => 417);
if($type=='login'){
// define login email and pass
$config_email = "rohit@gmail.com";
$config_pass = "1234";
$email = safeinput($_POST['email']);
$pass = safeinput($_POST['password']);  
if($email == $config_email && $pass == $config_pass){
 $_SESSION['logged_in'] = true; 
 header("Location: index.php");
}else{  
 header("Location: login.php");
}
}elseif($type=='add_blood_consumption'){
$user = safeinput($_POST['user']);
$bank = safeinput($_POST['bank']);
$blood = safeinput($_POST['blood']);
$consumed = safeinput($_POST['consumed']);
$blood_units = CountBloodUnits($blood,$bank) - CountWithdrawledBloodUnits($blood,$bank);
if($blood_units < $consumed){
$data = array(
 "status" => 417,
 "msg" => "Sorry, Only ".$blood_units." unit are Available"
 ); 
 echo json_encode($data);return false;
}
$sql = "INSERT INTO blood_inventory (blood_type,units,bank_id,is_withdrawl) VALUES ($bank,$consumed,$blood,'1')";
$run = mysqli_query($dbConnect, $sql);
if($run){
$data = array(
 "status" => 200,
 "msg" => "Blood Consumption added successfully!"
 );
}else{
$data['msg'] = "Some error occurred";
}
 echo json_encode($data);
}elseif($type=='add_new_blood'){
$bank = safeinput($_POST['bank']);
$blood = safeinput($_POST['blood']);
$units = safeinput($_POST['units']);
$sql = "INSERT INTO blood_inventory (blood_type,units,bank_id,is_withdrawl) VALUES ($blood,$units,$bank,'0')";
$run = mysqli_query($dbConnect, $sql);
if($run){
$data = array(
 "status" => 200,
 "msg" => "Blood Added successfully!"
 );
}else{
$data['msg'] = "Some error occurred";
}
 echo json_encode($data);
}elseif($type=='search_blood'){
$bank = safeinput($_POST['bank']);
$blood = safeinput($_POST['blood']);
$lat = safeinput($_POST['lat']);
$long = safeinput($_POST['long']);
$units = safeinput($_POST['units']);
if($bank=='all'){
 $banks = getBanks();
 $garbage = 213123123;
 $garbage_2 = 213123123;
 $array = array();
 $nearest_bank_arrs = array();
 foreach($banks as $bank){ 
    $blood_units = CountBloodUnits($blood,$bank['id']) - CountWithdrawledBloodUnits($blood,$bank['id']);
	$bank_details = getBankDetails($bank['id']);
	$name = $bank_details['name'];
	$city_detail = getCityDetail($bank['city']);
	$city_name = $city_detail['city'];
	$bank_name[$name] = $blood_units; 
	$loc_lat = $bank_details['latitude'];
	$loc_long = $bank_details['longitude'];
	$travel_data = GetDrivingDistance($lat,$loc_lat,$long,$loc_long);
	$travel_dist = str_replace(',','.',$travel_data['distance']);
	$travel_sec = $travel_data['time_sec'];
	$array[$travel_sec] = $name;
	$city_sec_arr[$travel_sec] = $city_name;
	$bank_sec_details_arr[$travel_sec] = $name;
	$blood_sec_arr[$travel_sec] = $blood_units;
	$travel_sec_arr[$travel_sec] = $travel_dist;
	$travel_time = $travel_data['time'];
	$travel_time_sec_arr[$travel_sec] = $travel_time; 
	// all bank search data here
	if($units<=$blood_units){
	$html .= '<li class="list-group-item"><span class="badge badge-success">'.$city_name.'</span>&nbsp;&nbsp;'.$name.' - '.$blood_units.' Units Available.&nbsp;&nbsp;<span class="badge badge-primary">'.$travel_dist.' Far. This will take '.$travel_time.'</span></li>';
	}
	if($garbage>$travel_sec){
	$garbage = $travel_sec;
	}   
	$nearest_bank_arrs[] = $travel_sec; 
 } 
	if(empty($html)){
	$html = '<li class="list-group-item">No, Units Available.</li>';
	}
    
	sort($nearest_bank_arrs);
    $arrlength = count($nearest_bank_arrs);
		for($x = 0; $x < $arrlength; $x++) {
			$dist_sec_id = $nearest_bank_arrs[$x];
			$city_name = $city_sec_arr[$dist_sec_id];
			$name = $bank_sec_details_arr[$dist_sec_id];
			$blood_units = $blood_sec_arr[$dist_sec_id];
			$travel_dist = $travel_sec_arr[$dist_sec_id];
			$travel_time = $travel_time_sec_arr[$dist_sec_id];
			if($units<=$blood_units){
			$nearest_html .= '<li class="list-group-item"><span class="badge badge-success">'.$city_name.'</span>&nbsp;&nbsp;'.$name.' - '.$blood_units.' Units Available.&nbsp;&nbsp;<span class="badge badge-primary">'.$travel_dist.' Far. This will take '.$travel_time.'</span></li>';
			}
		}
		if(empty($nearest_html)){
		$nearest_html = '<li class="list-group-item">No, Units Available.</li>';
		}
$data = array("status" => 200, "all_banks" => $html, "msg"=> "Few results found...", "nearest_bank" => $nearest_html);
}else{
}

 echo json_encode($data);
}