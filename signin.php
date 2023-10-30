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
    <h1>Log in page</h1>
    <div>
        <form>
            <div>
                <label>Email</label>
                <input type="email">
            </div>
            
            <div>
                <label>Password</label>
                <input type="password">
            </div>
           
            <button type="submit">Submit</button>
            <p>Dont have an account?<a href="signup.php">Sign up</a></p>
        </form>
    </div>

</body>

</html>