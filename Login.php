<?php
ob_start();
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
	header("Location: welcome.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<title>Login - E-Circle Hub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="E-Circle Hub Login. Login to your account using Email and Password.">
    <script data-ad-client="ca-pub-6051644126384701" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>
         body
         {
         	background-color: black;
         	color: white;
         	font-family: sans-serif;
         }
	    .heading
	    {
	    	font-family: sans-serif;
	    	background-color: #018786;
	    	color: white;
	    	margin-top: -2em;
	    	margin-left: -0.6em;
	    	margin-right: -0.5em;
	    }
	    .heading p
	    {
	    	text-align: center;
	    	font-size: 2em;
	    	padding-top: 2%;
	    }
    	    h2
    	    {
    	    	text-align: center;
    	    	margin-top: -0.5em;
    	    	padding-bottom: 1em;
    	    }
    	    .container h1
    	    {
    	    	background-color: #018786;
    	    	margin-top: -0.05em;
    	    	color: white;
    	    	border-top-left-radius: 15px;
    	    	border-top-right-radius: 15px;
    	    	padding-top: 0.4em;
    	    	padding-bottom: 0.4em;
    	    }

         .container
         {
             position: fixed;
	      background-color: #020202;
	      text-align: center;
	      border-radius: 15px;
	      box-shadow: 0px 0px 8px grey;
	      width: 400px;
	      height: 480px;
         }

    	    .container-center
         {
	     position: absolute;
	     top: 55%;
	     left: 50%;
	     transform: translate(-50%, -50%);
          }

input,button
{
    border-radius: 25px;
    margin: 18px;
    outline: none;
}
input
{
	height: 30px;
	width: 250px;
	border: 1px solid;
	text-indent: 10px;
	font-size: 18px;
}
input:focus
{
	border: 2.5px solid #018786;
}
button
{
	height: 40px;
	width: 130px;
	border: 0px;
	background-color: #018786;
	color: white;
	font-size: 20px;
	cursor: pointer;
}

@media only screen and (max-width: 425px)
{
	.container
	{
		width: 330px;
		height: 480px;
	}

	input
	{
		width: 200px;
	}
}
@media only screen and (max-width: 900px)
{
    .col1
    {
        margin-bottom: 8.5em;
        margin-left: 23vw;
    }
    .container
    {
        top: 65%;
    }
}
@media only screen and (max-width: 600px)
{
    .col1
    {
        margin-left: 13vw;
    }
    .container
    {
        top: 65%;
    }
}
      @media only screen and (orientation: landscape) and (max-width: 900px) and (max-height: 500px) {
      .container-center
      {
          margin-top: 10%;
      }
      .container
      {
          top:100%;
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
            margin-top: -7.5em;
        }
    </style>
</head>
<body style="position:static;">
	<div class="heading heading-center">
	    <div class=col1>
	        <img class="main" src="images/logo.png">
	    </div>
	<div class="col2">
	    <p>E-Circle Hub</p>
	<h2></h2>
	</div>
	</div>
	<div class="container container-center">
		<h1> Login </h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<?php error_reporting(0);
			    if(isset($_POST['email'])){
			    	echo '<input type="email" name="email" value="'.$_POST['email'].'" required>';
			    }
			    else{
			        echo  '<input type="email" name="email" placeholder="Email" required>'; }?>
			<?php error_reporting(0);
			if(isset($_POST['pwd']))
				{
					echo '<input type="password" id="myInput" name="pwd" value="'.$_POST['pwd'].'" required>';
				}
				else 
				{
					echo '<input type="password" id="myInput" name="pwd" placeholder="Password" required>';
				}
				?>
            <input type="checkbox" name="cb" onchange="myFunction()" style="margin-left: -20%; height: 20px;"> <span style="font-size: 16px; margin-left: -30%;">Show Password</span><br>
			<button type="submit">Login</button>
            <br>
            <span> New User? <a href="Signup.php" style="color: white;">SignUp</a></span>
            <br><br>
            <span><a href="index.php" style="color: white;">Go to Home</a></span><br><br>
            <span><a href="reset.php" style="color: white;">Reset Password</a></span>
		</form>
		<div>
		    <br><p></p><br><br><p>
		    </p>
		</div>
	</div>
<?php
     if($_SERVER['REQUEST_METHOD'] == "POST"){

     	  $email = $_POST['email'];
     	  $pwd = $_POST['pwd'];

  $dbserver="localhost";
  $dbuser="id17115978_sinehan";
  $dbpass="@Sinehandatabase001";
  $dbname="id17115978_mydb";
     	  $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

     	  $sql = "SELECT * from users where email = '$email'; ";
     	  $result = mysqli_query($conn,$sql);

     	  if(mysqli_num_rows($result) != 1){
     	  	header("Location: mailerr.php");
     	  }
     	  else
     	  {
     	  	$row = mysqli_fetch_assoc($result);

            if($pwd != $row['pwd']){
                 header("Location: passerr.php");
            }
            else{

     	    $_SESSION['email'] = $row['email'];
     	    $_SESSION['name'] = $row['name'];
              
            header("Location: welcome.php");
            exit();
     	  }
     	}

     } ?>
</body>
<script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html>