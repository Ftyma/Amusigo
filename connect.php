<?php
<<<<<<< HEAD
$mysqli = new mysqli('localhost','root','root','amusic');
=======
$mysqli = new mysqli('localhost:3307','root','root','music');
>>>>>>> 9c09fa6ff34da0f8a075471c53bde65b8be54a94
   if($mysqli->connect_errno){
      echo $mysqli->connect_errno.": ".$mysqli->connect_error;
   }
?>
