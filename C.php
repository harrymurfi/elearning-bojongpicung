<?php
  $x = 2;
  $y = 3;

  function times_two() {
    global $x, $y;
    $x *= 2;
    $y *= 2;
  }

  function times_three() {
    $x = 20;
    $y = 30;
    times_two();
  }

  times_three();
  echo $x." and ".$y;
?>
