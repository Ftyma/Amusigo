<?php
require_once('../connect.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $artist_Name = $_POST["artist"];

    $sql = "SELECT Artist_ID FROM `artist` WHERE Name = '$artist_Name'; ";
    $res = mysqli_query($mysqli, $sql);
    $artistID = mysqli_fetch_row($res);

   
    $q = "INSERT INTO album (Album_Name, Artist_ID) VALUES (?, ?)";
    $stmt = $mysqli->prepare($q);

    // Bind parameters
    $stmt->bind_param("si",$name, $artistID[0]);

    // Execute the query
    $result = $stmt->execute();

    // Check for success
    if ($result) {
        echo "Insert successful!";
    } else {
        echo "Insert failed: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Amusigo</title>
<link rel="stylesheet" href="../css/musicmate.css">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>

<body id="admin">
    <h1>Admin Page</h1>
    <div>
        <form action="addAlbum.php" method="post">
            <h2>Add Album</h2>
            <div>
                <label>Album Name</label>
                <input type="text" name="name" placeholder="Album name">
            </div>

            <div>
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


           
            <button type="submit">Add</button>
          
        </form>
    </div>

</body>

</html>