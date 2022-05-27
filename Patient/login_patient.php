<?php
  session_start();
  $erroruser="";
  include('php/connect.php');
  if(isset($_POST['submit']))
  {
    $usr=$_POST['usr'];
    $pass=$_POST['pass'];
    $query="SELECT * FROM login WHERE(usr='$usr'AND pass='$pass' AND type='user')";
    $result=mysql_query($query,$con);
    if(mysql_num_rows($result)>0)
    {
      header("location:patient_dash.php");
      $_SESSION['uname']=$usr;
      $_SESSION['pass']=$pass;
      $_SESSION['token']="0";
    }
    else{
          $erroruser="*No account exist.Sign UP?";
    }
  }
    ?>
<html>
  <head>
  <link rel="stylesheet" href="css/login_p.css" type="text/css">
  </head>
  <body>
    <div class="loginbox">
      <h2>PATIENT LOGIN</h2>
      <form method="post" action="">
      <div class="insert">
        <input type="text" name="usr" required><label>Username</label>
       
      </div>
      <div class="insert">
      <input type="password" name="pass" required><label>Password</label>
      <div class="error"><?php echo $erroruser;?></div>
      </div>
      
      <div class="button">  
      <button type="submit" name="submit">Submit</button>
      </div>
      <div class="links">
      
      <a href="regform_patient.php">Not a Member?SignUp</a>
      </div>
      </form>
    </div>
  </body>
</html>
