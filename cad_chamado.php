
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
  



<link rel="icon" href="img/apa.png
">



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
 
<link rel="icon" href="img/apa.png">

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

  <div class="navbar navbar-inverse navbar" style="background-image: url('img/buss.jpg');>
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
<div >


<div class="row content" style="margin-left:30%">


    <div class="col-sm-6"  >
    
    <div id="teste">
  <form class="form" role="form" name="seachform" method="post" action="enviar_chamado.php " enctype="multipart/form-data">
  <div class="form-group">
     <label for="pwd">RITM:</label>
      <input type="text" class="form-control"  name="ritm" required>
    </div>
    <div class="row">
   <label  for="data" class="col-sm-6">
      PERÍODO
      </label>
    
     <div class="form-group ">
      
      <div class="col-sm-8">
       <div class="input-group">
        
        <input class="form-control" id="date" name="date" placeholder="Abertura" type="text"  autocomplete="off" required/>
        <input class="form-control" id="date2" name="date2" placeholder="Encerramento"  autocomplete="off" type="text" required/>
       </div>
      </div>
     </div>
    
  
   
  </div>

</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
 $(document).ready(function(){
  var date_input=$('input[name="date"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'yyyy-mm-dd',
   container: container,
   todayHighlight: true,
   autoclose: true,
  })
 })
</script>
<script>
 $(document).ready(function(){
  var date_input=$('input[name="date2"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'yyyy-mm-dd',
   container: container,
   todayHighlight: true,
   autoclose: true,
   orientation: 'top',
  })
 })
</script>
    
       <div class="form-group"> <br/>
    <label for="email">DESCRIÇÃO: </label>
  <textarea class="form-control" rows="5" id="desc" name="desc" maxlength="1000" ></textarea>
    </div>

    <div class="form-group">
        <label for="formFile" class="form-label">LPU</label>
        <input class="form-control" type="file" id="lpu" name="lpu" >
    </div>

     <br><br><button type="submit" value="Enviar" class="btn btn-danger" id="enviar"> <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>
 
</div>






</body>
</html>

