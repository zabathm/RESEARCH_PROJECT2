<html>
<body><center>
<h1>Enter Details</h1>
<form action="#" method="post"><center>
<table border=15 width=%20>
<tr><td>
Name:<input type="text" name="name"></td></tr>
<tr><td>Address:<input type="text" name="add"></td></tr>
<td>Phone:<input type="number" name="ph"><br><br></td></tr></table>
<input type="submit" name="submit">
</form>

<?php
include 'dbcon.php';
if(isset($_POST["submit"]))
{
	$n=$_POST["name"];
	$a=$_POST["add"];
	$p=$_POST["ph"];
	$sql="INSERT INTO `table1`( `name`, `address`, `phone1`) VALUES ('$n','$a','$p')";
	$result=mysqli_query($con,$sql);
	header("Location:add.php");
}
?>
</html>