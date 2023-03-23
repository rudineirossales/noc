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

<link rel="icon" href="img/icon.ico">

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


  <link rel="icon" href="img/apa.png">
  <title>APANET</title>
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
      <a class="navbar-brand" href="#">APANET</a>
    </div>
    <ul class="nav navbar-nav">
      
      
      
      
      <li class="active" style="float:right"><a href="dashboard.php">Voltar</a></li>
      
      
      
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>

<form class="form" target="_blank" method="POST" action="pesq_per_map1.php" >
<div class="form-group row" style="padding-left: 7%;">
    <label for="inputEmail3" class="col-sm-1 col-form-label">CABO</label>
    <div class="col-sm-3">
      <input  type="text" class="form-control" id="cabo" name="cabo">
    </div>
  </div>
  <div class="form-group row" style="padding-left: 7%;">
    <label for="inputEmail3" class="col-sm-1 col-form-label">ID CROSS</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="idcross" name="idcross">
    </div>
  </div>
  <div class="form-group row" style="padding-left: 7%;">
    <label for="inputPassword3" class="col-sm-1 col-form-label">EQP ORIGEM</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="eqp_origem" name='eqp_origem' >
    </div>
  </div>
  <div class="form-group row" style="padding-left: 7%;">
    <label for="inputPassword3" class="col-sm-1 col-form-label">RACK ORIGEM</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="rack_origem" name='rack_origem' >
    </div>
  </div>
  <div class="form-group row" style="padding-left: 7%;">
    <label for="inputPassword3" class="col-sm-1 col-form-label">EQP DESTINO</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="eqp_dest" name='eqp_dest'>
    </div>
  </div>
  <div class="form-group row" style="padding-left: 7%;">
    <label for="inputPassword3" class="col-sm-1 col-form-label">RACK DESTINO</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="rack_dest" name='rack_dest'>
    </div>
  </div>
  <div class="form-group row" style="padding-left: 7%;">
    <label for="inputPassword3" class="col-sm-1 col-form-label">CLIENTE</label>
    <div class="col-sm-3">
      <input  type="text" class="form-control" id="cliente"  name="cliente" >
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
</div>
  <div class="form-group row" style="padding-left: 7%;">
     <label for="email" class="col-sm-1 col-form-label">MÍDIA:</label>  
        <select class="form-group"   name="midia">
            <option value="">  TODAS </option>
            <option value="RG45">  RG45 </option>
            <option value="FIBRA">  FIBRA </option>
     

        </select>

  </div>

  

  <div class="form-group row" style="padding-left: 7%;">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Busca</button>
    </div>
  </div>
  
</form>
 
  
  
</body>
</html>

