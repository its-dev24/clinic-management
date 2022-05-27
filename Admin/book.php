<?php 
 if(!isset($_SESSION))
 {
     session_start();
 }
 include('php/sidebar_1.php');
 include('php/navbar.php');
 include('php/footer.php');
 include('php/connect.php');
    $result=mysql_query("select * from appo_today");
    $rows=mysql_fetch_array($result);
    

    ?>
  <html>
      <head>
          <link rel="stylesheet" href="css/book.css">
      </head>
      <body>
          <div class="bookings"> <?php 
                echo "<table>
                    <tr>
                    <th>TOKEN NO</th>
                    <th>NAME</th>
                    <th>BOOKING TIME</th>
                    <th></th>
                    </tr>";
                    while($rows=mysql_fetch_array($result))
                    {
                        $id=$rows['usr_id'];
                        $result2=mysql_query("select * from patient where usr_id='$id'");
                        $row2=mysql_fetch_array($result2);
                    echo"<tr>";
                    echo "<td>".$rows['appo_id']."</td>";
                    echo "<td>".$row2['fname']." ".$row2['lname']."</td>";
                    echo "<td>".$rows['time']."</td>";?>
                    <td><a href="php/consult.php?id=<?php echo $rows['usr_id']?>">CONSULT</a></td>
                    <?php
                   echo "</tr>";
                    }
                echo "</table>"; 
                  ?>  </div>
          
      </body>
  </html>     