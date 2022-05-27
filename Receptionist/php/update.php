<?php 
    include("side_bar_r.php");
    include("navbar1.php");
    include('C:\wamp\www\Mini Project\Receptionist\php\footer_rec.php');
    
    if(!isset($_SESSION))
    {
        session_start();
    }
    include('connect.php');
    $a=$_SESSION['uname'];
    $q=mysql_query("select * from reception where usr='$a'");
    $result=mysql_fetch_array($q);
    $fname=$result['fname'];
    $lname=$result['lname'];
    $age=$result['age'];
    $gender=$result['gender'];
    $usrname=$result['usr'];
    $email=$result['email'];
    $phn=$result['phn'];
   ?>
   <html>
       <head>
           <link rel="stylesheet" href="css/update.css">
       </head>
       <body>
           <div class="profile-image"><img src="images/profile.png" height="250" width="250"></div>
           <div class="profile-content">
               <form method="post" action=" ">
               <div class="left">
                   <label>FIRST NAME: <label><input type="text" value="<?php echo $fname;?>" name="fn" >
                    </div>
                    <div class="right">
                   <label>LAST NAME: <label><input type="text" value="<?php echo $lname;?>" name="ln" >
                    </div>
                    <div class="left">
                   <label>AGE: <label><input type="number" value="<?php echo $age;?>" name="age" >
                    </div>
                    <div class="right">
                   <label>GENDER: <label><input type="text" value="<?php echo $gender;?>" name="gen" >
                    </div>
                    <div class="left">
                    <label>USERNAME: <label><input type="text" value="<?php echo $usrname;?>" name="usrn" readonly>
                    </div>
                    <div class="right">
                    <label>EMAIL: <label><input type="email"value="<?php echo $email;?>" name="mail">
                    </div>
                    <div class="left">
                    <label>PHN: <label><input type="number" value="<?php echo $phn;?>" name="phn">
                    </div>
                   <button type="submit" name="save">SAVE</button>
               </form>
           </div>
       </body>
   </html> 
   <?php
   if(isset($_POST['save']))
   {
   //echo '<script type="text/javascript">alert("'."inside".'");</script>';
    $fname1=$_POST['fn'];
    $lname2=$_POST['ln'];
    $age2=$_POST['age'];
    $gender2=$_POST['gen'];
    $usrn=$_POST['usrn'];
    $email2=$_POST['mail'];
    $phn2=$_POST['phn'];
   // echo '<script type="text/javascript">alert("'.$a.'");</script>';
    $result3=mysql_query("UPDATE reception SET fname='$fname1' WHERE usr='$a'");
    $result4=mysql_query("UPDATE reception SET lname='$lname2' WHERE usr='$a'");
    $result5=mysql_query("UPDATE reception SET age='$age2' WHERE usr='$a'");
    $result3=mysql_query("UPDATE reception SET gender='$gender2' WHERE usr='$a'");
    $result3=mysql_query("UPDATE reception SET email='$email2' WHERE usr='$a'");
    $result3=mysql_query("UPDATE reception SET phn='$phn2' WHERE usr='$a'");

    if(!$result3)
    {
        echo '<script type="text/javascript">alert("'."error".'");</script>';
    }
    else
    {
        echo '<script type="text/javascript">alert("'."value inserted successfully".'");</script>';
        header("location:../prescription_rec.php");
    }
   }
   ?>