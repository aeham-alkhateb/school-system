<html>
<head>
<link rel="stylesheet" href="css/table_style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="css/checkbox_style.css?v=<?php echo time(); ?>">
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

$sql = "SELECT id, first_name, last_name, phone, email FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table class='table' width=100% height=100%><tr><th>ID</th><th>Name</th><th>email</th><th>phone</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
	<td>".$row["id"]."</td>
	<td>".$row["first_name"]." ".$row["last_name"]."</td>
	<td>".$row["email"]."</td>
	<td>".$row["phone"]."</td>
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