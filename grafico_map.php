
<?php

include "coon.php"; 

$sql1 = mysql_query ("SELECT count(*) as day_1 from map where day(data) = '01' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql1 )){


  $day_1 = $dado["day_1"];


 } 

 $sql2 = mysql_query ("SELECT count(*) as day_2 from map where day(data) = '02' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql2 )){

    $day_2 = $dado["day_2"];
  

 } 


 $sql3 = mysql_query ("SELECT count(*) as day_3 from map where day(data) = '03' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql3 )){


    $day_3 = $dado["day_3"];
   

 } 

 $sql4 = mysql_query ("SELECT count(*) as day_4 from map where day(data) = '04' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql4 )){


    $day_4 = $dado["day_4"];
   

 } 


 $sql5 = mysql_query ("SELECT count(*) as day_5 from map where day(data) = '05' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql5 )){


    $day_5 = $dado["day_5"];
   

 } 


 $sql6 = mysql_query ("SELECT count(*) as day_6 from map where day(data) = '06' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql6 )){


    $day_6 = $dado["day_6"];


 } 

 $sql7 = mysql_query ("SELECT count(*) as day_7 from map where day(data) = '07' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql7 )){


    $day_7 = $dado["day_7"];
  

 } 


 $sql8 = mysql_query ("SELECT count(*) as day_8 from map where day(data) = '08' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql8 )){


    $day_8 = $dado["day_8"];
    


 } 

 $sql9 = mysql_query ("SELECT count(*) as day_9 from map where day(data) = '09' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql9 )){


    $day_9 = $dado["day_9"];
 

 } 


 $sql10 = mysql_query ("SELECT count(*) as day_10 from map where day(data) = '10' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql10 )){


    $day_10 = $dado["day_10"];
    

 } 


  $sql11 = mysql_query ("SELECT count(*) as day_11 from map where day(data) = '11' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql11 )){


    $day_11 = $dado["day_11"];
    

 } 

  $sql12 = mysql_query ("SELECT count(*) as day_12 from map where day(data) = '12' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql12 )){


    $day_12 = $dado["day_12"];
  
 } 


 


 $sql15 = mysql_query ("SELECT count(*) as day_13 from map where day(data) = '13' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql15 )){


    $day_13 = $dado["day_13"];
  
 }

 $sql16 = mysql_query ("SELECT count(*) as day_14 from map where day(data) = '14' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql16 )){


    $day_14 = $dado["day_14"];
  
 }

 $sql17 = mysql_query ("SELECT count(*) as day_15 from map where day(data) = '15' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql17 )){


    $day_15 = $dado["day_15"];
  
 }


 $sql18 = mysql_query ("SELECT count(*) as day_16 from map where day(data) = '16' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql18 )){


    $day_16 = $dado["day_16"];
  
 }

 $sql19 = mysql_query ("SELECT count(*) as day_17 from map where day(data) = '17' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql19 )){


    $day_17 = $dado["day_17"];
  
 }


 $sql20 = mysql_query ("SELECT count(*) as day_18 from map where day(data) = '18' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql20 )){


    $day_18 = $dado["day_18"];
  
 }


 $sql21 = mysql_query ("SELECT count(*) as day_19 from map where day(data) = '19' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql21 )){


    $day_19 = $dado["day_19"];
  
 }


 $sql22 = mysql_query ("SELECT count(*) as day_20 from map where day(data) = '20' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql22 )){


    $day_20 = $dado["day_20"];
  
 }


 $sql23 = mysql_query ("SELECT count(*) as day_21 from map where day(data) = '21' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql23 )){


    $day_21 = $dado["day_21"];
  
 }


 $sql24 = mysql_query ("SELECT count(*) as day_22 from map where day(data) = '22' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql24 )){


    $day_22 = $dado["day_22"];
  
 }

 $sql25 = mysql_query ("SELECT count(*) as day_23 from map where day(data) = '23' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql25 )){


    $day_23 = $dado["day_23"];
  
 }

 $sql26 = mysql_query ("SELECT count(*) as day_24 from map where day(data) = '24' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql26 )){


    $day_24 = $dado["day_24"];
  
 }

 $sql27 = mysql_query ("SELECT count(*) as day_25 from map where day(data) = '25' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql27 )){


    $day_25 = $dado["day_25"];
  
 }

 $sql28 = mysql_query ("SELECT count(*) as day_26 from map where day(data) = '26' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql28 )){


    $day_26 = $dado["day_26"];
  
 }


 $sql29 = mysql_query ("SELECT count(*) as day_27 from map where day(data) = '27' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql29 )){


    $day_27 = $dado["day_27"];
  
 }


 $sql30 = mysql_query ("SELECT count(*) as day_28 from map where day(data) = '28' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql30 )){


    $day_28 = $dado["day_28"];
  
 }


 $sql31 = mysql_query ("SELECT count(*) as day_29 from map where day(data) = '29' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql31 )){


    $day_29 = $dado["day_29"];
  
 }

 $sql32 = mysql_query ("SELECT count(*) as day_30 from map where day(data) = '30' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql32 )){


    $day_30 = $dado["day_30"];
  
 }

 $sql33 = mysql_query ("SELECT count(*) as day_31 from map where day(data) = '31' and MONTH(data) = MONTH(now()) and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql33 )){


    $day_31 = $dado["day_31"];
  
 }




 // =========================== GRÁFICO REGUA ============================================

 $sql34 = mysql_query ("select  count(*) as A  from map where  regua = 'A'" );
 while ($dado = mysql_fetch_assoc($sql34 )){


    $A = $dado["A"];
  
 }


 $sql35 = mysql_query ("select  count(*) as B  from map where  regua = 'A'" );
 while ($dado = mysql_fetch_assoc($sql35 )){


    $B = $dado["B"];
  
 }

 // ======================= GRÁFICO DE TOTAL ============================


 $sql36 = mysql_query ("select  count(*) as TOT  from map ;" );
 while ($dado = mysql_fetch_assoc($sql36 )){


    $TOT = $dado["TOT"];
  
 }


 ?>