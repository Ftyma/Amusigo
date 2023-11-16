<!-- <?php require_once('connect.php'); 
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imgUrl = $_POST["imgUrl"];
    $name = $_POST["name"];
    $bio = $_POST["bio"];
    $country = $_POST["country"];
    $website = $_POST["website"];
    $birthdate = $_POST["date"];
    $mysqlFormattedDate = date('Y-m-d H:i:s', strtotime($birthdate));
    // $age = floor((time() - strtotime($birthdate)) / 31556926);
    $q = "INSERT into artist (Name, Bio, Image_Url, Country, Website, Birth_Date) values ('$name', '$bio', '$imgUrl', '$country','$website', $mysqlFormattedDate); ";

    $result=$mysqli->query($q);

    if ($result){
        echo "Insert successful!";
    } else {
        echo "Insert failed: " . $stmt->error;
    }
}
?> -->

<?php
require_once('connect.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imgUrl = $_POST["imgUrl"];
    $name = $_POST["name"];
    $bio = $_POST["bio"];
    $country = $_POST["country"];
    $website = $_POST["website"];
    $birthdate = $_POST["date"];
    $mysqlFormattedDate = date('Y-m-d H:i:s', strtotime($birthdate));

    // Use prepared statement to prevent SQL injection
    $q = "INSERT INTO artist (Name, Bio, Image_Url, Country, Website, Birth_Date) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($q);

    // Bind parameters
    $stmt->bind_param("ssssss", $name, $bio, $imgUrl, $country, $website, $mysqlFormattedDate);

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
<link rel="stylesheet" href="css/musicmate.css">
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
        <form action="addArtist.php" method="post">
            <h2>Add Artist</h2>
            <div>
                <label>Profile Link</label>
                <input type="text" name="imgUrl" placeholder="Profile image link">
            </div>

            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="artist name" >
            </div>

            <div>
                <label>Bio</label>
                <input type="text" name="bio" placeholder="artist bio">
            </div>

            <div>
                <label>Country</label>
                <input type="text" name="country" placeholder="artist country">
            </div>
            
            <div>
                <label>Website Link</label>
                <input type="text" name="website" placeholder="artist website link">
            </div>

            <div>
                <label>Birthdate</label>
                <input type="text" name="date" placeholder="artist birthdate">
            </div>
           
            <button type="submit">Add</button>
          
        </form>
    </div>

</body>

</html>