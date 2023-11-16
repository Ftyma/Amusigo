<?php 
require_once('../connect.php'); 
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin' || $_SESSION["login"] !== true) {
    header("Location: ../signin.php"); 
} 
?>

<!DOCTYPE html>
<html class="bg-color">
    <head>
        <title>Amusigo</title>
        <link rel="stylesheet" href="../css/adminArtist.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    </head>
    <body id="global">

        
        <?php include('adminSidebar.php'); ?>

        <div class="global-right">
           
           
            <h1 class="home-title" style="color:#8328ba">Album Lists</h1>

            <!-- Search bar -->
            <div class="input-container">
                <input class="search" type="text" placeholder="In your music bank ... ">            
                <i class="search-icon fa-solid fa-magnifying-glass"></i>
            </div>

            <a href='addAlbum.php'>
                <button class="add-btn"> + Add album</button>
            </a>
            <table>
                <tr>
                    <th>Album Name</th>
                    <th>Artist</th>
                    <th>Action</th>
                </tr>
                <?php
$songQ = "SELECT album.*, artist.Name as ArtistName
          FROM album join artist on album.Artist_ID = artist.Artist_ID ";
if ($result = $mysqli->query($songQ)) {
    while ($row = $result->fetch_array()) {
        echo "<tr>
            <td>" . $row['Album_Name'] . "</td>
            <td>" . $row['ArtistName'] . "</td>

            <td>
                <a href='#'><button class='view-btn'>View</button></a>
                <a href='editAlbum.php?albumid=" .$row['Album_ID']. "'><button class='edit-btn'>Edit</button></a>
                <a href='deleteAlbum.php?albumid=" . $row['Album_ID'] . "'><button class='delete-btn'>Delete</button></a>
            </td>
        </tr>";
    }
}
?>

            </table>

        </div>
    </body>

    
</html>
