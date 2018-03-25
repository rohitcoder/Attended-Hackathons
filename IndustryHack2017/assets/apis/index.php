
<?php
header("Content-type:application/json");
$url = "https://api.thingspeak.com/channels/371837/fields/1.json?api_key=9FS3U1IGFFT40ZN1&results=10";
$data = file_get_contents($url);
$values = json_decode($data,true);
$arr_val = array();
for($i=0;$i<10;$i++){ 
$server_data_time = strtotime($values['feeds'][3]['created_at']);
// $original_time = date('h:i:s A',$server_data_time);
$arr_val[$i][0] = $i;
$arr_val[$i][1] = $values['feeds'][$i]['field1'];
$new_arr[] = $arr_val[$i];
}  
echo json_encode($new_arr);
?>