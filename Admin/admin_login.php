<?php
  session_start();
  include('php/connect.php');
  if(isset($_POST['submit']))
  {
    $usr=$_POST['usr'];
    $pass=$_POST['pass'];
    $query="SELECT * FROM admin_login WHERE (admin_id='$usr'AND pass='$pass')";
    $result=mysql_query($query,$con);
    if(mysql_num_rows($result)>0)
    {
      
      header("location:admin_dash.php");
    }
  }
    ?>
<html>
  <head>
  <link rel="stylesheet" href="css/admin_login.css" type="text/css">
  </head>
  <body>
    <div class="loginbox">
      <h2>ADMIN LOGIN</h2>
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
      </form>
    </div>
  </body>
</html>
