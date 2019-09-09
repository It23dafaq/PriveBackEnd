<?php
require "dbconn.php";
$user_name = $_POST["user_name"];
$user_pass = $_POST["Password"];
$mysql_qry = "select * from Users where UserName = '$user_name' and PassWord= '$user_pass';"; 
$result = mysqli_query($conn,$mysql_qry);
if(mysqli_num_rows($result)>0){
$row=mysqli_fetch_assoc($result);
$name=$row["UserName"];
    if($user_name=="panos"){
        echo "login succes panos";
        
    }else{
        echo "login succes";
}
}
else{
echo "login not succes wrong name or pass";
}
?>