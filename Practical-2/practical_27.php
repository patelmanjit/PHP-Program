<?php
    $a = 151;
    for($i = 2 ; $i < $a ; $i++)
    {
        if($a % $i == 0)
        {
            $flag = 1;
            break;
        }
    }
    if($flag == 1)
    {
        echo "The number is not prime";
    }
    else
    {
        echo "The number is prime";
    }
?>


