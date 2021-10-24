<?php
$host="localhost:3306";
$user="root";
$pass="";
$dbname="smrusqsn_store";

$conn=new mysqli($host,$user,$pass,$dbname);
if($conn->connect_error){
    die ("Connection Failed");
}
?>