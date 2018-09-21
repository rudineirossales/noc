

<?php
include "coon.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>




<link rel="icon" href="img/logo_oi.png">
	

  <title>Sistema</title>
  <link rel="icon" href="img/key.png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </script>
  
</head>
<body>


<?php

$id = $_GET['id'];
$seleciona_dados = mysql_query("select * from principal where protocolo = '".$_GET['id']."'");
$linha_recupera_dados = mysql_num_rows($seleciona_dados);
$lin_dado_cli = mysql_fetch_array($seleciona_dados);
if($linha_recupera_dados == 0 ){

echo '
<img src="img/loading.gif" id="loading" style="display:none; width:50px;height:50px;" />  
	<form class="form" role="form" id="form" name="seachform" method="post" enctype="multipart/form-data" action="enviar_edit.php " >
 <div class="form-group">

       <label for="email">ID:</label>
      <input type="text" class="form-control"  id="id" name="id"   value="'.$id.'"  onblur="completar_campos();" required >
    </div>

         
<div class="form-group">

<label for="email">REGISTRO NÃO CADASTRADO</label>
    </div>

     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>

';
}


else
{

echo '
<img src="img/loading.gif" id="loading" style="display:none; width:50px;height:50px;" />  
  <form class="form" role="form" id="form" name="seachform" method="post" enctype="multipart/form-data" action="enviar_edit.php " >
 <div class="form-group">

       <label for="email">ID:</label>
      <input type="text" class="form-control"  id="id" name="id"   value="'.$id.'" onblur="completar_campos();" required >
    </div>
   
     <div class="form-group">
  <label for="sel1">TIPO DE REGISTRO:</label>
  <select class="form-control " id="tipo" name="tipo"  >

<option value="'.$lin_dado_cli['tipo_reg'].'"> '.$lin_dado_cli["tipo_reg"].'  </option>
    <option value="ENTRADA">  ENTRADA </option>
<option value="SAIDA" > SAÍDA  </option>

</select>
</div><br>

    <div class="form-group">

       <label for="email">EMPRESA:</label>
      <input type="text" value="'.$lin_dado_cli['empresa'].'" class="form-control"  name="empresa"   required >
    </div>
   
        
     <div class="form-group">
  <label for="sel1">SERVIÇO:</label>
  <select class="form-control " name="servico"  >

<option value="'.$lin_dado_cli['servico'].'"> '.$lin_dado_cli["servico"].'  </option>
    <option value="COLOCATION">  COLOCATION </option>
<option value="MASSIVE" > MASSIVE  </option>

</select>
</div><br>
    
      <div class="form-group">

       <label for="email">PROJETO:</label>
      <input type="text" value="'.$lin_dado_cli['projeto'].'" class="form-control"  name="projeto"   required >
    </div>
     
      <div class="form-group">

       <label for="email">PEDIDO/PROTOCOLO:</label>
      <input type="text" value="'.$lin_dado_cli['pedido'].'" class="form-control"  name="pedido"   required >
    </div>
     
       <div class="form-group">
  <label for="sel1">EQUIPAMENTO RECEBIDO PELA DOCA:</label>
  <select class="form-control "  name="doca"  >

<option value="'.$lin_dado_cli['recebido_doca'].'"> '.$lin_dado_cli["recebido_doca"].'  </option>
    <option value="SIM">  SIM </option>
<option value="NAO" > NÃO  </option>

</select>
</div><br>
    
      <div class="form-group">

       <label for="email">AR:</label>
      <input type="text" class="form-control"  value="'.$lin_dado_cli['ar'].'" name="ar"   required >
    </div>
    
      <div class="form-group">

       <label for="email">VOLUMES:</label>
      <input type="text" class="form-control" value="'.$lin_dado_cli['volume'].'"  name="volume"   required >
    </div>
   
     

       <div class="form-group">
  <label for="sel1">SITE:</label>
  <select class="form-control "  name="site"  >

<option value="'.$lin_dado_cli['site'].'"> '.$lin_dado_cli["site"].'  </option>
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

<option value="'.$lin_dado_cli['tipo_eqp'].'"> '.$lin_dado_cli["tipo_eqp"].'  </option>
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
  <textarea class="form-control" rows="5" id="obs" name="obs" maxlength="300" placeholder="Máximo 300 caracteres" maxlength="300">'.$lin_dado_cli["descricao"].'</textarea>
    </div>
    <div class="form-group">

       <label for="email">RESPONSÁVEL:</label>
      <input type="text" class="form-control" value="'.$lin_dado_cli['responsavel'].'" name="responsavel"   required >
    </div>
     <div class="form-group">
     <div class="form-group">
      <label for="email">NOTA FISCAL: </label>
    <input type="file"     name="pdf"/> 
</div>
    <br><br>

    <FIELDSET  style="border: 1px solid; padding: 12px;">
       <label for="email">EMPRESA RESPONSÁVEL:</label>
      <input type="text" class="form-control"  name="emp_resp"   value="'.$lin_dado_cli['empresa_resp'].'" required >
   

       <label for="email">RG:</label>
      <input type="text" class="form-control"  name="rg"  value="'.$lin_dado_cli['rg'].'"  required >
    </div>
</FIELDSET>

    




   
      

    



         
  





   
    
   
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  
';
}





  
  ?>

