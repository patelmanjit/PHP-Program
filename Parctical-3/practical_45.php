<?php
    $var1 = "we are at home";
    echo str_replace("home", "garden",$var1)."</br>" ;
    echo str_replace("HOME", "garden",$var1)."</br>" ;
    echo str_ireplace("HOME", "garden",$var1)."</br>" ;
    echo strrev("home");
?>