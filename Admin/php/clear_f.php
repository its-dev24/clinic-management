<?php
    $id=$_REQUEST['id'];
    if(!isset($_SESSION))
    {
        session_start();
    }
    include('connect.php');
    $q=mysql_query("DELETE FROM feedback WHERE f_id='$id'");
    header("location:../feed.php");
?>