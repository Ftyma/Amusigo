<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Amusigo</title>
<link rel="stylesheet" href="css/mateProfile.css">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>

<body id="mateProfile">
<?php include('sidebar.php'); ?>
    <div class="container">
        
        <h1 style="color:#8328BA">Mate Profile</h1>
        <div class="top-container">
            <img class="profile-pic"src="image/contact.svg"/>
            <div>
                <h2>Username: </h2>
                <button class="add-friend-btn">Add Friend</button>
            </div>
        </div>
        
        <div>
        <h3>Check your mate playlist</h3>
        <table>
            <tr>
                <th>Song</th>
                <th>Artist</th>
                <th>Genre</th>
                <th>Edit</th>
            </tr>
        </table>
        </div>

    </div>
</body>

</html>