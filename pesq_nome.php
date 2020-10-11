<?php include "coon.php"; ?>
<?php 

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

<link rel="icon" href="apa.jpg">

<link rel="icon" href="img/logo_oi.ico">

<link rel="icon" href="img/icon.ico">


  <link rel="icon" href="img/key.png">
  <title>SISTEMA CYBER</title>
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



<br>

<div class="container">
 
  
  <form class="form-inline" role="form"  method="POST" action="pesq_nome.php"  style="margin-left:10%;">
    <div class="form-group">
      <label for="email">Digite o nome do cliente</label>
      <input type="text" class="form-control"  name="nome" placeholder="Pesquisa" required >
    </div>
    
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>
</div>

  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
        <th>CABO</th>
        <th>ORIGEM</th>
        <th>DESTINO</th>
        <th>CLIENTE</th>
        <th>OBS</th>
        <th>DATA</th>
        <th>DELETAR</th>
        <th>EDITAR</th>

      
       
      </tr>
    </thead>
  
  <?php
if (isset($_POST ['submit']) )
{
$busca = $_POST['nome'];
$sql = mysql_query ("select * from cabos   where cliente like '%".$busca."%'  order by cabo;" );



$row = mysql_num_rows($sql);


if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql )){
?>
    <tbody>
      <tr class="success">
            <?php $id = $dado ["id"]; ?> 
      <td> <?php echo $dado ["cabo"];  ?></td>
<td> <?php echo $dado ["origem"];  ?></td>
<td> <?php echo $dado ["destino"];  ?></td>
 <td> <?php echo $dado ["cliente"];  ?></td>
 <td> <?php echo $dado ["obs"];  ?></td>
  <td> <?php echo $dado ["data"];  ?></td>
  <td><?php if($_SESSION["acesso"] == 'CABO' ){?> <a href='del.php?id=<?php echo $id ?>'>DELETAR</a><?php } ?></td>
  <td><?php if($_SESSION["acesso"] == 'CABO' ){?> <a href='editar_cabos.php?id=<?php echo $id ?>'>EDITAR</a><?php } ?></td>


<?php } } }?>








</body>
</html>

