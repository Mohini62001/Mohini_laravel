<?php
function largest($x, $y, $z) {
  $max = $x;
  $max = ($x > $y)? (($x > $z)? $x : $z) : (($y > $z)? $y : $z);
  
  echo "Largest number among $x, $y and $z is: $max\n";
}

largest(200, 100, 350);
echo "<br>";
echo "<br>";
largest(70, 70, 30);
?>