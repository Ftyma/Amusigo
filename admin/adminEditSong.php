<?php
require_once('../connect.php');
session_start();


    $id = $_GET['songid'];
    $songid = mysqli_real_escape_string($mysqli, $id);
    echo $songid;
$updateQ = "SELECT * 
FROM global_musicbank as Songs
INNER JOIN global_musicbank as S on Songs.Song_ID = S.Song_ID
INNER JOIN Genre as G on S.Genre_ID = G.Genre_ID
INNER JOIN Artist as A on S.Artist_ID = A.Artist_ID where Songs.Song_ID = '$songid'";
$resUpdate = mysqli_query($mysqli, $updateQ);
$row = mysqli_fetch_array($resUpdate);

$title = $row['Title'];
$artist_Name = $row['Name'];
$genre = $row['Genre_name'];



if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    echo "Form submitted";

    $songid = $_POST["songid"];
    $title = $_POST["title"];
    $artist_Name = $_POST["artist"];
    $genre = $_POST["genre"];

    $q = "SELECT Artist_ID FROM `artist` WHERE Name = '$artist_Name';";
    $res = mysqli_query($mysqli, $q);

    $q1 = "SELECT Genre_ID FROM `genre` WHERE Genre_name = '$genre';";
    $res1 = mysqli_query($mysqli, $q1);
    
    if ($res && $res1) {
        $artistID = mysqli_fetch_row($res)[0];
        $genreID = mysqli_fetch_row($res1)[0];
        echo $sql = "UPDATE global_musicbank SET Title='$title', Artist_ID=$artistID, Genre_ID = $genreID  WHERE Song_ID = $songid";
        $result = mysqli_query($mysqli, $sql);

        if ($result) {
            echo "update successful!";
            //header("Location: adminGlobal.php");
            exit(); 
        } else {
            echo "update failed: " . mysqli_error($mysqli);
        }
    } else {
        echo "Error fetching artist: " . mysqli_error($mysqli);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Amusigo</title>
    <link href = "https://fonts.googleapis.com/css2?family=Lato&display=swap" rel = "stylesheet">
    <link rel="stylesheet" href="../css/addAlbum.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"/>
</head>

<body id="admin">
<?php include('adminSidebar.php'); ?>
<div class = "global-right">
    <h1 class="home-title" style="color:#8328ba">Admin Page</h1>
    <br></br>
    <div class="container-main">
    <form action="adminEditSong.php" method="post">
        <h2>Update Song Information</h2>

        <div class="input-label">
            <label>Song Title</label>
            <input type="text" name="title" placeholder="Title" value="<?php echo $title; ?>">
        </div>

        <div>
            <label for="artist">Artist</label>
            <select name="artist">
                <?php
                $artistQ = "SELECT Name FROM artist";
                if ($result = $mysqli->query($artistQ)) {
                    echo "<option value='' selected disabled>Select an artist</option>";

                    while ($row = $result->fetch_array()) {
                        $selected = ($row['Name'] == $artist_Name) ? 'selected' : '';
                        echo "<option value='" . $row['Name'] . "' $selected>" . $row['Name'] . "</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div>
            <label for="genre">Genre</label>
            <select name="genre">
                <?php
                $artistQ = "SELECT Genre_name FROM genre";
                if ($result = $mysqli->query($artistQ)) {
                    echo "<option value='' selected disabled>Select a genre</option>";

                    while ($row = $result->fetch_array()) {
                        $selected = ($row['Genre_name'] == $genre) ? 'selected' : '';
                        echo "<option value='" . $row['Genre_name'] . "' $selected>" . $row['Genre_name'] . "</option>";
                    }
                }
                ?>
            </select>
        </div>

        <br></br>
        <input type="hidden" name="songid" value="<?php echo $id; ?>">
        <div class="forbtn">
             <button id = "btn-add" type="submit" name="submit">Update</button>
        </div>
       

    </form>
</div>

</div>

</body>
</html>
