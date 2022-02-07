<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ResetPassword</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    input[type=email]
    {
    	font-size: 24px;
    	width: 80%;
    	border-color: #018786;
    	border: 1px solid black;
    	border-radius: 15px;
    	text-indent: 8px;
    }
    input[type=email]:focus
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
		    transform: translate(-50%,20%);
		}
	}
	@media only screen and (max-width: 500px)
	{
		.container
		{
			width: 18em;
		}
		.container-center
		{
		    transform: translate(-50%,18%);
		}
	}
	@media only screen and (max-width: 400px)
	{
		.container
		{
			width: 16em;
		}
		.container-center
		{
		    transform: translate(-50%, 15%);
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
 	    <input type="email" name="email" placeholder="Enter email"><br><br>
 	    <input type="submit" name="submit"><br><br>
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
      $mail = $_POST['email'];
      $vcode = rand(100000,999999);
      mysqli_query($conn,"UPDATE users SET vcode='".$vcode."' where email = '".$mail."'");
         $to = "$mail";
         $subject = "Reset Password Verification Code";
         
         $message = "<b>Your Verification Code is '".$vcode."'</b>";
         
         $header = "From:sinehan001@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         $_SESSION['vcode']=$vcode;
         $_SESSION['vmail']=$mail;
         if( $retval == true ) {
            echo "Message sent successfully...";
            $_SESSION['vcode']=$vcode;
            $_SESSION['vmail']=$mail;
            header('Location: vcode.php');
         }else {
            echo "Message could not be sent...";
         }
       }
  ?>
</body>
</html>