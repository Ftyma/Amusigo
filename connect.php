<?php
$mysqli = new mysqli('localhost:3307','root','root','music');
   if($mysqli->connect_errno){
      echo $mysqli->connect_errno.": ".$mysqli->connect_error;
   }
?>
