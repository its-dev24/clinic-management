<?php
    include("php/side_bar_r.php");
    include("php/navbar1.php");
    include('C:\wamp\www\Mini Project\Receptionist\php\footer_rec.php');
    if(!isset($_SESSION))
    {
        session_start();
    }
    ?>
    <html>
       <head>
           <link rel="stylesheet" href="css/doctor_details.css">
       </head>
       <body>
           <div class="profile-image"><img src="images/doctor2.png" height="250" width="250"></div>
           <div class="profile-content">
               <form>
                   <div class="left">
                   <label>FIRST NAME: <label><input type="text" value="ARUN" readonly>
                    </div>
                    <div class="right">
                   <label>LAST NAME: <label><input type="text" value="KUMAR" readonly>
                    </div>
                    <div class="left">
                   <label>AGE: <label><input type="number" value="56" readonly>
                    </div>
                    <div class="right">
                   <label>GENDER: <label><input type="text" value="MALE" readonly>
                    </div>
                    <div class="left">
                    <label>SPECILISATION: <label><input type="text" value="PHYSICIAN" readonly>
                    </div>
                    <div class="right">
                    <label>EMAIL: <label><input type="email"value="arunkumar@gmail.com" readonly>
                    </div>
                    <div class="left">
                    <label>PHN: <label><input type="number" value="7854156189" readonly>
                    </div>
                    <div class="right">
                    
                
               </form>
           </div>
       </body>
   </html> 