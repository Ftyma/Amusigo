<?php 
require_once('connect.php'); 

session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    header("Location: signin.php");
    exit();
}

$userName = $_SESSION["id"]; 
?>

<!DOCTYPE html>
<html class="bg-color">
    <head>
        <title>Amusigo</title>
        <link rel="stylesheet" href="css/home.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    </head>
    <body id="homepage">

        
        <?php include('sidebar.php'); ?>

        <div class="homepage-right">
            <!-- profile button -->
            <?php include('profile.php'); ?>
           
            <h1 class="home-title" style="color:#8328ba">Welcome! <?php echo $userName;?>
</h1>
            
            <!-- Search bar -->
            <div class="input-container">
                <input class="search" type="text" placeholder="Search for music ... ">            
                <i class="search-icon fa-solid fa-magnifying-glass"></i>
            </div>

            <h2 class="subtitle">Your possible music mates...</h2>
            <div class="user-profile">
            <?php 
                
                $userQ = 'SELECT * from Users;';
                if($result=$mysqli->query($userQ)){
                    while($row=$result->fetch_array()){
                        echo '<div>';
                        echo '<a href="mateProfile.php?friend='.$row[1].'">';
                        echo '<img class="user-img" src="' . $row[7] . '" >';
                        echo '</a>';
                        echo '<p class="user-name"> ' . $row[1] . ' </p>';
                        echo '</div>';
                    }
                }else {
                    echo 'Query error: '.$mysqli->error;
                }
            ?>
            </div>


            <h2 class="subtitle">Suggested Artists...</h2>
            <div class="user-profile">
                <?php
                    $userQ = 'SELECT * from Users;';
                    if ($result = $mysqli->query($userQ)) {
                        while ($row = $result->fetch_array()) {
                            echo '<div>';
                            echo '<img src="' . $row[7] . '" class="user-img">';
                            echo '<p class="user-name" >' . $row[1] . '</p>';
                            echo '</div>';
                        }
                    } else {
                        echo 'Query error: ' . $mysqli->error;
                    }
                ?>
            </div>
        </div>
    </body>

    
</html>

