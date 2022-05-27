<?php 
    include("php/side_bar_r.php");
    include("php/navbar1.php");
    include('C:\wamp\www\Mini Project\Receptionist\php\footer_rec.php');
    
    if(!isset($_SESSION))
    {
        session_start();
    }
    include('php/connect.php');
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
   // echo '<script type="text/javascript">alert("'.$fname.'");</script>';
   ?>
   <html>
       <head>
           <link rel="stylesheet" href="css/profile_r.css">
       </head>
       <body>
           <div class="profile-image"><img src="images/profile.png" height="250" width="250"></div>
           <div class="profile-content">
               <form methood="post" action="php/update.php">
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
                    <label>USERNAME: <label><input type="text" value="<?php echo $usrname;?>" readonly>
                    </div>
                    <div class="right">
                    <label>EMAIL: <label><input type="email"value="<?php echo $email;?>" readonly>
                    </div>
                    <div class="left">
                    <label>PHN: <label><input type="number" value="<?php echo $phn;?>" readonly>
                    </div>
                   <button type="submit">UPDATE</button>
               </form>
           </div>
       </body>
   </html> 