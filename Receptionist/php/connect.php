<?php
    $host='localhost';
    $user='root';
    $pass='';
    $database='clinic';
    $con=mysql_connect($host,$user,$pass);
    if(!$con)
    {
        die('connection failed'.mysql_error($con));
    }
    
    mysql_select_db($database,$con);

    
    ?>