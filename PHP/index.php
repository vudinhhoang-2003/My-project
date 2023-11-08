<?php
  $a = 1;
  $b = 6;
  $c = 9;

  echo "Phương trình: $a.x**2 + $b.x + $c"."<br>";

  $delta = $b*$b - 4*$a*$c;

  if ($delta > 0) {
    echo "Phương trình có 2 nghiệm";
  }
  elseif ($delta = 0) {
    echo "Phương trình có nghiệm kép";
  }
  else {
    echo "Phương trình vô nghiệm";
  }
?>
