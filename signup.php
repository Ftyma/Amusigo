<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Amusigo</title>
<link rel="stylesheet" href="css/signup.css">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>

<body id="signup">
    <?php include('navbar.php')?>
 
    <div class="main">
        <h1 class="title1">Create your account</h1>
        <div class="container" >
            <form class="form1">
                <h1 class="subtitle">Personal Information</h1>
                <!-- <p class="subtitle">Please fill in the informaiton correctly</p> -->
                <div class="input-container">
                    <label>Username</label>
                    <input type="text">
                </div>

                <div class="input-container">
                    <label>First name</label>
                    <input type="text">
                </div>

                <div class="input-container">
                    <label>Last name</label>
                    <input type="text">
                </div>

                <div class="input-container">
                    <label>Email</label>
                    <input type="email">
                </div>
                
                <div class="input-container">
                    <label>Password</label>
                    <input type="password">
                </div>
            </form>

            <form class="form2">
                <h1 class="subtitle">School Information</h1>
                <div  class="input-container">
                    <label>Student ID</label>
                    <input type="text">
                </div>

                <div class="input-container">
                    <label>Faculty</label>
                    <input type="text">
                </div>

                <div class="input-container">
                    <label>Current Study Year</label>
                    <input type="text">
                </div>

                <div class="input-container">
                    <label>Line ID</label>
                    <input type="text">
                </div>       
            </form>
        </div>

        <div class="btn-container">
            <button type="submit" class="btn-register">Register</button>
            <p>Already have an account?<a href="signin.php">Login</a></p>
        </div>
    </div>
    

   
   

</body>

</html>