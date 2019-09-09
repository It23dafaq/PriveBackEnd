<?php

$connection =new mysqli("localhost","id6530145_144300","2541994","id6530145_ecom");
$sqlCommand = $connection->prepare("insert into products_ecom values (?,?,?)");
$sqlCommand->bind_param("isi",$_GET["id"],$_GET["name"],$_GET["price"]);
$sqlCommand->execute();

 ?>
