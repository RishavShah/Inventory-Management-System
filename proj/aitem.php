<?php
 
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db="rj";
			$conn=mysqli_connect($servername,$username,$password,$db);
			session_start();
			if(isset($_POST['submit']))
			{		
					$itemname = $_POST['iname'];
					$unitprice = $_POST['pr'];
					$qty = $_POST['qty']; 
					$dob = $_POST['dd'];
					$type = $_POST['type'];
					//echo $type;
					$sql = "SELECT * FROM item WHERE itemname = '$itemname' ";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
					$count = mysqli_num_rows($result);
					if($count == 0) 
					{
							if($type=='Electronics')
							{
								$_SESSION["elec"]=$_SESSION["elec"]+1;
								//echo $_SESSION["elec"];
								$v='E'.$_SESSION["elec"];
								//echo $v;
							}
							else if($type=='Lifestyle')
								{
								$_SESSION["life"]++;
								//echo $_SESSION["elec"];
								$v='L'.$_SESSION["life"];
								//echo $v;
							}
							else if($type=='Home and Furniture')
								{
								$_SESSION["home"]++;
								//echo $_SESSION["home"];
								$v='H'.$_SESSION["home"];
								//echo $v;
							}
							else if($type=='Tv and Appliances')
								{
								$_SESSION["tv"]++;
								//echo $_SESSION["elec"];
								$v='T'.$_SESSION["tv"];
								//echo $v;
							}
							else if($type=='Book')
								{
								$_SESSION["book"]++;
								//echo $_SESSION["elec"];
								$v='B'.$_SESSION["book"];
								//echo $v;
							}
							else if($type=='Vehicles')
								{
								$_SESSION["veh"]++;
								//echo $_SESSION["elec"];
								$v='V'.$_SESSION["veh"];
								//echo $v;
							}
							$sql2 = "INSERT INTO item (item_id,itemname,unitprice,qty,type,dop) VALUES ('$v','$itemname','$unitprice',$qty,'$type','$dob')";
							$data2 = mysqli_query($conn,$sql2);
							if($data2) 
							{
								?>
									<script>
									alert("items entered successfully...");
									</script>
									<script>
									window.location="item.php";
									</script>
									<?php
								
							}
					}
					else
					{
						$sql3 = "UPDATE item
								set qty = qty + $qty
								where item_id = '$itemid' ";
						$data3 = mysqli_query($conn,$sql3);
						if($data3) 
							{
								?>
									<script>
									alert("items entered successfully...");
									</script>
									<script>
									window.location="item.php";
									</script>
									
								<?php
							}
					}

				
				
			}
	?>
<html>
<head>
	<meta charater="utf-8">
	<title>add_item
	</title>
</head>
<body background="i7.jpg">
	<div id="upper" align=center>
		<h2 style="font-size:300%;">ADD NEW ITEM </h2>
	</div>
<div>
 <form method="post" name="form">
    <pre style="width:300px;
	height:50px;font-size:20px; margin-top:5%;  margin-left:470">
    ITEM NAME:<input type="text" name="iname" size="50" placeholder="ITEM NAME" required="true" style=
	"border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">
    UNIT PRICE:<input type="text" name="pr" size="50" placeholder="PRICE" required="true" style=
	"border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">
    QUANTITY:<input type="text" name="qty" size="50" placeholder="QUANTITY" required="true" style=
	"border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">
    TYPE:<select name="type"style="border-radius:5px;width:300px;	height:50px;	padding:2px;	border:3px solid black;margin-top:5%;  margin-left:5%;	font-size:20px;">
		<option value="Electronics">Electronics</option>
		<option value="Lifestyle">Lifestyle</option>
		<option value="Home and Furniture">Home and Furniture</option>
		<option value="Tv and Appliances">tv and appliances</option>
		<option value="Book">Books</option>
		<option value="Vehicles">Vehicles</option>
		</select>
    DATE OF PURCHASE:<input type="date"  name="dd" size="50" required="true" style="border-radius:5px;
	width:300px;
	height:50px;
	padding:2px;
	border:3px solid black;margin-top:5%;  margin-left:10%;
	font-size:20px;">
	<input type="submit" value="ADD"  name="submit" style="width:40%;
	height:40px;pa:2px;
	color:black;
	margin-top:13%;  margin-left:40%;">
	<marquee width=100%><a href="item.php" style="text-decoration:none">Return to previous page</a></marquee>
</pre>

 </form>


</body>
</html>