<html>
  <h3>Enter the Data of the Student</h3>
  <form action='q2.php' method='POST'>
      <h4>Name : <input type= 'text' name = 'name'><br><br>
          Marks out of 100 <br><br>
          Subject 1 : <input type= 'number' name = 's1'><br><br>
          Subject 2 : <input type= 'number' name = 's2'><br><br>
          Subject 3 : <input type= 'number' name = 's3'><br><br>
          Subject 4 : <input type= 'number' name = 's4'><br><br>
          Subject 5 : <input type= 'number' name = 's5'><br><br>
      </h4>
      <input type= 'submit' value = 'Get Marksheet' name ="submitdata">
  </form>

</html>

<?php

$submitdata = $_POST['submitdata'];
if($submitdata)
  $name = $_POST['name'];
  $marks = array($_POST['s1'],$_POST['s2'],$_POST['s3'],$_POST['s4'],$_POST['s5']);
  $total = 0;
  if($marks){
    foreach($marks as $value){
      $total = $total + $value;
    }
  }
  $percent = $total/5;
  data($name,$marks,$total,$percent);


function data($name,$marks,$total,$percent){


  //Initializations
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "result";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Create database
  $sql = "CREATE DATABASE result";
  mysqli_query($conn, $sql);

  mysqli_close($conn);

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Create table
  $sql = "CREATE TABLE class1 (
    id BIGINT(8) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name CHAR(50) NOT NULL,
    sub1 INT(6) NOT NULL,
    sub2 INT(6) NOT NULL,
    sub3 INT(6) NOT NULL,
    sub4 INT(6) NOT NULL,
    sub5 INT(6) NOT NULL,
    totalobtained INT(6) NOT NULL,
    totalmarks INT(6) NOT NULL,
    percent FLOAT(6) NOT NULL
  )";

  mysqli_query($conn, $sql);

  mysqli_close($conn);

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Insert data
  $sql = "INSERT INTO class1 (name, sub1,sub2,sub3,sub4,sub5,totalobtained, totalmarks, percent)
  VALUES ('$name','$marks[0]','$marks[1]','$marks[2]','$marks[3]','$marks[4]','$total', '500', '$percent' )";

  mysqli_query($conn, $sql);

  // mysqli_close($conn);
  //
  // $conn = mysqli_connect($servername, $username, $password, $dbname);

  $marks[4] = 99;
  $total = 0;
  if($marks){
    foreach($marks as $value){
      $total = $total + $value;
    }
  }
  $percent = $total/5;
  $sql = "UPDATE class1 SET sub5='$marks[4]', totalobtained='$total', percent ='$percent' WHERE name='Rohan'";

  mysqli_query($conn, $sql);

  mysqli_close($conn);


  echo "<br>Name of Student : ".$name.
       "<br>Marks in Each Subject".
       "<br>Subject 1 : ".$marks[0].
       "<br>Subject 2 : ".$marks[1].
       "<br>Subject 3 : ".$marks[2].
       "<br>Subject 4 : ".$marks[3].
       "<br>Subject 5 : ".$marks[4].
       "<br>Total Marks Obtained : ".$total.
       "<br>Total Marks : 500".
       "<br>Percentage : ".$percent. "%";
}
?>