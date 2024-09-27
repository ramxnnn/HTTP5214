<?php

$servername = "db";
$username = "demo";
$password = "password";
$dbname = "demo";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
<h1>List of Colours</h1>

<?php

$sql = "SELECT * FROM colors";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<h2>".$row["name"]."</h2>";
    echo "<div style='width:200px; height:200px; background-color:".$row['rgb'].";'></div>";
    echo "<hr>";
  }
}