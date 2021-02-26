<!DOCTYPE html>
<html>

<head>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <!-- External Style CSS-->
 
 <style type="text/css">
     body{
        background-image: url(media/wallpaper7.jpg);
        background-position:top center;
        background-repeat: no-repeat;
        background-size: cover;

     }
     form{
        margin-top:0;
     }
     h5{
        color:brown;
         text-align:center;
     }
     #button{
         margin-top:30px;
         margin-left:30%;
     }
     #inputbox{
         margin-top:20px;
     }
     .viewdata{
        margin-top:15%;
         margin-left:10%;
     }
     .overlay{
        background-color:rgba(100,100,100,0.4);
        height:100%;
        width:auto;
        padding-bottom:338px;
     }
</style>

<title>Multiple Insert, Update, Delete</title>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/js-script.js" type="text/javascript"></script>
</head>

<body>
<div class="overlay">
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 viewdata">
            <buttton class="btn btn-info"><a style="text-decoration:none;color:#FFF;" href="index.php"> &nbsp; View Data</a></buttton>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

    <br />

<div class="container">
    <div class="row">
      <div class="col-md-3"></div>
       <div class="col-md-6">
        <form method="post" action="add-data.php">

            <h5>Enter how many records you want to insert</h5>

            <input id="inputbox" type="text" name="no_of_rec" placeholder="Enter number" maxlength="2" pattern="[0-9]+" class="form-control" required />
            
            <div id="button">
                <button type="submit" name="btn-gen-form" class="btn btn-info"> &nbsp; Generate</button>
                <button class="btn btn-info"><a style="text-decoration:none;color:#FFF;" href="index.php">Back To Index</a></button>
            </div>

        </form>
        <div class="col-md-3"></div>
        </div>
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