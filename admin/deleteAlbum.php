<?php
require_once('../connect.php');

if(isset($_GET['albumid'])){
    $id=$_GET['albumid'];

    $q="DELETE from `album` where Album_ID = $id";
    $result=mysqli_query($mysqli, $q);

    if($result)
    {
        echo "Deleted success";
        header("Location: adminAlbum.php");
    }else{
        echo "delete failed. Error: ".$mysqli->error;
    } 

}

?>