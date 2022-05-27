<?php
    
    include('php/connect.php');
    $errorphn=" ";
    $fname=$lname=$age=$gende=$usr=$phn=$email=" ";
    
    if(isset($_POST['submit']))
    {   
        $error=0;
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $usr=$_POST['usr'];
        $pass=$_POST['pass'];
        $phn=$_POST['phn'];
        $email=$_POST['email'];
        $check="SELECT * FROM login WHERE(usr='$usr')";
        $res3=mysql_query($check,$con);
        if(mysql_num_rows($res3)>0)
        {
            $error=1; 
            echo'<script>alert("User already exist");
            window.location.href="login_r.php";</script>';
            
        }
        if(strlen($phn)!=10)
        {
            $errorphn="Phone number must have 10 digit";
            $error=1;
        }
        
        if($error==0)
        {
            
        $sql1="INSERT INTO reception(fname,lname,age,gender,email,usr,phn) values ('$fname', '$lname', '$age', '$gender', '$email', '$usr', '$phn');";
        $sql2="INSERT INTO login(usr,pass,type) values('$usr', '$pass','rec')";
        $res=mysql_query($sql1,$con);
        $res2=mysql_query($sql2,$con);
        
        if($res2)
        {
            echo "Account Created Sucessfully";
            header("location:login_r.php");
        }
        else
        {
            echo "Account Creation Failed";
            mysql_error($con);
            exit();
        }
    }
} 
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="css/registration_R.css" type="text/css">
</head>
    <body>
        
        <div class="regform">
            <h2>RECEPTIONIST REGISTRATION FORM</h2>
        <form method="post" action="">
            <div class="details">
        <label>First Name</label><input type="text" name="fname" required>
            </div>
            <div class="details2">
        <label>Last Name</label><input type="text" name="lname" required>
            </div>
            <div class="details">
        <label>Age</label><input type="number" name="age" required>
            </div>
            <div class="details2">    
        <label>Gender</label>
        <input type="radio" name="gender" value="M" required><label class="radioname">Male</label>
        <input type="radio" name="gender" value="F" required><label class="radioname">Female</label>
            </div>
            <div class="details">
        <label>Username</label><input type="text" name="usr" required>
            </div>
            <div class="details2">
                <label>Password</label><input type="password" name="pass" required>
                <label>Confirm Password</label><input type="password" name="pass2" required>
            </div>   
            <div class="details">
        <label>Email</label><input type="email" name="email" required>
            </div>
            <div class="details2">
        <label>Phone</label><input type="number" name="phn" required><br><div class="error"><?php echo $errorphn;?></div>
            </div>
         
           <div class="button"> 
        <button type="Submit" value="Register" name="submit">REGISTER</button><button type="reset">RESET</button>
        </div>
        </form>
        </div>
    </body>   
</html>
