<?php 

include "../coon.php";

session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: ../index.html");
  exit;
  
  
}

  $descricao =$_POST['descricao'];
  $serial =$_POST['serial'];






$query = "update cadastro set descricao ='$descricao' where serial = '$serial'";






$sql = mysql_query($query);


if($sql )
{
  
  
    echo ' <h2>EDITADA COM SUCESSO!';
  
 echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=../dashboard.php">';
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}








  ?>
