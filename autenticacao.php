<?php
include "coon.php";

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>


    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   
		<link href="css/style.css" rel="stylesheet">


<script src="jquery-min.js"></script>
<script src="jquery-ui.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>

	 <!-- ///////PASTA BOOTSTRAP ////////////////////-->

<script type="text/javascript">
function loginsuccessfully()
{
	setTimeout("window.location='paine.php'",4000);
	
	
}

function loginfailed()

{
	
	setTimeout("window.location='index.html'",3000);
	
}

</script>





  <link rel="icon" href="img/apa.jpg">
<meta charset="UTF-8"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body">





<?php

$senha=$_POST['senha'];
$login=$_POST['log'];


$sql = mysql_query("select * from usuario where senha  = '$senha' and login = '$login' ");




$row = mysql_num_rows($sql );

	
if($row > 0  )
{
	
	while ($linha =  mysql_fetch_assoc($sql) 	)
	{
		$nome = $linha['nome'];
		$login = $linha['login'];
		$id = $linha['id'];
		$senha = $linha['senha'];
		$acesso = $linha['acesso'];
    
	
	
	}
	
	session_start();
	
	$_SESSION['senha']=$senha;
	$_SESSION['login'] =$login;
    $_SESSION['uf'] =$uf;
	$_SESSION['id'] =$id;
	$_SESSION['nome'] =$nome;
	$_SESSION['acesso'] =$acesso;
	
	
	




	echo "<div style='background:rgba(1,1,1,0.5); padding:3px; text-align:center;'><span style='font-size:20px;'>Oi $nome! Você foi logado (a) com sucesso!</span></div>";

	

	 echo "<script>loginsuccessfully()</script>";

	
}
else
{
	echo "<br> <div style='background:rgba(1,1,1,0.5); padding:3px; text-align:center;'><span style='font-size:20px;'>Senha ou Login inválidos</span></div>";

	
	echo "<script>loginfailed()</script>";
	
}

?>





















</body>


</html>