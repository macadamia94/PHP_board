<?php
  // 구구단 처음부터 끝까지 표시
  for($i=2; $i<10; $i++)
  {
    for($z=1; $z<10; $z++)
    {
      $result = $i * $z;
      print "$i X $z = $result <br>";
    }
    print "----------- <br>";
  }
?>