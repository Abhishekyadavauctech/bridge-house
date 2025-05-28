<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "bridgehouse_db";

   $con = new mysqli ($servername, $username, $password, $database);

   if($con->connect_error){
    die ("connection Failed : " . $con->connect_error);
   }
?>