<html>
<head>
	<meta charater="utf-8">
	<title>update_item
	</title>
</head>
<body background="i7.jpg">
	<div id="upper" align=center>
		<h2 style="font-size:300%;">UPDATE ITEM </h2>
	</div>
<div>
 <form method="post" >
    <pre style="width:300px;
	height:50px;font-size:20px; margin-top:5%;  margin-left:470">
    ITEM NAME:<input type="text" name="iname" size="50" placeholder="ITEM NAME" required="true" style=
	"border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">
    NEW PRICE:<input type="text" name="pr" size="50" placeholder="PRICE" required="true" style=
	"border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">

	
	<input type="submit" value="UPDATE" name="submit" style="width:25%;
	height:45px;pa:2px;
	color:black;
	margin-top:3%;  margin-lefT:40%;">
	<marquee ><a href="item.php" style="text-decoration:none">Return to item page</a></marquee>
</pre>

    </form>


<?php
 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db="rj";
		$conn=mysqli_connect($servername,$username,$password,$db);
		if(isset($_POST['submit']))
		{	
				$itemname = $_POST['iname'];
				$unitprice = $_POST['pr'];
				//$qty = $_POST['qty']; 
				$sql = "SELECT item_id FROM item WHERE itemname = '$itemname' ";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($result,MYSQLI_NUM);
				$count = mysqli_num_rows($result);
				if($count == 1)
					{
						$sql3 = "UPDATE item
							set unitprice = '$unitprice'
							where itemname = '$itemname' ";
						$data3 = mysqli_query($conn,$sql3);
						if($data3) 
							{
								?>
									<script>
										alert("item's price updated successfully...");
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
						alert("item not present");
						</script>
						<?php
						}
					
			
			
		}
?>
</body>
</html>