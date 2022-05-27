<?php 
    include("php/side_bar_r.php");
    include("php/navbar1.php");
    include('C:\wamp\www\Mini Project\Receptionist\php\footer_rec.php');
    if(!isset($_SESSION))
    {
        session_start();
    }
    include('php/connect.php');
    $result=mysql_query("select * from patient");
  ?>
   <html>
      <head>
          <link rel="stylesheet" href="css/p_details.css">
      </head>
      <body>
      <div class="date-main"><div class="date"><h1><?php echo date("Y/m/d"); ?></h1></div></div>
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
                    echo "<td>".$rows['bg']."</td>";
                   echo "</tr>";

                    }
                echo "</table>"; 
                  ?>  
                  </div>
          
      </body>
  </html>       