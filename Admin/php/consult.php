<?php
 include('sidebar_1.php');
 include('navbar.php');
 include('footer.php');
 include('connect.php');
 $id=$_REQUEST['id'];
 $q=mysql_query("select * from patient where usr_id='$id'");
 $result1=mysql_fetch_array($q);
 $n=$result1['fname'];
 $q2=mysql_query("select * from prescription where usr_id='$id'");

 ?>
 <html>
     <head>
         <link rel="stylesheet" href="consult.css">
     </head>
     <body>
     <div class="profile-content">
               
                   <div class="left">
                   <label>FIRST NAME: <label><input type="text" value="<?php echo $result1['fname'];?>" readonly>
                    </div>
                    <div class="right">
                   <label>LAST NAME: <label><input type="text" value="<?php echo $result1['lname'];?>" readonly>
                    </div>
                    <div class="left">
                   <label>AGE: <label><input type="number" value="<?php echo $result1['age'];?>" readonly>
                    </div>
                    <div class="right">
                   <label>BLOOD GROUP: <label><input type="text" value="<?php echo $result1['bg'];?>" readonly>
                    </div>
                    
               
           </div>
           <div class="prec">
           <div class="prec-table"><?php 
                echo "<table>
                    <tr>
                    <th>DATE</th>
                    <th>PRESCRIPTION</th>
                    <th></th>
                    </tr>";
                    while($rows=mysql_fetch_array($q2))
                    {
                    echo"<tr>";
                    echo "<td>".$rows['date']."</td>";
                    echo "<td>".$rows['prec']."</td>";
                    ?>
                  <?php echo "</tr>";
                    }
                echo "</table>"; 
                  ?> 
                
                </div>

           </div>
           <div class="text">
           <form action=" " method="post">
               <h6>PRESCRIPTION</h6>
               <textarea name="pr"></textarea>
               <button type="submit" name="submit">DONE</button>
                </div>
            </form>
     </body>
 </html>
 <?php
 if(isset($_POST['submit']))
 {
    $q=mysql_query("select * from patient where usr_id='$id'");
    $result1=mysql_fetch_array($q);
    $n=$result1['fname'];
    $q2=mysql_query("select * from prescription where usr_id='$id'");
     $p=$_POST['pr'];
     $q3=mysql_query("insert into prescription (usr_id,prec) values('$id','$p')");
     $q4=mysql_query("insert into presc_today (usr_id,presc) values('$id','$p')");
    if(!isset($_SESSION))
    {
        session_start();
    }
    $q6=mysql_query("DELETE FROM appo_today WHERE usr_id='$id'");
   // header("location:../book.php");
}
?>

