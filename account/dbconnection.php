<?php
define('DB_SERVER','localhost');
define('DB_USER', 'swiftsou_data');
define('DB_PASS' ,'7[H4cVR#~Yr3');
define('DB_NAME', 'swiftsou_data');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
?>