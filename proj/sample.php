<?php 
$il="";
	if(isset($_POST['submit']))
	{	
		$il = $_POST['c12'];
		echo $il;
		
	}
?>
<html>
<body>

<form action="sample.php" method="POST">
<table>
<tr>
<td>
<input type="text" style="editable" value="aaaa" name ="c12" id="paid"></td>
</tr>
</table>
<input type="submit" value="PRINT" name="submit" style="width:20%;
					height:40px;pa:2px;
					color:black;
					margin-top:3%;  margin-left:40%;">
					</form>

</body>
</html>
