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
	<meta charset="utf-8">
	<title>Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>
<style>
    body
    {
    	background-color: black;
    	font-family: sans-serif;
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
          margin-top: 3em;
          margin-bottom: 2em;
          word-break: break-all;
        }

        .container-center
        {
          left: 50%;
          transform: translate(-50%, 15%);
        }

	.prof{
		width: 20%;
		height: 20%;
		border-radius: 20px;
		padding-top: 2%;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
	.link
	{
		background-color: #018786;
		border-radius: 15px;
		color: white;
		text-decoration: none;
		padding: 15px;
	}
	@media only screen and (max-width: 750px)
	{
		.container
		{
			width: 25em;
		}
		.prof
		{
			width: 30%;
		}
	}
	@media only screen and (max-width: 500px)
	{
		.container
		{
			width: 18em;
		}
		
		.prof
		{
			width: 60%;
		}
		.container-center
		{
		    transform: translate(-50%,15%);
		}
	}
	@media only screen and (max-width: 400px)
	{
		.container
		{
			width: 18em;
		}
		
		h2
		{
			display: flex;
			flex-wrap: wrap;
		}
		.container-center
		{
		    transform: translate(-50%, 25%);
		}
	}
	@media only screen and (orientation: landscape) and (min-width: 1000px)
	{
	    .container-center
	    {
	       transform: translate(-50%, 25%);   
	    }
	}
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
    {
        display: none;
    }
</style>
<body>
  <div class="container container-center">
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
     echo '<img class="prof" src="'.$row['img'].'"><br>';
     echo '<h1>'.$row['name'].'</h1>';
     echo '<h2>'.$row['email'].'</h2><br>';
     echo '<a class="link" href="editpro.php" style="clear: left;">Edit Image</a>&nbsp;&nbsp;';
     echo '<a class="link" href="logout.php">Logout</a>';
     echo '<br><br><br><span> Go Back? <a href="home.php">Back</a></span>';
    }
 }
  ?>
  </div>
</body>
</html>