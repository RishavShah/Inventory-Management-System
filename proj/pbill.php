
<html >
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<title> cancel_Invoice</title>
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>
	<script> function clearContents(element) {
			element.value = '';
	}</script>
</head>

<body>

	<div id="page-wrap">

		<textarea id="header"> CANCELLATION INVOICE</textarea>
		
		<div id="identity">
		
            <textarea readonly id="address">Rishav Shah
											123 Blackbourn Street
											kolkata,India 53719

											Phone: (555) 555-5555</textarea>

           
		
		</div>
		<form method="post" >
		<div style="clear:both"></div>
		
		<div id="customer">

            <textarea name="c1" id="customer-title"></textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea name="c2" ></textarea></td>
                </tr>
				<tr>
					<td class="meta-head">salesman</td>
					<td><textarea id="sales" name="c13"></textarea></td>
				</tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date" name ="c3"></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td ><textarea readonly name ="c4" class="due" >$ 0.00</textarea></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item_Id</th>
		      <th>Item_Name</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea name="c5[]"></textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea name ="c6[]"></textarea></td>
		      <td><textarea  class="cost" name ="c7[]"></textarea></td>
		      <td><textarea class="qty" name ="c8[]"></textarea></td>
		      <td><textarea readonly class="price" name ="c9[]"></textarea></td>
		  </tr>
		  
		  
		  
		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;"  title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><textarea readonly name="c10" id="subtotal">$ 0.00</textarea></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><textarea readonly name="c11" id="total">$ 0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Returned</td>

		      <td class="total-value"><textarea onfocus="clearContents(this)" name ="c12" id="paid">$ 0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><textarea readonly name ="c4" class="due"> $0.00</textarea></td>
		  </tr>
		
		</table>
		
		
		<input type="submit" value="PRINT" name="submit" style="width:20%;
					height:40px;pa:2px;
					color:black;
					margin-top:3%;  margin-left:40%;">
	
		
	
	</div>
</form>
	
<?php
 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db="rj";
		$conn=mysqli_connect($servername,$username,$password,$db);

		if(isset($_POST['submit']))
		{	
				$i1 = $_POST['c1'];
				$i2 = $_POST['c2'];
				$i3 = $_POST['c3'];
				$i4 = $_POST['c4'];
				$i5 = $_POST['c5'];
				$i6 = $_POST['c6'];
				$i7 = $_POST['c7'];
				$i8 = $_POST['c8'];
				$i9 = $_POST['c9'];
				$i10 = $_POST['c10'];
				$i11 = $_POST['c11'];
				$i12 = $_POST['c12'];
				$i13 = $_POST['c13'];
				$sql = "INSERT INTO citem1 (inv_no,customer,amt_total,amt_ret,amt_due,sp) VALUES ($i2,'$i1','$i11','$i12','$i4','$i13') " ;
				$data = mysqli_query($conn,$sql);
				for($x = 0; $x < count($i5); $x++)
				{	
						$sql2 = "INSERT INTO citem2 (inv_no,item_id,item_name,unitprice,qty,total_price) VALUES ($i2,'$i5[$x]','$i6[$x]','$i7[$x]',$i8[$x],'$i9[$x]')";
						$data2 = mysqli_query($conn,$sql2);
						$sql3 = "SELECT * FROM item WHERE item_id = '$i5[$x]' ";
						$result3 = mysqli_query($conn,$sql3);
						//echo $result3;
						//$row = mysqli_fetch_array($result3,MYSQLI_NUM);
						$count=mysqli_num_rows($result3);
						echo $count;
						if($count == 1)
						{
								$sql4 = "UPDATE item
									set qty = qty + $i8[$x]
									where item_id = '$i5[$x]' ";
								$data4 = mysqli_query($conn,$sql4);
						}
						else
						{
								$sql5 = "INSERT INTO item (item_id,itemname,unitprice,qty) VALUES ('$i5[$x]','$i6[$x]','$i7[$x]',$i8[$x])";
								$data5 = mysqli_query($conn,$sql5);
								
						}
				}
				
		}
			
?>
</body>
</html>