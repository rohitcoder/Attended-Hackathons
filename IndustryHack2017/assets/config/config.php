<?php
//error_reporting(0)
error_reporting( error_reporting() & ~E_NOTICE );
// MySQL Hostname
$sql_host = "localhost";
// MySQL Database User
$sql_user = "root";
// MySQL Database Password
$sql_pass = "";
// MySQL Database Name
$sql_name = "hackathon"; 
// Connect to SQL Server
$dbConnect = mysqli_connect($sql_host, $sql_user, $sql_pass, $sql_name);

// Check connection
if (mysqli_connect_errno($dbConnect)) {
    exit(mysqli_connect_error());
}
include('functions.php');