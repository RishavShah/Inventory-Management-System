
<html>
<head>
	<script src="time.js" ></script>
	<meta charater="utf-8">
	<title>SIGNUP
	</title>

</head>
<body background="i8.jpg">
<div style="position:relative;">
	<h3 align="right" id="time"></h3>
	<script>setInterval(printtime,1000);</script>
</div>
<div id="upper" align=center>
	<h2 style="font-size:300%;">ADD USER </h2>
</div>
<div>
 
 <form method="post" name="form" action="">
    <pre style="width:300px;
	height:50px;font-size:20px; margin-top:5%;  margin-left:470">
    USERNAME:<input type="text" name="uid" size="50" placeholder="USER NAME" required="true" style=
	"border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">
    PASSWORD:<input type="password" name="pw"  placeholder="PASSWORD" required="true" size="50"
	style=
	"border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">
    NAME:<input type="text" name="name" size="50" placeholder="NAME" required="true" style=
	"border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">
    DOB:<input type="date" name="dob" size="50" placeholder="DOB" required="true" style=
	"border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">
    ADDRESS:<input type="text" name="add" size="50" placeholder="ADDRESS" required="true" style=
	"border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">
    PHONE NO:<input type="text" name="phn" size="50" placeholder="MOBILE NUMBER"  required="true" style=
	"border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">
    EMAIL ID:<input type="email"  name="email" placeholder="E-MAIL" required="true" size="50" style=
	"border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">
    TYPE:<select name="type"style="border-radius:5px;width:300px;	height:50px;	padding:2px;	border:3px solid black;margin-top:5%;  margin-left:5%;	font-size:20px;">
		<option value="admin">ADMINISTRATOR</option>
		<option value="sm">SALES MANAGER</option>
		<option value="sp">SALES PERSON</option>
		<option value="im">INVENTORY MANAGER</option>
		</select>
	<br>
	<input type="submit" value="SUBMIT" name="submit" style="width:100px;
	height:40px;pa:2px;
	color:black;
	margin-top:3%;  margin-left:40%;">
	</pre>
  </form>






<?php
 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db="rj";
		session_start();
		$_SESSION["elec"] = 0;
		$_SESSION["life"] = 0;
		$_SESSION["home"] = 0;
		$_SESSION["tv"] = 0;
		$_SESSION["book"] = 0;
		$_SESSION["veh"] = 0;
		// Create connection
		$conn=mysqli_connect($servername,$username,$password,$db);
		if(isset($_POST['submit']))
		{
			$username = $_POST['uid'];
			$password = $_POST['pw'];
			$fullname = $_POST['name']; 
			$dob = $_POST['dob'];
			$address = $_POST['add'];
			$phno = $_POST['phn']; 
			$email = $_POST['email'];
			$type = $_POST['type'];
			$a = $_POST['uid'];
			$b = $_POST['pw'];
			if(!empty($a)) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
			 { 
				$res = mysqli_query($conn,"SELECT * FROM user WHERE username = '$a' AND password = '$b'");
				$count=mysqli_num_rows($res);
				if($count==0)
				{ 
						$sql = "INSERT INTO user (username,password,fullname,dob,address,phno,email,type) VALUES ('$username','$password','$fullname','$dob','$address','$phno','$email','$type')";
						$data = mysqli_query($conn,$sql);
						if($data) 
						{
							?>
								<script>
								alert("Registered successfully...");
								</script>
								<script>
								window.location="login.php";
								</script>
								
							<?php
							
							
						}
				} 
				else 
				{ 
					echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
				}
			}
			
		}
?>
</body>
</html>