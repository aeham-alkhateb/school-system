<html>
<head>
<title>admin page</title>

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
		
		
			<nav class=n2>
				
					<ul>
						<li><a href="lasthomepage.php" >Home</a></li>
						<li> | </li>
						<li><a href="students.php" target="iframe" >Students</a></li>
						<li> | </li>
						<li><a href="signin.php" target="iframe" >Add Student</a></li>
						<li> | </li>
						<li><a href="massages.php" target="iframe" >Massages</a></li>
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
	<iframe sandbox="allow-forms" src ="signin.php" height="100%"width="100%" frameborder="0"  name="iframe"></iframe>



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