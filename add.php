<?php
require_once('connect.php');
session_start();
$username = $_SESSION["username"];
$song_id = $_GET['song_id'];

if (isset($song_id)) {
$song = "SELECT * FROM users WHERE Username = '$username'";
        $result1 = $mysqli->query($song);
        if ($result1 !== false) {
            while ($row1 = $result1->fetch_array()) {
                $student_id = $row1[0];
            }
        } else {
            echo "Error in query execution: " . $mysqli->error;
        }
        
        $insert="INSERT INTO user_musicbank VALUES($song_id,$student_id)";
    
if(!$mysqli->query($insert)){
	echo "INSERT failed. Error: ".$mysqli->error;
    return false;
}
$mysqli->close();
header("Location: musicbank.php");
}
?>