<?php include "coon.php"; 


session_start();
if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}

$id =$_GET['id'];

            $sql = mysql_query ("select * from map2 where ccto = '$id'" );

            $row = mysql_num_rows($sql);


    if (mysql_num_rows($sql) > 0)

    {
         while ($dado = mysql_fetch_assoc($sql))
         {
            $ccto = $dado["ccto"];
            $rack = $dado["rack"];
            $quadro = $dado["quadro"];
            $tensao = $dado["tensao"];
            $amp  = $dado["amp"];
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
  <img src="img/loading.gif" id="loading" style="display:none; width:50px;height:50px;" />  
  <form class="form" role="form" id="form" name="seachform" method="post" action="enviar_edit_ele.php " >

  <input type="hidden" class="form-control"   value="<?php echo $id;?>" name="id"    required >
  
  <div class="form-group">

<label for="email">CIRCUITO:</label>
<input type="text" class="form-control"   value="<?php echo $id;?>" readonly name="ccto"    required >
</div>
<div class="form-group">

<label for="email">RACK:</label>
<input type="text" class="form-control"   value="<?php echo $rack;?>"  name="rack"    required >
</div>
  <div class="form-group">

       <label for="email">QUADRO:</label>
       <input type="text" class="form-control"   value="<?php echo $quadro;?>" name="quadro"    required >
</div>

 <div class="form-group">

       <label for="email">TENSÃO:</label>
       <input type="text" class="form-control"   value="<?php echo $tensao ;?>" name="tensao"    required >
</div>

<div class="form-group">


<label for="email">AMPERAGEM:</label>
<input type="text" class="form-control"   value="<?php echo $amp;?>" name="amp"    required >
</div>
<div class="form-group">


<div class="form-group">
<label for="exampleTextarea">OBSERVAÇÃO</label>
<textarea class="form-control" maxlength="500" id="exampleTextarea" rows="3" name="obs"><?php echo $obs;?></textarea>
</div>

<button type="submit" value="Enviar" class="btn btn-danger" id="enviar"> <strong>Enviar</strong> </button>
   
     
  </form>
  
</div>

 


</body>
</html>


