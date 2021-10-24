<?php
include('Connection.php');
// retrieve 
$sql="SELECT *FROM orders";

$result= $conn->query($sql);
if($result->num_rows>0){
    $datacx=array();
    while($row=$result->fetch_assoc()){
        $datacx[]=$row;
    }
}

//... php to json

echo  json_encode($datacx);

?>