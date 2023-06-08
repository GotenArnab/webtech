<?php
session_start();
include('../Model/db.php');

if(!isset($_SESSION['email']))
{
    header("location: adminprofile.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>AdminProfile</title>
    <link rel="stylesheet" href="../Css/admin_css.css">
</head>
<body>

    <div class="email">
    <h3> Welcome to Admin ! </h3>
    

    <?php  
        echo "Your Email is : " . $_SESSION['email'] ; ?>

        <span class="back">

        <a href="adminprofile.php"> Back </a> 

        </span>

 

        <br><br>

    </div>


        <div class="logout">

        <a class =" btn "href="../Control/adminlogout.php"> logout </a> </div>

<h3>Student List</h3>

<form action="" method="post">
  
    <input type="text" name="student">
  
    <input name="submit" type="submit" id="search_student" value="Search">
</form><br>


<?php
include('../Control/search_control2.php');

?>


</body>
</html>