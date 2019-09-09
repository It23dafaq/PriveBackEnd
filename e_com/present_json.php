<?php

$connection =new mysqli("localhost","id6530145_root","12345","id6530145_ecom");

$sqlCommand=$connection->prepare("select * from products_ecom");
$sqlCommand->execute();

$result=$sqlCommand->get_result();
while($rowOfProduct = $result->fetch_assoc()){
  echo json_encode($rowOfProduct);
}

//echo $rowOfData["id"];
//echo $rowOfData["name"];
//echo $rowOfData["price"];
echo json_encode($rowOfData);
 ?>
