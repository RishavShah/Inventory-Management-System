<html>
	<head>
		<meta charater="utf-8">
		<title>sales
		</title>
	</head>
	<body background="i10.jpg">

		<?php
		 
				$servername = "localhost";
				$username = "root";
				$password = "";
				$db = "rj";
				$conn=mysqli_connect($servername,$username,$password,$db);
		?>
		<form method="post">
			<p style="margin-top:10%;  margin-left:20%;
					font-size:30px;"><B>ENTER START DATE</b>
					<input type="date" name="dob" size="50"  required="true" style=
						"border-radius:5px;
						width:30%;
						height:50px;
						padding:2px;
						border:3px solid black;margin-top:3%;  margin-left:3%;
						font-size:20px;"></p><br>
			<p style="margin-top:0.1%;  margin-left:20%;
					font-size:30px;"><B>ENTER END DATE</b>
					<input type="date" name="dob2" size="50"  required="true" style=
						"border-radius:5px;
						width:30%;
						height:50px;
						padding:2px;
						border:3px solid black;margin-top:0.1%;  margin-left:3%;
						font-size:20px;"></p>		
					<input type="submit" value="SEARCH" name="submit" style="width:20%;
						height:40px;pa:2px;
						color:black;
						margin-top:3%;  margin-lefT:30%;">
		</form>
		<?php
				if(isset($_POST['submit']))
				{
					$date = $_POST['dob'];
					$newdate = date("Y-m-d", strtotime($date));
					$date2 = $_POST['dob2'];
					$newdate2 = date("Y-m-d", strtotime($date2));
					if ($newdate2<$newdate)
					{
						?><script>						
								alert("end date should be after start date");
								</script>
								
								
							<?php
						
					}
					$sql="SELECT * from bill1 WHERE date >= '$newdate' and date <= '$newdate2' and $newdate2>$newdate";
					$result=mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);
					$c=0;
					if($count > 0)
					{
						?>
							<style>
										table,th,td{border-collapse: collapse;border: 3px solid black;}
										th,td{text-align:center;}
							</style>
							<table style="width:80%;   margin-left:5%; border: ">
							 <caption>Sales Between Dates <?php echo $newdate ?> and <?php echo $newdate2 ?></caption>
									<tr>
										<th>Invoice no</th>
										<th>Customer name</th>
										<th>Total amount</th>
										<th>Date</th>
									</tr>
						<?php
						while($rows=mysqli_fetch_assoc($result))
						{
							
								$inno=$rows['inv_no'];
								$cus=$rows['customer'];
								$ta=$rows['amt_total'];
								$c=$c+$ta;
								$d=$rows['date'];
								?>
										<tr>
										<td><?php echo $inno; ?> </td>
										<td><?php echo $cus; ?> </td>
										<td><?php echo $ta; ?> </td>
										<td><?php echo $d; ?> </td>
										</tr>
							
								
								<?php
						}
						?>
						</table>
						<p style="margin-left:46%; "><?php echo "Total ".$c;?></p>
						<?php
					}
					else
					{
						?>
		 
								<script>						
								alert("No Transaction took place in this period");
								</script>
								
								
							<?php
					}
					?>
					<marquee ><a href="invenman.php"style="text-decoration:none">Return to previous page</a></marquee>
					<?php
				}
		?>
</body>
</html>