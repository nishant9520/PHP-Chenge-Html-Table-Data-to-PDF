<?php
include('Connection.php');
// retrieve 
$sql="SELECT *FROM order_item";

$result= $conn->query($sql);
if($result->num_rows>0){
    $dataoi=array();
    while($row=$result->fetch_assoc()){
        $dataoi[]=$row;
    }
}

//... php to json

echo  json_encode($dataoi);

?>