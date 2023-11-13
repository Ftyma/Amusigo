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
<?php $friend = $_GET["friend"]; ?>
    <div class="container">
        
        <h1 style="color:#8328BA">Mate Profile</h1>
        <div class="top-container">
            <img class="profile-pic"src="image/contact.svg"/>
            <div>
                <h2>Username: <?php echo $friend;?> </h2>
                <button class="add-friend-btn">Follow</button>
            </div>
        </div>
        
        <div>
        <h3>Check your mate's playlist</h3>
        <table>
            <tr>
                <th>Song</th>
                <th>Artist</th>
                <th>Genre</th>
                <th>Add song</th>
            </tr>
            <?php
        $songQold = "SELECT * FROM users WHERE Username = '$friend'";
        $result1 = $mysqli->query($songQold);
        if ($result1 !== false) {
            while ($row1 = $result1->fetch_array()) {
                //echo "<h1> this is my id " . $row1[0] . "</h1>";
                $student_id = $row1[0];
            }
        } else {
            echo "Error in query execution: " . $mysqli->error;
        }
        

            $songQ = "SELECT S.title, A.name, G.Genre_name
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