<?php 
 if(!isset($_SESSION))
 {
     session_start();
 }
 include('php/connect.php');
    include("php/side_bar_r.php");
    include("php/navbar1.php");
    include('C:\wamp\www\Mini Project\Receptionist\php\footer_rec.php');
    $result=mysql_query("select * from appo_today");
    $rows=mysql_fetch_array($result);
    

    ?>
  <html>
      <head>
          <link rel="stylesheet" href="css/bookings.css">
      </head>
      <body>
      <div class="date-main"><div class="date"><h1><?php echo date("Y/m/d"); ?></h1></div></div>
          <div class="bookings"> <?php 
                echo "<table>
                    <tr>
                    <th>TOKEN NO</th>
                    <th>NAME</th>
                    <th>BOOKING TIME</th?
                    </tr>";
                    while($rows=mysql_fetch_array($result))
                    {
                        $id=$rows['usr_id'];
                        $result2=mysql_query("select * from patient where usr_id='$id'");
                        $row2=mysql_fetch_array($result2);
                    echo"<tr>";
                    echo "<td>".$rows['appo_id']."</td>";
                    echo "<td>".$row2['fname']." ".$row2['lname']."</td>";
                    echo "<td>".$rows['time']."</td>";
                   echo "</tr>";
                    }
                echo "</table>"; 
                  ?>  </div>
          
      </body>
  </html>     