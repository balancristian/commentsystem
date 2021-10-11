<?php 
   $conn = new mysqli("localhost", "root", "","comment");
   if($conn->connect_error){
       die("Connection Failed".$conn->connect_error);
   }
?>
