<?php
$servername = "localhost" ;
$username = "root" ;
$password = "";
$dataname = "eclassv1.2";

$conn =  new mysqli($servername, $username, $password, $dataname);

if($conn->connect_error){
    die("connection failed" .$conn->connect_error);
}
?>