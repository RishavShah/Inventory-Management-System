<html>
<head>
<style>
body {
    background-image: url("pics/menu.jpg");
	background-size: 1450px 700px;
    background-repeat: no-repeat;
}
header {
    color: #7B3F00;	background-color: #E9D66B;
    text-align: center;
	font-family: "Comic Sans MS", cursive, sans-serif;
	font-size:20px;	font-weight: bold;
	padding: 0.02px;	border: 2px solid #7B3F00;
}
#img1{
		margin-left:80%;
	height:14%;	width:15%;	margin:1%;
}
label{
	color:black;	font-size:20px;	font-weight: bold;
}
input[type=text] input[type=password] {
    width: 10%; padding: 4px 4px;
    margin: 3px 0;	display: inline-block;	border: 1px solid #ccc;
}
input[type=submit] {
    background-color:  #98777B; color: white;
	font-weight: bold;	padding: 5px 5px;
    margin: 2px 0; border: none;
    cursor: pointer;	width: 10%;
	margin-left:80%;
}
div{
	 background-color:#FFFFF0	;
    width: 97%;	border: 2px solid #7B3F00; padding: 1%;
}
table {
    border:1% solid black; width: 50%;
}
th, td {text-align: left;    padding: 8px;}
tr:nth-child(even){background-color: #f1f1f1}
tr:nth-child(odd){background-color: #f9f9f9}
th {
    background-color: #7B3F00;    color: white;}
</style>
</head>
<body>
<header>
	<a href="hotel.php"><img id="img1" src="pics/icon.png"></a>
   <h1>AJH HOTELS</h1>
</header>
<form method="post">
	<div>
   
	<input type="submit" name="submit" value="ORDER">
	</div>
 </form>
 <?php
 
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "rj"; //ur database name
			$conn=mysqli_connect($servername,$username,$password,$db);
			if(isset($_POST['submit']))
			{	
					
					$sql1= "SELECT * from item ";
					$data1 = mysqli_query($conn,$sql1);
					$count=mysqli_num_rows($data1);
					$item=array();
					$price=array();
					$i=0;
					if($count>0)
					{?>
						<table style="">
						  <tr>
							<th>Course</th>
							<th>Price(INR)</th>
						  </tr>
						  <?php
									while($rows=mysqli_fetch_assoc($data1))
									{
											
											$item[$i]=$rows['item_id']; 
											$price[$i]=$rows['unitprice'];
											$i=$i+1;
											?>
													
													<tr>
													<td><input style="border-width:0px;color:black;background-color: Transparent;" type="text" value="<?php echo $rows['item_id']; ?>" name="submit" id="pid" /> </td>
													<td><input style="border-width:0px;color:black;background-color: Transparent;" type="text" value="<?php echo $rows['unitprice']; ?>" name="submit2" id="pid2" />  </td>
													
													</tr>
													
											
											<?php
									}
		
							?>
							</table>
							<?php
					}
					
			}
					

	?>
	
			

</body>
</html>

