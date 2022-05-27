<?php
  //include('C:\wamp\www\Mini Project\Patient\php\navbar.php');
  session_start();
  include('php/connect.php');
  if(isset($_POST['submit']))
  {
    $usr=$_POST['usr'];
    $pass=$_POST['pass'];
    $query="SELECT * FROM login WHERE (usr='$usr'AND pass='$pass')";
    $result=mysql_query($query,$con);
    echo $result;
    if(mysql_num_rows($result)>0)
    {
      $_SESSION['uname']=$usr;
      $_SESSION['pass']=$pass;
      header("location:prescription_rec.php");
    }
    else{
      echo '<script>alert ("User dosent exist");
                 window.location.href="registration_r.php";
           </script>';
    }
  }
    ?>
<html>
  <head>
  <link rel="stylesheet" href="css/login_r.css" type="text/css">
  </head>
  <body>
    <div class="loginbox">
      <h2>RECEPTIONIST LOGIN</h2>
      <form method="post" action="">
      <div class="insert">
        <input type="text" name="usr" required><label>Username</label>
      </div>
      <div class="insert">
      <input type="password" name="pass" required><label>Password</label>
      </div>
      <div class="button">
        
      <button type="submit" name="submit">Submit</button>

      </div>
      <div class="links">
      
      <a href="registration_r.php">Not a Member?SignUp</a>
      </div>
      </form>
    </div>
  </body>
</html>
