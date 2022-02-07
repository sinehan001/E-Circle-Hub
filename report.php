<?php
include "connect.php";

if(isset($_POST['submit']))
{		
    $fullname = $_POST['person'];
    $lastname = $_POST['rep'];
    $title=$_POST['title'];
    $content=$_POST['content'];
    $insert = mysqli_query($link,"INSERT INTO report(person,reporter,title,content) VALUES('$fullname','$lastname','$title','$content')");

    if(!$insert)
    {
        echo mysqli_error($link);
    }
    else
    {

        echo '<!DOCTYPE html>';
        echo '<html lang="en">';
        echo '<head>';
            echo '<meta charset="utf-8">';
            echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
            echo '<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">';
            echo '<title>Report</title>';
            echo '<style>
              body
              {
                  background-color: black;
                  color: white;
              }
                  img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
    {
        display: none;
    }
              h1
              {
                text-align: center;
                font-family: sans-serif;
              }
            </style>';
        echo '</head>';
        echo '<body>';
           echo '<h1>Thank you for Reporting '.$fullname.'!!!</h1>';
        echo '</body>';
        echo '</html>';
    }
}

mysqli_close($link); // Close connection
?>
      <script>
         setTimeout(function(){
            window.location.href = 'funchat.php';
         }, 3000);
      </script>