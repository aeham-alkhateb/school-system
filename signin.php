<html>
<head><style>
.error{
	background:white;
	color:red;
	}
.container{background-color="white";
	
	margin: 0 auto; 
	width:500px;
	text-align:center;
}
input[type=text],input[type=password] {
  border: none;
  border-bottom: 2px solid #C7D13E;
  width:250px;
  height:30px
} 
.f1{
	color:#577188;
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
</style></head>
<body >
<?php
$nameerror=$emailerror=$phoneerror=$passerror=$vererror="";
$fname=$lname=$email=$phone=$password=$passver="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["fname"])){
	$nameerror="name is required";
	}
		else{
			$fname=test_input($_POST["fname"]);
			if (!preg_match("/^[a-zA-Z]*$/",$fname)){
				$nameerror="only letters allowed";
				}
		}
		
	 if(empty($_POST["lname"])){
	$nameerror="name is required";
	}
		else{
			$lname=test_input($_POST["lname"]);
			if (!preg_match("/^[a-zA-Z]*$/",$lname)){
				$nameerror="only letters allowed";
				}
		}
	
	if(empty($_POST["em"])){
		$emailerror="email is required";
	}
		else{
			$email=test_input($_POST["em"]);
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$emailerror="invalid email ";
			}
		}
		
	if(empty($_POST["ph"])){
			$phoneerror="phone is required";
		}
		else{
		$phone=test_input($_POST["ph"]);
		if (!preg_match("/^[0-9]*$/",$phone)){
			$phoneerror="only numbers allowed";
			}
	}
	
	if(empty($_POST["pass"])){
		$passerror="password is required";
	}
		else{
			$password=test_input($_POST["pass"]);
		}
	
	if(empty($_POST["pv"])){
		$vererror="password ver is required";
	}
		else{
			$passver=test_input($_POST["pv"]);
			if($password!=$passver){$vererror="passwords are not matched";}
		}

	
	
	
	
	
	
}

function test_input($data){
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
	
}

?>

<!--connect to wampserver-->
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
?>





<div class="container">
<table cellpadding="5" cellspacing="25" border="0">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">


<tr> <td class="f1" >
FIRST-NAME:</td><td><input type="text" name="fname" maxlength="30"  required></td>
<span class="error"><td><?php echo $nameerror;?></span></td></tr>
<tr><td class="f1" >
LAST-NAME:</td><td><input type="text" name="lname" maxlength="30" required></td>
<span class="error"><td><?php echo $nameerror;?></span></td></tr>
<tr><td class="f1" >
E-mail:</td><td><input type="text" name="em" maxlength="30" required></td>
<span class="error"><td><?php echo $emailerror;?></span></td></tr>
<tr><td class="f1" >
PHONE:</td><td><input type="text" name="ph" maxlength="30" required></td>
<span class="error"><td><?php echo $phoneerror;?></span></td></tr>
<tr><td class="f1" >
PASSWORD:</td><td><input type="password" name="pass" maxlength="20"required></td>
<span class="error"><td><?php echo $passerror;?></span></td></tr>
<tr><td class="f1" >
PASSWORD Ver:</td><td><input type="password" name="pv" maxlength="20"required></td>
<span class="error"><td><?php echo $vererror;?></span></td></tr>
<tr><td>
<input type="submit" name="insert" value="CONFIRM"></td></tr>








</form>
</table>
</div>
<?php
//insert
if( isset($_POST['insert']))
{
	$insert=mysqlI_query($conn,"insert into students(first_name,last_name,phone,email,password)
	values('$fname','$lname',$phone,'$email','$password')");
	if($insert==false){
		echo "there is a problem" .mysqli_error($conn);
		
	}
	else{echo"<script>alert('the student has been added')</script>";}
 
}
?>
</body></html>

