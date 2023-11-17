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
            <h1 class="home-title" style="color:#8328ba; font-size:50px">Users List</h1>
            <div class="forbtn">
                    <a href='#'>
                        <button class="btn-add" type="submit"> + Add User</button>
                    </a>
                </div>
            <div>
                
            
            <table>
                <tr>
                    <th></th>
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
                                    <a href='adminEdit.php?userid=" .$row['Student_ID']. "'><button class='edit-btn'>Edit</button></a>
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

