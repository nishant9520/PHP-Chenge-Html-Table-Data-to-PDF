<?php
include('Connection.php');
// retrieve 
$sql="SELECT *FROM product";

$result= $conn->query($sql);
if($result->num_rows>0){
    $datap=array();
    while($row=$result->fetch_assoc()){
        $datap[]=$row;
    }
}

//... php to json

echo  json_encode($datap);

?>