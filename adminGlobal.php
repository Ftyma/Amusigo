<?php 
require_once('connect.php'); 
?>

<!DOCTYPE html>
<html class="bg-color">
    <head>
        <title>Amusigo</title>
        <link rel="stylesheet" href="css/adminGlobal.css">
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
           
           
            <h1 class="home-title" style="color:#8328ba">Admin Global</h1>

            <!-- Search bar -->
            <div class="input-container">
                <input class="search" type="text" placeholder="In your music bank ... ">            
                <i class="search-icon fa-solid fa-magnifying-glass"></i>
            </div>
            
            <table>
                <tr>
                    <th>Song</th>
                    <th>Artist</th>
                    <th>Genre</th>
                    <th>Action</th>
                </tr>
                <?php
                    $songQ = "SELECT * 
                            FROM global_musicbank as Songs
                            INNER JOIN global_musicbank as S on Songs.Song_ID = S.Song_ID
                            INNER JOIN Genre as G on S.Genre_ID = G.Genre_ID
                            INNER JOIN Artist as A on S.Artist_ID = A.Artist_ID";
                    if($result=$mysqli->query($songQ)){
                        while($row=$result->fetch_array()){
                            echo "<tr>
                                <td> " . $row['Title']."</td>
                                <td>" . $row['Name']."</td>
                                <td>" . $row['Genre_name']."</td>
                                <td>
                                    <a href='#'><button class='view-btn'>View</button></a>
                                    <a href='#'><button class='edit-btn'>Edit</button></a>
                                    <a href='#'><button class='delete-btn'>Delete</button></a>
                                </td>
                            </tr>";
                        }
                    }
            
                ?>
            </table>

        </div>
    </body>

    
</html>

