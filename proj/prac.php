<html>  
      <head>  
           <title>Invoice Test</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

			<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="product_name[]" placeholder="Product Name" class="form-control name_list" /></td><td><input type="text" name="qty[]" placeholder="QTY" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
	  });  
 </script> 
      </head>  
      <body>  
           <div class="container">  
                <br />  
                <br />  
                <h2 align="center">Invoice Test</h2>  
                <div class="form-group">  
                     <form name="submit" id="submit"  method="post">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="product_name[]" placeholder="Product Name" class="form-control name_list" /></td>  
                                         <td><input type="text" name="qty[]" placeholder="QTY" class="form-control name_list" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                               <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                          </div>  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  
 
 <?php
 
$servername = "localhost";
$username = "root";
$password = "";
$db="rj";

// Create connection
$conn=mysqli_connect($servername,$username,$password,$db);
if(isset($_POST['submit']))
{$itemid1 = $_POST['product_name'];
$itemid2 = $_POST['qty'];


  $arrayWithTotals  = array_combine($itemid1, $itemid2);

foreach($arrayWithTotals as $itemid1 => $itemid2) {
  echo $itemid1;
echo $itemid2 ;
}
}


?>