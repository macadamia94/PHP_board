<?php
    $arr = [10, 33, 12, 8, 1, 89, 11];

    for($i=0; $i<count($arr)-1; $i++)
    {
        $min = $i;
        for($z=$i+1; $z<count($arr); $z++)
        {
            if($arr[$z] < $arr[$min]){
                $min = $z;
            }
            if($min != $i)
            {
                $temp = $arr[$min];
                $arr[$min] = $arr[$i];
                $arr[$i] = $temp; 
            }
        }
        print "<br>";
    print_r ($arr);
    }
    print "<br><br>";
    print_r ($arr);
?>
