<?php
$user='id6530145_144300';
$pass='2541994';
$host='localhost';
$db = 'id6530145_prive';


$conn = mysqli_connect("localhost","id6530145_144300","2541994","id6530145_ecom");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" .
    $conn->connect_errno . ") " . $conn->connect_error;
}else{
echo "connected";
    
}
?>