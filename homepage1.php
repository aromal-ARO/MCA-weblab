<html>
<head>
<style>
body
{
	background-image:url("lib.jpg");
	background-repeat:no repeat;
	background-position:center;
	background-size:cover;
}
h1
{

color:white;
text-align:center;
background-color:blue;
{
form
{
	padding-left:25%;
}
label
{
	background-color:floralwhite;
}
</style>
<body>
<?php
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['pass'];
	if($username=="Admin" AND $password=="pass")
	{
		header('location:homepage2.html');
	}
	else
	{
	 header('location:'login.html');
	}
}
>?
<center>
<h1><b><big> LIBRARY MANAGEMENT SYSTEM</big></b></h1>

<form method="POST">
<label><b>USERNAME</b></label>
<input type="text" name="username"><br><br>
<label><b> PASSWORD </b></label>
<input type="password" name="pass"><br><br>
<input type="submit" name="submit" value="LOGIN"
</form>
</center>
</body>
</html>
