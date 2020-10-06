<html>
<Title> STUDENT MARKSHEET FORM </Title>
<body>
<form action='q3_2_SpecialVariables.php' method='POST'>
Name of the Student : <input type='text' name='StudentName'><br>
Marks in Each Subject<br>
Subject 1 : <input type='integer' name='s1'><br>
Subject 2 : <input type='integer' name='s2'><br>
Subject 3 : <input type='integer' name='s3'><br>
Subject 4 : <input type='integer' name='s4'><br>
Subject 5 : <input type='integer' name='s5'><br>
<input type='submit' value='Submit'>
<?php
@$s_name = $_POST['StudentName'];
@$s1 = $_POST['s1'];
@$s2 = $_POST['s2'];
@$s3 = $_POST['s3'];
@$s4 = $_POST['s4'];
@$s5 = $_POST['s5'];
if($s1 && $s2 && $s3 && $s4 && $s5){
echo "<br>Name of the Sudent : ".$s_name;
echo "<br>Marks in Each Subject<br>";
echo "Subject 1 : ".$s1;
echo "<br>Subject 2 : ".$s2;
echo "<br>Subject 3 : ".$s3;
echo "<br>Subject 4 : ".$s4;
echo "<br>Subject 5 : ".$s5;
echo "<br>Total Marks Obtained : ".($s1+$s2+$s3+$s4+$s5);
echo "<br>Total marks : 500";
echo "<br>Percentage : ".(($s1+$s2+$s3+$s4+$s5)/500)*100;
}
?>
</body>
</html> 