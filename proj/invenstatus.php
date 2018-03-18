<html>
	<head>
		<meta charater="utf-8">
		<title>inventory_status
		</title>
	</head>
	<body background="i10.jpg">

		<?php
		 
				$servername = "localhost";
				$username = "root";
				$password = "";
				$db = "rj";
				$conn=mysqli_connect($servername,$username,$password,$db);
				$sql1= "SELECT * from item order by qty";
				$data = mysqli_query($conn,$sql1);
				$count=mysqli_num_rows($data);
				if($count>=1)
				{
						?>
							<style>
								table,th,td{border-collapse: collapse;border: 3px solid black;}
								th,td{text-align:center;}
							</style>
							<table style="width:80%;   margin-left:5%; border: ">
								 <caption>Items in inventory</caption>
									<tr>
										<th>item id</th>
										<th>item name</th>
										<th>unit price</th>
										<th>quantity</th>
										<th>date of purchase</th>
									</tr>
										<?php
											while ($row=mysqli_fetch_row($data))
											{ 
										?>
									<tr>
										<td><?php echo $row[1]; ?> </td>
										<td><?php echo $row[2]; ?> </td>
										<td><?php echo $row[3]; ?> </td>
										<td><?php echo $row[4] ;?> </td>
										<td><?php echo $row[5]; ?> </td>
									</tr>
										<?php
											}
										?>
							</table>
							<p style="margin-left:10%"><a href="invenman.php"style="text-decoration:none">back</a><p>
							<?php
							
				}
				else
				 {
						 ?>
							<script>						
								alert("no item in inventory ....");
							</script>
						 <?php
				 }

		?>
</body>
</html>