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

<body id="admin">
    <h1>Admin Page</h1>
    <div>
        <form>
            <h2>Add Song</h2>
            <div>
                <label>Title</label>
                <input type="text">
            </div>

            <div>
                <label>Artist</label>
                <input type="text">
            </div>

            <div>
                <label>Genre</label>
                <input type="text">
            </div>
            
            <div>
                <label>Released Date</label>
                <input type="text">
            </div>

            <div>
                <label>Album</label>
                <input type="text">
            </div>
           
            <button type="submit">Add</button>
          
        </form>
    </div>

</body>

</html>