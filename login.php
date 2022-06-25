<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            border: 3px solid #f1f1f1;
        }

        .loginText {
            text-align: center;
        }

        .inp[type=email],
        .inp[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .btn {
            background-color: #5bc0de;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 10%;
            border-radius: 50%;
        }


        .container {
            padding: 16px;
            padding-left: 20%;
            padding-right: 20%;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        .signin {
            text-align: center;
        }

        .container-fluid {
            background-color: #c8d8e4;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
    </style>

    <title>Log in</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid ">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Generic Medicine Finder </a>
            </div>

            <ul class="nav navbar-nav" style="color :rgb(255, 255, 255)">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About Us</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

            </ul>
        </div>
    </nav>


    <div>
        <h1 class="loginText">Login Form</h1>
        <form action="/project/log2.php" method="post">
            <div class="imgcontainer">
                <img src="avatar.webp" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Email</b></label>
                <input class="inp" type="email" placeholder="Enter email" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input class="inp" type="password" placeholder="Enter Password" name="psw" required>

                <button class="btn" type="submit">Login</button>
            </div>
            <div class="container signin">
                <p>Want to create an account? <a href="signup.html">Sign up</a></p>
            </div>
        </form>
    </div>



</body>

<footer>
    <div class="container-fluid ">
        <h2 class="text-center">CONTACT</h2>
        <div class="row">

            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span>Kolkata</p>
                <p><span class="glyphicon glyphicon-phone"></span> +00 1234567890</p>
                <p><span class="glyphicon glyphicon-envelope"></span> progyanbiswascs@gmail.com</p>
                <div style="width: 100%"><iframe width="250" height="100" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
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
</footer>

</html>