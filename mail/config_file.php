<?php
$DatabaseHost = 'localhost';
$DatabaseName = 'mail'; // sql database name
$DatabaseUsername = 'root';
$DatabasePassword = '';

$con = mysqli_connect($DatabaseHost, $DatabaseUsername, $DatabasePassword, $DatabaseName);
if($con)
 {
	//  to check use this command line.
	//echo "Database connected successfully!";
    echo " ";
 }
 else
 {
    echo "database not connected";
 }

?>