
<?php
include "conn.php";
//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {
  
  


  
  
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='cabo.php'",3000);
  
  
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

$id =$_GET['id'];










$query = "delete from cabos where id = '$id'";






$sql = mysql_query($query);


if($sql )
{
  
  
    echo ' <h2>DELETADA COM SUCESSO!';
  
  echo "<script>saidasuccessfully()</script>";

 
  

  
}
else
{
  
  echo "<h2>Erro !</h2> ";
  
}




 

?>

























</body>


</html>