<html>
<head>
	<meta charater="utf-8">
	<title>LOGIN
	</title>

<style>
	#aa{
		background:url(i2.jpg);
		background-origin: border-box;
		background-position: center;
		background_reapeat:none;
	}
</style>


</head>
<body  id="aa">

	<div id="upper" align=center>
		<h1 style="font-size:300%;color:yellow;  "> INVENTORY MANAGEMENT SYSTEM </h1>
	</div>
	<div style="width:500px;position:absolute;height:500px;font-size:20px;  border-radius:15px; margin-left:30%; background-color:#ffffff;  opacity: 0.8;
  filter: alpha(opacity=60); ">
  </div>
  <div style=" position:absolute;width:500px;height:500px;font-size:20px;  border-radius:15px; margin-left:30%;">
		<form method="post"  >
			
				<p>&nbsp&nbsp&nbsp&nbsp<b>USERNAME</b><input type="text" name="username" style=
							"border-radius:5px;
							width:300px;
							height:50px;
							padding:2px;
							border:3px solid black;margin-top:10%;  margin-left:5%;
							font-size:20px;" placeholder="username" /></p>
				<p>&nbsp&nbsp&nbsp&nbsp<b>PASSWORD</B><input type="password" name="password" style=
							"border-radius:5px;
							width:300px;
							height:50px;
							padding:2px;
							
							border:3px solid black;margin-top:3%;  margin-left:5%;
							font-size:20px;" placeholder="password" /></p>
				<b>&nbsp&nbsp&nbsp&nbspTYPE</b><select name="type"style="border-radius:5px;width:300px;	height:50px;	padding:2px;	border:3px solid black;margin-top:5%;  margin-left:1%;	font-size:20px;">
							<option value="admin">ADMINISTRATOR</option>
							<option value="sm">SALES MANAGER</option>
							<option value="sp">SALES PERSON</option>
							<option value="im">INVENTORY MANAGER</option>
						
					</select>
				<input type="submit" name="submit" value="login" style="width:100px;
								height:40px;pa:2px;
								background-color:#6676AC;
								color:#F5F5F5;
								margin-top:3%;  margin-left:40%;" />	
				<input type="button" onclick="document.location.href = 'signup.php'" value="signup" id="s1" style="width:100px;             
								height:40px;pa:2px;													
								background-color:#6676AC;
								color:#F5F5F5;
								margin-top:3%;  margin-left:40%;" />
				<p id="forgot" style="margin-top:3%; font-color:black; margin-left:40%;;" ><a href="confirm1.php" style="text-decoration:none">Forgot password?</a></p>
				
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
			// username and password sent from form 
      
				  $myusername = mysqli_real_escape_string($conn,$_POST['username']);
				  $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
				  $type =$_POST['type'];
				  $sql = "SELECT id FROM user WHERE username = '$myusername' and password = '$mypassword'";
				  $result = mysqli_query($conn,$sql);
				  $row = mysqli_fetch_array($result,MYSQLI_NUM);
				  $count = mysqli_num_rows($result);
			//echo $count;
			// If result matched $myusername and $mypassword, table row must be 1 row
		
					if($count == 1) 
					{
						 //session_register("myusername");
						 $_SESSION['login_user'] = $myusername;
						 $sql2 = "SELECT type from user WHERE username = '$myusername' and password = '$mypassword'"; 
						 $result2 = mysqli_query($conn,$sql2);
						 $arr=mysqli_fetch_array($result2);
						 if($type == "admin" && $type == $arr[0])
						 {
								header("location: item.php");
						 }
						 else if($type == "sm" && $type == $arr[0])
						 {
								header("location: manager.php");	 
						 }
						 else if($type == "sp" && $type == $arr[0])
						 {
								header("location: salesman.php");	 
						 }
						 else if($type == "im" && $type == $arr[0])
						 {
								header("location: invenman.php");	 
						 }
		
					}
					else
						{
							$error = "Your Login Name or Password is invalid";
							?>
							 <script>
							 alert("Your Login Name or Password is invalid");
							 </script>
							 <?php
						}
			}
	?>
</body>
</html>