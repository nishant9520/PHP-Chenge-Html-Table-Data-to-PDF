<?php
include('Connection.php');
// retrieve 
$sql="SELECT *FROM categories";

$result= $conn->query($sql);
if($result->num_rows>0){
    $datac=array();
    while($row=$result->fetch_assoc()){
        $datac[]=$row;
    }
}

//... php to json

echo  json_encode($datac);

?>