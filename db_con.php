<?php
   $servername = "localhost";
   $username = "u622085619_bridgehouse_db";
   $password = "Auctech@123";
   $database = "u622085619_bridgehouse_db";

   $con = new mysqli ($servername, $username, $password, $database);

   if($con->connect_error){
    die ("connection Failed : " . $con->connect_error);
   }
?>