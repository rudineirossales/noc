<?php  include "coon.php";  ?>


<?php 


session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}



 


?>



<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_chamado.php'",7000);
	
	
}


</script> 

<?php

session_start();




include "coon.php";








	

	
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
<link rel="icon" href="img/icon.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_chamado.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>CADASTRO DE CHAMADO</title>


</head>



<body>








<?php



$ritm =$_POST['ritm'];
$aber =$_POST['date']; 
$enc =$_POST['date2'];
$desc =$_POST['desc'];
$lpu =$_POST['lpu']; 







   

	





if(isset($_FILES['lpu'])) {
    
	
	$extensao = strtolower (substr($_FILES['lpu'] ['name'], -4));
	$novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "lpu/";



move_uploaded_file($_FILES['lpu'] ['tmp_name'], $diretorio.$novo_nome )	;
	}
	
	
   
 



$query = "insert into chamado (ritm,data_ab,data_enc,descricao,lpu)";

$query.= "values ('$ritm','$aber','$enc','$desc','$novo_nome')";













$sql = mysql_query($query);


if($sql )
{
  
  
      echo ' <h2>CADASTRADO COM SUCESSO!<br></h2> ';

  echo "<script>saidasuccessfully()</script>";
  

 ;
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}








?>

























</body>


</html>