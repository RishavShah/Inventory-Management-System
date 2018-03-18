<html>
<head>
	<meta charater="utf-8">
	<title>confirm
	</title>
</head>
<body background="i8.jpg">

<form method="post">
    <pre style="width:300px;
	height:50px;font-size:20px; margin-top:5%;  margin-left:470">
    ENTER PHONE NUMBER<input type="text" name="uid" size="50" placeholder="" required="true" style=
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
			  $ph = mysqli_real_escape_string($conn,$_POST['uid']);
			  $sql = "SELECT id FROM user WHERE phno = '$ph'";
			  $result = mysqli_query($conn,$sql);
			  $row = mysqli_fetch_array($result,MYSQLI_NUM);
			  $count = mysqli_num_rows($result);
			 // echo $count;
			 // If result matched $myusername and $mypassword, table row must be 1 row
				if($count >= 1)
					{
						//session_register("myusername");
						$_SESSION['login_user'] = $ph;
						header("location: confirm2.php");
					}else {
						 $error = "phone no  is invalid";
						 ?>
						 <script>
						 alert("enter valid phone no");
						 </script>
						 <?php
					}
			}

?>
</body>
</html>