<?php
include('../Model/search_db2.php');


session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tutor Profile</title>
    <link rel="stylesheet" href="../Css/admin_css.css">
    <link rel="stylesheet" href="../Css/tutor.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="email">
        <h3> Tutor Details! </h3>


        <?php
        echo "Your Email is : " . $_SESSION['email']; ?>


        <br><br>

    </div>
    <span class="back">

        <a href="adminprofile.php"> Back </a>

    </span>


    <div class="logout">

        <a href="../Control/adminlogout.php"> logout </a>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                    <div class="list-group">


                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                    <!-- flight section -->
                    <div class="bhoechie-tab-content active">
                        <h5>Information </h5><br>
                        <p> Education : Ph.D, IIT-Somewhere</p>
                        
                        <p>Phone : 01248615</p>
                        <p>Adress : Mirpur</p>
                        <p>Class teacher  : B </p>
                        <p>Join Year : 2020</p>
                    </div>
                    <!-- train section -->
                    <div class="bhoechie-tab-content">
                        <h5>Work Experience</h5><br>
                        <p>Assistant Professor at KGEC</p>
                        <p>Somebody at Somewhere</p>
                    </div>

                    <!-- area of inter -->
                    <div class="bhoechie-tab-content">
                        <h5>Areas of Interest</h5><br>
                        <p>Artificial Intelligence, Fuzzy Logic, Image Processing</p>
                    </div>


                    <!-- contact -->
                    <div class="bhoechie-tab-content">
                        <h5>Contacts</h5><br>
                        <p>Phone: +91xxxxxxxxxx</p>
                        <p>E-mail: someone@example.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../Js/tutorprofile.js"></script>

</body>

</html>