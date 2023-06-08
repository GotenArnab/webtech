<?php
class db3{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "project";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function Search($conn,$table,$student_search)
 {
$result = $conn->query("SELECT * FROM $table WHERE Name='$student_search' OR Email='$student_search' OR MobileNo='$student_search'");
 return $result;
 }


 function ShowAll3($conn,$table)
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