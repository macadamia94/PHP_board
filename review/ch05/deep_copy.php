<?php
$a = array( 1, 2, 3 );
$b = $a;

print_r( $a );
print "<br>";
print_r( $b );
print "<br>";

$b[0] = 9;

print_r( $a );
print "<br>";
print_r( $b );
print "<br>";
?>
