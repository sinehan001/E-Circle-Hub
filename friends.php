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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<title>Friends</title>
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
	<script src="//code.tidio.co/xdjls6za0brcjx1gkhmryn9inx30zsb2.js" async></script>
	<style>
	    body
	    {
	        background-color: black;
	        color: white;
	    }
	    .sec1
	    {
	    	font-family: sans-serif;
	    	background-color: #018786;
	    	color: white;
	    	margin-top: -2em;
	    	margin-left: -0.6em;
	    	margin-right: -0.5em;
	    }
	    .sec1 p
	    {
	    	text-align: center;
	    	font-size: 2em;
	    	padding-top: 2%;
	    }

      h1
      {
        text-align: center;
        font-family: cursive;
        color: #018786;
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
          padding: 14px 22px;
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

        .btn 
        {
          text-align: center;
        }

        button
        {
          padding: 1%;
          border-radius: 15px;
          color: white;
          font-size: 18px;
          background-color: #018786;
          cursor: pointer;
        }

        table, tr, td
        {
          text-align: center;
          border: 2px solid #018786;
          border-collapse: collapse;
          font-family: sans-serif;
        }

        td 
        {
          width: 7em;
          height: 1.6em;
        }

        tr td:first-child
        {
          font-weight: bold;
        }

        tr td:last-child
        {
          width: 15em;
        }

        .col11 
        {
          display: flex;
          flex-wrap: wrap;
          border: 2px solid #018786;
          padding-top: 2%;
          padding-bottom: 2%;
        }

        .col111
        {
          width: 20%;
          display: flex;
        }

        .col111 a img
        {
          width: 18em;
          height: 22em;
          margin: auto;
        }

        .col112
        {
          width: 77%;
          display: block;
        }

        .col112 h3
        {
           text-align: center;
        }

        .topnav .icon {
          display: none;
        }

      .sec2
      {
        font-family: sans-serif;
        background-color: #018786;
        color: white;
        margin-left: -0.6em;
        margin-right: -0.5em;
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

        @media screen and (max-width: 950px) {
          .topnav li:not(:nth-child(2)) {display: none;}
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
            margin-right: 0.5em;
            margin-top: 0.5em;
            color: black;
          }
        }

.search-container {
  text-align: center;
}

input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border-color: #018786;
  border-top-left-radius: 15px;
  border-bottom-left-radius: 15px;
  outline: none;
}

.search-container button {
  text-align: center;
  border-radius: 0px;
  padding: 8px 10px;
  margin-top: 8px;
  margin-left: -3.6px;
  margin-right: 16px;
  background: #018786;
  font-size: 17px;
  border: none;
  cursor: pointer;
  border-top-right-radius: 15px;
  border-bottom-right-radius: 15px;
}

@media only screen and (min-width: 1000px)
{
    .col111
    {
        margin-left: 10px;
    }
}
  
      @media only screen and (max-width: 1000px)
      {
        .col111 a
        {
          margin: 0 auto;
          padding-top: 1em;
        }
        .col111, .col112
        {
          flex: 100%;
        }
      }

      @media only screen and (max-width: 950px)
      {
        button
        {
          padding: 2%;
        }
        .col2
        {
            margin-top: 2em;
            padding-top: 2em;
        }
      }
      @media only screen and (max-width: 500px)
      {
        button .fa
        {
          margin-left: -0.2em;
        }
      }
      
      @media only screen and (orientation: landscape) and (max-width: 950px) {
        .topnav.responsive li:first-child
        {
            margin-top: 6%;
        }
}
        .prof
        {
            float: right;
            width: 47px;
            height: 50px;
            border-radius: 25px;
            margin-right: 4%;
            margin-top: -6em;
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
    .search-container
    {
        margin-bottom: 2em;
    }
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

.badges a:nth-child(1) img
{
    padding-bottom: 15px;
}

    </style>
</head>
<body style="position: static; cursor: default;">
    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
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
<h1>Friends</h1>
<div class="btn">
  <button onClick="javascript:window.open('https://forms.gle/1yzgfHRg9Lgp1QaUA', '_blank');">Add your Bio</button>
</div><br>
  <div class="search-container">
    <form method="POST" action="search.php">
      <input list="friends" type="text" placeholder="Search.." name="search">
      <datalist id="friends" size="2" style="-webkit-appearance: none;">
          <option value="Sinehan .S">
          <option value="Hari Krishna .S">
          <option value="Govind Shuvilesh .B">
          <option value="Lalith Kumar .V">
          <option value="Shanjay .S">
          <option value="Abdul Gani Arsath .S.I">
      </datalist>
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div><br><br>

<?php
  $dbserver="localhost";
  $dbuser="id17115978_sinehan";
  $dbpass="@Sinehandatabase001";
  $dbname="id17115978_mydb";
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
  $result=mysqli_query($conn,"SELECT * from friend");
  while($row = mysqli_fetch_assoc($result))
  {
      echo '<div class="col1 headline">';
        echo '<div class="col11">';
            echo '<div class="col111">';
              echo '<a href="'.$row['img'].'" target="_blank"><img src="'.$row['img'].'"></a>';
            echo '</div>';
            echo '<div class="col112">';
              echo '<h1>'.$row['name'].'</h1>';
              echo '<table style="margin: 0 auto; font-size: 24px;">';
                echo '<tr>';
                   echo '<td>Date of Birth</td>';
                   echo '<td>'.$row['dob'].'</td>';
                echo '</tr>';
                echo '<tr>';
                   echo '<td>Gender</td>';
                   echo '<td>'.$row['gender'].'</td>';
                echo '</tr>';
                echo '<tr>';
                  echo '<td>Batch</td>';
                  echo '<td>'.$row['batch'].'</td>';
                echo '</tr>';
                echo '<tr>';
                  echo '<td>Branch</td>';
                  echo '<td>'.$row['branch'].'</td>';
                echo '</tr>';
                echo '<tr>';
                  echo '<td>Status</td>';
                  echo '<td>'.$row['sts'].'</td>';
                echo '</tr>';
                echo '<tr>';
                  echo '<td>Activities</td>';
                  echo '<td>'.$row['activity'].'</td>';
                echo '</tr>';
              echo '</table>';
            echo '</div>';
        echo '</div>';
      echo '</div><br>';
}
?>

<section class="sec2">
  <p>Follow Us!</p>
    <a href="https://www.facebook.com/sinehan.s.9" target="_blank" class="fa fa-facebook"></a>
    <a href="https://sbmhss.000webhostapp.com" target="_blank" class="fa fa-google"></a>
    <a href="https://www.linkedin.com/in/sinehan-s-9576961b2/" target="_blank" class="fa fa-linkedin"></a>
    <a href="https://www.youtube.com/channel/UCDtWAZckJG5-HONoPi1oENQ" target="_blank" class="fa fa-youtube"></a>
    <a href="https://www.instagram.com/sinehan001/" target="_blank" class="fa fa-instagram"></a>
    <h2>Registered &#174; 2021. Powered By <a href="https://sbmhss.000webhostapp.com" target="_blank">Sinehan.</a></h2>
    <h3><a href="t&c.html" style="color: white; text-decoration: none;">Terms & Conditions</a></h3>
    <div class="badges">
        <a href="https://galaxy.store/ech001" target="_blank"><img src="https://img.samsungapps.com/seller/images/badges/galaxyStore/png_big/GalaxyStore_English.png?ver=1628533390000" alt="Available on Samsung Galaxy Store" style="max-width: 100%; height: 4em;"></a>
        <a href='https://play.google.com/store/apps/details?id=com.my.ecirclehub&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank"><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png' style="max-width: 100%; height: 5.8em;"/></a>
        <br><br><br><br>
        </div>
</section>

</body>
<script src="https://unpkg.com/scrollreveal"></script>
<script>
ScrollReveal().reveal('.headline',{delay : 500});
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
</script>
</html>