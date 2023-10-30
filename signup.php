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
        <form>
            <div>
                <label>Username</label>
                <input type="text">
            </div>

            <div>
                <label>First name</label>
                <input type="text">
            </div>

            <div>
                <label>Last name</label>
                <input type="text">
            </div>

            <div>
                <label>Email</label>
                <input type="email">
            </div>
            
            <div>
                <label>Password</label>
                <input type="password">
            </div>

            <div>
                <label>Student ID</label>
                <input type="text">
            </div>

            <div>
                <label>Faculty</label>
                <input type="text">
            </div>

            <div>
                <label>Current Study Year</label>
                <input type="text">
            </div>

            <div>
                <label>Line ID</label>
                <input type="text">
            </div>
           
            <button type="submit">Register</button>
            <p>Already have an account?<a href="signin.php">Login</a></p>
        </form>
    </div>

</body>

</html>