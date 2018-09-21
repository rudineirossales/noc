<?php
include "../coon.php";
session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: ../index.html");
  exit;
  
  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="img/logo_oi.png">
	<!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">


 <script src="../jquery-min.js"></script>
 <script src="../jquery-ui.js"></script>
 <script src="../jquery-ui.min.js"></script>
<script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->

  <title>SCANNER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  
 #painel
 {

margin-top: 10%;

 }
 


 
  #teste{background:white;padding:5%; border: solid 2px black;margin-top: 14%; }
  
  
  </style>
</head>
<body>

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
 <?php

$buscascan=$_POST['serie'];
$sql = mysql_query ("select * from cadastro where serial = '".$buscascan."'");
$row = mysql_num_rows($sql);
if ($row > 0)
{
	while ($linha = mysql_fetch_array($sql)){
		
		$serial = $linha['serial'];
		
		
		$data = $linha['data'];
		$descricao =  $linha['descricao'];
	
		
		

		
		
		
	}
	
	
	
	
}





?>

<div  class="panel-group " id="painel">
    

    <div class="panel panel-primary col-md-4 col-md-offset-4 text-left">
      <div class="panel-heading text-center"><?php echo "$serial"; ?></div>
     
      <div class="panel-body"><strong>Data: </strong><?php echo "$data"; ?> </div>
      <div class="panel-body"><strong>Descrição:</strong> <br><?php echo "$descricao"; ?> </div>
     
         <div class="form-group" >
       
        <a href="editar.php?serial=<?php echo $serial ?>" class="btn btn-primary"  role="button">Editar</a>
        </div>
    </div>

  </div>

</div>




</body>
</html>

