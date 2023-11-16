<?php
require_once('../connect.php');
session_start();

$id = $_GET['albumid'];
$updateQ = "SELECT album.*, artist.Name FROM album JOIN artist ON artist.Artist_ID = album.Artist_ID WHERE album.Album_ID = $id";
$resUpdate = mysqli_query($mysqli, $updateQ);
$row = mysqli_fetch_array($resUpdate);

$album_name = $row['Album_Name'];
$artist_Name = $row['Name'];

if (isset($_POST['submit'])) {
    echo "Form submitted";
    $album_name = $_POST["name"];
    $artist_Name = $_POST["artist"];

    $q = "SELECT Artist_ID FROM `artist` WHERE Name = '$artist_Name';";
    $res = mysqli_query($mysqli, $q);

    if ($res) {
        $artistID = mysqli_fetch_row($res)[0];

        $sql = "UPDATE `album` SET Album_Name='$album_name', Artist_ID=$artistID WHERE Album_ID = $id";
        $result = mysqli_query($mysqli, $sql);

        if ($result) {
            echo "update successful!";
            header("Location: adminAlbum.php");
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
    <link rel="stylesheet" href="../css/musicmate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"/>
</head>

<body id="admin">
<h1>Admin Page</h1>
<div>
    <form method="post">
        <h2>Update Album</h2>

        <div>
            <label>Album Name</label>
            <input type="text" name="name" placeholder="Album name" value="<?php echo $album_name; ?>">
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

        <button type="submit" name="submit">Update</button>

    </form>
</div>

</body>
</html>
