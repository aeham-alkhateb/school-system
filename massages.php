<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="css/table_style.css?v=<?php echo time(); ?>">
<style>

</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  first_name, last_name,massage  FROM massages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table class='table' width=100% ><tr><th width=25% >From</th><th class='massage'>Massage</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
	
	<td>".$row["first_name"]." ".$row["last_name"]."</td>
	<td>".$row["massage"]."</td>
	
	</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>





</body>


</html>