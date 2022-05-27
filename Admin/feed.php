<?php
 include('php/sidebar_1.php');
 include('php/navbar.php');
 include('php/footer.php');
 include('php/connect.php');
 $q=mysql_query("select * from feedback");
 ?>
 <html>
     <head>
         <link rel="stylesheet" href="css/feed.css">
     </head>
     <body>
        <div class="table-main">
        <div class="prec-table"><?php 
                echo "<table border='1'>
                echo <table>
                <tr>
                <th>NAME</th>
                <th>FEEDBACK</th>
                <th></th>
                </tr>";
                while($rows=mysql_fetch_array($q))
                {
                    
                echo"<tr>";
                echo "<td>".$rows['uname']."</td>";
                echo "<td>".$rows['feedback']."</td>";
                    ?>
                    <td><a href="php/clear_f.php?id=<?php echo $rows['f_id']?>">CLEAR</a></td>
                  <?php echo "</tr>";
                    }
                echo "</table>"; 
                  ?> 
                
                </div>
        </div>
     </body>
 </html>
