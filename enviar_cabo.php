
<?php
include "coon.php";
//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {
  
  
session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}

  
  
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='cabo.php'",3000);
  
  
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>SISTEMA GRUPO APA</title>

<link rel="icon" href="apa.jpg">
</head>



<body>








<?php

$cabo =$_POST['cabo'];

$origem =$_POST['origem'];
$destino =$_POST['destino'];
$cliente =$_POST['cliente'];
$obs =$_POST['obs'];








$query = "insert into cabos (cabo,origem,destino,cliente,obs,data)";

$query.= "values ('$cabo','$origem','$destino','$cliente','$obs',NOW())";




$sql = mysql_query($query);


if($sql )
{
  
  
    echo ' <h2>ENVIADA COM SUCESSO!';
  
  echo "<script>saidasuccessfully()</script>";
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}




 

?>

























</body>


</html>