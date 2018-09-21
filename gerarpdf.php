

<?php


include 'mpdf/mpdf.php';


 include "coon.php";

 session_start();
if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}
  
  



$id =$_GET['pt'];

$sql = mysql_query ("select * from principal where  protocolo = '$id' " );







  while ($dado = mysql_fetch_assoc($sql )){

 


$tipo_reg =$dado ["tipo_reg"];
$empresa =$dado ["empresa"];
$servico =$dado ["servico"];
$projeto =$dado ["projeto"];
$pedido =$dado ["pedido"];
$recebido_doca =$dado ["recebido_doca"];
$ar =$dado ["ar"];
$volume =$dado ["volume"];
$site =$dado ["site"];
$tipo_eqp =$dado ["tipo_eqp"];
$descricao =$dado ["descricao"];
$responsavel =$dado ["responsavel"];
$empresa_resp =$dado ["empresa_resp"];
$rg =$dado ["rg"]; 
$uf = $dado ["uf"]; 
$data =$dado ["data"]; 
$descricao =$dado ["descricao"];




  }



$pagina = 
'


<html>

<body>



<p style="font-size:10px;"><strong> DATA: </strong>'.$data.' <strong> PROTOCOLO: </strong>'.$id.'</p>
 <img src="img/oi.png" alt="" width="150" height="150"  > 
  <br>
<h3 style="text-align: center;">Sistema de registro de equipamentos - Entrada/Saída</h3><br><br>
<h5><strong>EMPRESA: </strong> '.$empresa.'   </h5>
<h5><strong>TIPO DE REGISTRO:</strong> '.$tipo_reg.' </h5>
<h5><strong>SERVIÇO:</strong> '.$servico.' </h5>
<h5><strong>PROJETO:</strong> '.$projeto.'</h5> 
<h5><strong>PEDIDO:</strong> '.$pedido.'</h5> 
<h5><strong>RECEBIDO DOCA:</strong> '.$recebido_doca.'</h5>
<h5><strong>AR:</strong> '.$ar.'</h5>
<h5><strong>VOLUME:</strong> '.$volume.'</h5>
<h5><strong>SITE:</strong> '.$site.'</h5>
<h5><strong>TIPO DE EQUIPAMENTE:</strong> '.$site.'</h5>
<h5><strong>RESPONSÁVEL:</strong> '.$responsavel.'</h5>
<h5><strong>EMPRESA RESPONSÁVEL:</strong> '.$empresa_resp.'</h5>
<h5><strong>RG:</strong> '.$rg.'</h5>
<h5><strong>UF:</strong> '.$uf.'</h5><br><br>


<h5><strong>DESCRIÇÃO:</strong> <br> <br> '.$descricao.'</h5>





</body>
</html>




'	 ;

$footer = "<p style='font-size:10px; padding-bottom:60px;'>___________________________&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ___________________________<br> &nbsp; &nbsp; &nbsp; &nbsp;responsável&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  cliente</p>";
$arquivo = "cadastro01.pdf"; 


$mpdf = new mPDF();

$stylesheet = file_get_contents('css/bootstrap.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->SetHTMLFooter($footer,"O");

 $mpdf -> WriteHTML($pagina);

$mpdf -> Output($arquivo, 'I');




























?>