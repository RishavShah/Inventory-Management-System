
<!DOCTYPE html>
<html>
	<head>
		<title>bill
		</title>
	</head>
<body background="i14.jpg">
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "rj";
		$conn=mysqli_connect($servername,$username,$password,$db);
		if(isset($_POST['submit']))
				{
					$pid=$_POST['submit'];
					$res=mysqli_query($conn,"select * from cbill2 where inv_no=$pid");
					//$row=mysqli_fetch_assoc($res);
					$count=mysqli_num_rows($res);
					if($count > 0)
					{
						?>
										<style>
													table,th,td{border-collapse: collapse;border: 3px solid black;}
													th,td{text-align:center;}
										</style>
										<table style="width:80%;   margin-left:5%; border: ">
										 <caption>Invoice number <?php echo $pid ?> </caption>
												<tr>
													<th>Invoice no</th>
													<th>Item id</th>
													<th>Item name</th>
													<th>Unit price</th>
													<th>Quantity</th>
													<th>Total Price</th>
													<th>Date of Cancel</th>
												</tr>
									<?php
									while($rows=mysqli_fetch_assoc($res))
									{
										
											$inno=$rows['inv_no'];
											$iid=$rows['item_id'];
											$iname=$rows['item_name'];
											$up=$rows['unitprice'];
											$q=$rows['qty'];
											$tp=$rows['total_price'];
											$d=$rows['doc'];
											?>
													
													<tr>
													<td><?php echo $inno; ?> </td>
													<td><?php echo $iid; ?> </td>
													<td><?php echo $iname; ?> </td>
													<td><?php echo $up ;?> </td>
													<td><?php echo $q; ?> </td>
													<td><?php echo $tp; ?> </td>
													<td><?php echo $d; ?> </td>
													</tr>
													
											
											<?php
									}
									?>
									</table>
									<p style="margin-left:5%"><a href="m3.php"style="text-decoration:none">back</a></p>
									<?php
					}
				}
	?>
</body>
</html>