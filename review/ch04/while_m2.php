<?php
/*
  rand(1, 10) 을 10이 나올 때까지 반복 실행
  10이외의 숫자가 나오면 숫자를 출력
  10이 나오면 반복을 멈추고 "끝"을 출력
*/

print "-- 시작 -- <br>";
$r_val = rand(1, 10);

while($r_val != 10)
{
  print "r_val : $r_val <br>";
  $r_val = rand(1, 10);
}
print "-- 끝 -- <br>";

print "<br><br>";

// 아래 do while 방법은 10도 출력되어버림...
print "-- 시작 -- <br>";
do
{
  $r_val = rand(1, 10);
  print "r_val : $r_val <br>";
}while($r_val != 10);
print "-- 끝 -- <br>";

print "<br><br>";

// while문에 if를 더해서 $r_val = rand(1, 10);을 
// 두 번 쓰지않고 10을 나오지 않게 할 수 있음
print "-- 시작 -- <br>";
while(true)
{
  $r_val = rand(1, 10);
  if($r_val == 10) {break;}
  print "r_val : $r_val <br>";
}
print "-- 끝 -- <br>";

?>