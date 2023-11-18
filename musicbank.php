<?php 
require_once('connect.php'); 

session_start();

if (!isset($_SESSION["username"]) || $_SESSION["login"] !== true) {
    header("Location: signin.php");
    exit();
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Amusigo</title>
<link rel="stylesheet" href="css/musicbank.css">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>

<body id="music-bank">
    <?php $username = $_SESSION["username"];  ?>
<?php include('sidebar.php'); ?>
    <div class="musicbank-right">
        
        <div class="top-container">
            <h1 style="color:#8328BA"><?php echo $username ?>'s Bank</h1>

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
            <th>Song</th>
            <th>Artist</th>
            <th>Genre</th>
            <th>Edit</th>
        </tr>
        <?php
        $songQold = "SELECT * FROM users WHERE Username = '$username'";
        $result1 = $mysqli->query($songQold);
        if ($result1 !== false) {
            while ($row1 = $result1->fetch_array()) {
                //echo "<h1> this is my id " . $row1[0] . "</h1>";
                $student_id = $row1[0];
            }
        } else {
            echo "Error in query execution: " . $mysqli->error;
        }

            $songQ = "SELECT Songs.Song_ID, S.title, A.name, G.Genre_name
                    FROM user_musicbank as Songs
                    INNER JOIN global_musicbank as S on Songs.Song_ID = S.Song_ID
                    INNER JOIN Genre as G on S.Genre_ID = G.Genre_ID
                    INNER JOIN Artist as A on S.Artist_ID = A.Artist_ID
                    WHERE Student_ID = $student_id";
            if($result=$mysqli->query($songQ)){
                while($row=$result->fetch_array()){
                    echo "<tr>
                        <td> " . $row['title']."</td>
                        <td>" . $row['name']."</td>
                        <td>" . $row['Genre_name']."</td>
                        <td>
                            <a href='delete.php?song_id=" . $row['Song_ID'] . "'><i class='fa-solid fa-circle-minus' style='color: #ff2600;'></i></a>
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