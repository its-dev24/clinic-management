
<html>
    <head>
    </head> 
    <style>
        *{
    margin:0;
    padding:0;
}
div.navbar{
    display:flex;
    height:45px;
    width:100%;
    
    justify-content: flex-end;
    align-items: center;
    background:black;
    position:fixed;
    z-index:100;
    
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}
.button{
    position:absolute;
    justify-content: flex-end;
    right:5px;
}
.button button{
    display:inline-block;
    padding:7px;
    outline:none;
    border:none;
    background-color:black;
    color:white;
    font-size:16px;
    transition: 0.5s;
    border-right:0.5px solid rgb(41, 40, 40);
    border-left:0.5px solid rgb(41, 40, 40);
    border-radius:5px;
    padding:0px 20px;

}
button:hover{
    color:aqua;
}
.animate{
    background-color:aqua;
    height:2px;
    width:0;
    top:-30px;
    position:relative;
    transition:0.5s;
}
button:hover~.animate{
    width:50%;
}
    </style>   
    <body>
        <form action="" method="post">
        <div class="navbar">
            <div class="button">
                <ul>
            <button type="submit" name="cancel">CANCEL BOOK</button>
            <button type="submit" name="signout">SIGN OUT</button>
            <div class="animate"></div>
                </ul>
            </div>    
        </div>   
        </form>
         
    </body>    
</html>    
<?php
    if(!isset($_SESSION))
    {
    session_start();
    }
    include('connect.php');
    if(isset($_POST['signout']))
    {
        session_destroy();
        header("location:login_patient.php");
    }
    if(isset($_POST['cancel']))
    {
        $a=$_SESSION['uname'];
        $result=mysql_query("select usr_id from patient where usr='$a'");
        $row=mysql_fetch_array($result);
        $usr= $row['usr_id'];
        $q=mysql_query("DELETE FROM `appo_today` WHERE usr_id='$usr'");
        header("location:./patient_dash.php");
        $_SESSION['token']="0";
        
    }
?>