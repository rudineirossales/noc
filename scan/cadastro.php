
<?php
include "../coon.php";
session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: ../index.html");
  exit;
  
  
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
<!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">


 <script src="../jquery-min.js"></script>
 <script src="../jquery-ui.js"></script>
 <script src="../jquery-ui.min.js"></script>
<script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='../dashboard.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>SCANNER</title>


</head>



<body>








<?php

$serie =$_POST['serie'];

$obs =$_POST['obs'];










$query = "insert into cadastro (serial,descricao,data)";

$query.= "values ('$serie','$obs',NOW())";




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