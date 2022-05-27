<?php
    include('php/connect.php');
    $errorphn=$errorexistinguser=$errorpass=" ";
    //for values not disappearing 
    $fname=$lname=$age=$gender=$usr=$pass=$place=$phn=$bg=$email=$pass2=" ";
    if(isset($_POST['submit']))
    {
        $error=0;
        
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $usr=$_POST['usr'];
        $pass=$_POST['pass'];
        $place=$_POST['place'];
        $phn=$_POST['phn'];
        $bg=$_POST['bg'];
        $email=$_POST['mail'];
        $pass2=$_POST['pass2'];
        $check="SELECT * FROM login WHERE(usr='$usr')";
        $res3=mysql_query($check,$con);
        if(mysql_num_rows($res3)>0)
        {
           // $errorexistinguser="User already exist";
            $error=1;
           echo '<script>alert ("User already exist");
                 window.location.href="login_patient.php";
           </script>';
            
        }
        if(strlen($phn)!=10)
        {
            $errorphn="Phone number must have 10 digit";
            $error=1;
        }
        if($pass!=$pass2)
        {
            $errorpass="Password Doesn't Match";
            $error=1;
        }
        if($error==0)
        {
        
        
        $sql1="INSERT INTO patient(fname,lname,age,gender,email,usr,place,phn,bg) values ('$fname', '$lname', '$age', '$gender', '$email', '$usr', '$place', '$phn', '$bg');";
        $sql2="INSERT INTO login(usr,pass,type) values('$usr', '$pass','user')";
        $res=mysql_query($sql1,$con);
        $res2=mysql_query($sql2,$con);
        if($res and $res2)
        {
            echo "Account Created Sucessfully";
            header("location:login_patient.php");
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
<link rel="stylesheet" href="css/reg_p.css" type="text/css">
</head>
    <body>
        
        <div class="regform">
            <h2>PATIENT REGISTRATION FORM</h2>
        <form method="post" action="">
            <div class="details">
        <label>First Name</label><input type="text" name="fname" value="<?php echo $fname;?>" required>
            </div>
            <div class="details2">
        <label>Last Name</label><input type="text" name="lname" value="<?php echo $lname;?>" required>
            </div>
            <div class="details">
        <label>Age</label><input type="number"  name="age" value="<?php echo $age;?>" required>
            </div>
            <div class="details2">    
        <label>Gender</label>
        <input type="radio" name="gender" value="M" required><label class="radioname">Male</label>
        <input type="radio" name="gender" value="F" required><label class="radioname">Females</label>
            </div>
            <div class="details">
        <label>Username</label><input type="text" name="usr" required>
            </div>
            <div class="details2">
                <label>Password</label><input type="password" name="pass" required>
                <label>Confirm Password</label><input type="password" name="pass2" required><br><div class="error2"><?php echo $errorpass;?></div>
            </div>   
            <div class="details">
        <label>Place</label><input type="text" name="place" value="<?php echo $place;?>" required>
            </div>
            <div class="details2">
        <label>Phone</label><input type="number" name="phn" value="<?php echo $phn;?>" required maxlength="10"><br><div class="error"><?php echo $errorphn;?></div>
            </div>
            <div class="details">
        <label>Blood Group</label>
        <select name="bg">
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="A+">A+</option>
            <option value="A+">A-</option>
            <option value="B+">B+</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
        </div>
        <div class="details2">
            <label>Email</label><input type="email" name="mail" value="<?php echo $email;?>" required>
        </div> 
           <div class="button"> 
        <button type="Submit" name="submit">REGISTER</button><button type="reset">RESET</button>
        </div>
        </form>
        </div>
    </body>   
</html>
