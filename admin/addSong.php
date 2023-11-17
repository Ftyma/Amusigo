<?php require_once('../connect.php'); 
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST["title"];
    $artist = $_POST["artist"];
    $genre = $_POST["genre"];
    $reldate = $_POST["reldate"];
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
    <link href = "https://fonts.googleapis.com/css2?family=Lato&display=swap" rel = "stylesheet">
    <link rel="stylesheet" href="../css/addSong.css">
    
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
        <br></br>
        <div class="container">
            <div class="form-left"> 
                <form action= "addSong.php" method="post">
                
                    <h2>Add Song</h2>
                    <div class="input-label">
                        <label for="title">Title</label>
                        <input type="text" name="title" placeholder="Song title">
                    </div>

                    <div class="dropdown">
                        <label for="artist">Artist</label>
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
                        <label for="genre">Genre</label>
                        <select name="genre">
                        <?php
                            $genreQ = "SELECT * FROM genre"; 
                            if ($result = $mysqli->query($genreQ)) {
                                echo "<option value='' selected disabled>Select a genre</option>";
                                while ($row = $result->fetch_array()) {
                                echo "<option value='" . $row['Genre_name'] . "'>" . $row['Genre_name'] . "</option>";
                                }
                            }
                        ?>                
                        </select>
                    </div>
            
                    <div class="input-label">
                        <label for="reldate">Released Date</label>
                        <input type="date" name="reldate" placeholder="released date">
                    </div>

                    <div class="dropdown">
                        <label for="album">Album</label>
                        <select name="album">
                        <?php
                        $albumQ = "SELECT * FROM album"; 
                        if ($result = $mysqli->query($albumQ)) {
                            echo "<option value='' selected disabled>Select album</option>";
                            while ($row = $result->fetch_array()) {
                                echo "<option value='" . $row['Album_Name'] . "'>" . $row['Album_Name'] . "</option>";
                        }
                    }
                        ?>                
                        </select>
                    </div>
                    <br></br>
                    <button id = "preview" type="submit">Preview Information</button>
                    <br></br>
                    <button id="add" name= "addsong" type="submit">Add Song</button>
                </form>  
            </div>
                <div class="form-right"> 
                    <h2>Preview Song Info</h2>
                    <p class="info">The information you entered will be displayed here for confirmation.</p>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (isset($_POST['reldate'])) {
                            $reldate = $_POST['reldate'];
                           
                        } else {
                            
                            echo "Release date is not set.";
                        }
            
                    $title = $_POST['title'];
                    $artist = $_POST['artist'];
                    $genre = $_POST['genre'];
                    $reldate = $_POST['reldate'];
                    $album = $_POST['album'];
                    
                    echo "<p><strong>Title:</strong> $title</p>";
                    echo "<p><strong>Artist:</strong> $artist</p>";
                    echo "<p><strong>Genre:</strong> $genre</p>";
                    echo "<p><strong>Release Date:</strong> $reldate</p>";
                    echo "<p><strong>Album:</strong> $album</p>";

                    }
                    
                    if (isset($_POST['addsong'])) {
                        $title = $_POST["title"];
                        $artist = $_POST['artist'];
                        $genre = $_POST['genre'];
                        $reldate = $_POST['reldate'];
                        $album = $_POST['album'];
                        
                        if ($resGenre) {
                            $genre_ID = mysqli_fetch_row($resGenre);
                            // Check if Genre_ID is retrieved successfully
                            if ($genre_ID) {
                                // Use $genre_ID[0] in your code (it contains the Genre_ID)
                                
                                // Later, if needed, you can fetch the genre name using the ID
                                $getGenreNameQ = "SELECT Genre_name FROM genre WHERE Genre_ID = '$genre_ID[0]'";
                                $resGenreName = mysqli_query($mysqli, $getGenreNameQ);
                                $genreData = mysqli_fetch_assoc($resGenreName);
                                $genre_name = $genreData['Genre_name'];
                                // Use $genre_name in your code
                            } else {
                                echo"no genre ID found";
                            }
                        } else {
                            echo"query failed";
                        }
                        
                        $duplicate = "SELECT * from global_musicbank WHERE Title = '$title' AND Artist_ID = '$album_ID' ";
                        $check_dup = $mysqli-> query($duplicate);
                        if(mysqli_num_rows($check_dup)>0){
                            echo "<script>
                                Swal.fire({
                                   icon: 'error',
                                   title: 'Song already exists',
                                   showConfirmButton: false,
                                   timer: 1500
                                });
                             </script>";
                        }else {
                            $insert="INSERT INTO global_musicbank(Title,Artist_ID,Genre_ID,Release_Date,Album_ID) 
                                VALUES($title,'$artist','$genre','$reldate','$album')";
                            $result=$mysqli->query($insert);
                    
                            if(!$result){
                                echo "Insert failed. Error: ".$mysqli->error ;
                                return false;
                            }

                            //I havent touched after this
                            else{
                                $insertLogin = "Insert into login(Username, Password) values('$username','$hashedPassword')";
                                $qLogin = $mysqli->query($insertLogin);
                    
                                echo "<script>
                             Swal.fire({
                                icon: 'success',
                                title: 'Register successfully',
                                showConfirmButton: false,
                                timer: 3000
                             }).then(function() {
                                window.location.href = 'home.php'; 
                             });
                          </script>";
                            }
                        }  
                    }

                    ?>
                </div>
        </div>
    </div>
</body>

</html>