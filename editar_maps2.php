<?php include "coon.php"; 


session_start();
if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}

$id =$_GET['id'];

            $sql = mysql_query ("select * from map1 where cabo = '$id'" );

            $row = mysql_num_rows($sql);


    if (mysql_num_rows($sql) > 0)

    {
         while ($dado = mysql_fetch_assoc($sql))
         {
            $local = $dado["local"];
            $fila = $dado["fila"];
            $eqp_origem = $dado["eqp_origem"];
            $porta_ori = $dado["porta_ori"];
            $rack_ori  = $dado["rack_ori"];
            $cp = $dado["cp"];
            $porta_dest = $dado["porta_dest"];
            $idcross = $dado["idcross"];
            $cabo = $dado["cabo"];
            $pp = $dado["pp"];
            $rack_dest = $dado["rack_dest"];
            $manobra = $dado["manobra"];  
            $servidor  = $dado["servidor"];
            $eqp_dest = $dado["eqp_dest"];
            $midia = $dado["midia"];
            $idcross = $dado["idcross"];
            $obs = $dado["obs"];
            
            
          }
    
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
        <div >
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

    <div  >
      <div class="col-md-5 col-md-offset-3" >
      
 <span><strong>EDITAR CABOS</strong></span>
  <ul class="nav nav-tabs">
    
  
    
 


  </ul>
  <br>
  
  <form class="form" role="form" id="form" name="seachform" method="post" action="enviar_edit_map.php " >

  <input type="hidden" class="form-control"   value="<?php echo $id;?>" name="id"    required >
  
  <div class="form-group">

<label for="email">CABO:</label>
<input type="text" class="form-control"   value="<?php echo $cabo;?>" readonly name="cabo"    required >
</div>
<div class="form-group">

<label for="email">ID CROSS:</label>
<input type="text" class="form-control"   value="<?php echo $idcross;?>" readonly name="idcross"    required >
</div>
  <div class="form-group">

       <label for="email">LOCAL:</label>
       <input type="text" class="form-control"   value="<?php echo $local;?>" name="local"    required >
</div>

 <div class="form-group">

       <label for="email">FILA:</label>
       <input type="text" class="form-control"   value="<?php echo $fila ;?>" name="fila"    required >
</div>

<div class="form-group">


<label for="email">RACK DE ORIGEM:</label>
<input type="text" class="form-control"   value="<?php echo $rack_ori;?>" name="rack_ori"    required >
</div>
<div class="form-group">

<label for="email">EQUIPAMENTO ORIGEM:</label>
<input type="text" class="form-control"   value="<?php echo $eqp_origem;?>" name="eqp_ori"    required >
</div>
<div class="form-group">

<label for="email">PORTA ORIGEM:</label>
<input type="text" class="form-control"   value="<?php echo $porta_ori;?>" name="porta_ori"    required >
</div>

<div class="form-group">

<label for="email">RACK DESTINO:</label>
<input type="text" class="form-control"   value="<?php echo $rack_dest;?>" name="rack_dest"    required >
</div>
<div class="form-group">
<label for="email">EQUIPAMENTO DESTINO::</label>
<input type="text" class="form-control"   value="<?php echo $eqp_dest;?>" name="eqp_dest"    required >
</div>
<div class="form-group">
<label for="email">PORTA DESTINO:</label>
<input type="text" class="form-control"   value="<?php echo $porta_dest;?>" name="porta_dest"    required >
</div>
<div class="form-group">
<label for="email">CP:</label>
<input type="text" class="form-control"   value="<?php echo $cp;?>" name="cp"    required >
</div>
<div class="form-group">
<label for="email">PP:</label>
<input type="text" class="form-control"   value="<?php echo $pp;?>" name="pp"    required >
</div>
<div class="form-group">
<label for="email">CLIENTE:</label>
<input type="text" class="form-control"   value="<?php echo $servidor;?>" name="servidor"    required >
</div>
<div class="form-group">
<label for="exampleTextarea">MANOBRA</label>
<textarea class="form-control" maxlength="500" id="exampleTextarea" rows="3" name="manobra"><?php echo $manobra;?></textarea>
</div>
<div class="form-group">
<label for="exampleTextarea">OBS</label>
<textarea class="form-control" maxlength="500" id="exampleTextarea" rows="3" name="obs"><?php echo $obs;?></textarea>
</div>

<button type="submit" value="Enviar" class="btn btn-danger" id="enviar"> <strong>Enviar</strong> </button>
   
     
  </form>
  
</div>

 


</body>
</html>


