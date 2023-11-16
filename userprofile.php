<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Amusigo</title>
<link rel="stylesheet" href="css/userprofile.css">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
   

</head>

<body id="userprofile">
    <?php include('sidebar.php')?>
    
    <div class="userprofile-right">
        <div  class="top-container" style="display:flex; align-content:center; margin: 2rem;  ">
            <h1 style="color:#8328BA">Your Account</h1>
            <button class="btn-edit">Edit</button>
        </div>
        <img style="border-radius: 50%; width: 150px; margin-left:3.5rem" class="profile-img" src="https://miro.medium.com/v2/resize:fit:1400/1*YMJDp-kqus7i-ktWtksNjg.jpeg">
        <div id="container">
            <div id="personal-container">
                <h2>Personal Information</h2>
                
                    <label>Username</label>
                    <text placeholder="In your music bank ... ">
        
               
             
                    <label>First name</label>
                    <input type="text">
      
                
   
                    <label>Last name</label>
                    <input type="text">
   
                
  
                    <label>Email</label>
                    <input type="text">
      
               
            </div>
            <div id="school-container">
                <h2>School Information</h2>
                <label>Student ID</label>
                <input type="text">

                <label>Faculty</label>
                <input type="text">

                <label>Current Study Year</label>
                <input type="text">

                <label>Line ID</label>
                <input type="text">
            </div>
        </div>
            
    </div>



</body>

</html>