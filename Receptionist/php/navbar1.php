<html>
    <head>
    </head> 
    <style>
        *{
    margin:0;
    padding:0;
}
div.navbar{
    position:fixed;
    display:flex;
    height:45px;
    width:1537px;
    
    justify-content: flex-end;
    align-items: center;
    background:black;
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
    color:hotpink;
}
.animate{
    background-color:hotpink;
    height:2px;
    width:0;
    top:-30px;
    position:relative;
    transition:0.5s;
}
button:hover~.animate{
    width:100%;
}
    </style>   
    <body>
        
        <div class="navbar">
        
            <div class="button">
                <ul>
            <!--<button>Button 1</button>-->
            <form method="post" action=" ">
            <button type="submit" name="signout">SIGN OUT</button>
</form>
            <div class="animate"></div>
                </ul>
            </div>    
        </div>    
    </body>    
</html>    
<?php
            if(!isset($_SESSION))
            {
                session_start();
            }
            if(isset($_POST['signout']))
            {
            session_destroy();
            header("location:login_r.php");
            }
            ?>