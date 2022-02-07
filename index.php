<?php
ob_start();
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
	header("Location: home.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="uSBviatqt66qiDMO2qnfiMOAHYYNHdCENNn1svmk-gM" />
    <meta name="description" content="E-Circle Hub stands for Engineering Circle Hub. This is a Social Messaging Web Application, where students can come up with their ideas in the Fun chat.">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <title>E-Circle Hub (Only for Engineering Students)</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
    <script src="//code.tidio.co/xdjls6za0brcjx1gkhmryn9inx30zsb2.js" async></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6CR6241MFP"></script>
    <!--<script src="snow.js"></script>-->
    <script data-ad-client="ca-pub-6051644126384701" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6CR6241MFP');
</script>
<!-- Clarity tracking code for https://e-circle.000webhostapp.com/ --><script>    (function(c,l,a,r,i,t,y){        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i+"?ref=bwt";        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);    })(window, document, "clarity", "script", "7tmoh885l6");</script>
    <style>
         body
         {
            font-family: sans-serif;
            background-color: black;
            color: white;
         }
        .sec1
        {
            font-family: sans-serif;
            /*background-color: #018786;*/
            /*color: white;*/
            background-color: #FFF0F0;
            color: #257ca3;
            margin-top: -2em;
            margin-left: -0.6em;
            margin-right: -0.5em;
            border-bottom-left-radius: 20%;
            border-bottom-right-radius: 20%;
        }
        .sec1 p
        {
            text-align: center;
            font-size: 2em;
            padding-top: 2%;
            padding-bottom: 3%;
        }

      h1
      {
        text-align: center;
        font-family:  Georgia, Arial, Helvetica;
        color: white;
        background-color: #018786;
        border-radius: 25px;
        padding-top: 0.5em;
        padding-bottom: 0.5em;
        margin-left: 35%;
        margin-right: 35%;
      }

      h2
      {
        text-align: center;
        font-family:  Georgia, Arial, Helvetica;
        color: white;
        background-color: #018786;
        border-radius: 25px;
        padding-top: 0.5em;
        padding-bottom: 0.5em;
        margin-left: 35%;
        margin-right: 35%;
      }

      .col3
      {
        text-align: center;
        font-size: 28px;
        margin-left: 10%;
        margin-right: 10%;
      }

      .sec2
      {
        font-family: sans-serif;
        /*background-color: #018786;*/
        /*color: white;*/
        background-color: #FFF0F0;
        color: #257ca3;
        margin-left: -0.6em;
        margin-right: -0.5em;
        margin-bottom: -2em;
        text-align: center;
        border-top-left-radius: 10%;
        border-top-right-radius: 10%;
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
            width: 30px;
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
        .sec2 h2
        {
            cursor: default;
        }

        .sec2 h2 a
        {
            text-decoration: none;
            color: white;
        }

        .sec2 h2 a:hover
        {
            text-decoration: underline;
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
@media only screen and (max-width: 950px)
{
    .col2
    {
        padding-top: 2.3%;
    }

    h1
    {
        margin-left: 20%;
        margin-right: 20%;
    }
    h2
    {
        margin-left: 20%;
        margin-right: 20%;
    }
}
@media only screen and (max-width: 650px)
{
    .col2
    {
        padding-top: 4%;
    }
    h1
    {
        margin-left: 10%;
        margin-right: 10%;
    }
    h2
    {
        margin-left: 10%;
        margin-right: 10%;
    }
    iframe
    {
        width: 350px;
        height: 270px;
    }
}
@media only screen and (max-width: 550px)
{
    iframe
    {
        width: 300px;
        height: 240px;
    }
}

   .btn 
   {
    text-align: center;
   }

    button
    {
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 8px;
        padding-bottom: 8px;
        margin-right: 10px;
        margin-left: 10px;
        border-radius: 25px;
        font-size: 32px;
        border: 0px;
        cursor: pointer;
    }

    .blue
    {
        background-color: #337CFF;
    }
    .blue a
    {
        color: white;
        text-decoration: none;
    }
    .red 
    {
        background-color: red;
    }
    .red a
    {
        color: white;
        text-decoration: none;
    }
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
    {
        display: none;
    }
    
        .main 
        {
            width: 90px;
            margin-top: 3em;
            margin-left: 27%;
        }

        .col2
        {
            margin-top: -9.5em;
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
                margin-top: 2em;
                padding-top: 1em;
            }

            .col2
            {
                margin-top: -3em;
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
  padding-left: 16px;
  padding-right: 16px;
  padding-top: 10px;
  padding-bottom: 1px;
  border-radius: 25px;
}
#myBtn:hover {
  background-color: white;
  color: black;
}
.modal {
  display: none;
  position: fixed; 
  z-index: 1; 
  padding-top: 50px;
  left: 0;
  top: 0;
  display: block;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);
  }
  @media only screen and (orientation: landscape) and (max-height: 500px)
  {
      .modal
      {
          padding-top: 35px;
      }
  }
  .modal-content {
      background: url("images/mc.jpg");
      background-size: contain;
      background-repeat: no-repeat;
  /*background-color: #fefefe;*/
  margin: auto;
  overflow-x: auto;
  padding: 20px;
  /*border: 1px solid #888;*/
  width: 70%;
  height: 80%;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  border: 2px solid black;
  padding-left: 6px;
  padding-right: 6px;
  border-radius: 30px;
}

@media only screen and (min-width: 1200px)
{
    .close
    {
        color: white;
        border-color: white;
    }
}

@media only screen and (max-width: 600px)
{
    .close
    {
        padding-left: 9px;
        padding-right: 9px;
    }
}

.texts
{
  padding-top: 20px;
  text-align: center;
  font-size: 22px;
  font-family: arial;
  font-weight: bold;
}
.close:hover,.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.badges a:nth-child(1) img
{
    padding-bottom: 15px;
}
    </style>
</head>
<body style="position: static; cursor: default;" class="headline">
    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
<!--<div id="myModal" class="modal">-->
<!--  <div class="modal-content">-->
<!--    <span class="close">&times;</span>-->
    <!--<center><h1 style="background-color: #fffafa; color: #257ca3; font-family: sans-serif; padding-top: 20px;">NOTICE</h1></center>-->
    <!--<p class="texts">Stable Update v 1.0.1 has been released.</p>-->
<!--  </div>-->
<!--</div>-->
<section class="sec1">
    <div class="col1">
        <img class="main" width="512px" src="images/logo.png" alt="E-Circle_Hub">
    </div>
    <div class="col2">
    <p><b>E-Circle Hub</b></p>
  </div>
</section>
<h1>Introduction</h1>
  <div class="col3">
      <p>E-Circle Hub stands for Engineering Circle Hub. This web application has been developed to make interconnection among the Engineering Students. Using this application, Students can share thier college events, so that students from other colleges also have chance to participate in events. New courses in Professional E-Learning sites such as Udemy, Google, Edureka, Coursera, etc., have been available in this website. Further, we have developed a Mobile application for students to get easy access with it. Willing Students can upload their bio profile in the profile section. You can also chat with others. College Event post has been released in the Posts and Home section.</p>
      <p>To download application, click the logo in the bottom of the page.</p>
      <p></p><br>
  </div>
  <div class="btn">
     <button class="blue"><a href="Login.php">Login</a></button>
     <button class="red"><a href="Signup.php">Signup</a></button>
  </div><br>
  <div style="text-align: center;">
      <h2>Developer</h2>
      <h3>Sinehan S</h3><br>
  </div>
<section class="sec2">
  <p>Follow Us!</p>
    <a href="https://www.facebook.com/sinehan.s.9" rel="nofollow, noreferrer, noopener, external" target="_blank" class="fa fa-facebook"></a>
    <a href="https://sbmhss.000webhostapp.com" rel="nofollow, noreferrer, noopener, external" target="_blank" class="fa fa-google"></a>
    <a href="https://www.linkedin.com/in/sinehan-s-9576961b2/" rel="nofollow, noreferrer, noopener, external" target="_blank" class="fa fa-linkedin"></a>
    <a href="https://www.youtube.com/channel/UCDtWAZckJG5-HONoPi1oENQ" rel="nofollow, noreferrer, noopener, external" target="_blank" class="fa fa-youtube"></a>
    <a href="https://www.instagram.com/sinehan001/" rel="nofollow, noreferrer, noopener, external" target="_blank" class="fa fa-instagram"></a>
    <h2>Registered &#174; 2021. Powered By <a href="https://sbmhss.000webhostapp.com" rel="nofollow, noreferrer, noopener, external" target="_blank">Sinehan.</a></h2>
    <h3><a href="t&c.html" style="color: #257ca3; text-decoration: none;">Terms & Conditions</a></h3>
    <div class="badges">
        <a href="https://galaxy.store/ech001" target="_blank"><img src="https://img.samsungapps.com/seller/images/badges/galaxyStore/png_big/GalaxyStore_English.png?ver=1628533390000" alt="Available on Samsung Galaxy Store" style="max-width: 100%; height: 4em;"></a>
        <a href='https://play.google.com/store/apps/details?id=com.my.ecirclehub&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank"><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png' style="max-width: 100%; height: 5.8em;"/></a>
        <br><br><br><br>
        </div>
</section>

</body>
<script>
ScrollReveal().reveal('.headline');
      function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

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

// var modal = document.getElementById("myModal");
// var spand = document.getElementsByClassName("close")[0];
// spand.onclick = function() {
//   modal.style.display = "none";
// }
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
</script>
</html>