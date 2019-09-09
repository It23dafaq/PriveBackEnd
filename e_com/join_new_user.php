<?php

$connection =new mysqli("localhost","id6530145_root","12345","id6530145_ecom");

//if email already exists do not add the user again
$emailCheckSQLCommand=$connection->prepare("select * from app_users_table where email=?");
$emailCheckSQLCommand->bind_param("s",$_GET["email"]);
$emailCheckSQLCommand->execute();
$emailResult=$emailCheckSQLCommand->get_result();

$email = $_GET["email"];


if(filter_var($email, FILTER_VALIDATE_EMAIL)){
       if($emailResult->num_rows==0){
           $sqlCommand = $connection->prepare("insert into app_users_table values (?,?,?)");
           $sqlCommand->bind_param("sss",$_GET["email"],$_GET["username"],$_GET["password"]);
            $sqlCommand->execute();
            echo "Congrats! The registration procces was successfull";
       }else{
  echo "A user with this email Addres already exists";
          }
        }else {
           echo("$email is not a valid email address");
        }
 ?>
