



<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='editar_map.'",7000);
	
	
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
	setTimeout("window.location='editar_map.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>EDITAR CABOS</title>


</head>



<body>








<?php

            $local = $_POST["local"];
            $fila = $_POST["fila"];
            $eqp_origem = $_POST["eqp_ori"];
            $porta_ori = $_POST["porta_ori"];
            $rack_ori  = $_POST["rack_ori"];
            $cp = $_POST["cp"];
            $porta_dest = $_POST["porta_dest"];
            $idcross = $_POST["idcross"];
            $cabo = $_POST["cabo"];
            $pp = $_POST["pp"];
            $rack_dest = $_POST["rack_dest"];
            $manobra = $_POST["manobra"];  
            $servidor  = $_POST["servidor"];
            $eqp_dest = $_POST["eqp_dest"];
            $midia = $_POST["midia"];
          
            $obs = $_POST["obs"];












$query = "update map1 set local='$local',fila='$fila',eqp_origem='$eqp_origem',porta_ori='$porta_ori',rack_ori='$rack_ori',cp='$cp'   
,porta_dest='$porta_dest',idcross='$idcross',pp='$pp',rack_dest='$rack_dest',manobra='$manobra',servidor='$servidor',eqp_dest='$eqp_dest'
,manobra='$manobra',obs='$obs' where cabo = '$cabo'";








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