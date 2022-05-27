<?php
    $id=$_REQUEST['id'];
    if(!isset($_SESSION))
    {
        session_start();
    }
    include('connect.php');
    $q=mysql_query("DELETE FROM appo_today WHERE appo_id='$id'");
    header("location:../book.php");
?>