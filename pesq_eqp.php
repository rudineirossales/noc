<?php  include "coon.php";  ?>


<?php 


session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}



?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="icon" href="img/icon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="icon" href="logo.png">

<script type="text/javascript">
function fnExcelReport() {
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

    tab_text = tab_text + '<x:Name>Relatorio </x:Name>';

    tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
    tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

    tab_text = tab_text + "<table border='1px'>";
    tab_text = tab_text + $('#myTable').html();
    tab_text = tab_text + '</table></body></html>';

    var data_type = 'data:application/vnd.ms-excel';
    
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        if (window.navigator.msSaveBlob) {
            var blob = new Blob([tab_text], {
                type: "application/csv;charset=utf-8;"
            });
            navigator.msSaveBlob(blob, 'Test file.xls');
        }
    } else {
        $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#test').attr('download', 'relatorio.xls');
    }

}





</script>




<title>Controle</title>
  <link rel="icon" href="img/key.png">
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  
   
   <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->


  <style>
     #jumbo{
  background: url(empresa.jpg) no-repeat;

}
  </style>
</head>
<body>

   
</div>
<p  style="font-size: 12px;"><i><strong>© Copyright Serede S/A Desenvolvimento Rudinei Rossales  </strong></i></p>
<div class="navbar navbar-inverse navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#"> <?php echo $_SESSION["nome"]?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
              
         
         <li class="active"><a href="dashboard.php">Voltar</a></li>
      <li class="active"><a href="Logout.php">Logout</a></li>

                </ul>
            </div>

        </div>
    </div>




    <span><strong>PESQUISA POR EQUIPAMENTOS</strong></span><br><br><br>

  <form class="form-inline" role="form"   method="POST" action="pesq_eqp.php" style="margin-left:10%;">
    <div class="form-group">
   

    </div>
     
    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;} </style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div style="float:left;" class="bootstrap-iso">
  
  <div class="row">
   <label  for="data">
      Período
      </label>
    
     <div class="form-group ">
      
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" placeholder="DE" type="text" required/>
        <input class="form-control" id="date2" name="date2" placeholder="ATÉ" type="text" required/>
       </div>
      </div>
     </div>
    
  
   
  </div>

</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="jquery-1.11.3.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<link rel="stylesheet" href="bootstrap-datepicker3.css"/>
<script type="text/javascript" src="bootstrap-datepicker.min.js"></script>

<script>
 $(document).ready(function(){
  var date_input=$('input[name="date"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'yyyy-mm-dd',
   container: container,
   todayHighlight: true,
   autoclose: true,
  })
 })
</script>
<script>
 $(document).ready(function(){
  var date_input=$('input[name="date2"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'yyyy-mm-dd',
   container: container,
   todayHighlight: true,
   autoclose: true,
  })
 })
</script>

    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>


  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
       
        <th>ID</th>
        <th>UF</th>
        <th>EMPRESA</th>
         <th>SERVICO</th>
         <th>EQUIPAMENTO</th>
        <th>TIPO</th>
         <th>PEDIDO</th>
        <th>PROJETO</th>
       
      
        
        <th>RELATÓRIO</th>

      </tr>
    </thead>
  
  <?php
  if (isset($_POST ['submit']) )
{


$data = $_POST['date'];
$data2 = $_POST['date2'];
$sql = mysql_query ("select  * from principal  where data BETWEEN   '$data' and '$data2'  ORDER BY empresa ASC; " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );
$sql3 =  mysql_query ("select  count(*) as conta from principal  where data BETWEEN   '$data' and '$data2'  ; " );



$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
      
<td> <?php echo $dado ["protocolo"];  ?></td>
<td> <?php echo $dado ["uf"];  ?></td>
<td> <?php echo $dado ["empresa"];  ?></td>
 <td> <?php echo $dado ["servico"];  ?></td>
<td> <?php echo $dado ["tipo_eqp"];  ?></td>
<td> <?php echo $dado ["tipo_reg"];  ?></td>
<td> <?php echo $dado ["pedido"];  ?></td>
<td> <?php echo $dado ["projeto"];  ?></td>


<?php $pdf = $dado ["pdf"];  ?>


<td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $dado ['protocolo'];  ?>" >Visualizar</button> </td>


<div class="modal fade" id="myModal<?php echo $dado ['protocolo'];  ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">RELATÓRIO<h4>
        
        


        
       
        
        </h4>
        <div class="modal-body">



          <?php $pt = $dado ["protocolo"];  ?>
        <p><strong>PROTOCOLO: </strong> <?php echo $dado ["protocolo"];  ?></p>
        <p><strong>TIPO DE REGISTRO: </strong><?php echo $dado ["tipo_reg"];  ?></p>
        <p><strong>EMPRESA: </strong><?php echo $dado ["empresa"];  ?></strong></p>
        <p><strong>SERVIÇO: </strong><?php echo $dado ["servico"];  ?></p>
        <p><strong>PROJETO: </strong><?php echo $dado ["projeto"];  ?></p>
        <p><strong>PEDIDO: </strong><?php echo $dado ["pedido"];  ?></p>
        <p><strong>RECEBIMENTO DOCA: </strong><?php echo $dado ["recebido_doca"];  ?></p>
        <p><strong>AR: </strong><?php echo $dado ["ar"];  ?></p>
        <p><strong>VOLUME: </strong><?php echo $dado ["volume"];  ?></p>
        <p><strong>SITE: </strong><?php echo $dado ["site"];  ?></p>
        <p><strong>TIPO EQUIPAMENTO: </strong><?php echo $dado ["tipo_eqp"];  ?></p>
        
        <p><strong>RESPONSÁVEL: </strong><?php echo $dado ["responsavel"];  ?></p> 
        <p><strong>EMPRESA RESPONSÁVEL: </strong><?php echo $dado ["empresa_resp"];  ?></p>
        <p><strong>RG: </strong><?php echo $dado ["rg"];  ?></p>
        <p><strong>UF: </strong><?php echo $dado ["uf"];  ?></p>
        <p><strong>DATA: </strong><?php echo $dado ["data"];  ?></p> <br>
        <textarea readonly class="form-control" rows="5" id="obs" name="obs" maxlength="300" placeholder="Máximo 300 caracteres" maxlength="300"><?php echo $dado ["descricao"];  ?></textarea><br>
        <p><strong>NOTA FISCAL: </strong> <?php echo "<a href='pdf/$pdf' target='_blank' >  <span class='glyphicon glyphicon-new-window' aria-hidden='true'></a>"?>   </p>
        <p><strong>GERAR PDF: </strong> <?php echo "<a href='gerarpdf.php?pt=$pt' target='_blank' >  <span class='glyphicon glyphicon-save' aria-hidden='true'></a>"?>   </p>
       
          
            

        </div>

         
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>

          



          </form>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


      </tr> 
  <?php } 
while ($dado = mysql_fetch_assoc($sql3))
  {
     $conta = $dado ["conta"]; 
  }
   } }   

    ?>
  <span class="label label-primary" style="float:right; margin-right:2%;"><?php echo $conta;?></span>


    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
</div>








</body>




</html>


