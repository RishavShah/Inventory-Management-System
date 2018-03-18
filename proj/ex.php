<?php
 
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db="rj";
			$conn=mysqli_connect($servername,$username,$password,$db);
			session_start();
			session_start();
		$_SESSION["elec"] = 0;
		$_SESSION["life"] = 0;
		$_SESSION["home"] = 0;
		$_SESSION["tv"] = 0;
		$_SESSION["book"] = 0;
		$_SESSION["veh"] = 0;
			$c=0;
			$_SESSION["e1"] = 0;
			while($c<4)
			{
			echo $_SESSION["e1"];
			$_SESSION["e1"]++;
			
			$c++;
			echo $c;
			}
		?>
	<html>
	<body>
	<form action="ex.php" method="post">
<input type="submit" name="update" value="update"/>
</form>
</body>
</html>