



<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='pesq_nome.php'",7000);
	
	
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

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='pesq_nome.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>EDITAR CABOS</title>


</head>



<body>








<?php

$id=$_POST['id'];

$cabo =$_POST['cabo'];
$origem =$_POST['origem'];
$cliente =$_POST['cliente'];
$destino =$_POST['destino']; 
$obs =$_POST['obs'];












$query = "update cabos set cabo='$cabo',origem='$origem',destino='$destino',obs='$obs',cliente='$cliente' where id = '$id'";








$sql = mysql_query($query);


if($sql )
{
  
  
      echo ' <h2>EDITADO COM SUCESSO!<br></h2> ';

  echo "<script>saidasuccessfully()</script>";
  

 
  

  
}
else
{
  
  echo "<h2>Erro na edição!</h2> ";
  
}










?>

























</body>


</html>