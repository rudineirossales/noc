
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
  setTimeout("window.location='map2.php'",3000);
  
  
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

$rack =$_POST['rack'];
$quadro =$_POST['quadro'];
$ccto =$_POST['ccto'];
$tensao =$_POST['tensao'];
$amp =$_POST['amp'];
$ocupado =$_POST['ocupado'];
$obs =$_POST['obs'];






$query = "insert into map2 (rack,quadro,ccto,tensao,amp,ocupado,obs,data)";

$query.= "values ('$rack','$quadro','$ccto','$tensao','$amp','$ocupado','$obs',NOW())";




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