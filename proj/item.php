<html>
<head>
	<meta charater="utf-8">
	<title>item_list
	</title>
</head>
<body background="i7.jpg">
	<div id="upper" align=center>
	<br>
	<br>
	<br><hr style="width:99%;">
			<pre><p style="font-size:20px; margin-top:0.01%;margin-left:55%"><a href="login.php" style="text-decoration:none">LOG OUT </a>  <a href="newpass.php" style="text-decoration:none">CHANGE PASSWORD</a></p><br>
			</pre>
		<h3 style="font-size:300%;">ITEM LIST </h3>
	</div>

	<div  style="background-color:white; width:20%; height:8%; margin-left:40%;"align=center>	<p style="font-size:30px; margin-top:0.01%;"><a href="sitem.php" style="text-decoration:none"> SEARCH ITEM </a></p></div>
		<div style="background-color:white; width:20%; height:8%;margin-top:2%; margin-left:40%;" align=center><p style="font-size:30px; margin-top:0.01%;"><a href="aitem.php" style="text-decoration:none"> ADD ITEM</a></p></div>
		 <style>
/* Style The Dropdown Button */
.dropbtn {
    background-color: white;
    color: #161669;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: white;
}</style>
<form method="post" action="u2.php">
<div style="margin-left:40%; margin-top:2%;"align=center class="dropdown">
  <button class="dropbtn" style="font-size:174%" name="a2">UPDATE ITEM TYPE</button>
  <div class="dropdown-content">
  
    <input type="submit" style="border-width:0px;color:black;background-color: Transparent;" value="Electronics" name="a1"/></option><br>
   <input type="submit" style="border-width:0px;color:black;background-color: Transparent;" value="Lifestyle"name="a1"/> <br>
       <input type="submit" style="border-width:0px;color:black;background-color: Transparent;"value="Home and Furniture"name="a1"/><br>
	   <input type="submit" style="border-width:0px;color:black;background-color: Transparent;"value="Tv and Appliances"name="a1"/><br>
	  <input type="submit" style="border-width:0px;color:black;background-color: Transparent;"value="Books"name="a1"/><br>
	   <input type="submit" style="border-width:0px;color:black;background-color: Transparent;"value="Vehicles"name="a1"/>
	  	 </form>
  </div>
</div>
	<form method="post" action="d2.php">
<div style="margin-left:40%"align=center class="dropdown">
  <button class="dropbtn" style="font-size:174%" name="a3">DELETE FROM TYPE</button>
  <div class="dropdown-content">
  
    <input type="submit" style="border-width:0px;color:black;background-color: Transparent;" value="Electronics" name="a4"/></option><br>
   <input type="submit" style="border-width:0px;color:black;background-color: Transparent;" value="Lifestyle"name="a4"/> <br>
       <input type="submit" style="border-width:0px;color:black;background-color: Transparent;"value="Home and Furniture"name="a4"/><br>
	   <input type="submit" style="border-width:0px;color:black;background-color: Transparent;"value="Tv and Appliances"name="a4"/><br>
	  <input type="submit" style="border-width:0px;color:black;background-color: Transparent;"value="Books"name="a4"/><br>
	   <input type="submit" style="border-width:0px;color:black;background-color: Transparent;"value="Vehicles"name="a4"/>
	  	 </form>
  </div>
</div>

	</div>
</body>
</html>