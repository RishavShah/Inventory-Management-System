<html>
<head>
	<meta charater="utf-8">
	<title>update_item
	</title>
</head>
<body background="i7.jpg">
	


	
	
	<marquee ><a href="item.php" style="text-decoration:none">Return to previous page</a></marquee>
</pre>

    </form>


<?php
 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db="rj";
		$conn=mysqli_connect($servername,$username,$password,$db);
		if(isset($_POST['a4']))
		{	
					$itemtype = $_POST['a4'];
				$sql = "SELECT item_id FROM item WHERE type = '$itemtype' ";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($result,MYSQLI_NUM);
				$count = mysqli_num_rows($result);
				//echo $count;
				if($count >= 1)
					{
						$sql3 = "select * from item where type = '$itemtype' ";
						$data3 = mysqli_query($conn,$sql3);
						//$row1 = mysqli_fetch_array($data3,MYSQLI_NUM);
						$count1 = mysqli_num_rows($data3);
						if($data3) 
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
									</tr>
									<tr>
									<?php
								 while ($row1=mysqli_fetch_row($data3))
								 { 
								?>
									<tr>
									<td><?php echo $row1[1]; ?> </td>
									<td><?php echo $row1[2]; ?> </td>
									</tr>
						
								<?php
								}
									?>
									</table>
									<a href="ditem.php"> Click to delete </a>
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