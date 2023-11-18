<?php
require_once('../connect.php');
session_start();

$id = $_GET['userid'];
$updateQ = "SELECT * FROM users WHERE Student_ID = $id";
$resUpdate = mysqli_query($mysqli, $updateQ);
$row = mysqli_fetch_array($resUpdate);

$username = $row['Username'];
$email = $row['Email'];
$lineid = $row['Line_ID'];
$faculty = $row['Faculty'];
$year = $row['Year'];
$name = $row['Name'];
$profileUrl = $row['profile_url'];
$stdid = $row['Student_ID'];

if (isset($_POST['submit'])) {
    echo "Form submitted";
    $username = $_POST["username"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $name = "$fname $lname";
    $email = $_POST["email"];
    //$passwd = $_POST["passwd"];
    $stdid = $_POST["stdid"];
    $faculty = $_POST["faculty"];
    $year = $_POST["year"];
    $line = $_POST["line"];
    $profile = $_POST["profile"];

    // $q = "SELECT Artist_ID FROM `artist` WHERE Name = '$artist_Name';";
    // $res = mysqli_query($mysqli, $q);

    if ($resUpdate) {
        //$artistID = mysqli_fetch_row($res)[0];

        $sql = "UPDATE `users` SET Username = '$username', Email = '$email', Line_ID='$lineid', Faculty='$faculty',
        Year='$year', Name = '$name', profile_url='$profile' WHERE Student_ID = $id";
        $result = mysqli_query($mysqli, $sql);

        if ($result) {
            echo "update successful!";
            header("Location: adminUser.php");
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
    <link rel="stylesheet" href="../css/addAlbum.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"/>
</head>

<body id="admin">
<?php include('adminSidebar.php');

?>
<div class = "global-right">
    <h1 class="home-title" style="color:#8328ba">Admin Page</h1>
    <br></br>
    <div class="container-main">
    <form method="post" >
                <div class="form1">
                    <h1 class="subtitle">Personal Information</h1>
                    <!-- <p class="subtitle">Please fill in the informaiton correctly</p> -->
                    <div class="input-label">
                        <label class="required">Username</label>
                        <input type="text" name="username" required value="<?php echo $username; ?>">
                    </div>

                    <div class="input-label">
                        <label class="required">First name</label>
                        <input type="text" name="fname" required>
                    </div>

                    <div class="input-label">
                        <label class="required">Last name</label>
                        <input type="text" name="lname" required>
                    </div>

                    <div class="input-label">
                        <label class="required">Email</label>
                        <input type="email" name="email" required value="<?php echo $email; ?>">
                    </div>
                    
                    <!-- <div class="input-label">
                        <label class="required">Password</label>
                        <input type="password" name="passwd" required>
                    </div> -->
                </div>

                <div class="form2">
                    <h1 class="subtitle">School Information</h1>
                    <div  class="input-label">
                        <label class="required">Student ID</label>
                        <input type="text" name="stdid" required value="<?php echo $stdid; ?>">
                    </div>

                    <div class="input-label">
                        <label class="required">Faculty</label>
                        <input type="text" name="faculty" required value="<?php echo $faculty; ?>">
                    </div>

                    <div class="dropdown">
                        <label class="required">Current Study Year</label>
                        <select name="year">
                            <option value="" disabled selected>select your year</option>
                            <option value="Bachelor-1">Bachelor-1</option>
                            <option value="Bachelor-2">Bachelor-2</option>
                            <option value="Bachelor-3">Bachelor-3</option>
                            <option value="Bachelor-4">Bachelor-4</option>
                            <option value="Master-1">Master-1</option>
                            <option value="Master-2">Master-2</option>
                         </select>
                    </div>
              
                    <div class="input-label">
                        <label>Line ID</label>
                        <input type="text" name="line" value="<?php echo $lineid; ?>">
                    </div>   
                    
                    <div class="input-label">
                        <label>Profile URL</label>
                        <input type="text" name="profile">
                    </div>

           

                </div>
        <br></br>
        <div class="forbtn">
             <button id = "btn-add" type="submit" name="submit">Update</button>
        </div>
       

    </form>
</div>

</div>

</body>
</html>

<?php
//$id = $_GET['userid'];


?>
