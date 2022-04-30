<style>
  table { border-collapse : collapse;}
  table, td { border : 1px solid #000}
</style>
<table>
<?php
    $val = rand(2, 5);

    print_table($val);

    function print_table($val)
    {
      $num = 1;
      
      for($i=0; $i<$val; $i++)
      {
        print "<tr>";
        for($z=0; $z<$val; $z++)
        {
          print "<td>" . $num++ . "</td>" ;
        }
        print "</tr>";
      }
    }
?>
</table>