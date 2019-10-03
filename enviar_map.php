
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
  setTimeout("window.location='dashboard_map.php'",3000);
  
  
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

$rack =$_POST['rack'];

$ic =$_POST['ic'];
$sn =$_POST['sn'];
$ccto =$_POST['ccto'];
$regua =$_POST['regua'];


$sql1 = mysql_query ("select * from map  where sn = '$sn' " );
$row = mysql_num_rows($sql1);
 if  ($row >= 1)
{


  echo '<img src="img/erro.jpg" height="600" width="600">';
	echo "<script language='JavaScript'>
   window.alert('ERRO!! Equipamento já possi cadastro');
   </script> " ;
   
  

  
}
 else
 {








$query = "insert into map (rack,ic,sn,ccto,regua,data)";

$query.= "values ('$rack','$ic','$sn','$ccto','$regua',NOW())";




$sql = mysql_query($query);


if($sql )
{
  
  
    echo '<img src="img/success.jpg" style="padding-left:40%;padding-top:10%;" >';
	
    echo "
    <script language='JavaScript'>
    window.alert('ENVIADA COM SUCESSO!')
    
    </script>"; 
  
     echo "<script>saidasuccessfully()</script>";
  

  
}
else
{
  
    echo '<img src="img/erro.jpg" height="600" width="600">';
	echo "<script language='JavaScript'>
   window.alert('ERRO NO ENVIO!');
   </script> " ;
  
}



 }
 

?>

























</body>


</html>