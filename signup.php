<?php require_once('connect.php'); ?>

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

<body id="music-bank">
    <h1>Create your account</h1>
    <div >
        <form action="signup.php" method="post">
            <div>
                <label>Username</label>
                <input type="text" name="username">
            </div>

            <div>
                <label>First name</label>
                <input type="text" name="fname">
            </div>

            <div>
                <label>Last name</label>
                <input type="text" name="lname">
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="email">
            </div>
            
            <div>
                <label>Password</label>
                <input type="password" name="passwd">
            </div>

            <div>
                <label>Student ID</label>
                <input type="text" name="stdid">
            </div>

            <div>
                <label>Faculty</label>
                <input type="text" name="faculty">
            </div>

            <div>
                <label>Current Year</label>
                <select name="year">
                    <option value="Bachelor-1">Bachelor-1</option>
                    <option value="Bachelor-2">Bachelor-2</option>
                    <option value="Bachelor-3">Bachelor-3</option>
                    <option value="Bachelor-4">Bachelor-4</option>
                    <option value="Master-1">Master-1</option>
                    <option value="Master-2">Master-2</option>
                </select>
            </div>

            <div>
                <label>Line ID</label>
                <input type="text" name="line">
            </div>

            <div>
                <label>Profile URL</label>
                <input type="text" name="profile">
            </div>
           
            <button type="submit" name="reg">Register</button>
            <p>Already have an account?<a href="signin.php">Login</a></p>
        </form>
    </div>

    <?php
    if (isset($_POST['reg'])) {
	$username = $_POST["username"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $name = "$fname $lname";
    $email = $_POST["email"];
	$passwd = $_POST["passwd"];
    $stdid = $_POST["stdid"];
    $faculty = $_POST["faculty"];
    $year = $_POST["year"];
    $line = $_POST["line"];
    $profile = $_POST["profile"];
	$insert="INSERT INTO users(Student_ID,Username,Email,Line_ID,Faculty,Year,Name,profile_url) VALUES($stdid,'$username','$email','$line','$faculty','$year','$name','$profile')";
	$result=$mysqli->query($insert);
	    if(!$result){
	    echo "Insert failed. Error: ".$mysqli->error ;
	    return false;
	    }
	    else{
            header("Location: home.php?studentid=$stdid");
        }
    }    
    ?>

</body>

</html>