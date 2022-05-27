<?php 
    include('php/sidebar_1.php');
    include('php/navbar.php');
    include('php/footer.php');
    include('php/connect.php');
    if(!isset($_SESSION))
    {
        session_start();
    }
    include('php/connect.php');
    $result=mysql_query("select * from patient");
  ?>
   <html>
      <head>
          <link rel="stylesheet" href="css/patient_details.css">
      </head>
      <body>
      
          <div class="detail"> 
              <?php 
                echo "<table>
                    <tr>
                    <th>USER ID</th>
                    <th>NAME</th>
                    <th>AGE</th>
                    <th>GENDER</th>
                    <th>PLACE</th>
                    <th>PHN</th>
                    <th>BLOOD GROUP</th>
                    <th></th>
                    </tr>";
                    while($rows=mysql_fetch_array($result))
                    {
                        
                    echo"<tr>";
                    echo "<td>".$rows['usr_id']."</td>";
                    echo "<td>".$rows['fname']." ".$rows['lname']."</td>";
                    echo "<td>".$rows['age']."</td>";
                    echo "<td>".$rows['gender']."</td>";
                    echo "<td>".$rows['place']."</td>";
                    echo "<td>".$rows['phn']."</td>";
                    echo "<td>".$rows['bg']."</td>";?>
                    <td><a href="php/clear_pt.php?id=<?php echo $rows['usr_id']?>">CLEAR</a></td>
                  <?php echo "</tr>";

                    }
                echo "</table>"; 
                  ?>  
                  </div>
          
      </body>
  </html>       