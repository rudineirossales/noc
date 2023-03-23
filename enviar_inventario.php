
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
  setTimeout("window.location='inventario.php'",3000);
  
  
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

$patch_a =$_POST['patch_a'];
$porta_a =$_POST['porta_a'];
$id_cross =$_POST['id_cross'];
$datahall_b =$_POST['datahall_b'];
$rack_b =$_POST['rack_b'];
$cliente_b =$_POST['cliente_b'];
$patch_b =$_POST['patch_b'];
$porta_b =$_POST['porta_b'];
$midia =$_POST['midia'];
$obs =$_POST['obs'];






$query = "insert into inventario (patch_A,porta_A,midia,id_cross,datahall_B,cliente_B,rack_B,patch_B,porta_B,obs,data)";

$query.= "values ('$patch_a','$porta_a','$midia','$id_cross','$datahall_b','$cliente_b','$rack_b','$patch_b','$porta_b','$obs',NOW())";




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