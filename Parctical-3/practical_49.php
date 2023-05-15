<?php
    $fruit=array("Apple","Orange","Banana");
    echo count($fruit)."</br>";
    //count

    $info = array('This','biggest','country');
    list($a, $b, $c) = $info;
    echo "$a is the $b $c"."</br>";    
    if (in_array("country",$info))
        echo "country found in an array"."</br>";
    else
        echo "country not found in an array"."</br>";
    //list, in_array

    $transport = array('College', 'School', 'Department');
    echo current($transport)." ";
    echo current($transport)." ";
    echo next($transport)." ";
    echo current($transport)." ";
    echo prev($transport)." ";
    echo end($transport)." ";
    echo current($transport)." ";
    // current , next ,prev ,end 

    
    $people = array("Peter", "Joe", "Glenn", "Cleveland");
    $a = each($people);
    print_r($a); 
      
?>