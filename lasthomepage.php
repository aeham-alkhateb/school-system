<html>
<head>
<title>homepage</title>

<!--reset-->
<link rel="stylesheet" href="css/normalize.css"/>



<!--google web font-->
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
<!--css files-->
<link rel="stylesheet" href="css/style1.css?v=<?php echo time(); ?>">
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
</div>
	
	<div class="slider">
		<div class="container">
			<div class="intro">
				<p class="line">____________</p>
				<p class="HAPPY ">HAPPY LEARNING</p>
				<h1 class="SCHOOL"><span style="color:#C7D13E">SCHOOL</span> PROGRAMS</h1>
				<p class="welcome">WE WELCOME YOU!</p>
			</div>
			</div>
			<div class="about">
			
			</div>
		
	</div>

</header>
<!--end header -->
<div class="space">
<p class="line">_____________________________________________</p>
<p class="line">__________________________</p>
<p class="line">____________</p>
</div>

<!--start content -->

	<!--news start-->
		<div class="news">
			<span id="slider-img-1"></span>
			<span id="slider-img-2"></span>
			<span id="slider-img-3"></span>
			<div class="img-container">
				<img src="img/news11.jpg" alt="news11" class="slider-img">
				<img src="img/news22.jpg" alt="news22" class="slider-img">
				<img src="img/news33.jpg" alt="news33" class="slider-img">
			</div>
			<div class="button-container">
			<a href="#slider-img-1" class="slider-button"></a>
			<a href="#slider-img-2" class="slider-button"></a>
			<a href="#slider-img-3" class="slider-button"></a>
			</div>
		</div>
	<!--news end-->
	
	<!--comments start-->
	<div class="content">
		<div class="container">
			<div class="comment-box">
				<form action="" method="post">
				<label class="label">leave a comment if you have:<br><textarea cols="35" rows="5"name="comm"></textarea></label>

				<input type="submit" name="submit" value="send">
				</form>
			
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

				
				if( isset($_POST["submit"]))
				{
					if( isset($_POST["comm"]))
				{
					$comment=$_POST["comm"];
					$insert=mysqlI_query($conn,"insert into massages(first_name,last_name,massage)
					values('visitor','visitor','$comment')");
					if($insert==false){
						echo "there is a problem" .mysqli_error($conn);
						
					}
		 
				}
				}
				?>
			</div>
		</div>
		
	
	
	</div>
	<!--comments end-->
	

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