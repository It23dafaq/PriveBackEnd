<?php

   $connection =new mysqli("localhost","id6530145_144300","2541994","id6530145_prive");
 
//$d=date("Y-m-d H:i:s");
$d = new DateTime("now", new DateTimeZone("Europe/Athens"));
$result = $d->format('Y-m-d H:i:s');
$sqlCommand = $connection->prepare("insert into Orders values (?,?,?,?,?,?)");
$sqlCommand->bind_param("sssdss",$_GET["Posotita"],$_GET["UserName"],$_GET["DrinkName"],$_GET["Price"],$_GET["Comments"],$result);
$sqlCommand->execute();
 
if($sqlCommand){
    echo "succes";
}else {
    echo "not";
}









?>