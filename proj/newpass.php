<html>
<head>
	<meta charater="utf-8">
	<title>change_pass
	</title>
</head>
<body background="i8.jpg">
	<div id="upper" align=center>
		<h2 style="font-size:300%;">CHANGE PASSWORD </h2>
	</div>

<div>
 
 
<form method="post">
    <pre style="width:300px;
	height:50px;font-size:20px; margin-top:5%;  margin-left:470">
    USER_NAME:<input type="text" name="un" size="50" placeholder="USERNAME" required="true" style=
	"border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">
    NEW PASSWORD:<input type="password" name="np" size="50" placeholder="NEW PASSWORD" required="true" style=
	"border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">
    CONFIRM PASSWORD:<input type="password" name="cp" size="50" placeholder="CONFIRM PASSWORD" required="true" style=
	"border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">
	<input type="submit" value="SUBMIT"  style="width:100px;
	height:40px;pa:2px;
	color:black;
	margin-top:10%;  margin-left:40%;">
	</pre>
</form>
</div>

<?php
 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db="rj";

		// Create connection
		$conn=mysqli_connect($servername,$username,$password,$db);

		session_start();
		   
		if($_SERVER["REQUEST_METHOD"] == "POST")
			{
			  // phone no sent from form 
			  $un = mysqli_real_escape_string($conn,$_POST['un']);
			  $np = mysqli_real_escape_string($conn,$_POST['np']);
			  $cp = mysqli_real_escape_string($conn,$_POST['cp']);
			  $sql = "SELECT id FROM user WHERE username = '$un' ";
			  $result = mysqli_query($conn,$sql);
			  $row = mysqli_fetch_array($result,MYSQLI_NUM);
			  $count = mysqli_num_rows($result);
			  //echo $count;
			  // If result matched $myusername and $mypassword, table row must be 1 row
				if($count == 1 )
				{
				  if($np == $cp)
				  {
					    $sql1 = "UPDATE user SET password = '$cp' WHERE username = '$un' ";
						$result = mysqli_query($conn,$sql1);
						//session_register("myusername");
						$_SESSION['login_user'] = $un;
						?>
						 <script>
						 alert("password has been changed");
						 </script>
						 <script>
						 window.location="login.php";
						 </script>
						  <?php
				  }
				  else
				  {
					  ?>
					  <script>
					  alert("please re enter same password");
					  </script>
					  <?php
				  }
				}
				else
				{
					 $error = "username is invalid";
					 ?>
					 <script>
					 alert("enter valid username");
					 </script>
					 <?php
				}
			}

	?>
</body>
</html>