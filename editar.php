<?php include "coon.php"; 


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
  
<!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="img/icon.ico">






<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='cad_mat.php'",3000);
  
  
}



</script>


  <script type="text/javascript">
function completar_campos(){
document.getElementById("loading").style.display = "block";
var con_consulta;
if (window.XMLHttpRequest){

con_consulta = new XMLHttpRequest();

}else{


con_consulta  = new ActiveXObject("Microsoft.XMLHTTP");



}

con_consulta.onreadystatechange = function(){

if(con_consulta.readyState ==  4 && con_consulta.status == 200){

document.getElementById("form").innerHTML = con_consulta.responseText;
document.getElementById("loading").style.display = "none";

}

}

var id = document.getElementById("id").value;

con_consulta.open("GET","processar.php?id="+id,true);
con_consulta.send(null);






}
</script>

  <link rel="icon" href="img/key.png">
  <title>CADASTRO </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                 <a class="navbar-brand" href="#"> <?php // echo $_SESSION["nome"]?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
              
         
           
      

        
      <li class="active"><a href="dashboard.php">Voltar</a></li>

                </ul>
            </div>

        </div>
    </div>

    <div class="container" >
      <div class="col-md-5 col-md-offset-3" >
      
 <span><strong>REGISTRO DE EQUIPAMENTOS</strong></span>
  <ul class="nav nav-tabs">
    
  
    
 


  </ul>
  <br>
  <img src="img/loading.gif" id="loading" style="display:none; width:50px;height:50px;" />  
  <form class="form" role="form" id="form" name="seachform" method="post" enctype="multipart/form-data" action="enviar_edit.php " >
 <div class="form-group">

       <label for="email">ID:</label>
      <input type="text" class="form-control"  id="id" name="id"  onblur="completar_campos();"  required >
    </div>
   
     
  </form>
  
</div>




</body>
</html>

