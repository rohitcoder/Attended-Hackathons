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
function GetDrivingDistance($lat1, $lat2, $long1, $long2)
{
    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$lat1.",".$long1."&destinations=".$lat2.",".$long2."&mode=driving&language=en";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch);
    curl_close($ch);
    $response_a = json_decode($response, true);
    $dist = $response_a['rows'][0]['elements'][0]['distance']['text'];
    $time = $response_a['rows'][0]['elements'][0]['duration']['text'];
    $time_sec =  $response_a['rows'][0]['elements'][0]['duration']['value']; 
    return array('distance' => $dist, 'time' => $time, 'time_sec' => $time_sec);
}
function CountBloodUnits($blood_id,$bank_id){
	global $dbConnect; 
	$sql = "SELECT SUM(units) as units FROM blood_inventory WHERE bank_id=$bank_id AND blood_type=$blood_id AND is_withdrawl='0'";
	$query = mysqli_query($dbConnect,$sql);
	$data = mysqli_fetch_assoc($query);
	if(empty($data['units'])){
	$data['units'] = '0';
	}
	return $data['units'];
}
function getCityDetail($id){
global $dbConnect;
$sql = "SELECT * FROM city WHERE id=$id";
$data = array();
$query = mysqli_query($dbConnect,$sql);
$data = mysqli_fetch_assoc($query);
return $data;
}
function CountWithdrawledBloodUnits($blood_id,$bank_id){
	global $dbConnect; 
	$sql = "SELECT SUM(units) as units FROM blood_inventory WHERE bank_id=$bank_id AND blood_type=$blood_id AND is_withdrawl='1'";
	$query = mysqli_query($dbConnect,$sql);
	$data = mysqli_fetch_assoc($query);
	if(empty($data['units'])){
	$data['units'] = '0';
	}
	return $data['units'];
}
function getBankDetails($id){
global $dbConnect;
$sql = "SELECT * FROM blood_banks WHERE id=$id";
$query = mysqli_query($dbConnect,$sql);
$data = array();
$data = mysqli_fetch_assoc($query);
return $data;
}
function getBanks(){
global $dbConnect;
$sql = "SELECT * FROM blood_banks";
$query = mysqli_query($dbConnect, $sql);
$data = array();
while($row = mysqli_fetch_assoc($query)){
$data[] = $row;
}
return $data;
}
function getBloods(){
global $dbConnect;
$sql = "SELECT * FROM bloods";
$query = mysqli_query($dbConnect,$sql);
$data = array();
while($row=mysqli_fetch_assoc($query)){
$data[] = $row;
}
return $data;
}