<?php
	include_once 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <!-- External Style CSS-->
 <link rel="stylesheet" type="text/css" href="CSS/style.css">

<title>Multiple Insert, Update, Delete</title>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/js-script.js" type="text/javascript"></script>
</head>

<body style="background-image: url(media/beach.jpg); background-position:top center; background-repeat: no-repeat; background-size: cover;">
	<section>
		
			


<div class="container">
<div class="row">
<div class="col-md-5"></div>
<div class="col-md-2">
<button class="btn btn-info" style="margin-top:20px;"><a style="color:#FFF;text-decoration:none;" href="generate.php">&nbsp; Add Records</a></button>
</div>
<div class="col-md-5"></div>
</div>
</div>
<form method="post" name="frm">
<table border="1" style="border:5px solid gray;">

<tr>
<th id="bg"><h4>Select</h4></th>
<th id="bg"><h4>FirstName</h4></th>
<th id="bg"><h4>LastName</h4></th>
<th id="bg"><h4>Email</h4></th>
<th id="bg"><h4>Phone&nbsp;No.</h4></th>
</tr>
<?php
    $zero ="0";
	$res = $MySQLiconn->query("SELECT * FROM users");
	$count = $res->num_rows;

	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input style="margin-left:25%;" type="checkbox" name="chk[]" class="chk-box form-control" value="<?php echo $row['id']; ?>"  /></td>
			<td id="bgtd"><?php echo $row['first_name']; ?></td>
			<td id="bgtd"><?php echo $row['last_name']; ?></td>
			<td id="bgtd"><?php echo $row['email']; ?></td>
			<td id="bgtd"><?php echo $zero.$row['phone']; ?></td>
			</tr>
			<?php
		}	
	}
	else
	{
		?>
        <tr>
        <td colspan="5" style="text-align:center;color:blue;font-family:monoscape;font-size:25px"> No Records Found ...</td>
        </tr>
        <?php
	}
?>

<?php

if($count > 0)
{
	?>
	<tr>
    <td colspan="1">
    <label style=""><input style="margin-left:100%;" id="check" type="checkbox" class="select-all form-control"></label>
    <label for="check" style="margin-left:4px; font-size:20px;">All</label>
    
    </td> 
    
    <td colspan="2">    
        <label for="edit"style="margin-left:40%;">
        <span onClick="edit_records();"><img src="media/edit.png" onClick="edit_records();" alt="edit" id="edit"/>Edit</span>
        </label>
    
    </td>
    
    <td colspan="2">
       <label for="delete" style="margin-left:40%">
        <span onClick="delete_records();"><img src="media/delete.png" onClick="delete_records();" alt="delete" id="delete"/>Delete</span>
        </label>
    
    </td>
    </tr>
    <?php
}

?>

</table>
</form>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
    
</section>
</body>
</html>