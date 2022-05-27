<?php
 include('php/sidebar_1.php');
 include('php/navbar.php');
 include('php/footer.php');
 include('php/connect.php');
 $result=mysql_query("SELECT count(*) FROM reception");
    $r = mysql_fetch_array($result);
    $totalr=$r[0];
    $result2=mysql_query("SELECT count(*) FROM patient");
    $r2 = mysql_fetch_array($result2);
    $totalp=$r2[0];
    $result3=mysql_query("SELECT count(*) FROM appo_today");
    $r3 = mysql_fetch_array($result3);
    $totala=$r3[0];
?>
<html>
    <head>
        <link rel="stylesheet" href="css/admin_dash.css">
    </head>
    <body>
        <div class="rec"><div class="rec-main"><h1>RECEPTIONIST<h1></div><div class="rec-sub"><h2><?php echo $totalr;?></h2></div></div>
        <div class="patient"><div class="rec-main"><h1>PATIENTS<h1></div><div class="rec-sub"><h2><?php echo $totalp;?></h2></div></div>
        <div class="today"><div class="rec-main"><h1>APPOINTMENTS<h1></div><div class="rec-sub"><h2><?php echo $totala;?></h2></div></div>
        <div class="bottom"></div>  
    </body>
</html>