<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Amusigooo</title>
        <link rel="stylesheet" href="css/home.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="sidebar.js" type="text/javascript" defer></script>
        <script src="profile.js" type="text/javascript" defer></script>

    </head>
 
    
    <body id="homepage">

        <sidebar-component></sidebar-component>
        <div class="homepage-right">
            <!-- profile button -->
            <profilebtn-component></profilebtn-component>

            <h1 style="color:#8328BA">Good Evening</h1>

            <!-- Search bar -->
            <div class="input-container">
                <input class="search" type="text" placeholder="Search for music ... ">            
                <i class="search-icon fa-solid fa-magnifying-glass"></i>
            </div>

            <h2 style="margin-left:2rem">Your possible music mates...</h2>
            <div class="user-profile">
            <?php 
                $userQ = 'SELECT * from Users;';
                if($result=$mysqli->query($userQ)){
                    while($row=$result->fetch_array()){
                        echo '<div>';
                        echo '<img src="' . $row[7] . '" style="width: 200px; height: 200px; border-radius:50%;" >';
                        echo '<p style="text-align: center; font-size: larger; font-weight: bold;"> ' . $row[1] . ' </p>';
                        echo '</div>';

                    }
                }else {
                    echo 'Query error: '.$mysqli->error;
                }
            ?>
            </div>


            <h2 style="margin-left:2rem">Suggested Artists...</h2>
            <div class="user-profile">
            <?php 
                $userQ = 'SELECT * from Users;';
                if($result=$mysqli->query($userQ)){
                    while($row=$result->fetch_array()){
                        echo '<div>';
                        echo '<img src="' . $row[7] . '" style="width: 200px; height: 200px; border-radius:50%;" >';
                        echo '<p style="text-align: center; font-size: larger; font-weight: bold;"> ' . $row[1] . ' </p>';
                        echo '</div>';
                        

                    }
                }else {
                    echo 'Query error: '.$mysqli->error;
                }
            ?>
            </div>
            

        </div>
    </body>

    
</html>

