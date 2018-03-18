<html>
<head>
	<meta charater="utf-8">
	<title>ditem
	</title>
</head>
<body background="i7.jpg">
	<form method="post">
		<p style="margin-top:10%;  margin-left:20%;
			font-size:30px;"><B>ENTER ITEM NAME TO BE DELETED</b><br>
		<input type="text" name="iid" size="50"  required="true" style=
			"border-radius:5px;
			width:50%;
			height:50px;
			padding:2px;
			border:3px solid black;margin-top:5%;  margin-left:3%;
			font-size:20px;"></p>
		<input type="submit" value="DELETE" name="submit" style="width:20%;
			height:40px;pa:2px;
			color:black;
			margin-top:3%;  margin-lefT:30%;">
		<marquee ><a href="item.php" style="text-decoration:none">Return to item page</a></marquee>
	</form>
<?php
 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "rj";
		$conn=mysqli_connect($servername,$username,$password,$db);
		if(isset($_POST['submit']))
		{	
				$itemid = $_POST['iid'];
				$sql1= "SELECT * from item where  itemname='$itemid' ";
				$data1 = mysqli_query($conn,$sql1);
				$count=mysqli_num_rows($data1);
				if($count>=1)
				{
						$sql = "DELETE from item
								where  itemname='$itemid' ";
						$data = mysqli_query($conn,$sql);
						
						if($data) 
						{
							?>
		 
								<script>						
								alert("items deleted successfully...");
								</script>
								<script>
								window.location="item.php";
								</script>
								
							<?php
						}
				}
				else
				 {
						?>
							 <script>						
								alert("this item name or item id does not exist...");
								</script>
						<?php
				 }

			
			
		}
?>

</body>
</html>