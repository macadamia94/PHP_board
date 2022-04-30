<?php
$employee_list = array(
  'Programmer' => 'Edward',
  'Designer' => 'Alex'
);

foreach($employee_list as $row)
{
    echo $row."<br/>";
}

print "<br><br>";

$employee_list = array(
  'Programmer' => 'Edward',
  'Designer' => 'Alex'
);

foreach($employee_list as $key => $value)
{
  echo $key." : ".$value."<br/>";
}
?>