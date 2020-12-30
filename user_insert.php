<?php

include 'db_details.php';
date_default_timezone_set("Asia/Kolkata");
$link = mysqli_connect($host, $username, $password, $database);
//$link = mysqli_connect("localhost", "4fit", "motorinkz2016", "4fit_motorinkz");

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$date = date('Y-m-d H:i:s');



// Attempt insert query execution
$sql ="INSERT INTO `users` (email,password) VALUES ('".$_GET["email"]."','".$_GET["password"]."')";
//echo $sql;

if(mysqli_query($link, $sql)){
    echo"Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>