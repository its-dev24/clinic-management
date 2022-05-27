<?php 
    include("php/side_bar_r.php");
    include("php/navbar1.php");
    include('C:\wamp\www\Mini Project\Receptionist\php\footer_rec.php');
    if(!isset($_SESSION))
    {
        session_start();
    }
    include('php/connect.php');
    $q=mysql_query("select * from presc_today");
    $result=mysql_query("SELECT count(*) FROM appo_today");
    $r = mysql_fetch_array($result);
    $total=$r[0];
   // echo '<script>alert ('.$total.');
     //            window.location.href="login_patient.php";
       //    </script>';
?>
<html>
    <head>
        <link rel="stylesheet" href="css/prescription_rec.css">
    </head>
    <body>
        <div class="date-main"><div class="date"><h1><?php echo date("Y/m/d"); ?></h1></div></div>
        <div class="num">
            <div class="num-text"><h1>TODAY</h1></div>
            <div class="num-no"><h1><?php echo $total;?></h1></div>
        </div>
        <div class="prec-table"><?php 
                echo "<table>
                    <tr>
                    <th>NAME</th>
                    <th>PRESCRIPTION</th>
                    <th></th>
                    </tr>";
                    while($rows=mysql_fetch_array($q))
                    {
                    echo"<tr>";
                    echo "<td>".$rows['uname']."</td>";
                    echo "<td>".$rows['presc']."</td>";
                    ?>
                    <td><a href="php/clear.php?id=<?php echo $rows['presc_id']?>">CLEAR</a></td>
                  <?php echo "</tr>";
                    }
                echo "</table>"; 
                  ?> 
                
                </div>
                  
    </body>
</html>