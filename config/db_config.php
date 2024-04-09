<?php

$dbhost = 'localhost';
$dbuser = 'net24bkoskamp_bram_toets';
$dbpass = 'OU91RtO@OC9a';
$dbname = 'net24bkoskamp_netwerken_2024';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}

//OU91RtO@OC9a
?>