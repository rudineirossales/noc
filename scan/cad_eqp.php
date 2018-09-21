

<!DOCTYPE html>
<html lang="en">
<head>

<!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">


 <script src="../jquery-min.js"></script>
 <script src="../jquery-ui.js"></script>
 <script src="../jquery-ui.min.js"></script>
<script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->



<?php

include "../coon.php";

ini_set('display_errors', 0 );
error_reporting(0);


session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}


?>





<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='index.html'",3000);
  
  
}
</script>



<link rel="icon" href="img/logo_oi.png">
  

 <title>CONTROLE DE EQP</title>
  <link rel="icon" href="img/logo_oi.png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </script>
  <style>


  
 #voltar
 {

float:right;

 }
 
 body
 {
   
     background:white;
   
 }

 
  #teste{background:white;padding:1%; border: solid 2px black;margin-top: 0%; }
  
  
    .btn
    {

      background: #24DCF2;
    }
    .btn:hover
    {

      background: #7BEB1C;
      color:black;
    }

    #edit
    {
       background: #F47315;
       


    }

    #edit:hover
    {

     background: #F4BE0D;


    }

    #carga
    {

    color:black;
    background: #EF8821;

    }
     #carga:hover
    {

    color:black;
    background: #E93F11;

    }
    #logout
    {

      background: white;
    }
    ;
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



<div class="container">

  <div class="row content">


   
    <div class="col-sm-8  col-md-offset-2" id="teste" style="margin-top:6%;">
  <form role="form" name="seachform" method="post" action="cadastro.php " >


  <div class="form-group" >

 
 <a href="http://zxing.appspot.com/scan?ret=http://192.168.43.31/scan/cad_eqp.php?codigo={CODE}" class="btn btn-default" role="button" id="carga">


 <?php $cod = $_GET['codigo']; ?> <span class="glyphicon glyphicon-barcode btn-lg"></span>

  </a>
<br><br>
    <label for="email">N° série : </label><br>
   
    <input type="text"  class="form-control" name="serie"   id="serie" required   >
   
       <div class="form-group">
    <label for="email">Descrição: </label>
  <textarea class="form-control" rows="5" id="obs" name="obs" maxlength="1000" placeholder="Máximo 1000 caracteres"></textarea>
    </div>




    
  </div>
  <button type="submit" value="Cadastror" class="btn btn-default"> <strong>Cadastro</strong> </button>
  
  
  
</form>


  
  </div>
 
</div>
<footer class="container-fluid " style="color:black; ">
  <p style="text-align:center;">Desenvolvido por Rudinei Rossales  </p>
</footer>





</body>
</html>

