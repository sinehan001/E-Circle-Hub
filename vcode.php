<?php
ob_start();
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hello</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>
<style>
    body
    {
    	background-color: #000000;
    	font-family: sans-serif;
    }
    h1
    {
    	text-align: center;
    	color: #018786;
    	font-family: serif;
    }
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
}
    input[type=number]
    {
    	font-size: 24px;
    	width: 80%;
    	border-color: #018786;
    	border: 1px solid black;
    	border-radius: 15px;
    	text-indent: 8px;
    }
    input[type=number]:focus
    {
    	border: 3px solid #018786;
    	padding-top: 3px;
    	padding-bottom: 3px;
    	outline: none;
    }
    input[type=submit]
    {
    	width: 40%;
    color: white;
    background-color: #018786;
    border: 0;
    border-radius: 40px;
    font-size: 24px;
    padding: 15px;
    cursor: pointer;
    }
        .container
        {
          width: 40em;
          background-color: white;
          border-radius: 15px;
          box-shadow: 0px 0px 8px solid grey;
          padding: 30px;
          text-align: center;
          font-family: sans-serif;
          position: relative;
        }

        .container-center
        {
        	position: absolute;
          top: 25%;
          left: 50%;
          transform: translate(-50%, -50%);
        }

	@media only screen and (max-width: 750px)
	{
		.container
		{
			width: 25em;
		}
		.container-center
		{
		    transform: translate(-50%,0%);
		}
	}
	@media only screen and (max-width: 500px)
	{
		.container
		{
			width: 18em;
		}
	}
	@media only screen and (max-width: 400px)
	{
		.container
		{
			width: 16em;
		}
	}
	@media only screen and (orientation: landscape)
	{
	    .container-center
	    {
	       transform: translate(-50%, 20%);   
	    }
	}
</style>
<body>
	<div class="container container-center">
		<h1>Reset Password</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
 	    <input type="number" name="vcode" placeholder="Verification Code"><br><br>
 	    <input type="submit" name="submit"><br><br>
 	    <br><span style="font-size: 24px;">It will take a minute to receive mail. Be patience.</span>
    </form>
</div>
  <?php 
  $dbserver="localhost";
  $dbuser="id17115978_sinehan";
  $dbpass="@Sinehandatabase001";
  $dbname="id17115978_mydb";
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
  $result=mysqli_query($conn,"SELECT * from users"); 
   if($_SERVER['REQUEST_METHOD']=='POST')
   {
      $code = $_POST['vcode'];
      if($_SESSION['vcode']==$code)
      {
        header("Location: cgpass.php");
        echo '<script>alert("hai!");</script>';
      }
      else
      {
      	echo '<div id="fmessage"><h2 style="text-align: center; color:white;">Wrong Code!</h2></div>';
      }
     }
  ?>
</body>
<script>
    $(function() {
    setTimeout(function() {
        $("#fmessage").hide()
    }, 5000);
});
</script>
</html>