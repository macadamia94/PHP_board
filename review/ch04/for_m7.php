<?php

  // 1~10 사이 숫자 대신 숫자만큼의 "*"이 나오도록

   $star = rand(1, 10);
   print "star : $star <br>";
   for ($i=0; $i<$star; $i++)
   {
     print"*";
   }
   
?>