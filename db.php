<?php
class db{
 
function OpenCon()
   {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "project";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    return $conn;
   }


function ShowAll($conn,$table)
   {
    $result = $conn->query("SELECT * FROM  $table");
    return $result;
   }


function insertuser($conn,$table,$fnameVal,$lnameVal,$emailStuff,$passwordStuff,$age,$dob,$gender,$mobile)
    {
      $result = $conn->query("INSERT INTO $table (FirstName,LastName,Email,Password,Age,DateofBirth,Gender,MobileNo) VALUES ('$fnameVal','$lnameVal','$emailStuff','$passwordStuff','$age','$dob','$gender','$mobile')  ");
      return $result;
    }

 function SearchUsername($conn,$table,$userName)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='$userName'");
 return $result;
 }

 function SearchEmail($conn,$table,$email_search)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE Email='$email_search'");
 return $result;
 }



 function UpdateTutor($conn,$table,$userName,$updated_name,$updated_password,$updated_email,$updated_address)
 {
     $sql = "UPDATE $table SET fname='$updated_name', password='$updated_password', email='$updated_email',address='$updated_address' WHERE username='$userName'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

 function UpdateStudent($conn,$table,$search_email,$updated_studentname,$updated_age,$updated_mobile)
 {
     $sql = "UPDATE $table SET Name='$updated_studentname', Age='$updated_age', Mobile='$updated_mobile' WHERE Email='$search_email'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }



 function DeleteTutor($conn,$table,$userName)
 {
   $result=$conn->query("DELETE FROM $table WHERE username='$userName'");
 }

 function DeleteStudent($conn,$table,$email_search)
 {
   $result=$conn->query("DELETE FROM $table WHERE Email='$email_search'");
 }

 function addCourse($conn,$table,$course_id,$course_title,$content)
 {
   $result = $conn->query("INSERT INTO $table (id,title,content) VALUES ('$course_id','$course_title','$content') ");
      return $result;
 }

function CloseCon($conn)
   {
      $conn -> close();
   }
}

?>