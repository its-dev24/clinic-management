<?php
    $id=$_REQUEST['id'];
    if(!isset($_SESSION))
    {
        session_start();
    }
    include('connect.php');
    $q=mysql_query("DELETE FROM patient WHERE usr_id='$id'");
    header("location:../patient_details.php");
?>