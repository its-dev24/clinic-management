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

    include('php/connect.php');
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
   // echo '<script type="text/javascript">alert("'.$fname.'");</script>';
   ?>
   <html>
       <head>
           <link rel="stylesheet" href="css/profile_p.css">
       </head>
       <body>
           <div class="profile-image"><img src="images/profile.png" height="250" width="250"></div>
           <div class="profile-content">
               <form methood="post" action="php/update_p.php">
                   <div class="left">
                   <label>FIRST NAME: <label><input type="text" value="<?php echo $fname;?>" readonly>
                    </div>
                    <div class="right">
                   <label>LAST NAME: <label><input type="text" value="<?php echo $lname;?>" readonly>
                    </div>
                    <div class="left">
                   <label>AGE: <label><input type="number" value="<?php echo $age;?>" readonly>
                    </div>
                    <div class="right">
                   <label>GENDER: <label><input type="text" value="<?php echo $gender;?>" readonly>
                    </div>
                    <div class="left">
                    <label>PLACE: <label><input type="text" value="<?php echo $place;?>" readonly>
                    </div>
                    <div class="right">
                    <label>EMAIL: <label><input type="email"value="<?php echo $email;?>" readonly>
                    </div>
                    <div class="left">
                    <label>PHN: <label><input type="number" value="<?php echo $phn;?>" readonly>
                    </div>
                    <div class="right">
                    <label>BLODDGROUP: <label><input type="text"value="<?php echo $bg;?>" readonly>
                    </div>
                   <button type="submit">UPDATE</button>
               </form>
           </div>
       </body>
   </html> 