<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Amusigo</title>
<link rel="stylesheet" href="css/sidebar.css">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>

<body id="music-bank">
    <h1>Sign in page</h1>
    <div>
        <form action="signin.php" method="post">
            <div>
                <label>Username</label>
                <input type="text" name="username">
            </div>
            
            <div>
                <label>Password</label>
                <input type="password" name="passwd">
            </div>
           
            <button type="submit" name="submit">Submit</button>
            <p>Dont have an account?<a href="signup.php">Sign up</a></p>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
	$username = $_POST["username"];
	$pass = $_POST["passwd"];
	$q="select * from login";
	$result=$mysqli->query($q);
	    if(!$result){
	    echo "Select failed. Error: ".$mysqli->error ;
	    return false;
	    }
	    while($row=$result->fetch_array()){ 
            if ($row[0]==$username){
                if($row[1]==$pass){
                    if ($row[0]=="Rose" && $row[1]=="rose"){
                        header("Location: addSong.php");
                    }   
                    else{
                       header("Location: home.php?username=$username");
                        
                    }
                } 
                else{
                    echo "Incorrect password!";
                }
            }
            else{
                echo "Username does not exist!";
            }
        } 
    }
    ?>
</body>

</html>