<?php
  $year = 2020;

  print "${year}년은 ";
  if($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) 
    print "윤년입니다.<br>";
  else
    print "윤년이 아닙니다.<br>";
?>