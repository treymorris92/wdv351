<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Trey Morris" description="WDV351 Web Application Components Final Project">
    <title>Morris Fishing - Contact</title>
    <link rel="stylesheet" href="css/mainStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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

    <style>

        html, body {
            height: 100%;
            background-color: #E3F7D4;
        }

        .flex-container  {
            width:960px;
            margin:auto;
            padding:100px;
        }

        svg  {
            display: block;
            margin-left: auto;
            margin-right: auto;
            padding-top:5%;
        }

        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 2.5rem;
        }

        .fa  {
            padding:.5%;
            font-size: 24px;
        }

        .fa:link  {
            text-decoration: none; 
        }

    </style>
<body class="d-flex flex-column">

    <div class="topnav" id="myTopnav">
        <a href="index.html" style="color:#0247FE"><img class="logo" src="images/theLogo.png" alt="Morris Fishing Logo">Morris Fishing</a>
        <a href="index.html">Home</a>
        <a href="products.html">Products</a>
        <a href="about.html">About</a>
        <a href="contact.html">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    
    <div id="response">

        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg>

        <p style="text-align:center; font-size:24px; padding:50px; color:#0247FE;">Form submitted successfully!</p>

    </div>

    <footer id="sticky-footer" class="flex-shrink-0 py-4">
        <div class="container text-center">
            <h4>Morris Fishing</h4>
            <h5>(555)-555-5555</h5>
            <h5>123 Main Street</h5>
            <h5>St. Augustine,FL</h5>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
    </footer>

</body>
</html>