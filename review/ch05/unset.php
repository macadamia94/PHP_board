<?php

$arr = array(
    'red', 
    'blue', 
    'green', 
    'pink'
);
unset($arr[1]);
print_r($arr);

print "<br>";

$arr = array(
  'color'=>'red',
  'age' => 12,
  'name' => 'beop'
);
unset($arr['color']);
print_r($arr);

print "<br><br>";

$var1;
$var2 = NULL;
$var3 = "";
$var4 = "Lorem";
if ( isset( $var1 ) ) {
  echo "var1 is set.<br>";
} else {
  echo "var1 is not set.<br>";
};
if ( isset( $var2 ) ) {
  echo "var2 is set.<br>";
} else {
  echo "var2 is not set.<br>";
};
if ( isset( $var3 ) ) {
  echo "var3 is set.<br>";
} else {
  echo "var3 is not set.<br>";
};
if ( isset( $var4 ) ) {
  echo "var4 is set.<br>";
} else {
  echo "var4 is not set.<br>";
};
if ( isset( $var2, $var3 ) ) {
  echo "var2 and var3 are set.<br>";
} else {
  echo "var2 and var3 are not set.<br>";
};
if ( isset( $var3, $var4 ) ) {
  echo "var3 and var4 are set.<br>";
} else {
  echo "var3 and var4 are not set.<br>";
};

?>