<?php
class db2{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "project";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function Search($conn,$table,$tutor_search)
 {
$result = $conn->query("SELECT * FROM $table WHERE fname='$tutor_search' OR gender='$tutor_search' OR address='$tutor_search'");
 return $result;
 }


 function ShowAll2($conn,$table)
   {
    $result = $conn->query("SELECT * FROM  $table");
    return $result;
   }



function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>