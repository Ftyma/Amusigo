<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="css/sidebar.css">

</head>

<body>
    <div class="sidenav">
        <div class="logo">
            <img src="image/logo.svg">
            <h1 class="title">Amusigo.</h1>
        </div>
        
        <div class="sidebar-menu">
            <div>
                <a  class="sidebar-menu-item" href="home.php">
                    <i class="fa-solid fa-house"></i>
                    <p> Home</p>
                </a>
            
                <a  class="sidebar-menu-item" href="musicbank.php?username=<?php echo $username; ?>">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <p> Music Bank</p>
                </a>

                <a class="sidebar-menu-item" href="musicmate?username=<?php echo $username; ?>.php">
                    <i class="fa-solid fa-user-group"></i>
                    <p>Music Mates</p>
                </a>

                <a  class="sidebar-menu-item" href="playlist.php">
                    <i class="fa-solid fa-music"></i>
                    <p> Playlists</p>
                </a>
            </div>
                    
            <div class="logout">
                <a  class="sidebar-menu-item" href="playlist.php">
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



