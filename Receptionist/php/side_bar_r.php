
<html>
    <head>
    <style>
       body{
    display:flex;
    height:100vh;
    overflow: hidden;
    position: fixed;
}
div.details{
    position:relative;
    align-items: center;
    padding:20px;
   top:-10px;
   left:-5px;
    background:black;
    border-right: 2px solid skyblue;
    height:100%;
    width:200px;
    opacity: .9;
}
div.box{
    position: relative;
    top:150px;
    
    display:block;
}
div.detailslink{
   position: relative;
    margin:10px 0;
    justify-content: center;
    align-items: center;
    padding-top: 0px;
    
    
}
.detailslink a{
    position:relative;
    font-size: 19px;
    color:white;
    text-decoration: none;
    transition:0.5s;
    left:27px;
}
.title h2{
    position:absolute;
    color:white;
    font-size: 17px;
    top:25px;
    left:60px;

}
.icon img{
    height:60px;
    width:60px;
}
div.title_img{
    position:fixed;
    z-index: 100;
    top:75px;
    margin-bottom:5px;
    
}
.detailslink:hover{
    
    
    border-right: 5px solid hotpink;
}
.detailslink a:hover{
    color:hotpink;
}
.icon2{
    position:relative;
    top:20px;
    padding-top: 0px;;

}
.icon2 img{
    height:15px;
    width:15px;
}


    </style>
    </head>
    <body>   
        <div class="details">
            <div class="box">
                <div class="title_img">
            <div class="title">
             <div class="icon"> <img src="images/rec_icon.png"></div>
             <h2>RECEPTIONIST</h2>
            </div>
            </div>
            <div class="detailslink">
            <div class="icon2"> <img src="images/pro.png"></div><a href="profile_r.php">PROFILE</a><br>
        </div>
        <div class="detailslink">
        <div class="icon2"> <img src="images/pait.png"></div> <a href="p_details.php">PATIENT DETAILS</a><br>
        </div>    
        <div class="detailslink">
        <div class="icon2"> <img src="images/doc.png"></div> <a href="doctor_details.php">DOCTOR DETAILS</a><br>
        </div>
        <div class="detailslink">
        <div class="icon2"> <img src="images/book.png"></div> <a href="bookings.php">BOOKINGS</a><br>
        </div>  
        <div class="detailslink">
        <div class="icon2"> <img src="images/prsc.png"></div><a href="prescription_rec.php">PRESCRIPTIONS</a><br>
        </div>    
</div>
       </div>        
    </body>    
</html> 