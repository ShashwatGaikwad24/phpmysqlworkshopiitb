<?php
  
$Term = array("V","O","W","E","L");
for($i=0;$i<5;$i++)
{
switch ($Term[$i])
{
case "A":
$letter = "vowel";
break;
case "E":
$letter = "vowel";
break;
case "I":
$letter = "vowel";
break;
case "O":
$letter = "vowel";
break;
case "U":
$letter = "vowel";
break;
default:
$letter = "consonant";
}
echo "The given letter ".$Term[$i]." is a ".$letter."<br>";
}  
?>









