<?php
 ob_start();
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
	<title>Edit Profile</title>
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
    <script src="//code.tidio.co/xdjls6za0brcjx1gkhmryn9inx30zsb2.js" async></script>
	<style>
	    body
	    {
	        background-color: black;
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
        .container
        {
          width: 25em;
          background-color: white;
          border-radius: 15px;
          box-shadow: 0px 0px 8px solid grey;
          padding: 30px;
          text-align: center;
          font-family: sans-serif;
          position: relative;
          margin-top: 3em;
          margin-bottom: 2em;
        }
        .container-center
        {
          left: 50%;
          transform: translate(-50%, 0%);
        }
        @media only screen and (max-width: 710px)
        {
        .container
        {
          width: 25em;
          background-color: white;
          border-radius: 15px;
          box-shadow: 0px 0px 8px solid grey;
          padding: 30px;
          text-align: center;
          font-family: sans-serif;
          position: relative;
          margin-top: 3em;
          margin-bottom: 2em;
        }
        }
        @media only screen and (max-width: 550px)
        {
        .container
        {
          width: 20em;
          background-color: white;
          border-radius: 15px;
          box-shadow: 0px 0px 8px solid grey;
          padding: 30px;
          text-align: center;
          font-family: sans-serif;
          position: relative;
          margin-top: 3em;
          margin-bottom: 2em;
        }
        }
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
    {
        display: none;
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
.sub
{
    height: 40px;
    width: 120px;
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
        height: 430px;
    }

    input
    {
        width: 200px;
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
    </style>
</head>
<body style="position: static;">
<h2 style="text-align:center; color: #018786; margin-top: 6em; font-family: cursive;">Set Profile Image</h2>
  <div class="container container-center">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST">
      <input type="file" name="image" id="image" style="padding-top: 1%;" onchange="Filevalidation()"><br><br>
      <!--<button type="submit" name="submit"> Post Chat</button>-->
      <!--<input type="text" name="uname" id="uname" placeholder="UserName" optional><br><br>-->
      <input type="submit" name="submit" class="sub" value="Confirm">
                  <br>
            <span> Go Back? <a href="profile.php">Back</a></span>

    </form>
  </div>
<br>
<?php
     if($_SERVER['REQUEST_METHOD'] == "POST"){

  $dbserver="localhost";
  $dbuser="id17115978_sinehan";
  $dbpass="@Sinehandatabase001";
  $dbname="id17115978_mydb";
          $name=$_SESSION['name'];
          $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);            
        if (isset($_POST['submit'])) {
 
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];   
        $folder = "images/".$filename;
         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
          $sql = "UPDATE users SET img='images/$filename' where name='$name'";
          mysqli_query($conn, $sql);
          header("Location: profile.php");
}

?>

</body>
<script>
        Filevalidation = () => {
        const fi = document.getElementById('image');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 2048) {
                    alert(
                      "File too Big, please select a file less than 2MB");
                } else if (file < 40) {
                    alert(
                      "File too small, please select a file greater than 40KB");
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB';
                }
            }
        }
    }
</script>
</html>