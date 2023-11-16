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
        
$q="DELETE FROM user_musicbank WHERE Song_ID=$song_id and Student_ID = $student_id";
if(!$mysqli->query($q)){
	echo "DELETE failed. Error: ".$mysqli->error;}
$mysqli->close();
header("Location: musicbank.php");
}
?>