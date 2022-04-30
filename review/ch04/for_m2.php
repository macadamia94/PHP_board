<?php

    // 구구단 만들기
    
   $dan = rand(2, 9);
  
   for($i=1; $i<10; $i++)
   {
     $result = $dan * $i;
     print "$dan X $i = $result <br>";
   }
   
?>