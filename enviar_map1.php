
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
  setTimeout("window.location='map1.php'",3000);
  
  
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
$local =$_POST['local'];
$fila =$_POST['fila'];
$switch =$_POST['switch'];
$rack_ori =$_POST['rack_ori'];
$eqp_origem =$_POST['eqp_ori'];
$porta_ori =$_POST['porta_ori'];
$cp =$_POST['cp'];
$pp =$_POST['pp'];
$rack_dest =$_POST['rack_dest'];
$eqp_dest =$_POST['eqp_dest'];
$porta_dest =$_POST['porta_dest'];
$manobra =$_POST['manobra'];
$servidor =$_POST['servidor'];
$midia =$_POST['midia'];
$obs =$_POST['obs'];
$idcross =$_POST['idcross'];









$query = "insert into map1 (cabo,local,fila,rack_ori,eqp_origem,porta_ori,cp,pp,rack_dest,eqp_dest,porta_dest,manobra,servidor,obs,data,midia,idcross)";

$query.= "values ('$cabo','$local','$fila','$rack_ori','$eqp_origem','$porta_ori','$cp','$pp','$rack_dest','$eqp_dest','$porta_dest','$manobra','$servidor','$obs',NOW(),'$midia','$idcross')";




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