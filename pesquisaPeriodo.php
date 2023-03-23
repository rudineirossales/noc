<?php include "coon.php"; ?>
<?php 

session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])  )
{
  header("Location: index.html");
  exit;
  
  
}


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>

<script language="Javascript">
function confirmacao(protocolo) {
     var resposta = confirm("Deseja remover esse registro?");
 
     if (resposta == true) {
          window.location.href = "deletar.php?protocolo="+protocolo;
     }
}
</script>
<style>
img{


  width:60%;
  height:10%;

}

figure {
  
  
  
  font-style: italic;
  font-size: smaller;
  text-indent: 0;
  border: thin silver solid;
  
}

figcaption {


font-size:20px;




}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="icon" href="img/apa.png">

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


  <link rel="icon" href="img/key.png">
  <title>Fiscalizações</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



<nav class="navbar navbar-inverse" style="background-image: url('img/buss.jpg');>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Serede</a>
    </div>
    <ul class="nav navbar-nav">
      
      
      <li class="active" style="float:right"> <a href="#" id="test" onClick="javascript:fnExcelReport();">Gerar excel</a></li>
      
      <li class="active" style="float:right"><a href="dashboard.php">Voltar</a></li>
      
      
      
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>

<div class="container">
 
  
  <form class="form-inline" role="form"  method="POST" action="pesquisaPeriodo.php"  style="margin-left:10%;">
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
        <input class="form-control" id="date" name="date" placeholder="DE" type="text"  autocomplete="off" required/>
        <input class="form-control" id="date2" name="date2" placeholder="ATÉ"  autocomplete="off" type="text" required/>
       </div>
      </div>
     </div>
    
  
   
  </div>

</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

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
   orientation: 'top',
  })
 })
</script>


    
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>
</div>

  <div class="table-responsive">
  <table class="table table-hover" id="myTable" >
    <thead>
      <tr >
      <th>CABO</th>
        <th>ID CROSS</th>
        <th>LOCAL</th>
        <th>FILA</th>
        <th>RACK ORIGEM</th>
        <th>EQUIPAMENTO ORIGEM</th>
        <th>PORTA ORIGEM</th>
        <th>CP</th>
        <th>PP</th>
        <th>RACK DESTINO</th>
        <th>EQUIPAMENTO DESTINO</th>
        <th>PORTA DESTINO</th>
        <th>MANOBRA</th>
        <th>MIDIA</th>
        <th>CLIENTE</th>
        <th>OBSERVAÇÃO</th>
    
    
        
        
        
        
         
        
      
       
      </tr>
    </thead>
  
  <?php
if (isset($_POST ['submit']) )
{

    $data = $_POST['date'];
    $data2 = $_POST['date2'];




        $sql = mysql_query ("select * from map1 where data BETWEEN '$data' and '$data2'" );

     




    




$row = mysql_num_rows($sql);


if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql )){
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <tbody >
      <tr class="success">
      <td> <?php echo $dado ["cabo"];  ?></td>
        <td> <?php echo $dado ["idcross"];  ?></td>
        <td> <?php echo $dado ["local"];  ?></td>
        <td> <?php echo $dado ["fila"];  ?></td>
        
        <td> <?php echo $dado ["rack_ori"];  ?></td>
        <td> <?php echo $dado ["eqp_origem"];  ?></td>
        <td> <?php echo $dado ["porta_ori"];  ?></td>
        <td> <?php echo $dado ["cp"];  ?></td>
        <td> <?php echo $dado ["pp"];  ?></td>
        <td> <?php echo $dado ["rack_dest"];  ?></td>
        <td> <?php echo $dado ["eqp_dest"];  ?></td>
        <td> <?php echo $dado ["porta_dest"];  ?></td>
        <td> <?php echo $dado ["manobra"];  ?></td>
        <td> <?php echo $dado ["midia"];  ?></td>
        <td> <?php echo $dado ["servidor"];  ?></td>
        <td> <?php echo $dado ["obs"];  ?></td>
        

        




  <?php }  } }   
   
    ?>



    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
 
</div>



</body>
</html>

