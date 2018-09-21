



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

$cod_cli = (mt_rand(1,1010200));

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





   










if(isset($_FILES['pdf'])) {
	
	$extensao = strtolower (substr($_FILES['pdf'] ['name'], -4));
	$novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "pdf/";



move_uploaded_file($_FILES['pdf'] ['tmp_name'], $diretorio.$novo_nome )	;
	}
	

 



$query = "insert into principal (tipo_reg,empresa,servico,projeto,pedido,recebido_doca,ar,volume,site,tipo_eqp,descricao,responsavel,empresa_resp,rg,uf,pdf)";

$query.= "values ('$tipo','$empresa','$servico','$projeto','$pedido','$doca','$ar','$volume','$site','$tipo_eqp','$obs','$responsavel','$emp_resp','$rg','".$_SESSION['uf']."','$novo_nome')";













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