



<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='editar_ele.'",7000);
	
	
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
	setTimeout("window.location='editar_ele.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>EDITAR CABOS</title>


</head>



<body>








<?php

            $ccto = $_POST["ccto"];
            $rack = $_POST["rack"];
            $quadro = $_POST["quadro"];
            $tensao = $_POST["tensao"];
            $amp  = $_POST["amp"];
            $obs = $_POST["obs"];
            
            












$query = "update map2 set rack='$rack',quadro='$quadro',tensao='$tensao',amp='$amp',obs='$obs' where ccto = '$ccto'";








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