<?php require_once('connect.php'); ?>

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
<?php include('sidebar.php'); ?>
    <div class="musicbank-right">
        
        <div class="top-container">
            <h1 style="color:#8328BA">Tyma's Bank</h1>

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
        // PHP code 
            $songQ = 'SELECT Songs.*, A.name, G.Genre_name
                    FROM Global_MusicBank as Songs 
                    INNER JOIN Genre as G on Songs.Genre_ID = G.Genre_ID
                    INNER JOIN Artist as A on Songs.Artist_ID = A.Artist_ID;';
            if($result=$mysqli->query($songQ)){
                while($row=$result->fetch_array()){
                    echo "<tr>
                        <td> " . $row[1]."</td>
                        <td>" . $row['name']."</td>
                        <td>" . $row['Genre_name']."</td>
                        <td>
                            <a href='#'><i class='fa-regular fa-circle-plus'></i></a>
                            <a href='delete.php?id=<?php echo $row[0]; ?>'><i class='fa-solid fa-circle-minus' style='color: #ff2600;'></i></a>
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