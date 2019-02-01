<?php
include 'dbcon.php';
session_start();
$kid=$_GET['e_id'];
$res=mysqli_query($con,"SELECT * FROM `table1` WHERE `id`='$kid'");
		while($row=mysqli_fetch_array($res))
		{ 
?><br><center><h1>EDIT</h1>
		<html>
		<table border="15" style="width:20%">
		<form action="#" method="post">
		<tr><td><b>Name:</b></td>
	<td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
</tr>
<tr><td><b>Address:</b></td>
	<td><input type="text" name="add" value="<?php echo $row['address'];?>"></td>
</tr>
<tr><td><b>Phone:</b></td>
	<td><input type="text" name="ph" value="<?php echo $row['phone1'];?>"></td>
</tr>
</table>
<input type="submit" name="submit">
</html>
<?php
if(isset($_POST["submit"]))
{
	$n=$_POST["name"];
	$a=$_POST["add"];
	$p=$_POST["ph"];
	$sql=mysqli_query($con,"UPDATE `table1` SET `name`='$n',`address`='$a',`phone1`='$p' WHERE `id`='$kid'");
	
		header("Location:add.php");
}

	?>

		<?php }?>
		