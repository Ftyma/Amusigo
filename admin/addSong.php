<?php require_once('../connect.php'); 
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST["title"];
    $artist = $_POST["artist"];
    $genre = $_POST["title"];
    $date = $_POST["date"];
    $album = $_POST["album"];

   

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
                <input type="text" name="artist" placeholder="artist name" >
            </div>

            <div class = "dropdown">
                <label>Genre</label>
                <?php
    
                $sql = "SELECT Genre_name FROM genre";
                $result = $mysqli->query($sql);

                if ($result && $result->num_rows > 0) {
                    echo '<select name="genre">';
                    echo '<option value="">Select a genre</option>'; // Default empty option

                    // Fetch data and generate options
                    while ($row = $result->fetch_assoc()) {
                    $genreName = $row['Genre_name'];

                    // Output an option with song name and value as song ID
                    echo '<option value="' . $genreName . '">' . $genreName . '</option>';
                }
                    echo '</select>';
                } else {
                    echo "No songs found";
                }
                ?>
            </div>
            
            <div class="input-label">
                <label>Released Date</label>
                <input type="text" name="date" placeholder="song genre">
            </div>

            <div class="input-label">
                <label>Album</label>
                <input type="text" name="album" placeholder="song album name">
            </div>
            <br></br>
            <button type="submit">Preview Information</button>
          
        </form>
        </div>
        
    </div>



</body>

</html>