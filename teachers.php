
<html>
<head>
<title>teachers</title>
<style>
input[type=submit] {
 border: none;
  background: #C7D13E;
  padding: 12px 20px;
  border-radius: 4px;
  cursor: pointer;
  color: #ffffff;
  font-size: 16px;
}
</style>
<!--reset-->
<link rel="stylesheet" href="css/normalize.css"/>



<!--google web font-->
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
<!--css files-->
<link rel="stylesheet" href="css/admin_style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="css/table_style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="css/checkbox_style.css?v=<?php echo time(); ?>">

<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
<![endif]-->

<!-- font icon library-->
<script src="https://kit.fontawesome.com/2b5281207b.js" crossorigin="anonymous"></script>

</head>



<body>

<!--layout-->



<!--start header -->

<header>
<div class="container">
	<div class="navbar">
		<div class="title"><a href="lasthomepage.php"  ><p class="p1"><span style="color:#C7D13E">HAPPY</span> LEARNING</p>
		<p class="p2">Elementary School</p></a>
		</div>
			<nav>
				
					<ul>
					<li><a href="lasthomepage.php" target="if" >Home</a></li>
					<li> | </li>
					<li><a href="teacherslog.php" target="if" >Teachers</a></li>
					<li> | </li>
					<li><a href="parentslog.php" target="if" >Parents</a></li>
					<li> | </li>
					<li><a href="adminlog.php" target="if" >Admin</a></li>
				</ul>
				
			</nav>
		
		
			
	</div>
	
	
	

</header>
<!--end header -->
	<div class="container" >
	<div class="space">
		<p class="line">_____________________________________________</p>
		<p class="line">__________________________</p>
		<p class="line">____________</p>
	</div>
	</div>

<!--start content -->
<div class="container" >
<div class="content">
	
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

$sql = "SELECT id,first_name,last_name ,sun,mon,tue,wen,thu  FROM attendance";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table  ><tr><th>id</th><th>Name</th><th>sun</th><th>mon</th><th>tue</th><th>wen</th><th>thu</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
	<td>".$row["id"]."</td>
	<td>".$row["first_name"]." ".$row["last_name"]."</td>";?>
	<form action="" method="post">
	
	<td><label class="containers"><input type='checkbox' name='sun' <?php echo ($row['sun']==1 ? 'checked' : '');?>/><span class="checkmark"></span></label></td>
	<td><label class="containers"><input type='checkbox' name='mon' <?php echo ($row['mon']==1 ? 'checked' : '');?>/><span class="checkmark"></span></label></td>
	<td><label class="containers"><input type='checkbox' name='tue' <?php echo ($row['tue']==1 ? 'checked' : '');?>/><span class="checkmark"></span></label></td>
	<td><label class="containers"><input type='checkbox' name='wen' <?php echo ($row['wen']==1 ? 'checked' : '');?>/><span class="checkmark"></span></label></td>
	<td><label class="containers"><input type='checkbox' name='thu' <?php echo ($row['thu']==1 ? 'checked' : '');?>/><span class="checkmark"></span></label></td>
	
	
	</tr>
	
	
	
  
  
<?php  
  }?>
  
  </table> <input type='submit' name='submit'></form>
  <?php
} else {
  echo "0 results";
}


	
		if (isset($_POST["submit"]))
		{
			if(isset($_POST['sun']))
			{
				$row['sun']==1;
			}
			else{$row['sun']==0;}
			
			if(isset($_POST['mon']))
			{
				$row['mon']==1;
			}
			else{$row['mon']==0;}
			
			if(isset($_POST['tue']))
			{
				$row['tue']==1;
			}
			else{$row['tue']==0;}
			
			if(isset($_POST['wen']))
			{
				$row['wen']==1;
			}
			else{$row['wen']==0;}
			
			if(isset($_POST['thu']))
			{
				$row['thu']==1;
			}
			else{$row['thu']==0;}
		
		
		
		
		
		}
	
	
	
	
	
	
	
	


$conn->close();
?>



</div>
</div>
<!--end content -->


<!--start footer -->
<footer>
<div class="info">
	<div class="container">
		<ul>
					<li><div class="pa1">
				<h2>HAPPY LEARNING</h2>
				<p></p>
				<p>Education is the most important thing that a parent may provide to his child. That is why choosing a perfect elementary school is so critical!</p>
				</div></li>
					
					<li><div class="pa2">
				<h2>CONTACT INFORMATION</h2>
				<p></p>
				<p>4096 N Highland St, Arlington, VA 32101, USA happylearning@demolink.org</p>
				
				</div></li>
				<li><div><h2>WE ARE OPEN</h2>
				<p></p>
				<p>Mon-Thu: 9:30 - 21:00
					Fri: 6:00 - 21:00
					Sat: 10:00 - 15:00
					</p></div></li>
				
			
				
		</ul>	
	</div>
</div>

<div class="copyright">© 2020 All rights reserved by aeham alkhateb | Privacy</div>
</footer>
<!--end footer -->














</body>
</html>