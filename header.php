<!doctype html>
<html lang="en">
<head>
    <title>Online Movie Ticket Booking</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="images/movie icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">

    <style>
        * {box-sizing: border-box}

        /* Add padding to containers */
        .container {
            padding: 16px;
        }

        /* Full-width input fields */
        textarea, input[type=text], input[type=password], input[type=tel] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        textarea, input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit/register button */
        .registerbtn {
            background-color: maroon;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark" style="background-color:maroon">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" style="width:40px;"/></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Movie</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="comingsoon.php">Coming Soon</a>
                    <a class="dropdown-item" href="nowshowing.php">Now Showing</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">offers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Book Ticket</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">about</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">contact</a>
            </li>
        </ul>

        <ul class="navbar-nav">
            <li class="nav-item">
                <!-- Button register trigger modal -->
                <a class="nav-link" data-toggle="modal" data-target="#modelId">Register</a>
            </li>
            <li class="nav-item">
                <!-- Button login trigger modal -->
                <a class="nav-link" data-toggle="modal" data-target="#modelId1">Login</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Register Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:maroon;color:white;">
                <h5 class="modal-title">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="post">
                    <div class="container" style="color:maroon;">
                        <center>
                            <h1>Contact Us</h1>
                            <p>Please fill in this form to create an account.</p>
                        </center>
                        <hr>

                        <label for="username"><b>Full Name</b></label>
                        <input type="text" style="border-radius:30px;" placeholder="Enter Your Name" name="reg_full_name" id="username" required>

                        <label for="email"><b>Email</b></label>
                        <input type="text" style="border-radius:30px;" placeholder="Enter Email" name="reg_email" id="email" required>

                        <label for="number"><b>Number</b></label>
                        <input type="tel" style="border-radius:30px;" placeholder="Enter number" name="reg_number_txt" id="number" required>

                        <label for="gender"><b>Select Gender</b></label>
                        <br>
                        <input type="radio" style="border-radius:30px;margin-right:2%" value="male" name="reg_gender_txt" id="gender" required>Male
                        <input type="radio" style="border-radius:30px;margin-left:5%;margin-right:2%;" value="female" name="reg_gender_txt" id="gender" required>Female

                        <br><br>
                        <label for="psw"><b>Password</b></label>
                        <input type="password" style="border-radius:30px;" placeholder="Enter Password" name="reg_psw" id="psw" required>

                        <label for="psw-repeat"><b>Repeat Password</b></label>
                        <input type="password" style="border-radius:30px;" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat" required>

                        <button type="submit" class="btn registerbtn" name="btn_reg">Register</button>
                    </div>

                    <div>
                        <p>Already have an account? <a style="color:gray" data-toggle="modal" data-target="#modelId1" data-dismiss="modal">Log in</a>.</p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:maroon;color:white">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="action_page.php">
                    <div class="container" style="color:maroon;">
                        <center>
                            <h1>Login</h1>
                        </center>
                        <hr>
                        <label for="email"><b>Email</b></label>
                        <input type="text" style="border-radius:30px;" placeholder="Enter Email" name="email" id="email" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" style="border-radius:30px;" placeholder="Enter Password" name="psw" id="psw" required>

                        <button type="submit" class="btn registerbtn">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>