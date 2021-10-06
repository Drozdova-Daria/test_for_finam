<?php
if ($argc != 3) {
  echo 'Необходимо передать две переменных (два числа)';
} else {
  $number_1 = filter_var($argv[1], FILTER_VALIDATE_INT);
  $number_2 = filter_var($argv[2], FILTER_VALIDATE_INT);
  if ($number_1 === 0) {
    $number_1 = 0;
  }
  if ($number_2 === 0) {
    $number_2 = 0;
  }
  if (($number_1 === 0 || !$number_1 === false) || ($number_1 === 0 || !$number_1 === false)) {
    if ($number_1 > $number_2) {
      echo 'Первое число больше, чем второе';
    } else {
      for ($number = $number_1; $number <= $number_2; $number++) {
        if ($number % 3 == 0 ) {
          echo "Foo";
        }
        if ($number % 5 == 0) {
          echo "Bar";
        }
        if ($number % 3 != 0 && $number % 5 != 0) {
          echo $number;
        }
        echo "\n";
      }
    }
  } else {
    echo 'Введенные переменные не целые числа';
  }
}
?>
