<?php 
require_once('connect.php'); 
?>

<!DOCTYPE html>
<html class="bg-color">
    <head>
        <title>Amusigo</title>
        <link rel="stylesheet" href="css/adminDashboard.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    </head>
    <body id="dashboard">
        <?php include('adminSidebar.php'); ?>

        <div class="dashboard-right">
            <h1 class="home-title" style="color:#8328ba">Admin Dashboard</h1>
            <div class="dashboard-list">
                <a href="adminGlobal.php">
                    <div class="list-card">
                        <h2>Global Music Bank</h2>
                        <?php
                            $q= "SELECT COUNT(*) as count from global_musicbank";
                            $result = $mysqli->query($q);
                            $row=$result->fetch_array();
                            echo "<p>" . $row['count'] ." songs</p>";
                        ?>
                        
                    </div>
                </a>
                <a href="adminUser.php">
                    <div class="list-card">
                        <h2>Users List</h2>
                        <?php
                            $q= "SELECT COUNT(*) as count from users";
                            $result = $mysqli->query($q);
                            $row=$result->fetch_array();
                            echo "<p>" . $row['count'] ." users</p>";
                        ?>
                    </div>
                </a>
                
            </div>
            <br/>
            <br/>
            <hr/>
            <div>
                <div class="profile-top">
                    <h2 class="home-title" style="color:#8328ba">Admin Profile</h2>
                    <button class="edit-btn">Edit</button>
                </div>
                <div class="profile-body">
                    <div class="body-label">
                        <p class="label">Admin ID: </p>
                        <p class="label">First Name: </p>
                        <p class="label">Last Name: </p>
                        <p class="label">Email: </p>
                        <p class="label">Phone Number: </p>
                    </div>
                    
                    <div class="body-info">
                        <p class="text">5502</p>
                        <p class="text">5502</p>
                        <p class="text">5502</p>
                        <p class="text">5502</p>
                        <p class="text">5502</p>
                    </div>
                </div>
                
            </div>
        </div>
    </body>

    
</html>

