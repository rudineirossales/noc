
<?php
include "coon.php";

  session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}


  
  
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
  



<link rel="icon" href="img/icon.ico">



<style>
 footer {
      background-color: #555;
      color: white;
      padding: 15px;
       text-align:center;
    }
  .container-fluid
  {
  background-color: black;
  }
  #realcar
  {
  background-color: grey;
  }
   #realcar2
  {
  background-color: #D3D3D3;
  }



</style>
  <title>SISTEMA GRUPO APA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
<link rel="icon" href="img/icon.ico">

   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>



 

  
  <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>
<script type="text/javascript" src="validacao.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>
<script type="text/javascript" src="jquery-min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
</head>




</head>


<body>


<p  style="font-size: 12px;"><i><strong>© Desenvolvimento Rudinei Rossales  </strong></i></p>

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
              
         
         <li class="active"><a href="dashboard.php">Voltar</a></li>
      <li class="active"><a href="Logout.php">Logout</a></li>

                </ul>
            </div>

        </div>
    </div>
<div class="container">


<div class="row content">


    <div class="col-sm-10 "  >
    
    <div id="teste">
  <form class="form" role="form" name="seachform" method="post" action="enviar_cabo.php " enctype="multipart/form-data">

    <div class="form-group">

       <label for="email">CABO:</label>
      <input type="text" class="form-control"  name="cabo" required >
    </div>
 
       <div class="form-group">
     <label for="pwd">ORIGEM:</label>
      <input type="text" class="form-control"  name="origem" required>
 
    </div>
       <div class="form-group">
     <label for="pwd">DESTINO:</label>
      <input type="text" class="form-control"  name="destino" required>
    </div>
      <div class="form-group">
     <label for="pwd">CLIENTE:</label>
      <input type="text" class="form-control"  name="cliente" required>
    </div>

       <div class="form-group">
    <label for="email">OBS: </label>
  <textarea class="form-control" rows="5" id="obs" name="obs" maxlength="300" placeholder="Máximo 300 caracteres"></textarea>
    </div>

     <br><br><button type="submit" value="Enviar" class="btn btn-danger" id="enviar"> <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>
 
</div>






</body>
</html>

