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
        
        <link rel="stylesheet" href="../css/adminUser.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    </head>
    <body id="user">

        
        <?php include('adminSidebar.php'); ?>

        <div class="user-right">
            <h1 class="home-title" style="color:#8328ba; font-size:50px;">Users List</h1>
            <!-- Search bar -->
            <div class="input-container">
                <input class="search" type="text" placeholder="In your music bank ... ">            
                <i class="search-icon fa-solid fa-magnifying-glass"></i>
            </div>
            <a href='addUser.php'>
                <button id = "add-btn" class="add-btn" type="submit"> + Add User</button>
            </a>
            <br></br>
            
            <table>
                <tr>
                    <th>Profile Pic</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <?php
                    $songQ = "SELECT * FROM Users";
                    if($result=$mysqli->query($songQ)){
                        while($row=$result->fetch_array()){
                            echo "<tr>
                                <td><img class='user-pic' src = ". $row['profile_url']. "></img></td>
                                <td> " . $row['Username']."</td>
                                <td>" . $row['Email']."</td>
                                <td>
                                    <a href='adminEditUser.php?userid=" .$row['Student_ID']. "'><button class='edit-btn'>Edit</button></a>
                                    <a href='adminDelete.php?userid=" . $row['Student_ID'] . "'><button class='delete-btn'>Delete</button></a>
                                </td>
                            </tr>";
                        }
                    }
            
                ?>
            </table>
        </div>
        </div>
        
        
    </body>

    
</html>

