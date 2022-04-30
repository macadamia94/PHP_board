<?php

// 지금까지 배운 것 모두 활용하여 
// 출력 : [1, 2, 3, 4, 5, 6, 7]

print "[";
for($i=1; $i<8; $i++)
{
  print $i;
  if($i<7)
  {
    print ", ";
  }
}
print "]";

print "<br>";

print "[";
$end_num = 8;
for($i=1; $i<$end_num; $i++)
{
  if($i>1)
  {
    print ", ";
  }
  print $i;
}
print "]";

?>