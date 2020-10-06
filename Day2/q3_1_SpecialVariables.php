<html>
<Title> TRIANGLE </Title>
<body>
<form action='q3_1_SpecialVariables.php' method='POST'>
      Enter value of first side <input type='integer' name='s1'><br>
      Enter value of second side <input type='integer' name='s2'><br>
      Enter value of third side <input type='integer' name='s3'><br>
      <input type='submit' value='Submit'>
</form>
<?php
@$s1 = $_POST['s1'];
@$s2 = $_POST['s2'];
@$s3 = $_POST['s3'];
if($s1 && $s2 && $s3){
if(($s1+$s2)>$s3 && ($s2+$s3)>$s1 && ($s3+$s1)>$s2)
{
   if($s1==$s2 && $s2==$s3)
   echo "The triangle is an equilateral triangle<br>";
   else if(($s1==$s2 && $s2!=$s3)||($s2==$s3 && $s3!=$s1)||($s3==$s1 && $s1!=$s2))
   echo "The triangle is isosceles triangle<br>";
   else
   echo "The triangle is an scalene triangle<br>";
   if(($s1*$s1+$s2*$s2==$s3*$s3)||($s2*$s2+$s3*$s3==$s1*$s1)||($s3*$s3+$s1*$s1==$s2*$s2))
   echo "The traingle is also a right angled triangle";
}
else
{
   echo "A triangle cannot be formed with the entered sides";
}
}
?>
</body>
</html>



