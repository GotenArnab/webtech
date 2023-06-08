<?php
include('../Model/search_db2.php');


 $error="";

if (isset($_POST['submit'])) {


$tutor_search=$_POST['student'];


$connection = new db3();
$conobj=$connection->OpenCon();

$userQuery=$connection->Search($conobj,"student",$tutor_search);
$userQuery2=$connection->ShowAll3($conobj,"student");

if ($userQuery->num_rows > 0) {
    
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

      echo "<table><tr><th>Name</th> <th>Email</th> <th>Age</th> <th>Gender</th> <th>MobileNo</th> </tr>";
      
      
      
      echo "<tr><td><a href='../View/studentprofile.php'>".$row["Name"]."</td> <td>".$row["Email"]."</td> <td>".$row["Age"]."</td> <td>".$row["Gender"]."</td> <td>".$row["MobileNo"]."</td> </tr>";
    }
    echo "</table>";
  } 
elseif(empty($_POST['student']))
{
    echo "<table><tr><th>Name</th> <th>Email</th> <th>Age</th> <th>Gender</th> <th>MobileNo</th> </tr>";
    // output data of each row
    while($row = $userQuery2->fetch_assoc()) {



      
      echo "<tr><td><a href='../View/studentprofile.php'> ".$row["Name"]."</a></td> <td>".$row["Email"]."</td> <td>".$row["Age"]."</td> <td>".$row["Gender"]."</td> <td>".$row["MobileNo"]."</td> </tr>" ;
     
    }
    echo "</table>";

}
  else {
    echo "0 results";
  }




$connection->CloseCon($conobj);


}
