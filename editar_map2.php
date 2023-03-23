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
<link rel="icon" href="apa.jpg">

<link rel="icon" href="img/logo_oi.ico">

<script language="Javascript">
function confirmacao(ccto) {
     var resposta = confirm("Deseja remover esse registro?");
 
     if (resposta == true) {
          window.location.href = "del_ele.php?ccto="+ccto;
     }
}
</script>


  <link rel="icon" href="img/apa.png">
  <title>SISTEMA CYBER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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


<br>

<div>

  
  <form class="form-inline" role="form"  method="POST" action="editar_map2.php"  style="margin-left:10%;">
    <div class="form-group">
      <label for="email">Digite o n° do Circuito</label>
      <input type="text" class="form-control"  name="ccto" placeholder="Pesquisa"  required >
    </div>
    
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>
</div>

  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
        
        <th>CIRCUITO</th>
        <th>RACK</th>
        <th>QUADRO</th>
        <th>TENSÃO</th>
        <th>AMPERAGEM</th>
        <th>OCUPADO</th>
        <th>OBSERVAÇÃO</th>
        <th></th>
        <th></th>

      
       
      </tr>
    </thead>
  
  <?php
if (isset($_POST ['submit']) )
{
$busca = $_POST['ccto'];
$sql = mysql_query ("select * from map2   where ccto = '".$busca."'  order by ccto;" );



$row = mysql_num_rows($sql);


if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql )){
    $ccto = $dado ["ccto"];
?>

      
    <tbody>
      <tr class="success">
  <td> <?php echo $dado ["ccto"];  ?></td>
  <td> <?php echo $dado ["rack"];  ?></td>
  <td> <?php echo $dado ["quadro"];  ?></td>
  <td> <?php echo $dado ["tensao"];  ?></td>
  <td> <?php echo $dado ["amp"];  ?></td>
  <td> <?php echo $dado ["ocupado"];  ?></td>
  <td> <?php echo $dado ["obs"];  ?></td>
  
  <td><?php ?> <a class="btn btn-primary btn-xs active" href='editar_ele.php?id=<?php echo $ccto ?>'>EDITAR</a></td>
  <td> <a href="javascript:func()" onclick="confirmacao('<?php echo $ccto;?>')" class="btn btn-danger btn-xs active" role="button" aria-pressed="true">Deletar</a></td><?php } ?>


<?php } } ?>








</body>
</html>


