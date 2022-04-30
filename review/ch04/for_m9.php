<?php
   /* 
   만약에 star값이 3인 경우
    *
    **
    ***

   만약에 star값이 6인 경우
    *
    **
    ***
    ****
    *****
    ******
   */

    $star = rand(3, 10);
    print "star : $star <br>";
    
    for($i=0; $i<$star; $i++)
    {
      for($z=0; $z<=$i; $z++)
      {
        print "* ";
      }
      print "<br>";
    }

    print "<br><br>";

    $star = rand(3, 10);
    print "star : $star <br>";

    $sum = "";
    for($i=0; $i<$star; $i++)
    {
      $sum = $sum. "@";
      print "{$sum } <br>";
    }


?>