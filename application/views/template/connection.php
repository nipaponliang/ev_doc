<?php
$con= mysqli_connect("localhost","root","","test") or die("Error: " . mysqli_error($con));
 
mysqli_query($con, "SET NAMES 'utf8' ");
 
?>