<?php
include('../Model/search_db2.php');


session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminProfile</title>
    <link rel="stylesheet" href="../Css/admin_css.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="email">
        <h3> Welcome to Admin ! </h3>


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

    <div class="student-profile py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent text-center">
                            <img class="profile_img" src="../Image/anik.jpg" alt="">
                            <h3>Anik  Islam </h3>
                        </div>
                        <div class=" card-body">
                            <p class="mb-0"><strong class="pr-1">Student ID:</strong> 05</p>
                            <p class="mb-0"><strong class="pr-1">Class:</strong> 10</p>
                            <p class="mb-0"><strong class="pr-1">Section:</strong> A</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">Roll</th>
                                    <td width="2%">:</td>
                                    <td>125</td>
                                </tr>
                                <tr>
                                    <th width="30%">Academic Year </th>
                                    <td width="2%">:</td>
                                    <td>2020</td>
                                </tr>
                                <tr>
                                    <th width="30%">Gender</th>
                                    <td width="2%">:</td>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th width="30%">Religion</th>
                                    <td width="2%">:</td>
                                    <td>Group</td>
                                </tr>
                                <tr>
                                    <th width="30%">blood</th>
                                    <td width="2%">:</td>
                                    <td>B+</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>