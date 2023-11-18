<?php 
require_once('../connect.php'); 
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin' || $_SESSION["login"] !== true) {
    header("Location: ../signin.php"); 
} 
$uname = $_SESSION['username'];
$q = "SELECT * FROM users where Username='$uname';";
$result = $mysqli->query($q);
$row = mysqli_fetch_row($result);

$id = $row['Student_ID'];
$email = $row['Email'];
$name = $row['Name'];
$line= $row['Line_ID'];
$role = $row['role'];

if (isset($_POST['submit'])) {
    echo "Form submitted";
    

    // $q = "SELECT Artist_ID FROM `artist` WHERE Name = '$artist_Name';";
    // $res = mysqli_query($mysqli, $q);

    if ($resUpdate) {
        $artistID = mysqli_fetch_row($resUpdate)[0];

        $sql = "UPDATE `artist` SET Name='$name', Bio='$bio', Country='$country', Website='$website',Birth_Date='$birthdate', Age='$age', Image_Url='$imgUrl' where Artist_ID = $id";
        $result = mysqli_query($mysqli, $sql);

        if ($result) {
            echo "update successful!";
            header("Location: adminArtist.php");
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
<html class="bg-color">
    <head>
        <title>Amusigo</title>
        <link href = "https://fonts.googleapis.com/css2?family=Lato&display=swap" rel = "stylesheet">
        <link rel="stylesheet" href="../css/addAlbum.css">
        
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    </head>
    <body id="global">
        <?php include('adminSidebar.php'); ?>

        <div class="global-right">
            <h1 class="home-title" style="color:#8328ba">Admin Dashboard</h1>
          
         
            <hr/>
            <div>
                <div class="profile-top">
                        <h2 class="home-title" style="color:#8328ba">Admin Profile</h2>
                        
                </div>

                <div class="profile-body">
                <div class="input-label">       
                    <label for="link">Admin ID: </label><input type="text" name="imgUrl" placeholder="Profile image link" value="<?php echo $id;?>">
                </div>
                <div class="input-label">       
                    <label for="link">Full Name: </label><input type="text" name="imgUrl" placeholder="Profile image link" value="<?php echo $name;?>">
                </div>
                <div class="input-label">       
                    <label for="link">Email: </label><input type="text" name="imgUrl" placeholder="Profile image link" value="<?php echo $email;?>">
                </div>
                <div class="input-label">       
                    <label for="link">Line ID: </label><input type="text" name="imgUrl" placeholder="Profile image link" value="<?php echo $line;?>">
                </div>
                <div class="input-label">       
                    <label for="link">Role: </label><input type="text" name="imgUrl" placeholder="Profile image link" value="<?php echo $role;?>">
                </div>
                    
                    
                    <div class="forbtn">
                        <button type ="submit" name ="submit" class="edit-btn">Submit Edit</button>
                    </div>
                    
                
                </div>
                
            </div>
        </div>
    </body>

    
</html>

