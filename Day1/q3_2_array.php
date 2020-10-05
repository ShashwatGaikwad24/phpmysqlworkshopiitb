<?php

$matrix1 = array(
  array(4,3),
  array(1,2)
);

$matrix2 = array(
  array(0,2),
  array(5,8)
);

for($i=0;$i<2;$i++){
  for($j=0;$j<2;$j++){
    echo $matrix2[$i][$j];
    echo " ";
  }
  echo '<br>';
}
echo '<br>';

for($i=0;$i<2;$i++){
  for($j=0;$j<2;$j++){
    echo $matrix1[$i][$j];
    echo " ";
  }
  echo '<br>';
}
echo '<br>';

echo "Addition of two matrices is:";
echo '<br>';

//main logic
for($i=0;$i<2;$i++){
  for($j=0;$j<2;$j++){
    echo $matrix1[$i][$j]+$matrix2[$i][$j];
    echo " ";
  }
  echo '<br>';
}
 ?>