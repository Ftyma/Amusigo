<?php 
require_once('connect.php'); 

if(isset($_GET['logout'])) {

    //check if user login
    if(!empty($_SESSION["id"])) {
        $_SESSION = array();
        session_destroy();

        header("Location: signin.php");
        exit;
    } else {
        header("Location: signin.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="css/sidebar.css">

</head>

<style>
    .admin-id{
        margin-left:2.5rem; 
        margin-bottom:2rem;
        color: #8d2182;
    }
    @media screen and (max-width: 768px) {
    .admin-id {
        display: none;
    }
}

</style>

<body>
    <div class="sidenav">
        <div class="logo">
            <img src="image/logo.svg">
            <h1 class="title">Amusigo.</h1>
        </div>

        <div>
            <h3 class="admin-id">Admin ID: </h3>
        </div>
        
        <div class="sidebar-menu">
            <div>
                <a  class="sidebar-menu-item" href="adminDashboard.php">
                    <i class="fa-solid fa-house"></i>
                    <p> Dashboard</p>
                </a>
            
                <a  class="sidebar-menu-item" href="adminUser.php">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <p> Users list</p>
                </a>

                <a class="sidebar-menu-item" href="adminGlobal.php">
                    <i class="fa-solid fa-user-group"></i>
                    <p>Global Music Bank</p>
                </a>

                <a class="sidebar-menu-item" href="adminArtist.php">
                    <i class="fa-solid fa-user-group"></i>
                    <p>Artist</p>
                </a>

                <a class="sidebar-menu-item" href="adminGlobal.php">
                    <i class="fa-solid fa-user-group"></i>
                    <p>Album</p>
                </a>

                <a class="sidebar-menu-item" href="adminGlobal.php">
                    <i class="fa-solid fa-user-group"></i>
                    <p>Genre</p>
                </a>
            </div>
                    
            <div class="logout">
                <a  href="?logout=1" class="sidebar-menu-item">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <p> Logout</p>
                </a>
            </div>
        </div>
    </div>
<script>
    
    function openNav() {
        document.querySelector(".sidenav").style.width = "350px";
    }

    function closeNav() {
        document.querySelector(".sidenav").style.width = "80px"; 
    }

    function adjustSidebar() {
        const screenWidth = window.innerWidth;
        if (screenWidth <= 768) {
            closeNav(); 
        } else {
            openNav();
        }
    }
    adjustSidebar();
    window.addEventListener("resize", adjustSidebar);
</script>

</body>
</html>



