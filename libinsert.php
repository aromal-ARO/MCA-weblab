<html>
<body>
<?php
require('connect.php');
if(isset($_POST['sub']))
{
$n1=$_POST['Bookname'];
$n2=$_POST['author'];
$n3=$_POST['publisher'];
$n4=$_POST['quantity'];
$n5=$_POST['price'];
$sql="insert into library(Bookname,author,publisher,quantity,price)values('$n1','$n2','$n3','$n4','$n5')";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "New records successfully created";
}
mysqli_close($conn);
}
else
{
?>
<form align="center" method="POST" action="">
<fieldset>
	<h1><u>BOOK MANAGEMENT SYSTEM</u></h1>
	
	<label>Book Name:</label>
	<input type="text" name="Bookname" <br><br>

	<label>author:</label>
	<input type="text" name="author" ><br><br>

	<label>publisher:</label>
	<input type="text" name="publisher" ><br><br>

	<label>no of quantity:</label>
	<input type="text" name="quantity" ><br><br>
	
	<label>Price:</label>
	<input type="text" name="price"><br><br>

	<input type="submit" name="sub" value="Submit">
	
</fieldset>
<?php
}
?>
</form>
</body>
</html>