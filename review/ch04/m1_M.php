<?php
/*
  90점 이상 A (3점 이하, '-', 7점 이상 or 100점 '+')
  => 93: A-, 95: A, 98: A+
  80점 이상 B (3점 이하, '-', 7점 이상 '+')
  70점 이상 C (3점 이하, '-', 7점 이상 '+')
  60점 이상 D (3점 이하, '-', 7점 이상 '+')
  60점 미만 F
  0~100 점수가 아니면 "잘못된 값" 출력

*/

$score = rand(0, 120);
if($score > 100 || $score < 0) 
{
  echo "점수 : " . $score. " / 등급 : 잘못된 값";
}
else if ($score >= 97)
{
  echo "점수 : ".$score." / 등급 : A+";
}
else if ($score >= 94)
{
  echo "점수 : ".$score." / 등급 : A";
}
else if ($score >= 90){
  echo "점수 : ".$score." / 등급 : A-";
}
else if ($score >= 87)
{
  echo "점수 : ".$score." / 등급 : B+";
}
else if ($score >= 84)
{
  echo "점수 : ".$score." / 등급 : B";
}
else if ($score >= 80)
{
  echo "점수 : ".$score." / 등급 : B-";
}
else if ($score >= 77)
{
  echo "점수 : ".$score." / 등급 : C+";
}
else if ($score >= 74)
{
  echo "점수 : ".$score." / 등급 : C";
}
else if ($score >= 70)
{
  echo "점수 : ".$score." / 등급 : C-";
}
else if ($score >= 67)
{
  echo "점수 : ".$score." / 등급 : D+";
}
else if ($score >= 64)
{
  echo "점수 : ".$score." / 등급 : D";
}
else if ($score >= 60)
{
  echo "점수 : ".$score." / 등급 : D-";
}
else if ($score > 60)
{
  echo "점수 : ".$score." / 등급 : F";
}
?>