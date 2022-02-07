<?php
 
 session_start();

 if(!isset($_SESSION['name']) || !isset($_SESSION['email'])){
 	header("Location: Login.php");
 	exit();
 }

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
	<title>
      Welcome to Sinehan's Website
	</title>

	<style>
		body {
			animation: fadeInAnimation ease 3s;
			animation-iteration-count: 1;
			animation-fill-mode: backwards;
			background-color: #018786;
		}
		@keyframes fadeInAnimation {
			0% {
				opacity: 0;
			}
			100% {
				opacity: 1;
			}
		}

		div
		{
			color: white;
			text-align: center;
			font-family: sans-serif;
			margin-top: 18em;
		}
	
	@media only screen and (orientation: landscape) and (max-width: 900px)
	{
	    div
          {
              margin-top: 7em;
          }
	}
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
    {
        display: none;
    }
	</style>
</head>

<body onload="Redirect()">
	<div>
	<h1>
		Welcome to Sinehan's Website
	</h1>
	<h2>(Only for Engineering Students)</h2>
</div>
      <script>
         setTimeout(function(){
            window.location.href = 'home.php';
         }, 4000);
      </script>
</body>

</html>