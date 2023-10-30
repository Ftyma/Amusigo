<html>
    <body>
<?php
	$username = $_POST["username"];
	$pass = $_POST["passwd"];
	$q="select * from login";
	$result=$mysqli->query($q);
	if(!$result){
	echo "Select failed. Error: ".$mysqli->error ;
	return false;
	}
	while($row=$result->fetch_array()){ 
        if ($row[0]==$username){
            if($row[1]==$pass){
                if ($row[0]=="Rose" && $row[1]=="rose"){
                    header("Location: addSong.php");
                }
                else{
                    header("Location: home.php");
                }
            } 
            else{
                echo "Incorrect password!";
            }
        }
    } 
    ?>
    </body>
</html>
	