<html>
<head>
</head>
<body><form method="post">
<input type="submit" name="update" value="update"/>
<input type="submit" name="delete" value="delete"/>

<?php
	$servername = "localhost";
				$username = "root";
				$password = "";
				$db = "rj";
				$conn=mysqli_connect($servername,$username,$password,$db);
				if(isset($_POST['update']))
				{
					echo"hiii";
				}
				if(isset($_POST['delete']))
				{
						echo"bye";
				}
				?>
</form>
</body>
</html>