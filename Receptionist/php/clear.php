<?php
    $id=$_REQUEST['id'];
    if(!isset($_SESSION))
    {
        session_start();
    }
    include('connect.php');
    $q=mysql_query("DELETE FROM presc_today WHERE presc_id='$id'");
    header("location:../prescription_rec.php");
?>