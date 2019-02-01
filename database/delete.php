<?php
include 'dbcon.php';
$id=$_GET['d_id'];
mysqli_query($con,"DELETE FROM `table1` WHERE `id`='$id'");
header("Location:add.php");
?>