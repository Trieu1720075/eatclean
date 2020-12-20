<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eatclean";
$con = mysqli_connect($servername,$username,$password,$dbname);
mysqli_query($con,"SET NAMES 'UTF8'");

if(!$con){
   die('Connection error:'.mysqli_connect_error());
}
?>