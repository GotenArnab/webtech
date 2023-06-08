<?php
include('../Model/search_db.php');


 $error="";

if (isset($_POST['submit'])) {


$tutor_search=$_POST['tutor'];


$connection = new db2();
$conobj=$connection->OpenCon();

$userQuery=$connection->Search($conobj,"tutor",$tutor_search);
$userQuery2=$connection->ShowAll2($conobj,"tutor");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Name</th> <th>Email</th> <th>Gender</th> <th>MobileNo</th> <th>Address</th> </tr>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

      echo "<tr><td><a href='../View/tutorprofile.php'>".$row["fname"]."</td> <td>".$row["email"]."</td> <td>".$row["gender"]."</td> <td>".$row["mobileno"]."</td> <td>".$row["address"]."</td> </tr>";
    }
    echo "</table>";
  } 
elseif(empty($_POST['tutor']))
{
   echo "<table><tr><th>Name</th> <th>Email</th> <th>Gender</th> <th>MobileNo</th> <th>Address</th> </tr>";
    // output data of each row
    while($row = $userQuery2->fetch_assoc()) {

       echo "<tr><td><a href='../View/tutorprofile.php'>".$row["fname"]."</td> <td>".$row["email"]."</td> <td>".$row["gender"]."</td> <td>".$row["mobileno"]."</td> <td>".$row["address"]."</td> </tr>";
    }
    echo "</table>";

}
  else {
    echo "0 results";
  }




$connection->CloseCon($conobj);


}

?>
