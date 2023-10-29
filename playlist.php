<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Amusigo</title>
<link rel="stylesheet" href="css/playlist.css">
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

<body id="playlist">
    <sidebar-component></sidebar-component>

    <div class="playlist-right">
        <div  style="display:flex; align-content:center; margin: 2rem;">
            <h1 style="color:#8328BA">Tyma's Playlist</h1>

            <!-- Search bar -->
            <div class="input-container">
                <input class="search" type="text" placeholder="In your music bank ... ">            
                <i class="search-icon fa-solid fa-magnifying-glass"></i>
            </div>

            <!-- profile button -->
            <profilebtn-component></profilebtn-component>
        </div>

        <div>
            
        </div>

        <div>
            
        </div>



</body>

</html>