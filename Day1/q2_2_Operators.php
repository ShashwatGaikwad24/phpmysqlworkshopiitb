<?php

$num1 = 1.456;
$num2 = 2.536;
if($num1 > $num2)
{
	echo $num1;
	echo " is greater than ";
	echo $num2;
	echo '<br>';
}
else if($num1 == $num2)
{
	echo $num1;
	echo " is equal to ";
	echo $num2;
	echo '<br>';
}
else
{
	echo $num2;
	echo " is greater than ";
	echo $num1;
}


?>