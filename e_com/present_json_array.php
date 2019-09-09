<?php

$connection =new mysqli("localhost","id6530145_root","12345","id6530145_ecom");
if ($connection->connect_errno) {
    echo "Failed to connect to MySQL: (" .
    $connection->connect_errno . ") " . $connection->connect_error;
}


$sqlCommand=$connection->prepare("select * from products_ecom");

$sqlCommand->execute();
$result = $sqlCommand->get_result();
$products = array();
while($rowOfProduct = $result->fetch_assoc()){
  array_push($products,$rowOfProduct);
}
echo json_encode($products);

 ?>

