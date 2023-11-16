<?php require_once('../connect.php'); 
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST["title"];
    $artist = $_POST["artist"];
    $genre = $_POST["genre"];
    $date = $_POST["date"];
    $album = $_POST["album"];

    $artistIDQ = "SELECT Artist_ID from artist where Name = '$artist';";
    $resArtist = mysqli_query($mysqli, $artistIDQ );
    $artist_ID = mysqli_fetch_row($resArtist );

    $genreIDQ = "SELECT Genre_ID from genre where Genre_name = '$genre';";
    $resGenre = mysqli_query($mysqli, $genreIDQ );
    $genre_ID = mysqli_fetch_row($resGenre );

    $albumIDQ = "SELECT Album_ID from album where Album_Name = '$album'; ";
    $resAlbum = mysqli_query($mysqli, $albumIDQ );
    $album_ID = mysqli_fetch_row($resArtist );

    

}
?>

<!DOCTYPE html>
<html class="bg-color">
<head>
    <title>Amusigo</title>
    <link rel="stylesheet" href="../css/addSong.css">
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel="stylesheet" >
    <link
  
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>

<body id="admin">
<?php include('adminSidebar.php'); ?>
 
        
    <div class = "global-right">
        <h1 class="home-title" style="color:#8328ba"><strong>Admin Page</h1>
        <!-- Search bar -->
        <div class="input-container">
                <input class="search" type="text" placeholder="Check if song exists . . . ">            
                <i class="search-icon fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="form-left">
        <form action= "addSong.php" method="post">
            <h2>Add Song</h2>
            <div class="input-label">
                <label>Title</label>
                <input type="text" name="title" placeholder="Song title">
            </div>

            <div class="input-label">
                <label>Artist</label>
                <select name="artist">
                    <?php
                    $artistQ = "SELECT Name FROM artist"; 
                    if ($result = $mysqli->query($artistQ)) {
                        echo "<option value='' selected disabled>Select an artist</option>";
                        while ($row = $result->fetch_array()) {
                            echo "<option value='" . $row['Name'] . "'>" . $row['Name'] . "</option>";
                        }
                    }
                    ?>                
                </select>
            </div>

            <div class = "dropdown">
                <label>Genre</label>
                <select name="genre">
                    <?php
                    $genreQ = "SELECT * FROM genre"; 
                    if ($result = $mysqli->query($genreQ)) {
                        echo "<option value='' selected disabled>Select a genre</option>";
                        while ($row = $result->fetch_array()) {
                            echo "<option value='" . $row['Genre_ID'] . "'>" . $row['Genre_name'] . "</option>";
                        }
                    }
                    ?>                
                </select>
            </div>
            
            <div class="input-label">
                <label>Released Date</label>
                <input type="date" name="date" placeholder="released date">
            </div>

            <div class="input-label">
                <label>Album</label>
                <select name="album">
                    <?php
                    $albumQ = "SELECT * FROM album"; 
                    if ($result = $mysqli->query($albumQ)) {
                        echo "<option value='' selected disabled>Select album</option>";
                        while ($row = $result->fetch_array()) {
                            echo "<option value='" . $row['Album_ID'] . "'>" . $row['Album_Name'] . "</option>";
                        }
                    }
                    ?>                
                </select>
            </div>
            <br></br>
            <button type="submit">Preview Information</button>
          
        </form>
        </div>
        
    </div>



</body>

</html>