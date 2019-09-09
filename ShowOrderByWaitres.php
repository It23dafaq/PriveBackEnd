<?php

 $connection =new mysqli("localhost","id6530145_144300","2541994","id6530145_prive");
 
$results = array();
$sqlCommand = $connection->prepare("SELECT * FROM `Orders` WHERE UserName=?");
$sqlCommand->bind_param("s",$_GET["UserName"]);
$sqlCommand->execute();
$result=$sqlCommand->get_result();
$products = array();
while($rowOfProduct = $result->fetch_assoc()){
  array_push($products,$rowOfProduct);
}
echo json_encode($products);

/*
while($row = $result){
         array_push($products,$rowOfProduct);
        $results[] = array(
      'order_id' => $row['order_id'],
      'Posotita' => $row['Posotita'],
      'UserName' => $row['UserName'],
      'DrinkName' => $row['DrinkName'],
      'Price' => $row['Price'],
      'Comments' => $row['Comments'],
      'Time' => $row['Time']);  
}
print($results);
 mysqli_close($connection);
 
 ?>
*/
?>
