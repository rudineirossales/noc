<?php 
      include "coon.php"; 
      include "grafico_map.php"; 
      


       


     
      
      /* inicia a sessão */
      
     
      
      
     

session_start();








if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])  )
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart3);
    function drawChart3() {
      var data = google.visualization.arrayToDataTable([
        ["Atividades", "Total", { role: "style" } ],
        ["1", <?php echo $day_1 ?>, "blue"],
        ["2", <?php echo $day_2 ?>, "blue"],
["3", <?php echo $day_3 ?>, "blue"],
["4", <?php echo $day_4 ?>, "blue"],
["5", <?php echo $day_5 ?>, "blue"],
["6", <?php echo $day_6 ?>, "blue"],
["7", <?php echo $day_7 ?>, "blue"],
["8", <?php echo $day_8 ?>, "blue"],
["9", <?php echo $day_9 ?>, "blue"],
["10", <?php echo $day_10 ?>, "blue"],
["11", <?php echo $day_11 ?>, "blue"],
["12", <?php echo $day_12 ?>, "blue"],
["13", <?php echo $day_13 ?>, "blue"],
["14", <?php echo $day_14 ?>, "blue"],
["15", <?php echo $day_15 ?>, "blue"],
["16", <?php echo $day_16 ?>, "blue"],
["17", <?php echo $day_17 ?>, "blue"],
["18", <?php echo $day_18 ?>, "blue"],
["19", <?php echo $day_19 ?>, "blue"],
["20", <?php echo $day_20 ?>, "blue"],
["21", <?php echo $day_21 ?>, "blue"],
["22", <?php echo $day_22 ?>, "blue"],
["23", <?php echo $day_23 ?>, "blue"],
["24", <?php echo $day_24 ?>, "blue"],
["25", <?php echo $day_25 ?>, "blue"],
["26", <?php echo $day_26 ?>, "blue"],
["27", <?php echo $day_27 ?>, "blue"],
["28", <?php echo $day_28 ?>, "blue"],
["29", <?php echo $day_29 ?>, "blue"],
["30", <?php echo $day_30 ?>, "blue"],
["31", <?php echo $day_31 ?>, "blue"]


      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Mapeamentos mês <?php echo date('M') ?>",
        width: 1100,
        height: 400,
        bar: {groupWidth: "55%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("line_top_x"));
      chart.draw(view, options);
  }
  </script>


<script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Régua A',    <?php echo $A ?>],
          ['Régua B',    <?php echo $B ?>]
         
          
        ]);

        var options = {
          title: 'Mapeamento Réguas <?php echo date('Y') ?> ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

   
  


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MAPEAMENTO</title>

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
 <meta http-equiv="refresh" content="120; url=dashboard_map.php"> 


</head>

<body >

    <div id="wrapper" >

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"  style="background-image: url('img/buss.jpg');">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

        
            <!-- Top Menu Items -->
            <ul  class="nav navbar-right top-nav"  > 
                <a  class="navbar-brand" href="#" > <?php echo $_SESSION["nome"]?></a>
              
                <li class="dropdown"  >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>   <b class="caret"></b></a>
                    <ul class="dropdown-menu" >
                       
                      <!--
                        <li>
                            <a href="modifica_senha.php"><i class="fa fa-fw fa-gear"></i> Trocar senha</a> 
                        </li> 
                        <li class="divider"></li> -->
                        <li >
                            <a href="Logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse"  >
                <ul class="nav navbar-nav side-nav"  style="background-color:black;">
                  
                   <li class="dropdown" style="background-color:black;" >

        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-scale" > MENU</span>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
        
         
        

      
        <li style="background:black;"><a href="cad_map.php"><span class="glyphicon glyphicon-pencil"> CADASTRO </a></li>
        
          <li style="background:black;"><a href="pesq_per_map.php"><span class="glyphicon glyphicon-calendar"> BUSCA  </a>

          

         
          
          
                 
                
        
        </ul>


        

        
      </li>
      
      
     

               
                   
                   
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
                                <i > <h4>Relatório Gráfico Mapeamento</h4></i><br>
                                <i > <h4>Total de circuitos Mapeados:  <strong style="color:red;"><?php echo $TOT ?></strong>  </h4></i>
                                  
                            </li>
                        </ol>

                    </div>
                </div>
                <!-- /.row -->

           
                <!-- /.row -->

                






                <div id="line_top_x" ></div><br><br>
                <div id="piechart_3d" style="width: 500px; height: 300px;"></div><br><br>
                

                
                

                <?php /*

$sql = mysql_query ("select  celula,count(*) as total,sum(total_enc) as encerradas from CELULAS  group by celula" );




$row = mysql_num_rows($sql);


if (mysql_num_rows($sql) > 0){*/



?>



                



























                <!-- /.row -->



               
              <p style="margin-right:9%; font-size: 10px;"><strong>© Copyright Desenvolvimento Rudinei Rossales  </strong></p>

</body>

</html>
