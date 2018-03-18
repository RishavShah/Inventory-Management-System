<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$db="rj";

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