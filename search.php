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
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <script src="//code.tidio.co/xdjls6za0brcjx1gkhmryn9inx30zsb2.js" async></script>
  <title>Search</title>
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
        }

        .col111
        {
          width: 20%;
          display: flex;
        }

        .col111 img
        {
          width: 18em;
          height: 22em;
        }

        .col112
        {
          width: 80%;
          display: block;
        }

        .col112 h3
        {
           text-align: center;
        }

        .topnav .icon {
          display: none;
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


        .topnav .icon {
          display: none;
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

.search-container {
  text-align: center;
}

input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border-color: black;
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
}

.search-container button:hover
{
   border-color: #018786;
}

  
      @media only screen and (max-width: 1000px)
      {
        .col111 img
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
      }
      
      @media only screen and (orientation: landscape) and (max-width: 950px) {
        .topnav.responsive li:first-child
        {
            margin-top: 6%;
        }
    
}
    @media only screen and (max-width: 500px)
    {
        .prof
        {
            display: none;
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
    @media only screen and (max-width: 950px)
    {
        .col2
        {
            margin-top: 2em;
            padding-top: 2em;
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
        
        .badges a:nth-child(1) img
        {
            padding-bottom: 15px;
        }
    
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
<h1>Search Results</h1>
<br>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $dbserver="localhost";
  $dbuser="id17115978_sinehan";
  $dbpass="@Sinehandatabase001";
  $dbname="id17115978_mydb";
  $srch=$_POST['search'];
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
  $result=mysqli_query($conn,"SELECT * from friend WHERE name='$srch'");
  if($row = mysqli_fetch_assoc($result))
  {
      echo '<div class="col1">';
        echo '<div class="col11">';
            echo '<div class="col111">';
              echo '<img src="'.$row['img'].'">';
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
else
{
  echo '<br>';
  echo '<h3 style="text-align: center; font-family: sans-serif;">Sorry! Name is not available. Please try again...</h3>';
}
}
?>
<section class="sec2">
  <p>Follow Us!</p>
    <a href="https://www.facebook.com/sinehan.s.9" target="_blank" class="fa fa-facebook"></a>
    <a href="http://sbmhss.000webhostapp.com" target="_blank" class="fa fa-google"></a>
    <a href="https://www.linkedin.com/in/sinehan-s-9576961b2/" target="_blank" class="fa fa-linkedin"></a>
    <a href="https://www.youtube.com/channel/UCDtWAZckJG5-HONoPi1oENQ" target="_blank" class="fa fa-youtube"></a>
    <a href="https://www.instagram.com/sinehan001/" target="_blank" class="fa fa-instagram"></a>
    <h2>Registered &#174; 2021. Powered By <a href="https://sbmhss.000webhostapp.com" target="_blank">Sinehan.</a></h2>
    <h3><a href="t&c.html" style="color: white; text-decoration: none;">Terms & Conditions</a></h3><br>
        <div class="badges">
        <a href="https://galaxy.store/ech001" target="_blank"><img src="https://img.samsungapps.com/seller/images/badges/galaxyStore/png_big/GalaxyStore_English.png?ver=1628533390000" alt="Available on Samsung Galaxy Store" style="max-width: 100%; height: 4em;"></a>
        <a href='https://play.google.com/store/apps/details?id=com.my.ecirclehub&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank"><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png' style="max-width: 100%; height: 5.8em;"/></a>
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
</script>
</html>