<?php
    $id=$_REQUEST['id'];
    if(!isset($_SESSION))
    {
        session_start();
    }
    include('connect.php');
    $q=mysql_query("DELETE FROM reception WHERE r_id='$id'");
    header("location:../p_details.php");
?>