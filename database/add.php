
<center><a href="1.php">ADD</a>
<html>
<table border=20 >
<tr>
<td><p>Id</p></td>
<td><p>Name</p></td>
<td><p>Address</p></td>
<td><p>Phone</p></td>
<td><p>Edit</p></td>
<td><p>Delete</p></td>
</tr>
<?php
include 'dbcon.php';
$res=mysqli_query($con,"SELECT * FROM `table1`");
while($row=mysqli_fetch_array($res))
{
	?><tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['phone1'];?></td>
	<td><a href="edit.php?e_id=<?php echo $row['id'];?>">Edit</a></td>
	<td><a href="delete.php?d_id=<?php echo $row['id'];?>">Delete</a></td>
	</tr>
	
<?php }?>

</table>