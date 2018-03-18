<html>
	<head>
		<meta charater="utf-8">
		<title>cancel_bill
		</title>
	</head>
	<body background="i12.jpg">
		<form method="post">
			<p style="margin-top:18%;  margin-left:20%;
				font-size:20px;">enter invoice number:
				<input type="text" name="in" size="50"  required="true" style=
				"border-radius:5px;
				width:30%;
				height:50px;
				padding:2px;
				border:3px solid black;margin-top:5%;  margin-left:3%;
				font-size:20px;"></p>
				<input type="submit" value="PROCEED" name="submit" style="width:20%;
				height:40px;pa:2px;
				color:black;
				margin-top:3%;  margin-left:30%;">
		</form>
<?php
 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db="rj";
		$conn=mysqli_connect($servername,$username,$password,$db);
		if(isset($_POST['submit']))
		{		
				$in = $_POST['in'];
				$sql = "SELECT * FROM bill1 WHERE inv_no = $in ";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($result);
				$count = mysqli_num_rows($result);
				if($count)
				{
					$sql2="INSERT INTO cbill1 (inv_no,customer,amt_total,amt_paid,amt_due,sp) VALUES ($row[0],'$row[1]','$row[2]','$row[3]','$row[4]','$row[5]') ";
					$result2 = mysqli_query($conn,$sql2);
					
					$res = mysqli_query($conn,"delete from bill1 where inv_no=$in");
					$sql3 = "SELECT inv_no,item_id,item_name,unitprice,qty,total_price FROM bill2 WHERE inv_no = $in ";
					$result3 = mysqli_query($conn,$sql3);
					//$rows = mysqli_fetch_assoc($result3);
					//$count=mysqli_num_rows($result3);
					while($rows=mysqli_fetch_assoc($result3))
					{
						$inv_no=$rows['inv_no'];
						$item_id=$rows['item_id'];
						$item_name=$rows['item_name'];
						$unitprice=$rows['unitprice'];
						$qty=$rows['qty'];
						$total_price=$rows['total_price'];
						$sql4 = "INSERT INTO cbill2 (inv_no,item_id,item_name,unitprice,qty,total_price) VALUES ($inv_no,'$item_id','$item_name','$unitprice',$qty,'$total_price') ";
						$result4 = mysqli_query($conn,$sql4);
					}
					$res1 = mysqli_query($conn,"delete from bill2 where inv_no=$in");
					if($res1)
					{
						?>
								<script>
								alert("bill cancelled successfully...");
								</script>
								<script>
								window.location="salesman.php";
								</script>
								
						<?php
					}
				}
				else
				{
					?>
								<script>
								alert("invoice no not found...");
								</script>
					<?php
				}

				 
		}
		?>
</body>
</html>