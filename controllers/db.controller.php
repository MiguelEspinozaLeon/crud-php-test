<?php 
     $servername = "172.16.210.22";
     $username = "lguerrero";
     $password = "fadosa";
     $db_name = "base-dev";

     try {
         $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
         // set the PDO error mode to exception
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
     } catch(PDOException $e) {
         echo "Connection failed: " . $e->getMessage();
     }