<?php
<<<<<<< HEAD
$mysqli = new mysqli('localhost:3307','root','root','music');
=======
$mysqli = new mysqli('localhost','root','root','music');
>>>>>>> f714362ed4e3c457b28a27f7ee2efd221beb9c86
   if($mysqli->connect_errno){
      echo $mysqli->connect_errno.": ".$mysqli->connect_error;
   }
?>
