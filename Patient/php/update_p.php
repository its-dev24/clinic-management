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
   include('C:\wamp\www\Mini Project\Patient\php\side_bar.php');
   
    include('connect.php');
    $a=$_SESSION['uname'];
    $q=mysql_query("select * from patient where usr='$a'");
    $result=mysql_fetch_array($q);
    $fname=$result['fname'];
    $lname=$result['lname'];
    $age=$result['age'];
    $gender=$result['gender'];
    $usrname=$result['usr'];
    $email=$result['email'];
    $phn=$result['phn'];
    $bg=$result['bg'];
    $place=$result['place'];
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
                    <label>PLACE: <label><input type="text" value="<?php echo $place;?>" name="place" >
                    </div>
                    <div class="right">
                    <label>EMAIL: <label><input type="email"value="<?php echo $email;?>" name="mail">
                    </div>
                    <div class="left">
                    <label>PHN: <label><input type="number" value="<?php echo $phn;?>" name="phn">
                    </div>
                    <div class="right">
                    <label>BLOODGROUP: <label><input type="text"value="<?php echo $bg;?>" name="bg">
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
    $place=$_POST['place'];
    $bg=$_POST['bg'];

   // echo '<script type="text/javascript">alert("'.$a.'");</script>';
    $result3=mysql_query("UPDATE patient SET fname='$fname1' WHERE usr='$a'");
    $result4=mysql_query("UPDATE patient SET lname='$lname2' WHERE usr='$a'");
    $result5=mysql_query("UPDATE patient SET age='$age2' WHERE usr='$a'");
    $result3=mysql_query("UPDATE patient SET gender='$gender2' WHERE usr='$a'");
    $result3=mysql_query("UPDATE patient SET email='$email2' WHERE usr='$a'");
    $result3=mysql_query("UPDATE patient SET phn='$phn2' WHERE usr='$a'");
    $result3=mysql_query("UPDATE patient SET place='$place' WHERE usr='$a'");
    $result3=mysql_query("UPDATE patient SET bg='$bg' WHERE usr='$a'");



    if(!$result3)
    {
        echo '<script type="text/javascript">alert("'."error".'");</script>';
    }
    else
    {
        echo '<script type="text/javascript">alert("'."value inserted successfully".'");</script>';
        header("location:../patient_dash.php");
    }
   }
   ?>