<?php
/*
  1부터 val변수에 있는 숫자까지 모두 더해서 결과값을 출력
  단, while문으로 해결
*/

$val = 50;
print "val : $val <br>";

$sum = 0;
$i = 1;
while($val >= $i)
{
  $i++;
  $sum += $i;
}
print $sum;

?>