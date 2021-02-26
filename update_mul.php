<?php
include_once 'dbcon.php';
$id = $_POST['id'];
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$em = $_POST['em'];
$ph = $_POST['ph'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE users SET first_name='$fn[$i]', last_name='$ln[$i]', email='$em[$i]', phone='$ph[$i]' WHERE id=".$id[$i]);
}
header("Location: index.php");
?>