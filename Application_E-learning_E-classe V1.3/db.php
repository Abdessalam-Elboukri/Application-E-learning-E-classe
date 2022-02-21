<?php
$servername = "sql103.epizy.com" ;
$username = "epiz_31105766" ;
$password = "8bX2lE9CvSOjCUs";
$dataname = "epiz_31105766_eclassv1_2";

$conn =  new mysqli($servername, $username, $password, $dataname);

if($conn->connect_error){
    die("connection failed" .$conn->connect_error);
}
?>