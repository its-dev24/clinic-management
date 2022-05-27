<?php
 include('php/sidebar_1.php');
 include('php/navbar.php');
 include('php/footer.php');
 include('php/connect.php');
 $q=mysql_query("select * from reception");
 ?>
 <html>
     <head>
         <link rel="stylesheet" href="css/p_details.css">
     </head>
     <body>
        <div class="table-main">
        <div class="prec-table"><?php 
                echo "<table border='1'>
                echo <table>
                <tr>
                <th>USER ID</th>
                <th>NAME</th>
                <th>AGE</th>
                <th>GENDER</th>
                <th>PHN</th>
                <th></th>
                </tr>";
                while($rows=mysql_fetch_array($q))
                {
                    
                echo"<tr>";
                echo "<td>".$rows['r_id']."</td>";
                echo "<td>".$rows['fname']." ".$rows['lname']."</td>";
                echo "<td>".$rows['age']."</td>";
                echo "<td>".$rows['gender']."</td>";
                echo "<td>".$rows['phn']."</td>";
                    ?>
                    <td><a href="php/clear_p.php?id=<?php echo $rows['r_id']?>">CLEAR</a></td>
                  <?php echo "</tr>";
                    }
                echo "</table>"; 
                  ?> 
                
                </div>
        </div>
     </body>
 </html>
