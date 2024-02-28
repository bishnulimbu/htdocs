<?php
$num1 = 300;
$num2 = 200;
$num3 = 100;

if($num1 > $num2 && $num1 > $num3){
  echo "num1 is greatest". $num1 . "<br>";
}
if($num1 > $num2 || $num1 > $num3){
  echo "num1 is greater than num2 and num 3"."<br>";
}
if($num2 != $num1){
  echo "num2 and num 1 aren't equal";
}
