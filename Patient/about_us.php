<?php
    if(!isset($_SESSION))
    {
    session_start();
    }
    
    $t=$_SESSION['token'];
   // echo "<br><br><br>".$t;
    if($t=="0")
    {
    include('C:\wamp\www\Mini Project\Patient\php\navbar.php');
    }
    else
    {
        include('C:\wamp\www\Mini Project\Patient\php\navbooked.php');
    }
    include('C:\wamp\www\Mini Project\Patient\php\footer.php');
    ?>
<html>
    <head>
        <link rel="stylesheet" href="css/about_us.css">
    </head>
    <body>
        <?php 
        include('php/side_bar.php');
        ?>
        <div class="about-main">
            <div class="about-image"></div>
            <div class="about-text">
            <p>This is an I.T empowered Medical Management Company giving qualified Doctors to treat essential social insurance issues in the solace of your home or office. Visit to the specialist’s facility for treatment can be awkward and tedious, for the patient as well as for relatives also.

Venturing out to the Clinic/Hospital, confronting the danger of introduction to doctor’s facility or clinical germs, ceasing over at the therapeutic store or at the Pathology Lab for examination for the most part removes time from another beneficial movement.</p><p>

PQR is an answer for a stay away from this by asking for a Doctor to visit your home, office or place of work.

A quick, proficient, and financially savvy strategy to get treatment in the solace of your home or office results in better Doctor-Patient communication and treatment.</p>


            </div>
        </div>

    </body>
    </html>