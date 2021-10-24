<?php
include('Connection.php');
// retrieve 
$sql="SELECT *FROM brands";

$result= $conn->query($sql);
if($result->num_rows>0){
    $databu=array();
    while($row=$result->fetch_assoc()){
        $databu[]=$row;
    }
}

//... php to json

echo  json_encode($databu);

?>