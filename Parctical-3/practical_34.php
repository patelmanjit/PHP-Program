<?php
    $x = 23;
    $y = 25;
 
    function addition()
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
 
    addition();
    echo $z;
?>