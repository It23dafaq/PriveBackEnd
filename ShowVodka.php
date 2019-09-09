<?php
$user='id6530145_144300';
$pass='2541994';
$host='localhost';
$db = 'id6530145_prive';


$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" .
    $conn->connect_errno . ") " . $conn->connect_error;
}
$results = array();
$query=mysqli_query($conn,"select * from Vodka");
if($query){
        while($row=mysqli_fetch_array($query))
        {
            $results[] = array(
      'Drink' => $row['Drink'],
      'Price' => $row['Price']   );    
            }
         print(json_encode($results));
      }
 mysqli_close($conn);
?>