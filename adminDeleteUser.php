<?php
require_once('connect.php');

$u_id = $_GET['id'];
$q="DELETE FROM user_musicbank WHERE Song_ID=$p_id";
if(!$mysqli->query($q)){
	echo "DELETE failed. Error: ".$mysqli->error;}
$mysqli->close();
?>