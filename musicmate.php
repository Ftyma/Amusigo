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

<body id="music-mate">
<?php include('sidebar.php'); ?>
<?php $username = $_GET["username"]; ?>
    <div class="musicmate-right">
        
        <div class="top-container">
            <h1 style="color:#8328BA">Music Mate</h1>

            <!-- Search bar -->
            <div class="input-container-1">
                <input class="search" type="text" placeholder="In your music bank ... ">            
                <i class="search-icon fa-solid fa-magnifying-glass"></i>
            </div>

            <!-- profile button -->
            <?php include('profile.php'); ?>
           
        </div>

        <!-- Search bar -->
        <div class="input-container-2">
                <input class="search" type="text" placeholder="In your music bank ... ">            
                <i class="search-icon fa-solid fa-magnifying-glass"></i>
        </div>

        <div>
        <table>
        <tr>
            <th>Username</th>
            <th>Remove</th>
        </tr>
        <?php
        $stdid = "SELECT * FROM users WHERE Username = '$username'";
        $result1 = $mysqli->query($stdid);
        if ($result1 !== false) {
            while ($row1 = $result1->fetch_array()) {
                //echo "<h1> this is my id " . $row1[0] . "</h1>";
                $student_id = $row1[0];
            }
        } else {
            echo "Error in query execution: " . $mysqli->error;
        }
        

            $frnd = "SELECT u.username from users as u
            INNER JOIN friend as ff on u.Student_ID = ff.friend_id
                    WHERE ff.user_id = $student_id";
            if($result=$mysqli->query($frnd)){
                while($row=$result->fetch_array()){
                    echo "<tr>
                        <td> " . $row['username']."</td>
                        <td>
                            <a href='#'><i class='fa-regular fa-circle-plus'></i></a>
                        </td>
                    </tr>";
                }
            }
       
        ?>
    </table>
        </div>
    </div>
</body>

</html>