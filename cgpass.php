<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="logo1.png">
	<title>Change Password</title>
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
    input[type=password]
    {
      font-size: 24px;
      width: 80%;
      border-color: #018786;
      border: 1px solid black;
      border-radius: 15px;
      text-indent: 8px;
    }
    input[type=password]:focus
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
        <h2 style="text-align: center; color: red; font-family: arial">Change Password</h2>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input name="password" id="password" type="password" placeholder="New password" /><br><br>
  <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" /><br><br>
  <span id='message'></span>
  <br><br>
  <input type="submit" name="submit" value="Confirm">
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
     $pass=$_POST['password'];
     $cpass=$_POST['confirm_password'];
     if($pass==$cpass)
     {
       mysqli_query($conn,"UPDATE users SET pwd='".$pass."' WHERE email='".$_SESSION['vmail']."'");
       header('Location: Login.php');
     }
     else
     {
       echo '<h2 style="text-align: center; color:white;">Password not Matching!</h2>';
     }
  }
?>
</body>
<script>
	$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Password is Matching').css('color', 'green');
  } else 
    $('#message').html('Password is not Matching').css('color', 'red');
});
</script>
</html>