<?php
 
 session_start();

 if(!isset($_SESSION['name']) || !isset($_SESSION['email'])){
  header("Location: Login.php");
  exit();
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Site made with Mobirise Website Builder v5.3.5, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.3.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="description" content="">
  <script src="//code.tidio.co/xdjls6za0brcjx1gkhmryn9inx30zsb2.js" async></script>
  
  
  <title>About</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
  <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <style>
       body
       {
           background-color: black;
           color: white;
       }
       .form5
       {
        background-color: #018786;
       }
       .mbr-section-head h3 strong
       {
        color: white;
       }
      .col11
      {
          text-align: center;
          font-family: Arial;
      }

      .col11 h2
      {
          color: #018786;
      }

      .col11 h5 
      {
          margin-left: 20%;
          margin-right: 20%;
      }
	    .sec1
	    {
	    	font-family: sans-serif;
	    	background-color: #018786;
	    	color: white;
	    	margin-left: -0.6em;
	    }
	    .sec1 p
	    {
	    	text-align: center;
	    	font-size: 2em;
	    	padding-top: 2.5%;
	    }
	    
	    .sec1 h4
	    {
	        padding-bottom: 1%;
	        margin-top: -0.5%;
	    }

		ul 
		{
            list-style-type: none;
            padding: 0;
            overflow: hidden;
            border: 1px solid #e7e7e7;
            background-color: #f1f1f1;
        }

        li
        {
            width: 14.28%;
        }

        li a 
        {
            display: block;
            color: #666666;
            text-align: center;
            font-size: 20px;
            padding: 16px 24px;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
        }

        li a:hover:not(.active)
        {
            background-color: #018786;
            color: white;
            font-weight: bold;
        }

        li a.active 
        {
            color: white;
            background-color: #4CAF50;
        }

        li button 
        {
            display: block;
            color: #666666;
            text-align: center;
            font-size: 20px;
            padding: 14px 22px;
            text-decoration: none;
            font-family: sans-serif;
            border: 0px;
        }

        li button:hover:not(.active)
        {
            background-color: #a35709;
            color: white;
            font-weight: bold;
        }

        li button.active 
        {
            color: white;
            background-color: #4CAF50;
        }

        .col1
        {
          text-align: center;
          font-family: sans-serif;
          color: green;
          border: 2px solid #018786;
          border-style: dashed;
          margin-left: 30%;
          margin-right: 30%;
        }

      .sec2
      {
        font-family: sans-serif;
        background-color: #018786;
        color: white;
        margin-left: -0.6em;
        margin-bottom: -2em;
        text-align: center;
      }
      .sec2 p
      {
        text-align: center;
        font-size: 2em;
        padding-top: 2%;
      }
        .sec2 .fa 
        {
            padding: 15px;
            font-size: 30px;
            width: 60px;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
            text-align: center;
        }

        .sec2 .fa:hover 
        {
            opacity: 0.8;
        }

        .sec2 .fa-facebook 
        {
            background: #3B5998;
            color: white;
            margin-right: 1%;
        }

        .sec2 .fa-google 
        {
           background: #dd4b39;
           color: white;
           margin-right: 1%;
        }

        .sec2 .fa-linkedin 
        {
           background: #007bb5;
           color: white;
           margin-right: 1%;
        }
        
        .sec2 .fa-youtube 
        {
           background: #bb0000;
           color: white;
           margin-right: 1%;
        }

        .sec2 .fa-instagram 
        {
           background: #125688;
           color: white;
           margin-right: 1%;
        }
        .sec2 h4
        {
            cursor: default;
        }

        .sec2 h4 a
        {
            text-decoration: none;
            font-weight: bold;
            color: white;
        }

        .sec2 h4 a:hover
        {
            text-decoration: underline;
        }


        .topnav .icon {
          display: none;
        }


        @media screen and (max-width: 950px) {
          .topnav li:not(:nth-child(7)) {display: none;}
          .topnav li.icon {
            float: right;
            display: block;
            position: relative;
          }
        }

        @media screen and (max-width: 950px) {
          .topnav.responsive {position: relative;}
          .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
          }
          li
          {
              width: 33%;
          }
          .topnav.responsive li{
            float: left;
            display: block;
            width: 100%;
            text-align: left;
          }
          .topnav.responsive li:first-child
          {
              margin-top: 12%;
          }
          .icon i
          {
            float: right;
            cursor: pointer;
            font-size: 24px;
            margin-right: 1em;
            margin-top: 0.5em;
            color: black;
          }
        }

        @media only screen and (max-width: 950px)
        {
          .col11
          {
            margin-left: 15%;
            margin-right: 15%;
          }
          .col11 h5
          {
              margin-left: 18%;
              margin-right: 18%;
          }
          .col1
          {
              margin-top: -2em;
          }
          .col2
          {
              margin-top: 1em;
              padding-top: 1.3em;
              margin-bottom: 2em;
          }
        }
        .prof
        {
            float: right;
            width: 47px;
            height: 50px;
            border-radius: 25px;
            margin-right: 4%;
            margin-top: -5em;
        }
        @media only screen and (max-width: 690px)
        {
            .col11
            {
                margin-left: 10%;
                margin-right: 10%;
            }
          .col11 h5
          {
              margin-left: 13%;
              margin-right: 13%;
          }
        }

        @media only screen and (max-width: 470px)
        {
          .col11
          {
            margin-left: 5%;
            margin-right: 5%;
          }
          .col11 h5
          {
              margin-left: 8%;
              margin-right: 8%;
          }
        }
        .col1
        {
            padding-top: 2em;
        }
        @media only screen and (max-width: 600px)
        {
            .col1
            {
                padding-bottom: 3%;
            }
        }
        
      @media only screen and (orientation: landscape) and (max-width: 950px) {
        .topnav.responsive li:first-child
        {
            margin-top: 6%;
        }
    
}
@media only screen and (min-width: 950px)
{
    .col1
    {
        margin-top: -2.2em;
    }
    .col2
    {
        margin-bottom : 3em;
        padding-top: 1.7em;
    }
}
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
    {
        display: none;
    }
        .main 
        {
            width: 90px;
            margin-top: 1.5em;
            margin-left: -7%;
        }

        .col2
        {
            margin-top: -8em;
        }

        @media only screen and (max-width: 1200px)
        {
            .col1
            {
                top: 0;
            }
            .main 
            {
                margin-left: auto;
                margin-right: auto;
                display: block;
                margin-top: 0em;
                padding-top: 1em;
            }

            .col2
            {
                margin-top: -1em;
            }
        }
    #myBtn {
  display: none;
  position: fixed;
  bottom: 10px;
  left: 48%;
  z-index: 99;
  font-size: 24px;
  border: none;
  outline: none;
  background-color: #FF7F50;
  color: white;
  font-weight: bold;
  cursor: pointer;
  padding-left: 18px;
  padding-right: 18px;
  padding-top: 10px;
  padding-bottom: 1px;
  border-radius: 25px;
}
#myBtn:hover {
  background-color: white;
  color: black;
} 

.badges
{
    width: 100%;
    display: inline-block;
}

.badges a img
{
    width: 250px;
    display: inline-block;
}

@media only screen and (max-width: )
        
  </style>
</head>
<body style="position: static;">
<section class="sec1">
    <div class="col1">
        <img class="main" src="images/logo.png">
    </div>
    <div class="col2">
	<p><b>E-Circle Hub</b></p>
  </div>
  <?php 
  $dbserver="localhost";
  $dbuser="id17115978_sinehan";
  $dbpass="@Sinehandatabase001";
  $dbname="id17115978_mydb";
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
  $result=mysqli_query($conn,"SELECT * from users");
  while($row = mysqli_fetch_assoc($result))
  {
    if($_SESSION['name']==$row['name'])
    {
     echo '<a href="profile.php"><img class="prof" src="'.$row['img'].'"></a>';
    }
 }
  ?>
	<div class="table">
	    <ul class="topnav" id="myTopnav">
            <li style="float: left;" class="active"><a href="home.php">Home</a></li>
            <li style="float: left;"><a href="friends.php">Friends</a></li>
            <li style="float: left;"><a href="post.php">Students Post</a></li>
            <li style="float: left;"><a href="funchat.php">Fun Chat</a></li>
            <li style="float: left;"><a href="announcement.php">Announcement</a></li>
            <li style="float: left;"><a href="contact.php">Contact Us</a></li>
            <li style="float: left;"><a href="about.php">About</a></li>
            <li href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
            </li>
        </ul>
    </div>
</section>
<br>
    <br>
    <div class="col11">
        <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
        <h2> About Me and My Purpose</h2><br>
        <h5> This webpages are created by student of College. The purpose of this website is to create a communication between College Students, which will make a big connection between College. We make it as user-friendly(both in PC and Mobile). Our feature plan is to make this website as a source of connection between college students and Company's that offers internships and workshops and placing ads which is relevant to Company Internship and Job Opportunities.</h5>
        <a style="text-align: center;" href="t&c.html">Terms and Conditions with Privacy Policy</a>
    </div>
  &nbsp;
  <section class="form5 cid-sA2gFX0IxF" id="form5-2">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Get in Touch</strong><br><strong><br></strong></h3>
            <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-7" style="color:white;">One of our team will be in contact with you shortly</h4>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="FNtti0K7+MNlZeDT2AP9AA0Ea/QX/vVjrC96Jsa/CTp8deBg8+6GxB1GKHlYk72mDOHlfnvfxNBtIPEvLT9Vd/PYwLg4YjLWH04JeKuDPl9b9O6fKsW+YlIC77jHAC37">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group" data-for="name">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form5-2">
                        </div>
                        <div class="col-md col-sm-12 form-group" data-for="email">
                            <input type="email" name="email" placeholder="E-mail" data-form-field="email" class="form-control" value="" id="email-form5-2">
                        </div>
                        <div data-for="phone" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input type="tel" name="phone" placeholder="Phone" data-form-field="phone" class="form-control" value="" id="phone-form5-2">
                        </div>
                        <div class="col-12 form-group" data-for="textarea">
                            <textarea name="textarea" placeholder="Message" data-form-field="textarea" class="form-control" id="textarea-form5-2"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-primary display-4">Send message</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/s"></a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/formstyler/jquery.formstyler.js"></script>  <script src="assets/formstyler/jquery.formstyler.min.js"></script>  <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
<br>
<section class="sec2">
  <p>Follow Us!</p>
    <a href="https://www.facebook.com/sinehan.s.9" target="_blank" class="fa fa-facebook"></a>
    <a href="https://sbmhss.000webhostapp.com" target="_blank" class="fa fa-google"></a>
    <a href="https://www.linkedin.com/in/sinehan-s-9576961b2/" target="_blank" class="fa fa-linkedin"></a>
    <a href="https://www.youtube.com/channel/UCDtWAZckJG5-HONoPi1oENQ" target="_blank" class="fa fa-youtube"></a>
    <a href="https://www.instagram.com/sinehan001/" target="_blank" class="fa fa-instagram"></a>
    <h4 style="padding-top: 1em;"><b>Registered &#174; 2021. Powered By <a href="https://sbmhss.000webhostapp.com" target="_blank">Sinehan.</a></b></h4>
    <h5><a href="t&c.html" style="color: white; text-decoration: none;">Terms & Conditions</a></h5><br><br>
        <div class="badges">
        <a href="https://galaxy.store/ech001" target="_blank"><img src="https://img.samsungapps.com/seller/images/badges/galaxyStore/png_big/GalaxyStore_English.png?ver=1628533390000" alt="Available on Samsung Galaxy Store" style="height: 4em;"></a>
        <a href='https://play.google.com/store/apps/details?id=com.my.ecirclehub&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank"><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png' style="height: 5.8em;"/></a>
        <br><br><br><br>
        </div>
</section>

</body>
<script>
	  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</html>