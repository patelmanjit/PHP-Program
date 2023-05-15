<?php
    $people = array("Raj","Manan", "Aavi");
    sort($people);
    foreach ($people as $key)
    echo $key."</br>";
    //sort
    $Boys = array("Raj","Manan", "Aavi");
    $Girls = array("Kajal","Shital");
    $people=array_merge($Boys,$Girls);
    print_r($people)."</br>";
    //arr_merge
    $num = array("15 ","25", "50");
    print_r($num);
    echo "</br>";
    $numrev=array_reverse($num);
    print_r($numrev);
    echo "</br>";
    //arr_reverse
?>