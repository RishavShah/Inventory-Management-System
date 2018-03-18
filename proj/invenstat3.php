<html>
<head>
	<meta charater="utf-8">
	<title>sitem
	</title>
</head>
<body  background="i12.jpg">
	<form method="post">
		<p style="margin-top:10%;  margin-left:20%;
			font-size:30px;"><B>SEE STATUS</b><br>
			TYPE:<select name="type1"style="border-radius:5px;width:300px;	height:50px;	padding:2px;	border:3px solid black;margin-top:5%;  margin-left:5%;	font-size:20px;"></p>
		<option value="Electronics">Electronics</option>
		<option value="Lifestyle">Lifestyle</option>
		<option value="Home and Furniture">Home and Furniture</option>
		<option value="tv and appliances">tv and appliances</option>
		<option value="Books">Books</option>
		<option value="Vehicles">Vehicles</option>
		</select><br>
			<input type="submit" value="SEARCH" name="submit" style="width:20%;
				height:40px;pa:2px;
				color:black;
				margin-top:3%;  margin-lefT:10%;">
			<marquee><a href="salesman.php" style="text-decoration:none">Return to previous page</a></marquee>
	</form>

<?php
 
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "rj";
			$conn=mysqli_connect($servername,$username,$password,$db);
			if(isset($_POST['submit']))
			{	
					$itemid = $_POST['type1'];
					$sql1= "SELECT * from item where  type='$itemid'";
					$data1 = mysqli_query($conn,$sql1);
					$count=mysqli_num_rows($data1);
					if($count>=1)
					{
							$sql = "SELECT * from item
									where type='$itemid' ";
							$data = mysqli_query($conn,$sql);
							if($data) 
							{
								?>
								<style>
									table,th,td{border-collapse: collapse;border: 3px solid black;}
									th,td{text-align:center;}
								</style>
								<table style="width:80%;   margin-left:5%; border: ">
								 <caption>Items</caption>
									<tr>
									<th>item name</th>
									<th>unit price</th>
									<th>quantity</th>
									<th>date of purchase</th>
									</tr>
									<tr>
									<?php
								 while ($row=mysqli_fetch_row($data))
								 { 
								?>
									<tr>
									<td><?php echo $row[1]; ?> </td>
									<td><?php echo $row[2]; ?> </td>
									<td><?php echo $row[3] ;?> </td>
									<td><?php echo $row[5]; ?> </td>
									</tr>
						
								<?php
								}
									?>
									</table>
									<?php
							}
					}
					else
					{
						 ?>
						 <script>						
							alert("no items present...");
							</script>
						 <?php
					}

	
	
			}
?>
</body>
</html>