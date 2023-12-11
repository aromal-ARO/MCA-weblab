<html>
<body>
<?php
require('connect.php');
$sql="select * from library";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo"bookname : ".$row["Bookname"]."<br>";
		echo"author : ".$row["author"]."<br>";
		echo"publisher : ".$row["publisher"]."<br>";
		echo"quantity : ".$row["quantity"]."<br>";
		echo"price : ".$row["price"]."<br><br>";
	}
}
else
{
echo"failed";
}
mysqli_close($conn);
?>
</body>
</html>

