<?php
include('Connection.php');
// retrieve 
$sql="SELECT *FROM users";

$result= $conn->query($sql);
if($result->num_rows>0){
    $datau=array();
    while($row=$result->fetch_assoc()){
        $datau[]=$row;
    }
}

//... php to json

echo  json_encode($datau);

?>