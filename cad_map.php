
<?php 

session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])  )
{
  header("Location: index.html");
  exit;
  
  
}


?>


<!DOCTYPE html>



<html lang="pt-br">
<head>

  

 <style>
     #jumbo{
  background: url(empresa.jpg) no-repeat;

}
  </style>
<link rel="icon" href="img/icon.ico">






<!--   FIM FUNCAO                            -->







  <meta charset="utf-8">

<link rel="stylesheet"  href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet"  href="/resources/demos/style.css">



<script type="text/javascript" src="jquery-ui.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>
<script type="text/javascript" src="validacao.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>









<link rel="icon" href="img/logo_oi.ico">




<style>
 footer {
      background-color: #555;
      color: white;
      padding: 15px;
       text-align:center;
    }
  .container-fluid
  {
  background-color: orange;
  }
  #realcar
  {
  background-color: grey;
  }
   #realcar2
  {
  background-color: #D3D3D3;
  }

  #loading
{
  
width:70px;
height:70px;  
  
  
  
  
}



</style>
  <title>CADASTRO DE FISCALIZAÇÕES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->

</head>
<body>


<?php 

 include "coon.php";

 if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])  )
 {
   header("Location: index.html");
   exit;
   
   
 }



?>




  <nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background-image: url('img/buss.jpg')";>
    <div class="navbar-header">
      
       
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="dashboard_map.php">Voltar</a></li>
      
        
       


 
      
 
    
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>


<div class="container">


<div class="row content">


    <div class="col-sm-10 "  >

   

  <form class="form" role="form" name="seachform" method="post" action="enviar_map.php "  >

   

  <div class="form-group">

      <label for="email">Rack:</label>  
      <input type="text" class="form-control"  name="rack"  maxlength="65" required >
    </div>

    
    <div class="form-group">

      <label for="email">Ic:</label>  
      <input type="text" class="form-control"  name="ic"  required >
    </div>
    <div class="form-group">

      <label for="email">Sn:</label>  
      <input type="text" class="form-control"  name="sn"  required >
    </div>

     <div class="form-group">

      <label for="email">Circuito:</label>  
      <input type="text" class="form-control"  name="ccto"  required >
    </div>
    <div class="form-group">

     
   <div class="form-group">
    <label for="email">Régua:</label>  
     <select class="form-control "  name="regua">
<option value="A">  A </option>
 <option value="B">  B </option>


</select>
    


  
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="submit" required > <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>

 </div>




</body>
</html>


<script>
  
$(function() {

/*var  availableTags = [

"ajskkdp",
"iiisosoa",
"ooiismsm",
"aassdddd",
"ooedmmmd",
"iisoosoos"
];

$( "#cabo" ).autocomplete({
  source: availableTags

  });
*/

$.getJSON("listar_cabos.php", function(data){
//console.log(data);
var retorno = [];


$(data).each( function (key, value){

 // console.log(value.cabo);

 retorno.push(value.cabo);


});
$("#cabo").autocomplete({
  source: retorno ,

 

  });




  });
});






</script>

<!--
<script>
  
$(function() {



$.getJSON("listar_cabos.php", function(data2){
//console.log(data);
var retorno2 = [];


$(data2).each( function (key2, value2){

 // console.log(value.cabo);

 retorno2.push(value2.trecho);


});
$("#localidade").autocomplete({
  source: retorno2

  });




  });
});






</script>
-->