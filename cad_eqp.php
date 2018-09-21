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
  <form class="form" role="form" name="seachform" method="post" enctype="multipart/form-data" action="enviar_cad_eqp.php " >

   
     <div class="form-group">
  <label for="sel1">TIPO DE REGISTRO:</label>
  <select class="form-control " id="tipo" name="tipo"  >


    <option value="ENTRADA">  ENTRADA </option>
<option value="SAIDA" > SAÍDA  </option>

</select>
</div><br>

    <div class="form-group">

       <label for="email">EMPRESA:</label>
      <input type="text" class="form-control"  name="empresa"   required >
    </div>
   
        
     <div class="form-group">
  <label for="sel1">SERVIÇO:</label>
  <select class="form-control " name="servico"  >


    <option value="COLOCATION">  COLOCATION </option>
<option value="HOSTING" > HOSTING  </option>
<option value="ENGENHARIA" > ENGENHARIA  </option>

</select>
</div><br>
    
      <div class="form-group">

       <label for="email">PROJETO:</label>
      <input type="text" class="form-control"  name="projeto"   required >
    </div>
     
      <div class="form-group">

       <label for="email">PEDIDO/PROTOCOLO:</label>
      <input type="text" class="form-control"  name="pedido"   required >
    </div>
     
       <div class="form-group">
  <label for="sel1">EQUIPAMENTO RECEBIDO PELA DOCA:</label>
  <select class="form-control "  name="doca"  >


    <option value="SIM">  SIM </option>
<option value="NAO" > NÃO  </option>

</select>
</div><br>
    
      <div class="form-group">

       <label for="email">AR:</label>
      <input type="text" class="form-control"  name="ar"   required >
    </div>
    
      <div class="form-group">

       <label for="email">VOLUMES:</label>
      <input type="text" class="form-control"  name="volume"   required >
    </div>
   
     

       <div class="form-group">
  <label for="sel1">SITE:</label>
  <select class="form-control "  name="site"  >


    <option value="CTA">  CTA </option>
<option value="BHE" > BHE  </option>
<option value="POA">  POA </option>
<option value="SPO" > SPO  </option>
<option value="BSA" > BSA  </option>


</select>
</div>
 <div class="form-group">
  <label for="sel1">TIPO EQUIPAMENTO:</label>
  <select class="form-control "  name="tipo_eqp"  >


    <option value="FRAME">  FRAME </option>
<option value="FITAS" > FITAS  </option>
<option value="SERVIDORES">  SERVIDORES </option>
<option value="SWITCH" > SWITCH  </option>
<option value="CABOS" > CABOS  </option>
<option value="OUTROS" > OUTROS  </option>

</select>
</div><br>
 <div class="form-group">
    <label for="email">DESCRIÇÃO: </label>
  <textarea class="form-control" rows="5" id="obs" name="obs" maxlength="300" placeholder="Máximo 300 caracteres" maxlength="300"></textarea>
    </div>
    <div class="form-group">

       <label for="email">RESPONSÁVEL:</label>
      <input type="text" class="form-control"  name="responsavel"   required >
    </div>
     <div class="form-group">
     <div class="form-group">
      <label for="email">NOTA FISCAL: </label>
    <input type="file"    name="pdf"/> 
</div>
    <br><br>

    <FIELDSET  style="border: 1px solid; padding: 12px;">
       <label for="email">EMPRESA RESPONSÁVEL:</label>
      <input type="text" class="form-control"  name="emp_resp"   required >
   

       <label for="email">RG:</label>
      <input type="text" class="form-control"  name="rg"   required >
    </div>
</FIELDSET>

    




   
      

    



         
  





   
    
   
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  
</div>




</body>
</html>

