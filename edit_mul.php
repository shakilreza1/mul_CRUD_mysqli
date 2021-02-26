<?php
	
	error_reporting(0);

	include_once 'dbcon.php';

	if(isset($_POST['chk'])=="")
	{
?>
    <script>
        alert('At least one checkbox Must be Selected !!!');
        window.location.href = 'index.php';
    </script>
    <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);
	
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

        <body style="background-image: url(media/wallpaper3.jpg); background-position:top center; background-repeat: no-repeat; background-size: cover;">

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

                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <form method="post" action="update_mul.php">
                                <table id="table_add" border="1" class="table table-striped table-dark" style="border:5px solid gray;">
                                    <tr>
                                        <th id="th_02">First Name</th>
                                        <th id="th_02">Last Name</th>
                                        <th id="th_02">Email</th>
                                        <th id="th_02">Phone&nbsp;No.</th>
                                    </tr>
                                    <?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];			
	$res=$MySQLiconn->query("SELECT * FROM users WHERE id=".$id);
	while($row=$res->fetch_array())
	{
		?>
                                        <tr>
                                            <td>
                                                <input type="hidden" name="id[]" value="<?php echo $row['id'];?>" />
                                                <input type="text" name="fn[]" value="<?php echo $row['first_name'];?>" class="form-control" />
                                            </td>
                                            <td>
                                                <input type="text" name="ln[]" value="<?php echo $row['last_name'];?>" class="form-control" />
                                            </td>
                                            
                                            <td>
                                                <input type="text" name="em[]" value="<?php echo $row['email'];?>" class="form-control" />
                                            </td>
                                            
                                            <td>
                                                <input type="text" name="ph[]" value="<?php echo $row['phone'];?>" class="form-control" />
                                            </td>
                                        </tr>
                                        <?php	
	}			
}
?>
                                            <tr>
                                                <td colspan="4">
                                                    <button type="submit" class="btn btn-info" name="savemul" &nbsp;> Update all</button>&nbsp;
                                                    <button class="btn btn-info"><a style="text-decoration:none;color:#FFF;" href="index.php">&nbsp; cancel</a></button>
                                                </td>
                                            </tr>
                                </table>
                            </form>

                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body>

        </html>