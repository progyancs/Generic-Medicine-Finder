<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="en">

<head>
  <title>Generic Medicine Finder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    .jumbotron {
      background-color: #2b6777;
      color: rgb(255, 255, 255);
      padding: 150px 25px;
      text-align: center;
      margin: 0;
    }

    .container-fluid {
      background-color: #c8d8e4;
    }

    .navbar {
      margin: 0;
    }
  </style>


</head>

<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid ">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Generic Medicine Finder </a>
      </div>
      <ul class="nav navbar-nav" style="color :rgb(255, 255, 255)">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About Us</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>

      
    </div>
  </nav>


  <div class="jumbotron">
    <h1>Generic Medicine Finder</h1>
    <p>We help you to find out the generic medicine name and salt COMPOSITION of various commercial branded medicines.
    </p>
    <form class="form-inline" action="search.php" method="post">
      <div class="input-group">
        <input type="text" class="form-control" size="50" name="item" placeholder="Enter medicine name" required>
        <div class="input-group-btn">
          <button type="submit" class="btn btn-info">Search</button>
        </div>
      </div>
    </form>
  </div>



  <div class="container-fluid ">
    <h2 class="text-center">CONTACT</h2>
    <div class="row">

      <div class="col-sm-5">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span>Kolkata</p>
        <p><span class="glyphicon glyphicon-phone"></span> +00 1234567890</p>
        <p><span class="glyphicon glyphicon-envelope"></span> progyanbiswascs@gmail.com</p>
        <div style="width: 100%"><iframe width="250" height="100" frameborder="0" scrolling="no" marginheight="0"
            marginwidth="0"
            src="https://maps.google.com/maps?width=250&amp;height=200&amp;hl=en&amp;q=Shantipara%20,%20Jalpaiguri%20,%20Westbengal%20,%20India+(Generic%20Medicine%20Finder)&amp;t=k&amp;z=19&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
              href="https://www.gps.ie/sport-gps/">bike gps</a></iframe>
        </div>
      </div>

      <div class="col-sm-7">

        <div class="row">

          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>

          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>

        </div>

        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>

        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-info pull-right" type="submit">Send</button>
          </div>
        </div>

      </div>

    </div>
  </div>

</body>

</html>