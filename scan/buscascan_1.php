


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="img/logo_oi.png">
	
<?php

include "../coon.php";
session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: ../index.html");
  exit;
  
  
}


ini_set('display_errors', 0 );
error_reporting(0);
?>

<!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">


 <script src="../jquery-min.js"></script>
 <script src="../jquery-ui.js"></script>
 <script src="../jquery-ui.min.js"></script>
<script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
  <title>scanner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  
 
 
 body
 {
	 
     background:white;
	 
 }

 
  #teste{background:white;padding:5%; border: solid 2px black;margin-top: 14%; }
  
  
    .btn
    {

      background: green;
    }
    .btn:hover
    {

      background: #7BEB1C;
      color:black;
    }
  </style>
</head>
<body>
  <p  style="font-size: 12px;"><i><strong>© Copyright Serede S/A Desenvolvimento Rudinei Rossales  </strong></i></p>
<div class="navbar navbar-inverse navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#"> <?php echo $_SESSION["nome"]?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
              
         
         <li class="active"><a href="../dashboard.php">Voltar</a></li>
      <li class="active"><a href="../Logout.php">Logout</a></li>

                </ul>
            </div>

        </div>
    </div>



<div class="container text-center">
  <div class="row content">
   
    <div class="col-sm-3 text-center col-md-offset-4" id="teste" >
	<form role="form" name="seachform" method="post" action="buscascan.php " >
  <div class="form-group" >
   <a href="http://zxing.appspot.com/scan?ret=http://192.168.43.31/scan/buscascan_1.php?codigo={CODE}" class="btn btn-default" role="button" id="carga">


 <?php $cod = $_GET['codigo']; ?> <span class="glyphicon glyphicon-barcode btn-lg"></span>

  </a>
<br><br>
    <label for="email">N° série : </label><br>
   
    <input type="text"  class="form-control" name="serie" value="<?php echo $cod ?>"  id="serie" required>
    
  </div>
  <button type="submit" value="Buscar" class="btn btn-default">Buscar</button>
   
  
</form>


  
  </div>
</div>




</body>
</html>

