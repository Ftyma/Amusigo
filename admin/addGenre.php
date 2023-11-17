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
        
        <link rel="stylesheet" href="../css/addGenre.css">
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
           
           
            <h1 class="home-title" style="color:#8328ba; font-size:50px;">Genre List</h1>

            <a href='addGenre.php'>
                <button class="add-btn"> + Add genre</button>
            </a>
            <br></br>
            <div class="container-main">
                <div class="to add">
                <form action= "addGenre.php" method="post">
                    <div class="input-label">
                        <label for="genreName">Genre name</label>
                        <input type="text" name="title" placeholder="Song title">
                    </div>
                    <div class="forbtn">
                        <button id = "btn-add" type="submit">Add</button>
                    </div>
                </form>
                
                </div>
                <div class= "for table">
                <table>
                <tr>
                    <th>Genre Name</th>
                    <th>Action</th>
                </tr>
                <?php
                    $songQ = "SELECT genre.Genre_name FROM genre";
                    if ($result = $mysqli->query($songQ)) {
                    while ($row = $result->fetch_array()) {
                    echo "<tr>
                            <td>" . $row['Genre_name'] . "</td>
                            <td>
                
                            <a href='adminDelete.php?albumid=" . $row['Genre_name'] . "'><button class='delete-btn'>Delete</button></a>
                            </td>
                        </tr>";
                    }
                    }
                ?>

                </table>

                </div>

            </div>
            
            
        </div>
    </body>

    
</html>

