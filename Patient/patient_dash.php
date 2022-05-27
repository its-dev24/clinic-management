<?php
   include('C:\wamp\www\Mini Project\Patient\php\navbar.php');
    include('C:\wamp\www\Mini Project\Patient\php\footer.php');
    $a=$_SESSION['uname'];
    $result=mysql_query("select usr_id from patient where usr='$a'");
    $row=mysql_fetch_array($result);
    $usr= $row['usr_id'];
    $q=mysql_query("select * from prescription where usr_id='$usr'");
    
    
    ?>
<html>
    <head>
        <link href="css/patient_dash.css" rel="stylesheet" >
        <link href="css/booked.css" rel="stylesheet">
    </head>
    <body>   
        <div class="details">
            <div class="box">
                <div class="title_img">
            <div class="title">
             <div class="icon"> <img src="images/patient_icon.png"></div>
             <h2>PATIENT</h2>
            </div>
            </div>
            <div class="detailslink">
            <div class="icon2"> <img src="images/user.png"></div><a href="profile_p.php">PROFILE</a><br>
        </div>
        <div class="detailslink">
        <div class="icon2"> <img src="images/doctor.png"></div> <a href="doctor_details.php">DOCTOR DETAILS</a><br>
        </div>    
        <div class="detailslink">
        <div class="icon2"> <img src="images/.png"></div> <a href="about_us.php">ABOUT US</a><br>
        </div>
        <div class="detailslink">
        <div class="icon2"> <img src="images/feedback.png"></div> <a href="feedback.php">FEEDBACK</a><br>
        </div>      
</div>
       </div>  
       <div class="token-main">
           <div class="token">
               <h1>TOKEN NO: -</h1>
            </div>
            <div class="news">
               <marquee direction="up" scrollamount="5" height="300px">
                  <p>•	First-in-region targeted liver cancer therapy gives patients new hope</p>
                      <p>•	The spike protein mediates the coronavirus entry into host cells</p>
                          <p> •	Susanna Soon-Chun Park, left, with Mark Mannis at the induction ceremony.
Susanna Park inducted as holder of Roth Endowed Chair for Discovery, Education and Patient Care
</p>
                   
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