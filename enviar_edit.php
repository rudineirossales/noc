



<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='dashboard.php'",7000);
	
	
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
	setTimeout("window.location='dashboard.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>CADASTRO EQUIPAMENTO</title>


</head>



<body>








<?php

$id=$_POST['id'];

$tipo =$_POST['tipo'];
$empresa =$_POST['empresa'];
$servico =$_POST['servico'];
$projeto =$_POST['projeto']; 
$doca =$_POST['doca'];
$ar =$_POST['ar'];
$volume =$_POST['volume'];
$site =$_POST['site'];
$tipo_eqp =$_POST['tipo_eqp'];
$obs =$_POST['obs'];
$responsavel =$_POST['responsavel'];
$pdf =$_POST['pdf'];
$emp_resp =$_POST['emp_resp'];
$rg =$_POST['rg'];
$pedido =$_POST['pedido'];




if (empty($_FILES['pdf']['size']) != false)

{







$query = "update principal set tipo_reg='$tipo',empresa='$empresa',servico='$servico',projeto='$projeto',pedido='$pedido',recebido_doca='$doca',ar='$ar',volume='$volume',site='$site',tipo_eqp='$tipo_eqp',descricao='$obs
',responsavel='$responsavel',empresa_resp='$emp_resp',rg='$rg',uf='".$_SESSION['uf']."' where protocolo = '$id'";








$sql = mysql_query($query);


if($sql )
{
  
  
      echo ' <h2>EDITADO COM SUCESSO!<br></h2> ';

  echo "<script>saidasuccessfully()</script>";
  

 ;
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}






}

else {

   








  

if(isset($_FILES['pdf'])) {
	
	$extensao = strtolower (substr($_FILES['pdf'] ['name'], -4));
	$novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "pdf/";



move_uploaded_file($_FILES['pdf'] ['tmp_name'], $diretorio.$novo_nome )	;
	}
	

 
$query = "update principal set tipo_reg='$tipo',empresa='$empresa',servico='$servico',projeto='$projeto',pedido='$pedido',recebido_doca='$doca',ar='$ar',volume='$volume',site='$site',tipo_eqp='$tipo_eqp',descricao='$obs
',responsavel='$responsavel',empresa_resp='$emp_resp',rg='$rg',uf='".$_SESSION['uf']."',pdf='$novo_nome',data=NOW() where protocolo = '$id'";
















$sql = mysql_query($query);


if($sql )
{
  
  
      echo ' <h2>EDITADO COM SUCESSO!<br></h2> ';

  echo "<script>saidasuccessfully()</script>";
  

 ;
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}




}



?>

























</body>


</html>