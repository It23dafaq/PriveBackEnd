<?php

$connection =new mysqli("localhost","id6530145_root","12345","id6530145_ecom");

$check_login_info=$connection->prepare("select * from app_users_table where email=? and password=?");
$check_login_info->bind_param("ss",$_GET["email"],$_GET["password"]);
$check_login_info->execute();

$login_result = $check_login_info->get_result();

if($login_result->num_rows==0){
   echo "The user does not exist";
 }else{
   echo "The user does exist";
 }
