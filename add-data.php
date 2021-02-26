<?php
error_reporting(0);
include_once 'dbcon.php';

if(isset($_POST['save_mul']))
{		
	$total = $_POST['total'];
		
	for($i=1; $i<=$total; $i++)
	{
		$fn = $_POST["fname$i"];
		$ln = $_POST["lname$i"];		
		$em = $_POST["email$i"];		
		$ph = $_POST["phone$i"];		
		$sql="INSERT INTO users(first_name,last_name,email,phone) VALUES('".$fn."','".$ln."','".$em."','".$ph."')";
		$sql = $MySQLiconn->query($sql);		
	}
	
	if($sql)
	{
		?>
        <script>
		alert('<?php echo $total." records was inserted !!!"; ?>');
		window.location.href='index.php';
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert('error while inserting , TRY AGAIN');
		</script>
        <?php
	}
}
?>
<!DOCTYPE html>
<html>

<head>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Multiple Insert, Update, Delete</title>
    
    <link rel="stylesheet" href="CSS/newstyle.css">
    <script src="jquery.js" type="text/javascript"></script>
    <script src="js-script.js" type="text/javascript"></script>
</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-5"></div>
<div class="col-md-2">
<button class="btn btn-info" style="margin-top:20px;"><a style="color:#FFF;text-decoration:none;" href="generate.php">&nbsp; Add Records</a></button>
</div>
<div class="col-md-5"></div>
</div>
</div>
<br />

<div>
<?php
if(isset($_POST['btn-gen-form']))
{
	?>
   <div class="container">
       <div class="row">
           <div class="col-md-1"></div>
           <div class="col-md-10">
    <form method="post">
    <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" />
	<table border="1" id="table_add" class="table table-striped table-dark" style="border:5px solid gray;">
    
    <tr>
    <th id="thr" style="">ID</th>
    <th id="th_02">First Name</th>
    <th id="th_02">Last Name</th>
    <th id="th_02">Email</th>
    <th id="th_02">Phone&nbsp;No.</th>
    </tr>
	<?php
	for($i=1; $i<=$_POST["no_of_rec"]; $i++) 
	{
		?>
       <!-- Input Values Design goes here.... -->
        <tr>
        <td id="id_01"><?php echo $i; ?></td>
        <td><input type="text" name="fname<?php echo $i; ?>" placeholder="first name" class="form-control" /></td>
       
        <td><input type="text" name="lname<?php echo $i; ?>" placeholder="last name" class="form-control" /></td>
        
        <td><input type="text" name="email<?php echo $i; ?>" placeholder="email" class="form-control" /></td>
        
        <td><input type="text" pattern="[0-9]+" maxlength="11" name="phone<?php echo $i; ?>" placeholder="phone number" class="form-control" /></td>
        </tr>
        <?php
	}
	?>
    <tr>

    <td colspan="1"></td>
    <td colspan="1" style="border-left:hidden;border-right:hidden;">
    
    <button type="submit" class="btn btn-info" name="save_mul">&nbsp; Insert all Records</button> 
    </td>
    
    <td colspan="3">
    <button class="btn btn-info"><a style="color:#FFF;" href="index.php">&nbsp; Back to index</a></button>
    
    </td>
    </tr>
    </table>
    </form>
    
    </div>
           <div class="col-md-1"></div>
       </div>
   </div>
	<?php
}
?>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>