<!DOCTYPE html>
<?php 
	session_start();
	// <!-- echo $_SESSION["compo"];
    // echo $_SESSION["manufac"];
    // echo $_SESSION["intro"];
    // echo $_SESSION["medName"];
	// var_dump($_SESSION); -->
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Calpol 650</title>

    <style>
        .intro {
            text-align: center;
            margin: 30px;
        }

        .intro img {
            max-width: 300px;
            border-radius: 5px;
        }

        .jumbotron {
            background-color: #2b6777;
            color: rgb(255, 255, 255);
            padding: 150px 25px;
            margin: 0;
        }

        .container-fluid {
            background-color: #c8d8e4;
        }

        #firstname {
            font-size: 40px;
        }

        .navbar {
            position: relative;
            min-height: 50px;
            margin-bottom: 0px;
            border: 1px solid transparent;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid ">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Generic Medicine Finder </a>
            </div>

            <ul class="nav navbar-nav" style="color :rgb(255, 255, 255)">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">About Us</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        
        <div class="jumbotron">
        <div class="intro">
            <h1><b><?php echo strtoupper($_SESSION["medName"]); ?></b></h1>
            <div style="height: 5px; background-color:black">
            </div>
        </div>
            <ul>

                <li>
                    <div>
                        <h3><b>MANUFACTURER</b></h3>
                        <p>Glaxo SmithKline Pharmaceuticals Ltd</p>
                    </div>
                </li>

                <li>
                    <div>
                        <h3><b>SALT COMPOSITION</b></h3>
                        <p><kbd id="firstname"><?php echo $_SESSION["compo"]; ?></kbd></p>
                    </div>
                </li>


                <li>
                    <div>
                        <h3><b>Uses</b></h3>
                        <p>
                        <?php echo $_SESSION["intro"]; ?>
                        </p>
                    </div>
                </li>

            </ul>

        </div>
    </div>



    <div class="container-fluid">
        <h2 class="text-center">CONTACT</h2>
        <div class="row">

            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Kolkata</p>
                <p><span class="glyphicon glyphicon-phone"></span> +00 1234567890</p>
                <p><span class="glyphicon glyphicon-envelope"></span> progyanbiswascs@gmail.com</p>
                <div style="width: 100%"><iframe width="250" height="100" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=250&amp;height=200&amp;hl=en&amp;q=Shantipara%20,%20Jalpaiguri%20,%20Westbengal%20,%20India+(Generic%20Medicine%20Finder)&amp;t=k&amp;z=19&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                            href="https://www.gps.ie/sport-gps/">bike gps</a></iframe></div>
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

                <textarea class="form-control" id="comments" name="comments" placeholder="Comment"
                    rows="5"></textarea><br>

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