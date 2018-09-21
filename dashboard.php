<?php  include "coon.php";   include "dados_grafico.php";  ?>


<?php 


session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}



 


?>



<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="img/icon.ico">
   <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mês', 'Saída', 'Entrada', ''],
          ['JAN', <?php echo $jan_sai ?>, <?php echo $JAN_ENT ?>, 0],
          ['FEV', <?php echo $FEV_SAI ?>,<?php echo $FEV_ENT ?>, 0],
          ['MAR', <?php echo $MAR_SAI ?>, <?php echo $MAR_ENT ?>, 0],
          ['ABR', <?php echo $ABR_SAI ?>, <?php echo $ABR_ENT ?>, 0],
          ['MAI', <?php echo $MAI_SAI ?>, <?php echo $MAI_ENT ?>, 0],
          ['JUN', <?php echo $JUN_SAI ?>, <?php echo $JUN_ENT ?>, 0],
          ['JUL', <?php echo $JUL_SAI ?>, <?php echo $JUL_ENT ?>, 0],
          ['AGO', <?php echo $AGO_SAI ?>, <?php echo $AGO_ENT ?>, 0],
          ['SET', <?php echo $SET_SAI ?>, <?php echo $SET_ENT ?>, 0],
          ['OUT', <?php echo $OUT_SAI ?>, <?php echo $OUT_ENT ?>, 0],
          ['NOV', <?php echo $NOV_SAI ?>, <?php echo $NOV_ENT ?>, 0],
          ['DEZ', <?php echo $DEZ_SAI ?>, <?php echo $DEZ_ENT ?>, 0]
        ]);

        var options = {
          chart: {
            title: 'Entrada / Saída',
            subtitle: 'Controle de registros  <?php echo date('Y') ?>',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'quantidade'],
          ["Frame", <?php echo $FRAME ?>],
          ["Fitas", <?php echo $FITAS ?>],
          ["Servidores", <?php echo $SERVIDORES ?>],
          ["Switch", <?php echo $SWITCH ?>],
          ["Cabos", <?php echo $CABOS ?>],
          ['Outros', <?php echo $OUTROS ?>]
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Contagem de movimentação de equipamentos <?php echo date('Y') ?>',
            subtitle: '' },
          axes: {
            x: {
              0: { side: 'top', label: 'Equipamentos'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
google.charts.load('current', {'packages':['bar']});
  
      google.charts.setOnLoadCallback(drawStuff2);

      function drawStuff2() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Quantidade'],
          ["JAN", <?php echo $JAN ?>],
          ["FEV", <?php echo $FEV ?>],
          ["MAR", <?php echo $MAR ?>],
          ["ABR", <?php echo $ABR ?>],
          ['MAI', <?php echo $MAI ?>],
          ['JUN', <?php echo $JUN ?>],
          ['JUL', <?php echo $JUL ?>],
          ['AGO', <?php echo $AGO ?>],
          ['SET', <?php echo $SETE ?>],
          ['OUT', <?php echo $OUTU ?>],
          ['NOV', <?php echo $NOV ?>],
          ['DEZ', <?php echo $DEZ ?>]
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Cabos',
            subtitle: '' },
          axes: {
            x: {
              0: { side: 'top', label: 'Cabeamento passado <?php echo date('Y') ?>'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div2'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };


     

</script>


<script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Colocation',    <?php echo $COLOCATION ?>],
          ['Hosting',    <?php echo $HOSTING ?>],
          ['Engenharia',    <?php echo $ENGENHARIA ?>]
        ]);

        var options = {
          title: 'Colocation / Massive / engenharia <?php echo date('Y') ?> ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CONTROLE DE EQP</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
<meta http-equiv="refresh" content="60; url=dashboard.php">
</head>

<body >

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

        
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <a class="navbar-brand" href="#" > <?php echo $_SESSION["nome"]?></a>
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>   <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                      <!--
                        <li>
                            <a href="modifica_senha.php"><i class="fa fa-fw fa-gear"></i> Trocar senha</a> 
                        </li> 
                        <li class="divider"></li> -->
                        <li>
                            <a href="Logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                  <?php if($_SESSION["acesso"] == 'NOC' ){?>
                   <li class="dropdown">

        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-scale">  EQUIPAMENTOS</span>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li style="background:black;"><a href="cad_eqp.php"><span class="glyphicon glyphicon-pencil"> CADASTRO</a></li></span> 
          <li style="background:black;"><a href="pesq_eqp.php"><span class="glyphicon glyphicon-calendar"> BUSCA PERÍODO</a></li>
          <li style="background:black;"><a href="pesq_cliente.php"><span class="glyphicon glyphicon-search"> BUSCA CLIENTE/ID</a></li>
          <li style="background:black;"><a href="editar.php"><span class="glyphicon glyphicon-search"> EDITAR</a></li>
                 
                
        
        </ul>
      </li>
      <?php } ?>
      <li class="dropdown">

        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-transfer"> CABEAMENTOS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <?php if($_SESSION["acesso"] == 'CABO' ){?>
          <li style="background:black;"><a href="cabo.php"><span class="glyphicon glyphicon-pencil"> CADASTRO</a></li></span> <?php } ?>
          <li style="background:black;"><a href="pesq_per.php"><span class="glyphicon glyphicon-calendar"> BUSCA PERÍODO</a></li></span>
          <li style="background:black;"><a href="pesq_nome.php"><span class="glyphicon glyphicon-search"> BUSCA CLIENTE</a></li></span>
          <li style="background:black;"><a href="pesq_cabo.php"><span class="glyphicon glyphicon-zoom-in"> BUSCA Nº</a></li></span>
        
                 
                
        
        </ul>



      </li>
       <?php if($_SESSION["acesso"] == 'NOC' ){?>
       <li class="dropdown">

        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-barcode"> Nº SÉRIE</span>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        
          <li style="background:black;"><a href="scan/cad_eqp.php"><span class="glyphicon glyphicon-pencil"> CADASTRO</a></li> </span>
          <li style="background:black;"><a href="scan/buscascan_1.php"><span class="glyphicon glyphicon-search"> BUSCA</a></li></span>
        
        
                 
                
        
        </ul>



      </li>
     
      <?php } ?>
               
                   
                   
                </ul>
               


            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div  class="row" >
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Controle</small>

                        </h1>
                       
                        <ol class="breadcrumb">
                            <li class="active">
                                <i > <h4>Movimentações do dia: <marquee onmousedown="this.stop();" onmouseup="this.start();" > <?php $sql46 = mysql_query ("SELECT protocolo,empresa,tipo_reg from PRINCIPAL where day(data) = day(NOW()) AND  YEAR(data) = YEAR(NOW()) and month(data) = month(NOW()) ;" );
 while ($dado = mysql_fetch_assoc($sql46)){


  echo 'EQUIPAMENTO: Protocolo: '.$protocolo = $dado["protocolo"];
  echo ' Empresa: '.  $empresa = $dado["empresa"];
  echo ' Tipo: '. $tipo = $dado["tipo_reg"].' / ';

} ?><br> <?php $sql47 = mysql_query ("SELECT cabo,cliente  from cabos where day(data) = day(NOW()) AND  YEAR(data) = YEAR(NOW()) and month(data) = month(NOW()) ;" );
 while ($dado = mysql_fetch_assoc($sql47)){


  echo 'CABEAMENTO: Cabo: '. $cabo = $dado["cabo"];
  echo ' Cliente: '. $cliente = $dado["cliente"].' / ';


} ?></marquee></h4></i>
                            </li>
                        </ol>

                    </div>
                </div>
                <!-- /.row -->

           
                <!-- /.row -->

                <div id="columnchart_material" style="width: 800px; height: 500px;"></div><br><br>
                <div id="top_x_div" style="width: 800px; height: 600px;"></div><br><br><br>
                <div id="top_x_div2" style="width: 400px; height: 300px;"></div><br><br><br>
                <div id="piechart_3d" style="width: 900px; height: 500px;"></div>











                <!-- /.row -->



               
              <p style="margin-right:9%; font-size: 10px;"><strong>© Copyright Desenvolvimento Rudinei Rossales  </strong></p>

</body>

</html>
