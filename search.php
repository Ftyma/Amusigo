
<!-- <?php
// Get the search term from the form
$search = $_POST['search'];

// Query the database
$sql = "SELECT * FROM global_musicbank WHERE column_name LIKE '%$search%'";
$result = $mysqli->query($sql);

// Display results
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Song : " . $row["title"] . " - Name: " . $row["name"] . "<br>";
    // Display other columns as needed
  }
} else {
  echo "0 results";
}
?> -->

