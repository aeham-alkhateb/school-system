<?php
session_start();
?>
<html>
<head>
<style>
body {
  background-image: url('img/login.jpg');
}
.container{
	width:350px;
	margin:200px auto;
	background:#FFF;	
}
.content{
 display:flex;
	margin:100px auto;

	height:200px;
	overflow:hidden;
	background:rgba(87,113,136,100)
}
.content .form{
	color:#C7D13E;
	 margin:auto;
   text-align:center;
  
}
input[type=text],input[type=password] {
  border: none;
  background-color:#577188;
  border-bottom: 2px solid #C7D13E;
  width:250px;
  height:30px
} 

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

</head>
<body >




	








<div class="container">
<div class="content">
<form action="" method="post" class="form">
First Name<br><input type="text" name="fname"  ><BR><BR>
Last Name<br><input type="text" name="lname"  ><BR><BR>

<input type="submit" name="submit"value="login">

</form>

</div></div>
<?php

$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn =mysqli_connect($servername,$username,$password);
//connect to the table
$db=mysqli_select_db($conn,'project' );
if($db!=true){ 
echo "the db doesnt exist" .mysqli_error($conn);
}

if(isset($_POST["submit"])){
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$sql=mysqli_query($conn,"SELECT * from attendance where first_name='$fname' and last_name='$lname'") or die(mysqli_error($conn));
	
	$rw=mysqli_num_rows($sql);
	if($rw==1){
		header("location:../pr/parents.php");
		
	}
	else{
		echo"<script>alert('first or last name are incorrect')</script>";
	}
	

}




$_SESSION["firstname"]="$fname";
$_SESSION["lastname"]="$lname";
?>






</table>
</form>











</body>
</html>