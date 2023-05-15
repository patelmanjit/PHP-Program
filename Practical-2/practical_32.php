<?php
    $x=0;
    $total=0;
    $i=0;

    while($i<=2)
    {
        $n=$x;

        while($n>0)
        {
            $rem=$n%10;
            $total+=pow($rem,3);
            $n=$n/10;
        }
        if($x=$total)
        {
            echo $x," ";
            $i++;
        }
        $x++;
        $total=0;
    }
?>