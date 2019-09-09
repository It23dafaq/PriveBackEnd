 <?php
 $connection =new mysqli("localhost","id6530145_144300","2541994","id6530145_prive");
 
$sqlCommand = $connection->prepare("Update tables SET Name=?,Quantity=?,TotalPrice=?,isOkay=? WHERE ID=?");
$sqlCommand->bind_param("ssdii",$_GET["Name"],$_GET["Quantity"],$_GET["TotalPrice"],$_GET["isOkay"],$_GET["ID"]);
$sqlCommand->execute();
 
if($sqlCommand){
    echo "updated";
}else {
    echo "not";
}



