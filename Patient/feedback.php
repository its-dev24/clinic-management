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
        <link href="css/patient_dash.css" rel="stylesheet" >
        <link href="css/feedback.css" rel="stylesheet">
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
            <div class="icon2"> <img src="images/user.png"></div> <a href="profile_p.php">PROFILE</a><br>
        </div>
        <div class="detailslink">
        <div class="icon2"> <img src="images/doctor.png"></div><a href="#">DOCTOR DETAILS</a><br>
        </div>    
        <div class="detailslink">
        <div class="icon2"> <img src="images/.png"></div><a href="about_us.php">ABOUT US</a><br>
        </div>
        <div class="detailslink">
            <div class="fb_tab">
            <div class="icon2"> <img src="images/feedback2.png"></div><a href="#">FEEDBACK</a><br>
            </div>
        </div>  
           
</div>
       </div> 
       <div class="feedbackmain">
           <div class="fbtitle">
               <h2>FEEDBACK</h2>
           </div>
           <form action="" method="post">
           <div class="fbinput">
               <textarea name="fb" ></textarea>
           </div>
           <div class="fbbutton">
               <button type="submit" name="submit">SUBMIT</button>
           </div>
       </div>   
</form>
    </body>    
</html>   
<?php
    include('php/connect.php');
    if(isset($_POST['submit']))
    {
    $fb=$_POST['fb'];
    $a=$_SESSION['uname'];
    $q1=mysql_query("select * from patient where usr='$a'");
    $result=mysql_fetch_array($q1);
    $b=$result['fname'];
    $q=mysql_query("insert into feedback(uname,feedback) values ('$b','$fb')");
    }
?> 