<?php
    include('C:\wamp\www\Mini Project\Patient\php\navbooked.php');
     include('C:\wamp\www\Mini Project\Patient\php\footer.php');
     include('C:\wamp\www\Mini Project\Patient\php\side_bar.php');
        if(!isset($_SESSION))
        {
     session_start();
        }
    include('php/connect.php');
        $a=$_SESSION['uname'];
        $result=mysql_query("select usr_id from patient where usr='$a'");
        $row=mysql_fetch_array($result);
        $usr= $row['usr_id'];
        $q=mysql_query("select * from prescription where usr_id='$usr'");
        $token=$_SESSION['token'];
        
?>
<html>
    <head>
        <link rel="stylesheet" href="css/booked.css">
    </head>
    <body>
       <div class="token-main">
           <div class="token">
               <h1>TOKEN NO: <?php echo $token; ?></h1>
            </div>
            <div class="news">
               <marquee direction="up" scrollamount="5" height="300px">
                  <!-- <p><?php include("text\scroll.txt");?></p>
                      <p>   <?php include("text\scroll2.txt");?></p>
                          <p> <?php include("text\scroll3.txt");?></p>
                   ?>-->
               </marquee>
            </div>
            <div class="bottom-details">   
                <?php 
                echo "<table>
                    <tr>
                    <th>DATE</th>
                    <th>PRESCRIPTION</th>
                    </tr>";
                    while($rows=mysql_fetch_array($q))
                    {
                    echo"<tr>";
                    echo "<td>".$rows['date']."</td>";
                    echo "<td>".$rows['prec']."</td>";
                   echo "</tr>";
                    }
                echo "</table>"; 
                  ?>  
            </div>
       </div>
       
    </body>    
</html>    