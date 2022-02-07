<!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Password Error!</title>
            <style>
              body 
              {
                background-color: black;
                color: white;
              }
              .abc 
              {
                position: absolute;
                left: 50%;
                top: 50%;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
              }
              h1
              {
                text-align: center;
                font-family: sans-serif;
              }
              
                  img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
    {
        display: none;
    }
              
            </style>
        </head>
        <body>
          <div class="abc">
           <h1>Email or Password is wrong!</h1>
           </div>
        </body>
        </html>
      <script>
         setTimeout(function(){
            window.location.href = 'Login.php';
         }, 3000);
      </script>